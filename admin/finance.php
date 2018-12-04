<?php 
include 'header.php';
 ?>
 <body>
 	<?php 
 	include 'nav.php';
 	 ?>
        <div style="margin-top: 80px;" class="col-md-10 d-none d-md-block">
        <div style="margin-left: 140px;" class="col-md-9">
        	<h2>Finance Aid Desk</h2>
				<table class="table table-bordered table-hover">
					<thead>
						<tr class="table-primary" >
							<th width="5%"><button type="button" class="btn btn-danger btn-sm" name="delete" id="delete">delete</button></th>
							<th width="75%">Message</th>
							<th width="20%">Date & Time</th>
							<!-- <th width="5%">View</th> -->
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center"><input type="checkbox" name="select_del" id="select_del"></td>
							<td class="clickable-row" data-href="message.php"><a href="message.php" style="color: black;">Teacher</a></td>
							<td>R.M.E</td>
							<!-- <td class="text-center"><button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal">view</button></td> -->
						</tr>
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