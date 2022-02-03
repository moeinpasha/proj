<?php
include"header.php";
?>

<!DOCTYPE html>
<html>
<title>Full Truck load</title>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container" style="padding-top:90px;">
			<div class="card">
				<div class="card-body">
					<h2 style="text-align: center;color:#3d5daa;">Full Truck Loading</h2>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" placeholder="Full Name" class="form-control">
					</div>
					<div class="form-group">
						<label for="name">Mobile Number</label>
						<input type="tel" placeholder="Mobile Number" pattern=".{10}" class="form-control">
					</div>
					<div class="form-group">
						<label for="name">From</label>
						<input type="text" placeholder="From" class="form-control">
					</div>
					<div class="form-group">
						<label for="name">To</label>
						<input type="text" placeholder="To" class="form-control">
					</div>
				
				</div>
				<div class="col-md-6">
						<div class="form-group">
						<label for="name">Select Vehical Type</label>
						<select class="form-control">
							<option selected>Type</option>
							<option>Open Truck</option>
							<option>Container</option>
							<option>Trailer</option>
							<option>Dumper</option>
							<option>Tanker</option>
							<option>Tipper</option>

						</select>
					</div>
						<div class="form-group">
						<label for="name">Select Tyres</label>
						<select class="form-control">
							<option selected>Tyres</option>
							<option>6 Tyres</option>
							<option>10 Tyres</option>
							<option>12 Tyres</option>
							<option>14 Tyres</option>
							<option>16 Tyres</option>
							<option>18 Tyres</option>
							<option>22 Tyres</option>
							<option>24 Tyres</option>
							<option>26 Tyres</option>
							

						</select>
					</div>
					<div class="form-group">
						<label for="name">Select Load Capacity</label>
						<input type="tel" placeholder="Min 2ton" class="form-control">
					</div>
					<div class="form-group">
						<label for="name">Type of Goods</label>
						<input type="tel" placeholder="" class="form-control">
					</div>
					
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
