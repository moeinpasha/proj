<head>
	<link rel="stylesheet" type="text/css" href="custom.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Ropa+Sans" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	body{
font-family: 'Ropa Sans', sans-serif;
background: #e1e1e1;
}
.card-body img{
height: 110px !important;
}
.flip-div{
cursor: pointer;
}
.flip-div:hover .back,.flip-div.hover .back {
-webkit-transform: rotateY(0deg);
-moz-transform: rotateY(0deg);
-o-transform: rotateY(0deg);
-ms-transform: rotateY(0deg);
transform: rotateY(0deg);
}
.flip-div:hover .front,.flip-div.hover .front {
-webkit-transform: rotateY(180deg);
-moz-transform: rotateY(180deg);
-o-transform: rotateY(180deg);
transform: rotateY(180deg);
}
.flip-main{
-webkit-transition: 1s;
-webkit-transform-style: preserve-3d;
-ms-transition: 1s;
-moz-transition: 1s;
-moz-transform: perspective(1000px);
-moz-transform-style: preserve-3d;
-ms-transform-style: preserve-3d;
transition: 1s;
transform-style: preserve-3d;
position: relative;
}
.front{
position: relative;
-webkit-transform: rotateY(0deg);
-ms-transform: rotateY(0deg);
z-index: 2;
margin-bottom: 30px;
}
.back{
position: absolute;
top: 0;
left: 0;
-webkit-transform: rotateY(-180deg);
-moz-transform: rotateY(-180deg);
-o-transform: rotateY(-180deg);
-ms-transform: rotateY(-180deg);
transform: rotateY(-180deg);
-webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
-moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}
.back ul li a{
font-size: 18px;
}
.front,.back {
-webkit-backface-visibility: hidden;
-moz-backface-visibility: hidden;
-ms-backface-visibility: hidden;
backface-visibility: hidden;
-webkit-transition: 1s;
-webkit-transform-style: preserve-3d;
-moz-transition: 1s;
-moz-transform-style: preserve-3d;
-o-transition: 1s;
-o-transform-style: preserve-3d;
-ms-transition: 1s;
-ms-transform-style: preserve-3d;
transition: 1s;
transform-style: preserve-3d;
}
</style>
</head>

