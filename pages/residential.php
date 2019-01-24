<?php  
 // include '../header.php';

require_once '../php/connect.php';
 ?>
 <body>
 	<?php 
 	include 'nav.php';
 	 ?>
        <div class="col-md-12">
        <div class="row" >
        	<div class="col-md-4"></div>
        	<div class="col-md-4">
        	<h2>Helpdesk</h2>
				<table class="table table-bordered table-hover" >
					<thead>
						<tr class="table-primary" >
							<!-- <th width="5%"><button type="button" class="btn btn-danger btn-sm" name="delete" id="delete">delete</button></th> -->
							<th width="20%">Message Subject</th>
						</tr> 
					</thead>
					<?php 
					$sql1 = "SELECT DISTINCT subject FROM chatdb WHERE studid = 'ps/csc/14' ORDER BY activity DESC";
					  $row = mysqli_query($dbcon, $sql1);
					 ?>
					<tbody>
						<?php while($message_topic = mysqli_fetch_assoc($row)): ?>
						<tr>
							<!-- <td class="text-center"><input type="checkbox" name="select_del" id="select_del"></td> -->
							<td> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><a class="btn btn-link" style="color: black;" href="page_message/res_message.php?id=<?php echo $message_topic['subject'];?>" id="topic" name="topic"><?php echo $message_topic['subject'];?></a></td>
						</tr>
						<?php endwhile; ?>
					</tbody>
				</table>
				<br>
				
				<div style="text-align: right;">
					<a href="index.php">Back</a>
				</div>
			</div>
        	<div class="col-md-4"></div>
 			</div>
 		</div>

 	<?php 
    include 'footer.php';
     ?>		