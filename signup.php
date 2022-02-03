<?php
include"header.php";
?>
<div class="container" style="padding-top: 90px;">
  <div class="row">
    <div class="col-md-6">
      <div class="form">
        <label for="name">First Name</label>
        <input type="text" placeholder="" class="form-control">
      </div>
       <div class="form">
        <label for="number">Mobile Number</label>
        <input type="tel" placeholder="" class="form-control">
      </div>
       <div class="form">
        <label for="name">Business Name</label>
        <input type="text" placeholder="" class="form-control">
      </div>
       <div class="form">
        <label for="pwd"> Create Password *</label>
        <input type="password" placeholder="" class="form-control">
      </div>
    </div>
    <div class="col-md-6">
       <div class="form">
        <label for="name">Last Name</label>
        <input type="text" placeholder="" class="form-control">
      </div>
       <div class="form">
        <label for="email">Email Id</label>
        <input type="email" placeholder="" class="form-control">
      </div>
       <div class="form">
        <label for="name">Business Type</label>
       <select class="form-control">
        <option>Retailer</option>
        <option>Supplier</option>
        <option>Whole Saler</option>
        <option>Distributor</option>
        <option>Consumers</option>
       </select>
      </div>
       <div class="form">
        <label for="pwd">Conform Password *</label>
        <input type="password" placeholder="" class="form-control">
      </div>
    </div>
  </div>
  <center>
    <button type="button" class="btn" style="margin: 30px;background-color: #3d5daa;color:white;">SignUp For Free</button>
  </center>
</div>
<?php 
include"footer.php";
?>
