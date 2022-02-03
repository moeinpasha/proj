<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 
</head>
<body>

<div class="container">

  
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button>

  <!-- The Modal -->
  <div class="modal  left fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Services</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="card">
        <div class="card-body">
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
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  


</body>
</html>
