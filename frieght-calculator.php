<?php 
include"header.php";
?>
<body style="padding-top:90px;">
	<div class="container">
		<div class="row">
			<div class="col-md-6">

			</div>
			<div class="col-md-6 py-5">
				<div class="row">
				<h4 style="text-align: center;color:#3d5daa; text-decoration: underline;">Frieght-Calculator</h4>
				<div class="col-md-6">
			<div class="form-group">
				<label for="name">From</label>
				<input type="text" placeholder="Enter Location" class="form-control">
			</div>
				<div class="form-group">
				<label for="name">No Of articles</label>
				<input type="text" placeholder="No Of Articles" class="form-control">
			</div>
			<div class="form-group">
				<label for="name">Weight</label>
				<input type="text" placeholder="Enter Weight" class="form-control">
			</div>
		</div>
		<div class="col-md-6">
				<div class="form-group">
				<label for="name">To</label>
				<input type="text" placeholder="Enter Location" class="form-control">
			</div>
				<div class="form-group">
				<label for="name">goods value</label>
				<input type="text" placeholder="Goods Value(Rs)" class="form-control">
			</div>
		</div>
		
		<button type="button" class="btn btn-success">Submit</button>
	
	
	</div>
		</div>
			</div>

</div>
	</body>
	<?php
	include"footer.php";
	?>