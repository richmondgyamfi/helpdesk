<?php 
include 'header.php';
 ?>
 <body>
 	<?php 
 	include 'nav.php';
 	 ?>
        <div style="margin-top: 80px;" class="col-md-10">
        	<div class="row">
        	<div style="margin-left: 80px;" class="col-md-5">
				<form class="form form-group" style=" background-color: #f0f0f0; border: 2px solid">
					<div style="background-color: #4E545B;">
					<h2 style="margin-top: 0px; padding: 10px; color: white;" class="text-center">Help Desk</h2>
					</div>
					<div style="padding: 20px;">
					<label for="subject">Subject:  </label>
						<select name="subject" id="subject" class="form-control">
							<option></option>
							<option>Residential</option>
							<option>Financial Aid</option>
							<option>Student Leader and Governance</option>
							<option>Counselling and Carrier Services</option>
							<option>Academic</option>
						</select>
					<br>
						<label for="topic">Topic: </label>
						<input type="text" class="form-control" name="topic">
						<label for="message">Message: </label>
						<textarea class="form-control" rows="10" name="message"></textarea>
					
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
 				<div style="height: 650px;" class="container-fluid card example-1 scrollbar-ripe-malinka">
 					<div class="card-body">
 					<p><b>Sent</b></p>
 					<div id="section1" style="height: auto; padding-top: 0px;">
 					<h4>Subject</h4>
 					<h6>Topic</h6>
					  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
					  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
				</div><br>
				<p><b>Reply</b></p>
				<div id="section2" style="height: auto; padding: 0px;" class="container-fluid">
					  <h4>Subject</h4>
 						<h6>Topic</h6>
					  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
				</div>
 				<!-- <div>
 					<label for="reply">reply: </label>
					<textarea class="form-control" rows="6" name="reply"></textarea>
 				</div> -->
 			</div>
 		</div>
 			</div>
 			</div>
 		</div>
   <?php 
    include 'footer.php';
     ?>