<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="Description"
			content="Author: JOTHINATHAN, Purpose: I made this site as a larning project and will try and use react soon.">
		<title>BloodBank</title>
		<!-- Compiled latest Css -->
		<link href="icon.css" rel="stylesheet" />
		<link rel="stylesheet" href="home_style.css">
        <link rel="stylesheet" href="./Masterhealth Checkup, Coimabtore MultiSpecality Hospital_files/bootstrap.min.css">
  <link rel="stylesheet" href="./Masterhealth Checkup, Coimabtore MultiSpecality Hospital_files/Navigation-Clean.css">
  <link rel="stylesheet" href="./Masterhealth Checkup, Coimabtore MultiSpecality Hospital_files/styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link rel="stylesheet" href="some.css">
  <link href="./Masterhealth Checkup, Coimabtore MultiSpecality Hospital_files/css2" rel="stylesheet">
  <script id="facebook-jssdk" src="./Masterhealth Checkup, Coimabtore MultiSpecality Hospital_files/xfbml.customerchat.js.download"></script><script src="./Masterhealth Checkup, Coimabtore MultiSpecality Hospital_files/jquery-1.11.0.min.js.download"></script>
  <script src="./Masterhealth Checkup, Coimabtore MultiSpecality Hospital_files/bootstrap.min.js.download"></script>

		<style>
            center{
                font-size: 25px;
            }

	
		</style>
	</head>

	<body>

		<div id="wrapper">



			<center>
				<h2 class="tessa"><i>JOTHINATHAN BLOOD BANK</i></h2>
				</center>
			   <body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0" style="">
		 
		
			<nav class="navbar navbar-light navbar-expand-md navigation-clean mt-2 mb-2">
				<div class="container"><a class="navbar-brand d-md-none" href="https://www.kghospital.com/index.html"></a>
					<button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle
							navigation</span><span class="navbar-toggler-icon"></span></button>
					<div class="collapse navbar-collapse text-left d-xl-flex justify-content-xl-start" id="navcol-1">
						<ul class="nav navbar-nav d-xl-flex justify-content-xl-start" style="font-size: 15px;">
							<li class="nav-item" role="presentation"><a class="nav-link" href="home.html">Home</a></li>
							<li class="dropdown nav-item"> <a class=" nav-link" href="register.php">Register As Donor</a>
							   
							</li>
							<li class="nav-item" role="presentation"><a class="nav-link" href="check.php">check donors</a>
							</li>
							<li class="nav-item" role="presentation"><a class="nav-link" href="Do.html">do&don't</a>
							</li>
		
		
							<li class="nav-item"> <a class="nav-link" href="adminlogin.php">admin log in</a>
								<div class="dropdown-menu" role="menu"> <a class="dropdown-item" role="presentation" href="https://www.kghospital.com/medical-tourism.html"> KG Hospital
										Medical Tourism </a> <a class="dropdown-item" role="presentation" href="https://www.kghospital.com/patient-stories.html"> International
										Patient Stories </a> </div>
							</li>
							<li class="nav-item"> <a class="nav-link" href="aboutus.html">ABOUT SITE</a>
								<div class="dropdown-menu" role="menu"> <a class="dropdown-item" role="presentation" href="https://www.kghospital.com/kg-hospital-dnb-course.html"> DNB Course </a> <a class="dropdown-item" role="presentation" href="https://www.kgchs.com/" target="_blank"> KG College of
										Health Sciences </a> </div>
							</li>
							<li class="nav-item"> <a class="nav-link" href="contactus.html">contact us</a>
								<div class="dropdown-menu" role="menu"> <a class="dropdown-item" role="presentation" href="https://www.kghospital.com/blog.html">Blog</a> </div>
							</li>
		
						</ul>
					</div>
				</div>
			</nav>
		</div>
			</div>
            <center>

<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $name1 = $_POST['name1'];
     $gender = $_POST['gender'];
     $blood = $_POST['blood'];
     $phone = $_POST['phone'];
     $city = $_POST['city'];
     $street = $_POST['street'];

     $sql = "INSERT INTO users (name1,gender,blood,phone,city,street)
     VALUES ('$name1','$gender','$blood','$phone','$city','$street')";
     if (mysqli_query($conn, $sql)) {
      echo "<h3>data stored in a database successfully</h3>";

      echo nl2br("\n$name1\n $gender\n "
          . "$blood\n $phone\n $city\n $street");
     }
     mysqli_close($conn);
}
?>
</center>
<br><br><br>



	

		<!--Import Font Awesome-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
			integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		</link>
		<!-- Footer -->
		<footer class="page-footer">
			<div class="container">
				<div class="row">
					<div class="col s12 m8 l9">
						<h5 class="white-text">Donate Blood Save Life</h5>
						<p class="grey-text text-lighten-4">JOTHINATHAN NAGARAJAN </p>
					</div>
					<div class="col s12 m4 l3">
						<h5 class="white-text">Contact</h5>
						<ul>
							<li><i class="fab fa-facebook"></i><a class="grey-text text-lighten-4"
									href="https://www.facebook.com"> Facebook</a></li>
							<li><i class="fab fa-instagram"></i><a class="grey-text text-lighten-4"
									href="https://www.instagram.com"> Instagram</a></li>
							<li><i class="fab fa-whatsapp"></i><a class="grey-text text-lighten-4" href="#"> Whatsapp</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					?? 2022 Copyright JOTHINATHAN NAGARAJAN
					<a class="grey-text text-lighten-4 right" href="#">save food, give life, grow humanity</a>
				</div>
			</div>
		</footer>

		<script src="jquery.min.js"></script>
		<script src="materialize.min.js"></script>
		<script src="register_script.js"></script>

	</body>

</html>


     
