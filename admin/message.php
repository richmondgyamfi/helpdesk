<?php 
include 'header.php';
require_once '../php/connect.php';
 ?>
 <body>
 	<?php 
 	include 'nav.php';
 	 ?>
        <div style="margin-top: 80px;" class="col-md-10">
        	<div class="row">

			<div style="margin-left: 80px;" class="col-md-10" >
				<!-- <div id="subject">
					<h3>Subject</h3>
				</div> -->
				<?php 
				 // if (isset($_POST['topic'])) {
				 	$topicID = $_POST['topicID'];
					// $sql1 = "SELECT topic, subject, message_sent, message_reply, activity FROM chatdb WHERE studid = 'ps/csc/14' AND subject = 'Residential' ORDER BY activity DESC";
					 $sql1 = "SELECT topic, subject, message_sent, message_reply, activity FROM chatdb WHERE studid = 'ps/csc/14' AND topic = '$topicID' ORDER BY activity DESC";
					$row = mysqli_query($dbcon, $sql1);
					echo $sql1;
					ob_start();
				?>
				<div id="child" name="child">
 				<?php while($message_topic = mysqli_fetch_assoc($row)): ?>
 				<p><b>Sent</b></p>
 				<div id="section1" style="height: auto;" class="container-fluid">
 					<h4><?php echo $message_topic['subject']; ?></h4>
 					<h6><?php echo $message_topic['topic']; ?></h6>
					  <p><?php echo $message_topic['message_sent']; ?></p>
					  <br>
					  <?php echo $message_topic['activity']; ?>
				</div><br>
				<p><b>Reply</b></p>
				<?php 
				if (isset($_POST['send'])) {
					$message = $_POST['message'];
					// $sql = "INSERT INTO chatdb "
					echo '<div id="section2" style="height: auto;" class="container-fluid">';
					echo '<h4><?php echo $message_topic["subject"]; ?></h4>';
					  echo '<h6><?php echo $message_topic["topic"]; ?></h6>';
					  echo '<p><?php echo $message_topic["message_reply"]; ?></p>';
					  echo '<br>';
					  echo '<?php echo $message_topic["activity"]; ?>';
					  echo '</div>';
				}
				 ?>
				<div id="section2" style="height: auto; margin-bottom: 150px;" class="container-fluid">
					<label for="message">Message: </label>
					<textarea class="form-control" style="margin-bottom: 10px;" rows="10" name="message"></textarea>
				<button type="button" class="btn btn-sm btn-primary" name="send">Send</button><br><br>
				</div>
				<?php endwhile; ?>
 				<?php echo ob_get_clean(); ?>
 				</div>
 			</div>
 			</div>
 		</div>
   <?php 
    include 'footer.php';
     ?>