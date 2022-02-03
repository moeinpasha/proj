<?php 
include"header.php";
?>
<body style="padding-top:90px;">
	<div class="container">
		<div class="card">
			<div class="card-body">
		<div class="row">
			<h2 style="text-align: center;text-decoration: underline;">Transport Services</h2>
			<div class="col-md-6">
			<div class="form-group">
				<label for="name">From</label>
				<input type="text" placeholder="Enter Location" class="form-control">
			</div>
				<div class="form-group">
				<label for="email">email</label>
				<input type="email" placeholder="enter mail" class="form-control">
			</div>
			<div class="form-group">
				<label for="location">Enter Pickup City</label>
				<input type="text" placeholder="Enter Weight" class="form-control">
			</div>
			<div class="form-group">
				<label for="date">Enter Pickup date</label>
				<input type="date" placeholder="Enter date" class="form-control">
			</div>
		</div>
		<div class="col-md-6">
				<div class="form-group">
				<label for="name">To</label>
				<input type="text" placeholder="Enter Location" class="form-control">
			</div>
				<div class="form-group">
				<label for="number">Mobile Number</label>
				<input type="tel" placeholder="mobile Number" class="form-control">
			</div>
			<div class="form-group">
				<label for="location">Enter Drop City</label>
				<input type="text" placeholder="Enter Weight" class="form-control">
			</div>
			<div class="form-group">
				<label for="date">Enter delivaerd date</label>
				<input type="date" placeholder="Enter date" class="form-control">
			</div>
		</div>
	</div>
	<center>
		<button type="button" class="btn btn-success">Submit</button>
	</center>
</div>
</div>
</div>

	</body>
	<?php
	include"footer.php";
	?>