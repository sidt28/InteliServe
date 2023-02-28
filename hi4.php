<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="images/ic.jpg" sizes="300x400 ">
<title>DeployeCares</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<style>
body,h1 {font-family: "Raleway", sans-serif}
body{
			margin:0;
			overflow:hidden;
		}
body, html {height: 563px;}
.bgimg {
  background: url('images/india.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
.mainFrame{
			position:absolute;
			top:0;
			left:0;
			background:black;
		}
		.videoBack{
			width: 100%;
			height:100%;
            margin-left: 0%;
			position:relative;
		}
        .mainFrame .topLayer{
			position:absolute;
			z-index:100;
			top:0;
			left:0;
			background:rgba(0, 0, 0, 0);
			width:100%;
			height:100%;
		}
    .close {
  position: absolute;
  right: 25px;
  top: 0;
  color: white;
  font-size: 35px;
  font-weight: bold;
}
</style>
</head>
<body>
<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:5">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i> </button>
  <span class="w3-bar-item w3-right"><img src="images/logo.jpg" width="80px" hieght="20px"></span>
</div>
<div class="mainFrame">
  <video class="videoBack" autoplay muted loop>
  <source src="images/design3.mp4" type="video/mp4">
  </video>
  <div class="topLayer">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-animate-left" style="z-index:3;width:15%; background-color: #aae1ffb5;" id="mySidebar"><br>

    <div class="w3-col s4">
      <img src="images/avtar.jpg" class="w3-circle w3-margin-right" style="width:80%; margin: 10px;">
    </div>
        <br>
        <span style ="font-size:large">Welcome,
        <br>
        <strong><?php echo $_SESSION['username']; ?></strong></span><br>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#dash" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="hi4.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-eye fa-fw"></i>  Overview</a>
    <a href="adopenings.php" class="w3-bar-item w3-button w3-padding" class="tablinks" onclick="openCity(event, 'dash')"><i class="fa fa-joomla fa-fw"></i>  Openings</a>
    <a href="stdet.php" class="w3-bar-item w3-button w3-padding" class="tablinks" onclick="openCity(event, 'open')"><i class="fa fa-trophy fa-fw"></i>  Student Details</a>
    <a href="update.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>  Update</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Logout</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="tabcontent" style="padding-top:22px" id="dash">
    <h5><b><i  class="fa fa-dashboard" style=" color: #edebeb;"></i><span style=" color: #edebeb;"> My Dashboard</b></span></h5>
  

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
      <br>
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <?php 
            include("stucount.php");
          ?>
        </div>
        <div class="w3-clear"></div>
        <h4>Numbur of Students</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
      <br>
        <div class="w3-left"><i class="fa fa-copyright w3-xxxlarge"></i></div>
        <div class="w3-right">
          <?php 
            include("compcount.php");
          ?>
        </div>
        <div class="w3-clear"></div>
        <h4>Number of Companies</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
      <br>
        <div class="w3-left"><i class="fa fa-credit-card-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <?php 
            include("avgcount.php");
          ?> LPA
        </div>
        <div class="w3-clear"></div>
        <h4>Average Package</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
      <br>
        <div class="w3-left"><i class="fa fa-money w3-xxxlarge"></i></div>
        <div class="w3-right">
          <?php 
            include("highcount.php");
          ?> LPA
        </div>
        <div class="w3-clear"></div>
        <h4>Highest Package</h4>
      </div>
    </div>
  </div>
  
  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third">
        <h4><strong>Analysis</strong></h4>
        <div id="myChart" style="width:100%; max-width:1000px; height:400px; margin: 10px -16px;">
          </div>

          <script>
              google.charts.load('current', {'packages':['corechart']});
              google.charts.setOnLoadCallback(drawChart);

              function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['Contry', 'Mhl'],
                ['Placed',<?php include("stucount3.php");?>],
                ['Unplaced',<?php include("stucount2.php");?>]
              ]);

              var options = {
                is3D:true
              };

              var chart = new google.visualization.PieChart(document.getElementById('myChart'));
                chart.draw(data, options);
              }
          </script>
      </div>


      <div class="w3-twothird">
        <h4><strong>Table</strong></h4>
        <table class="w3-table w3-striped w3-white">
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Company_Name</th>
                <th>requirements</th>
                <th>package (LPA)</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "12345";
            $database = "placement";

            $connection = new mysqli($servername, $username, $password, $database);

            if($connection->connect_error)
            {
                die("Connection failed: ". $connection->connect_error);
            }

            $sql = "SELECT * FROM a_products";
            $result = $connection->query($sql);

            if (!$result)
            {
                die("Invalid query: ". $connection->error);
            }

            while($row = $result->fetch_assoc())
            {
                echo "<tr>
                <td>" .$row["id"] ."</td>
                <th>" .$row["name"] ."</th>
                <th> CGPA: " .$row["cgpa"] .", Backlog " .$row["price"] .", SEX: " .$row["gender"] ."</th>
                <th>" .$row["package"] ."</th> 
                </tr>";
            }
            ?>
        </tbody>
        </table>
      </div>
    </div>
  </div>
  <hr>
</div>
</header>

</body>
</html>
