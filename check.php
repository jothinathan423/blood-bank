<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!-- Compiled latest Css -->
<link href="icon.css" rel="stylesheet" />
		<link rel="stylesheet" href="home_style.css">
        <link rel="stylesheet" href="./Masterhealth Checkup, Coimabtore MultiSpecality Hospital_files/bootstrap.min.css">
  <link rel="stylesheet" href="./Masterhealth Checkup, Coimabtore MultiSpecality Hospital_files/Navigation-Clean.css">
  <link rel="stylesheet" href="./Masterhealth Checkup, Coimabtore MultiSpecality Hospital_files/styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="stylesheet" href="some.css">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="./Masterhealth Checkup, Coimabtore MultiSpecality Hospital_files/css2" rel="stylesheet">
  <script id="facebook-jssdk" src="./Masterhealth Checkup, Coimabtore MultiSpecality Hospital_files/xfbml.customerchat.js.download"></script><script src="./Masterhealth Checkup, Coimabtore MultiSpecality Hospital_files/jquery-1.11.0.min.js.download"></script>
  <script src="./Masterhealth Checkup, Coimabtore MultiSpecality Hospital_files/bootstrap.min.js.download"></script>



    <script src="jquery.min.js">
    </script>
  
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
          
        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
          
        h1 {
            color: green;
        }


	
	   
	
	
	
			.toss{
				background-color: rgba(252, 34, 49, 0.979);
				height: 50px;
	
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
    	<!-- Nav -->
        <div id="wrapper">


    

<center>
    <h2 class="tessa"><i>JOTHINATHAN BLOOD BANK</i></h2>
    </center>
   <body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0" style=>


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


                <li class="nav-item"> <a class="nav-link"href="adminlogin.php">admin log in</a>
                    <div class="dropdown-menu" role="menu"> <a class="dropdown-item" role="presentation" href="https://www.kghospital.com/medical-tourism.html"> KG Hospital
                            Medical Tourism </a> <a class="dropdown-item" role="presentation" href="https://www.kghospital.com/patient-stories.html"> International
                            Patient Stories </a> </div>
                </li>
                <li class="nav-item"> <a class="nav-link"href="aboutus.html">ABOUT SITE</a>
                    <div class="dropdown-menu" role="menu"> <a class="dropdown-item" role="presentation" href="https://www.kghospital.com/kg-hospital-dnb-course.html"> DNB Course </a> <a class="dropdown-item" role="presentation" href="https://www.kgchs.com/" target="_blank"> KG College of
                            Health Sciences </a> </div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="contactus.html
                ">contact us</a>
                    <div class="dropdown-menu" role="menu"> <a class="dropdown-item" role="presentation" href="https://www.kghospital.com/blog.html">Blog</a> </div>
                </li>

            </ul>
        </div>
    </div>
</nav>
</div>
</div>
    <h1>List of Donors

        <h3>Search Donors
        </h3>
        <b>Search the table for Blood Group,CITY,State: 
          <input id="gfg" type="text" 
                 placeholder="Search here">
        </b>


    <br>
    <table border=3>
        <thead>
            <tr>
            <td> Donor Name</td>
            <td>Gender</td>
            <td>Blood Group</td>
            <td>Phone Number</td>
            <td>city</td>
            <td>Address</td>
            </tr>
        </thead>



        <tbody id="geeks">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "my_db";

            $connection =new mysqli($servername, $username, $password, $database);



            $sql = "SELECT * FROM users";
            $result = $connection->query($sql);

            if (!$result) {
                die("Invalid query: " . $connection->error);
            }

            
            while($row = $result->fetch_assoc()) {  
                echo "<tr>
               <td>" . $row["name1"] . "</td>
               <td>" . $row["gender"] . "</td>
               <td>" . $row["blood"] . "</td>
               <td>" . $row["phone"] . "</td>
               <td>" . $row["city"] . "</td>
               <td>" . $row["street"] . "</td>
            </tr>";    
            }

            
            ?>
        </tbody>
    </table>
    <script>
            $(document).ready(function() {
                $("#gfg").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#geeks tr").filter(function() {
                        $(this).toggle($(this).text()
                        .toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
    
</body>
</html>