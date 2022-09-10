<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="icon.css" rel="stylesheet" />
    <link rel="stylesheet" href="materialize.min.css" />
    <link rel="stylesheet" href="home_style.css">

    <script src="jquery.min.js">
    </script>
  
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 50%;
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
    </style>

</head>
<body>
<center>
    <nav class="mynav">
        <div class="nav-wrapper container">
            <a href="/"><img src="bbi-logo.png" alt="Universe" class="brand-logo"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="text" >JOTHINATHAN BLOOD BANK SYSTEM</a>
                <li><a class="btn transparent" href="index.html">home</a>
                <li><a class="btn transparent" href="do.html">Do&Don't</a></li>
            </ul>
        </div>
    </nav>
    <h1>List of Donors

        <h3>Search Donors
        </h3>
        <b>Search the table for Blood Group,CITY,State: 
          <input id="gfg" type="text" 
                 placeholder="Search here">
        </b>


    <br>
    <center>
    <table border=2>
        <thead>
            <tr>
            <td>Donor Name</td>
            <td>RH factor</td>
            <td>blood group</td>
            <td>address</td>
            <td>Phone Number</td>
            </tr>
        </thead>



        <tbody id="geeks">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "mystore";

            $connection =new mysqli($servername, $username, $password, $database);



            $sql = "SELECT * FROM college";
            $result = $connection->query($sql);

            if (!$result) {
                die("Invalid query: " . $connection->error);
            }

            
            while($row = $result->fetch_assoc()) {  
                echo "<tr>
               <td>" . $row["first_name"] . "</td>
               <td>" . $row["Rh factor"] . "</td>
               <td>" . $row["blood group"] . "</td>
               <td>" . $row["address"] . "</td>
               <td>" . $row["Phone Number"] . "</td>
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
            </center>
    
</body>
</html>