<?php 
include 'header.php';
 ?>
 <body>
 	<?php 
 	include 'nav.php';
 	 ?>
        <div style="margin-top: 80px;" class="col-md-10 d-none d-md-block">

			<div style="margin-left: 170px;" class="col-md-8 ">
				<!-- <h2>Leave Setup</h2> -->
				<form style=" background-color: #f0f0f0; border: 2px solid">
					<div style="background-color: #4E545B;">
					<h2 style="margin-top: 0px; padding: 20px; color: white;" class="text-center">Leave Setup</h2>
					</div>
					<div style="padding: 10px;">
					<div class="form-group">
					<label for="position">Position:</label>
					<select class="form-control" id="position" name="position">
						<option></option>
						<option>lecturer</option>
					</select>
					</div>
					<br>
					<div class="form-group">
					<label for="days">Days:</label>
					<input class="form-control" type="text" name="days" id="days">
					</div>
					<button type="submit" name="submit" class="btn btn-secondary ">Submit</button>
					</div>
				</form>
				<br>
				<div style="text-align: right;">
					<a href="index.php">Back</a>
				</div>
				</div>
        </div>

  <?php 
    include 'footer.php';
     ?>			
 		