<div class="container">
<div class="row mt-4">
<div class="col-12 col-sm-6 col-md-3">
<div class="flip-div">
<div class="flip-main">
<div class="front">
<div class="card">
<div class="card-body text-center pb-2">
<p><img class="rounded-circle" src="http://nicesnippets.com/demo/profile-1.jpg"></p>
<h5 class="card-title"><strong>Mathew Alex</strong></h5>
<p class="card-text">This is basic user profile with image, title, detail and button.</p>
<a href="#" class="btn btn-info btn-sm"><i class="fa fa-arrow-right"></i></a>
</div>
</div>
</div>
<div class="back rounded">
<div class="card">
<div class="card-body text-center">
<h4 class="card-title"><strong>Mathew Alex</strong></h4>
<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation.</p>
<ul class="list-inline">
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-facebook"></i>
</a>
</li>
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-twitter"></i>
</a>
</li>
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-skype"></i>
</a>
</li>
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-google"></i>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="flip-div">
<div class="flip-main">
<div class="front">
<div class="card">
<div class="card-body text-center pb-2">
<p><img class="rounded-circle" src="http://nicesnippets.com/demo/profile-2.png"></p>
<h5 class="card-title"><strong>Nike Tyson</strong></h5>
<p class="card-text">This is basic user profile with image, title, detail and button.</p>
<a href="#" class="btn btn-info btn-sm"><i class="fa fa-arrow-right"></i></a>
</div>
</div>
</div>
<div class="back rounded">
<div class="card">
<div class="card-body text-center">
<h4 class="card-title"><strong>Nike Tyson</strong></h4>
<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation.</p>
<ul class="list-inline">
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info text-center" target="_blank" href="#">
<i class="fa fa-facebook"></i>
</a>
</li>
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-twitter"></i>
</a>
</li>
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-skype"></i>
</a>
</li>
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-google"></i>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="flip-div">
<div class="flip-main">
<div class="front">
<div class="card">
<div class="card-body text-center pb-2">
<p><img class="rounded-circle" src="http://nicesnippets.com/demo/profile-3.jpg"></p>
<h5 class="card-title"><strong>Bernard Finn</strong></h5>
<p class="card-text">This is basic user profile with image, title, detail and button.</p>
<a href="#" class="btn btn-info btn-sm"><i class="fa fa-arrow-right"></i></a>
</div>
</div>
</div>
<div class="back rounded">
<div class="card">
<div class="card-body text-center">
<h4 class="card-title"><strong>Bernard Finn</strong></h4>
<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation.</p>
<ul class="list-inline">
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-facebook"></i>
</a>
</li>
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-twitter"></i>
</a>
</li>
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-skype"></i>
</a>
</li>
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-google"></i>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="flip-div">
<div class="flip-main">
<div class="front">
<div class="card">
<div class="card-body text-center pb-2">
<p><img class="rounded-circle" src="http://nicesnippets.com/demo/profile-5.jpg"></p>
<h5 class="card-title"><strong>Jason Craig</strong></h5>
<p class="card-text">This is basic user profile with image, title, detail and button.</p>
<a href="#" class="btn btn-info btn-sm"><i class="fa fa-arrow-right"></i></a>
</div>
</div>
</div>
<div class="back rounded">
<div class="card">
<div class="card-body text-center">
<h4 class="card-title"><strong>Jason Craig</strong></h4>
<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation.</p>
<ul class="list-inline">
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-facebook"></i>
</a>
</li>
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-twitter"></i>
</a>
</li>
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-skype"></i>
</a>
</li>
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-google"></i>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row mt-1">
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="flip-div">
<div class="flip-main">
<div class="front">
<div class="card">
<div class="card-body text-center pb-2">
<p><img class="rounded-circle" src="http://nicesnippets.com/demo/profile-6.png"></p>
<h5 class="card-title"><strong>Leonardo Filander</strong></h5>
<p class="card-text">This is basic user profile with image, title, detail and button.</p>
<a href="#" class="btn btn-info btn-sm"><i class="fa fa-arrow-right"></i></a>
</div>
</div>
</div>
<div class="back rounded">
<div class="card">
<div class="card-body text-center">
<h4 class="card-title"><strong>Leonardo Filander</strong></h4>
<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation.</p>
<ul class="list-inline">
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-facebook"></i>
</a>
</li>
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-twitter"></i>
</a>
</li>
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-skype"></i>
</a>
</li>
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-google"></i>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="flip-div">
<div class="flip-main">
<div class="front">
<div class="card">
<div class="card-body text-center pb-2">
<p><img class="rounded-circle" src="http://nicesnippets.com/demo/profile-7.jpg"></p>
<h5 class="card-title"><strong>Dmitri Brown</strong></h5>
<p class="card-text">This is basic user profile with image, title, detail and button.</p>
<a href="#" class="btn btn-info btn-sm"><i class="fa fa-arrow-right"></i></a>
</div>
</div>
</div>
<div class="back rounded">
<div class="card">
<div class="card-body text-center">
<h4 class="card-title"><strong>Dmitri Brown</strong></h4>
<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation.</p>
<ul class="list-inline">
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-facebook"></i>
</a>
</li>
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-twitter"></i>
</a>
</li>
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-skype"></i>
</a>
</li>
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-google"></i>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="flip-div">
<div class="flip-main">
<div class="front">
<div class="card">
<div class="card-body text-center pb-2">
<p><img class="rounded-circle" src="http://nicesnippets.com/demo/profile-8.jpg"></p>
<h5 class="card-title"><strong>Collin Moon</strong></h5>
<p class="card-text">This is basic user profile with image, title, detail and button.</p>
<a href="#" class="btn btn-info btn-sm"><i class="fa fa-arrow-right"></i></a>
</div>
</div>
</div>
<div class="back rounded">
<div class="card">
<div class="card-body text-center">
<h4 class="card-title"><strong>Collin Moon</strong></h4>
<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation.</p>
<ul class="list-inline">
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-facebook"></i>
</a>
</li>
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-twitter"></i>
</a>
</li>
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-skype"></i>
</a>
</li>
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-google"></i>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="flip-div">
<div class="flip-main">
<div class="front">
<div class="card">
<div class="card-body text-center pb-2">
<p><img class="rounded-circle" src="http://nicesnippets.com/demo/profile-9.jpg"></p>
<h5 class="card-title"><strong>Brendon MCcmillan</strong></h5>
<p class="card-text">This is basic user profile with image, title, detail and button.</p>
<a href="#" class="btn btn-info btn-sm"><i class="fa fa-arrow-right"></i></a>
</div>
</div>
</div>
<div class="back rounded">
<div class="card">
<div class="card-body text-center">
<h4 class="card-title"><strong>Brendon MCcmillan</strong></h4>
<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation.</p>
<ul class="list-inline">
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-facebook"></i>
</a>
</li>
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-twitter"></i>
</a>
</li>
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-skype"></i>
</a>
</li>
<li class="list-inline-item">
<a class="social-icon text-xs-center text-info" target="_blank" href="#">
<i class="fa fa-google"></i>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>