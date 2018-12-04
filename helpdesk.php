<?php 
include 'header.php';
include 'php/connect.php';

if (isset($_POST['submit'])) {
		$subject = $_POST['subject'];
		$topic = $_POST['topic'];
		$message = $_POST['message'];
		$studid = "ps/csc/14";
		$sql = "INSERT INTO chatdb (subject, studid, topic, message_sent, activity) VALUES ('$subject', '$studid', '$topic', '$message', CURRENT_TIMESTAMP)";
		echo $sql;
		$query = $dbcon -> query($sql);
		//header('location:../helpdesk.php');

	}
 ?>
 <body>
 	<?php 
 	include 'nav.php';
 	 ?>
        <div style="margin-top: 80px;" class="col-md-10">
        	<div class="row">
        	<div style="margin-left: 80px;" class="col-md-5">
				<form method="POST" action="helpdesk.php" class="form form-group" id="form1" style=" background-color: #f0f0f0; border: 2px solid">
					<div style="background-color: #4E545B;">
					<h2 style="margin-top: 0px; padding: 10px; color: white;" class="text-center">Help Desk</h2>
					</div>
					<div style="padding: 20px;">
					<label for="subject">Subject:  </label>
						<select name="subject" id="subject" class="form-control"  required="required">
							<option></option>
							<option>Residential</option>
							<option>Financial Aid</option>
							<option>Student Leader and Governance</option>
							<option>Counselling and Carrier Services</option>
							<option>Academics</option>
						</select>
					<br>
						<label for="topic">Topic: </label>
						<input type="text" class="form-control" name="topic" required="required">
						<label for="message">Message: </label>
						<textarea class="form-control" rows="8" name="message" required="required"></textarea>
				</div>
				<div class="text-center">
					<button class="btn btn-danger" id="submit" name="submit">Submit</button>
				</div><br>
				</form>
			</div>
				<!-- <div style="text-align: right;">
					<a href="index.php">Back</a>
				</div> -->
				<div class="col-md-5" >
				<!-- <div id="subject">
					<h3>Subject</h3>
				</div> -->
				<?php 
				// if (isset($_POST['submit'])) {
					$sql1 = "SELECT topic, subject, message_sent, message_reply, activity FROM chatdb WHERE studid = 'ps/csc/14' ORDER BY activity DESC";
					  $row = mysqli_query($dbcon, $sql1);
					// $activity = date('Y-m-d G:i:s');
					 // echo $sql2;
				//} 
				?>
 				<div style="height: 600px;" class="container-fluid card example-1 scrollbar-ripe-malinka">
				<?php while($message_topic = mysqli_fetch_assoc($row)): ?>
 				<div class="card-body">
				<p><b>Reply</b></p>
				<div id="section2" style="height: auto;" class="container-fluid">
					  <h4><?php echo $message_topic['subject']; ?></h4>
 						<h6><?php echo $message_topic['topic']; ?></h6>
					  <p><?php echo $message_topic['message_reply']; ?></p>
					  <br>
					  <?php echo $message_topic['activity']; ?> 

				</div>
				<p><b>Sent</b></p>
 					<div id="section1" style="height: auto;">
 					<h4><?php echo $message_topic['subject']; ?></h4>
 					<h6><?php echo $message_topic['topic']; ?></h6>
					<p><?php echo $message_topic['message_sent']; ?></p>
					<br>
					  <?php echo $message_topic['activity']; ?> 
					</div><br>
 			</div>
			<?php endwhile; ?>

 		</div>
 			</div>
 			</div>
 		</div>
   <?php 
    include 'footer.php';
     ?>