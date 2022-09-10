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
		<link rel="stylesheet" href="materialize.min.css" />

		<!--Import Google Icon Font-->
		<link href="icon.css" rel="stylesheet" />

		<link rel="stylesheet" href="style.css">

        <style>
        #wrapper {
            width: 100%;
            border: 0px solid crimson;
            margin: 0 auto;
            background-color: rgba(252, 34, 49, 0.979);
            margin-top: -42px;
            color: white;
        }
        .mass {
            text-decoration: none;
            color: white;
        }

   



        .toss{
            background-color: rgba(252, 34, 49, 0.979);
            height: 50px;

        }
        .lonely{
            display: inline-block;
            vertical-align: middle;
            height: 38px;
            padding: 0 4%;
            line-height: 33px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            text-align: center;
            border-radius: 5px;
            box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%), 0 3px 1px -2px rgb(0 0 0 / 12%), 0 1px 5px 0 rgb(0 0 0 / 20%);
        }

        .gos1{
            display: inline-block;
            height: 50px;
            padding: 0 4%;
            line-height: 50px;
            text-align: center;
            visibility: hidden;
            border-radius: 5px;
            box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%), 0 3px 1px -2px rgb(0 0 0 / 12%), 0 1px 5px 0 rgb(0 0 0 / 20%);
        }

        .hos{
            display: inline-block;
            height: 50px;
            padding: 0 4%;
            line-height: 50px;
            text-align: center;
            visibility: hidden;
            border-radius: 5px;
            box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%), 0 3px 1px -2px rgb(0 0 0 / 12%), 0 1px 5px 0 rgb(0 0 0 / 20%);
        }

        .gess{
            display: inline-block;
            margin-top: 3%;
            margin-bottom: -12%;
        }

        .tessa{
            display: inline_block;
        }

    </style>

	</head>

	<body>
    <form action="insert.php" method="post">
		<!-- Nav -->
        <div id="wrapper">


    
    <img class="gess" src="bbi-logo.png" alt="">
    <center>
        <h2 class="tessa"><i>JOTHINATHAN BLOOD BANK</i></h2>
        </center>
        <ul class="toss">
            <li class="gos lonely"><a class="mass" href="home.html">HOME</a></li>
            <li class="gos1 lonely"><a class="mass"href="#">CHECK DONORS</a></li>
            <li class="gos lonely"><a class="mass"href="check.php">CHECK DONORS</a></li>
            <li class="hos lonely"><a class="mass"href="#">Courses</a></li>
            <li class="gos lonely"><a class="mass" href="do.html">Do&Don't</a></li>
        </ul>
    </div>

		<ul class="sidenav" id="mobile-demo">
			<li><a class="btn red" href="donate.html">Donate</a></li>
			<li><a class="btn red" href="bank.html">Search Donors</a></li>
		</ul>

        <?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Registration system PHP and MySQL
	</title>
	<link rel="stylesheet" type="text/css"
					href="style.css">
</head>

<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Enter Username</label>
			<input type="text" name="username"
				value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email"
				value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Enter Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn"
								name="reg_user">
				Register
			</button>
		</div>
		


<p>
			Already having an account?
			<a href="login.php">
				Login Here!
			</a>
		</p>



	</form>
</body>
</html>


		<!-- Footer -->
		<footer class="page-footer">
			<div class="container">
				<div class="row">
					<div class="col s12 m8 l9">
						<h5 class="white-text">Donate Blood Save Life me!</h5>
						<p class="grey-text text-lighten-4">JOTHINATHAN NAGARAJAN</p>
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
					© 2022 Copyright JOTHINATHAN NAGARAJAN
					<a class="grey-text text-lighten-4 right" href="#">save food, give life, grow humanity</a>
				</div>
			</div>
		</footer>




	</body>

</html>