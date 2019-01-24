<?php 
require_once '../php/connect.php';

 ?>
 <body>
 	<?php include 'nav.php'; ?>

	 	<div>
	 				<div style="height: 300px;" class="container-fluid card example-1 scrollbar-ripe-malinka">
	 				<?php 
	 				if (isset($_GET['id'])) {
						$id = $_GET['id'];
						$sqlquery= "SELECT * FROM chatdb WHERE id = '$id' AND message_reply_id ='0'";
						$row1 = mysqli_query($dbcon, $sqlquery);
						//$result_1 = mysqli_query($dbcon, $row1);
					 	$message_topic1 = mysqli_fetch_assoc($row1);
					 }
	 				 ?>
	 				<div class="card-body">
					<!-- <p><b>Reply</b></p> -->
					<div id="section2" style="height: auto; width: auto;" class="container-fluid">
						  <!-- <h4><?php echo $message_topic['subject']; ?></h4> -->
	 						<!-- <h4 >Reg no: <?php echo $message_topic['studid']; ?></h4> -->
	 						<h4><?php echo $message_topic1['studid']; ?></h4>
						  <h6><?php echo nl2br($message_topic1['message_sent']); ?> <br> <?php echo $message_topic1['activity']; ?></h6> 
						  <!-- <button class="btn btn-sm btn-link">delete</button> -->
					</div>
					<p><b></b></p>
				</div>
				<?php 
				if (isset($_GET['id'])) {
					$id = $_GET['id'];
					$sqlquery= "SELECT * FROM chatdb WHERE message_reply_id ='$id'";
					$row1 = mysqli_query($dbcon, $sqlquery);
					//$result_1 = mysqli_query($dbcon, $row1);
				 	$message_topic1 = mysqli_fetch_assoc($row1);
					//echo $newrow;
					$topic = $message_topic1['topic'];
					$studid = $message_topic1['studid'];
					$subject = $message_topic1['subject'];
					$sql_1 = "SELECT * FROM chatdb WHERE subject = '$subject' AND message_reply_id ='$id' AND topic ='$topic'";
					// echo $sql_1;
					//die();
					$row = mysqli_query($dbcon, $sql_1);
						}
				 ?>

					<?php while($message_topic = mysqli_fetch_assoc($row)): ?>
	 				<div class="card-body">
					<!-- <p><b>Reply</b></p> -->
					<div id="section2" style="height: auto; width: auto;" class="container-fluid">
						  <!-- <h4><?php echo $message_topic['subject']; ?></h4> -->
	 						<!-- <h4 >Reg no: <?php echo $message_topic['studid']; ?></h4> -->
	 						<h4><?php echo $message_topic['studid']; ?></h4>
						  <h6><?php echo nl2br($message_topic['message_sent']); ?> <br> <?php echo $message_topic['activity']; ?></h6> 
						  <!-- <button class="btn btn-sm btn-link">delete</button> -->
					</div>
					<p><b></b></p>
	 					<!-- <div id="section2" style="height: auto; width: auto;"> -->
	 					<!-- <h4><?php echo $message_topic['subject']; ?></h4> -->
	 					<!-- <h4 class="text-right">Admin</h4>
						<h6 class="text-right"> <?php echo nl2br($message_topic['message_reply']); ?> <br> <?php echo $message_topic['activity']; ?> </h6>
						  <div class="text-right"><button class="btn btn-sm btn-link ">delete</button></div>
						</div><br > -->
	 			</div>
				<?php endwhile; ?>
				
	 		</div>
 			</div>
 			<div style="margin-top: 20px;">
 				<?php 
 					if (isset($_POST['sendmessage']) && !empty($_POST['message'])) {
						// if (empty($_POST["topic"])) {
						// 	echo "Topic cannot be empty";
						// }
						// else if (empty($_POST['message'])) {
						// 	echo "message cannot be empty";
						// }
						// else{
 							$id = $_GET['id'];
 							$query2 = "SELECT topic, subject, studid FROM chatdb WHERE id='$id'";
 							//$result2 = $dbcon ->query($query2);
 							$result2 = mysqli_query($dbcon, $query2);
 							$message_topic2 = mysqli_fetch_assoc($result2);

							$topic = $message_topic2['topic'];
							$message = $_POST['message'];
							$studid = $message_topic2['studid'];
							$subject = $message_topic2['subject'];
							$sql = "INSERT INTO chatdb(subject, studid, topic, message_sent, message_reply_id) VALUES ('$subject', '$studid', '$topic', '$message', '$id')";
							// echo $sql;
							//die();
							$result = $dbcon -> query($sql);
							// header('Location: resmessage.php');
						//}
					}
 				 ?>
 				<h2>Send Message</h2>
 				<form class="form" method="POST">
 					<div class="form-group">
 						<!-- <input type="text" name="topic" class="form-control" placeholder="Topic" required="required"> -->
 					</div>
 					<div class="form-group">
 						<textarea class="form-control" rows="4" name="message" placeholder="Message" required="required"></textarea>
 					</div>
 					<input type="submit" id="sendmessage" name="sendmessage" value="Send" class="btn btn-success">
 					<!-- <a href="#" class="btn btn-success">Send</a> -->
 				</form>
 			</div>
 	</div>

 	<?php include 'footer.php'; ?>
 </body>