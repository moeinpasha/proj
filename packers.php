<?php 
include"header.php";
?>
<!DOCTYPE html>
<html>
<title>Packers & Movers</title>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container" style="padding-top:80px;">
			<div class="card">
				<div class="card-body">
					<h2 style="text-align:center;color:#3d5daa;">packers & Movers</h2>
					<div class="row">
						<div class="col-md-6">
							<form>
							<div class="form-group">
								<label for="name">Name*</label>
								<input type="text" placeholder="" class="form-control">
							</div>
							<div class="form-group">
								<label for="name">From*</label>
								<input type="text" placeholder="" class="form-control">
							</div>
									<div class="form-group">
						<label for="name">Select Location</label>
						<select class="form-control">
							
							<option>With In City</option>
							<option>Bangalore</option>
							<option>Hosur</option>
							<option>Hubli</option>
							<option>Ananthapur</option>
							<option>Belagavi</option>

						</select>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" placeholder="" class="form-control" id="email" name="email">
						</div>
						</form>
					</div>
				
						<div class="col-md-6">
							<form>
					<div class="form-group">
								<label for="name">Mobile*</label>
								<input type="tel" placeholder="" pattern=".{10}" class="form-control">
							</div>
							<div class="form-group">
								<label for="name">To*</label>
								<input type="text" placeholder="" class="form-control">
							</div>
								<div class="form-group">
						<label for="name">Select Shifting Type</label>
						<select class="form-control">
							<option>Domestic Moving</option>
							<option>Office Moving</option>
							<option>House Shifting</option>
							

						</select>
					</div>
						</form>
					</div>
				</div>
					
						<center>
							<button type="button" class="btn btn-primary">Submit</button>
						</center>
					</div>
				</div>
			</div>
	
	</body>
	</html>
	<?php 
	include"footer.php";
	?>