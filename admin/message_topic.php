<?php 
include 'header.php';

require_once '../php/connect.php';

	$data = $_POST;
	$data = json_decode(json_encode($data), true);
if (isset($data) && !empty($data)) {
		
			$topic = $data['topic'];
			$message = $data['message'];
			$message_reply_id = '';
			$studid = "ps/csc/14";
			$subject = "Residential";
			$sql = "INSERT INTO chatdb(studid, subject, message_sent, topic) VALUES ('$studid', '$subject', '$message', '$topic')";
			//echo $sql;
			$result = $dbcon -> query($sql);
			//header('Location: res_message.php');
		}
 ?>
 <body>
 	<?php 
 	include 'nav.php';
 	 ?>
        <div class="col-md-12 d-none d-md-block">
        <div  class="col-md-12">
        	<h2><?php
        	$subject = $_GET['id'];
        	 echo $subject; ?> Desk</h2>
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
					$sql1 = "SELECT DISTINCT topic, studid, message_sent, id, activity FROM chatdb WHERE subject = '$subject' AND studid ='ps/csc/14'AND message_reply_id = '0' ORDER BY activity DESC";
					  $row = mysqli_query($dbcon, $sql1);
					  //$id = $row['id'];
					 ?>

					<tbody>
						<?php while($message_topic = mysqli_fetch_assoc($row)): ?>
						<tr>
							<td><a style="color: black;" href="message/admin_message.php?id=<?php echo $message_topic['id'];?>"><?php echo $message_topic['studid']; ?> ......... <b><?php echo $message_topic['topic']; ?></b> <br> <?php echo $message_topic['message_sent']; ?> ...</a></td> 
							<td><?php echo $message_topic['activity']; ?></td> 
						</tr>
						<?php endwhile; ?>
					</tbody>
				</table>
				<br>
				
				<div style="text-align: right;">
					<a href="index.php">Back</a>
				</div>
 			</div>
 		</div>

<!-- <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog"> -->

    <!-- Modal content-->
    <!-- <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> -->

 	<?php 
    include 'footer.php';
     ?>		