<?php 
require_once '../../php/connect.php';
	// $subject = $_GET['id'];
	$data = $_POST;
	$data = json_decode(json_encode($data), true);
if (isset($data) && !empty($data)) {
		// if (empty($_POST["topic"])) {
		// 	echo "Topic cannot be empty";
		// }
		// else if (empty($_POST['message'])) {
		// 	echo "message cannot be empty";
		// }
		// else{
			$subject = $_GET['id'];
			$topic = $data['topic'];
			$message = $data['message'];
			// $message_reply_id = '';
			$studid = "ps/csc/14";
			//$subject = "Residential";
			$sql = "INSERT INTO chatdb(studid, subject, message_sent, topic) VALUES ('$studid', '$subject', '$message', '$topic')";
			echo $sql;
			$result = $dbcon -> query($sql);
			//header('Location: res_message.php');
		}
 ?>
 <body>
 	<?php 
 	include 'nav.php';
 	 ?>
        	

        <div class="container">
        <div  class="row">
        	<div class="col-md-2"></div>
        	<div class="col-md-8">
        	<h2><?php
        	$subject = $_GET['id'];
        	 echo $subject; ?> Desk</h2>
				<button type="button" class="btn btn-link float-right" data-toggle="modal" data-target="#myModal">
				  New Message
				</button>
				 	<!-- <div class="float-right"><a href="#">new message</a></div><br><br> -->
				<table class="table table-bordered table-hover">
					<thead>
						<tr class="table-primary" >
							<!-- <th width="5%"><button type="button" class="btn btn-danger btn-sm" name="delete" id="delete">delete</button></th> -->
							<!-- <th width="60%">Message</th> -->
							<th width="75%">Studid</th>
							<th width="20%">Date & Time</th>
							<!-- <th width="5%">View</th> -->
						</tr> 
					</thead>
					<?php
					$subject = $_GET['id']; 
					
					
					$sql1 = "SELECT * FROM chatdb WHERE subject = '$subject' AND studid ='ps/csc/14'AND message_reply_id = '0' ORDER BY activity DESC";
					// echo $sql1;
					  $row = mysqli_query($dbcon, $sql1);
					  //$id = $row['id'];
					 ?>
					<tbody>
						<?php while($message_topic = mysqli_fetch_assoc($row)): ?>
						<tr>
							<!-- <td class="text-center"><input type="checkbox" name="select_del" id="select_del"></td> -->
							<!-- <td class="clickable-row" data-href="message.php"><a href="message.php" id="topic" name="topic" style="color: black;"><?php echo $message_topic['topic']; ?></a></td> -->
							<td><a style="color: black;" href="../residential_page.php?id=<?php echo $message_topic['id'];?>"> <b><?php echo $message_topic['topic']; ?></b> <br> <?php echo $message_topic['message_sent']; ?></a></td> 
							<td><?php echo $message_topic['activity']; ?></td> 
							<!-- <td class="text-center"><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal">view</button></td> -->
						</tr>
						<?php endwhile; ?>
					</tbody>
				</table>
				<br>
				
				<div style="text-align: right;">
					<a href="../../index.php">Back</a>
				</div>
 			</div>
 			</div>
 			<div class="col-md-2"></div>
 		</div>
 	</div>
 	<?php 
 	
    include 'footer.php';
    
     ?>		