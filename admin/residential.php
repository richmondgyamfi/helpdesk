<?php 
include 'header.php';

require_once '../php/connect.php';
 ?>
 <body>
 	<?php 
 	include 'nav.php';
 	 ?>
        <div style="margin-top: 80px;" class="col-md-10 d-none d-md-block">
        <div style="margin-left: 140px;" class="col-md-9">
        	<h2>Residential Aid Desk</h2>
				<table class="table table-bordered table-hover">
					<thead>
						<tr class="table-primary" >
							<th width="5%"><button type="button" class="btn btn-danger btn-sm" name="delete" id="delete">delete</button></th>
							<th width="75%">Message</th>
							<th width="20%">Date & Time</th>
							<!-- <th width="5%">View</th> -->
						</tr> 
					</thead>
					<?php 
					$sql1 = "SELECT topic, activity FROM chatdb WHERE studid = 'ps/csc/14' AND subject = 'Residential' ORDER BY activity DESC";
					  $row = mysqli_query($dbcon, $sql1);
					 ?>
					<tbody>
						<?php while($message_topic = mysqli_fetch_assoc($row)): ?>
						<tr>
							<td class="text-center"><input type="checkbox" name="select_del" id="select_del"></td>
							<td class="clickable-row" data-href="message.php"><a href="message.php" id="topic" name="topic" style="color: black;"><?php echo $message_topic['topic']; ?></a></td>
							<td><?php echo $message_topic['activity']; ?></td> 
							<!-- <td class="text-center"><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal">view</button></td> -->
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

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
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
</div>

 	<?php 
    include 'footer.php';
     ?>		