<?php

$con = mysqli_connect('127.0.0.1','root','');

if(!$con){  echo 'Not Connected To Server';}
if(!mysqli_select_db($con,'sih')){ echo 'Database Not Selected';}



$Username = $_POST['Username'];


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Farmers Land Registry</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
	
	<style>
td{
			font-size: 10px;
			text-align: justify;
		}
    .form-control{
      height: 40px !important;
      width:250px;
    }
    label{
      color: white;
    }
    .form-control {
	box-shadow: none;
	border-color: #ddd;
}
.form-control:focus {
	border-color: #4aba70; 
}
.login-form {
	width: 350px;
	margin: 0 auto;
	padding: 30px 0;
}
.login-form form {
	color: #434343;
	border-radius: 1px;
	margin-bottom: 15px;
	background: #fff;
	border: 1px solid #f3f3f3;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.login-form h4 {
	text-align: center;
	font-size: 22px;
	margin-bottom: 20px;
}
.login-form .avatar {
	color: #fff;
	margin: 0 auto 30px;
	text-align: center;
	width: 100px;
	height: 100px;
	border-radius: 50%;
	z-index: 9;
	background: #4aba70;
	padding: 15px;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.login-form .avatar i {
	font-size: 62px;
}
.login-form .form-group {
	margin-bottom: 20px;
}
.login-form .form-control, .login-form .btn {
	min-height: 40px;
	border-radius: 2px; 
	transition: all 0.5s;
}
.login-form .close {
	position: absolute;
	top: 15px;
	right: 15px;
}
.login-form .btn, .login-form .btn:active {
	background: #4aba70 !important;
	border: none;
	line-height: normal;
}
.login-form .btn:hover, .login-form .btn:focus {
	background: #42ae68 !important;
}
.login-form .checkbox-inline {
	float: left;
}
.login-form input[type="checkbox"] {
	position: relative;
	top: 2px;
}
.login-form .forgot-link {
	float: right;
}
.login-form .small {
	font-size: 13px;
}
.login-form a {
	color: #4aba70;
}
	</style>
  </head>
  <body>

  	<div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						<p class="mb-0 phone pl-md-2">
							<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +911234567890</a> 
							<a href="#"><span class="fa fa-paper-plane mr-1"></span> cubianz@gmail.com</a>
						</p>
					</div>
					<div class="col-md-6 d-flex justify-content-md-end">
						<div class="social-media">
			    		<p class="mb-0 d-flex">
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
			    		</p>
		        </div>
					</div>
				</div>
			</div>
		</div>
		

		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container">
				<img class="national_emblem" src="http://agricoop.gov.in/sites/all/themes/agricoop/images/emblem-dark.png" alt="national emblem">
			  <a class="navbar-brand" href="index.html">Farmers Land Registry</a>
			  
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			  </button>
	
			  <div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					
				  <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
				  
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Farmers Schemes
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item" href="#schemes">Crops</a>
					  <a class="dropdown-item" href="#schemes">Land</a>
					  <a class="dropdown-item" href="#schemes">vetnary</a>
					  <a class="dropdown-item" href="#schemes">Poultry Farms</a>
					</div>
				  </li>
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Insurance
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item" href="#ins">Action</a>
					</div>
				  </li>
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Live Support
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item" href="#sup">Agri Practise Advice</a>
					  <a class="dropdown-item" href="#sup">Epiodic Advice</a>
					  <a class="dropdown-item" href="#sup">Irrigation Advice</a>
					  <a class="dropdown-item" href="#sup">Estimated Income</a>
					</div>
				  </li>
				  <!--
				  <li class="nav-item"><a href="about.html" class="nav-link">Registration</a></li>
				  <li class="nav-item"><a href="counselor.html" class="nav-link"> Farmers Schemes</a></li>
				  <li class="nav-item"><a href="services.html" class="nav-link">Insurence</a></li>
				  <li class="nav-item"><a href="pricing.html" class="nav-link">Live Support</a></li> -->
				  <li class="nav-item"><a href="" class="nav-link" >Contact</a></li>
				  <li class="nav-item "><a href="admin\examples\dashboard.html" class="nav-link"><button class="btn" style="background-color: #589167; color: white; ">Login</button></a></li>
				</ul>
			  </div>
			</div>
		  </nav>
		<!-- END nav -->
   
    <div class="hero-wrap" style="background-image: url('images/bg1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <div class="col-md-6 ftco-animate d-flex align-items-end">
          

<div class="login-form"  style="padding-right: 50px;">    
    <form action="log.php" method="POST">
		<div class="avatar"><i class="fa fa-user-circle-o" aria-hidden="true"></i></div>
    	<h4 class="modal-title">User Login</h4>
        <div class="form-group">
			<input type="text" name="Username" class="form-control"required >
			
        </div>
        <div class="form-group">
            <input type="password" name="Password" class="form-control"required >
        </div>
        <div class="form-group small clearfix">
            <label class="form-check-label"><input type="checkbox"> Remember me</label>
            <a href="#" class="forgot-link">Forgot Password?</a>
        </div> 
        <input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">  
        
        <?php
        if(isset($_SESSION['Username']))
        {
            header("refresh:2; url=user.html");
        }

?>



    </form>			
    <div class="text-center small">Don't have an account? <a href="#">Sign up</a>
          </div>
          
        </div>
        <div class="login-form">    
            <form action="Admin\scheme.html" method="post">
                <div class="avatar"><i class="fa fa-lock" aria-hidden="true"></i></div>
                <h4 class="modal-title">Admin Login</h4>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="required">
                </div>
                <div class="form-group small clearfix">
                    <label class="form-check-label"><input type="checkbox"> Remember me</label>
                    <a href="#" class="forgot-link">Forgot Password?</a>
                </div> 
                <input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">              
            </form>			
            <div class="text-center small">Don't have an account? <a href="#">Sign up</a>
                  </div>
                  
                </div>
      </div>
    </div>



	          </div>
	        </div>
      	</div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>


















