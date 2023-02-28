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
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:5">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i> </button>
  <span class="w3-bar-item w3-right"><img src="images/logo.jpg" width="80px" hieght="20px"></span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:15%;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="images/avtar.jpg" class="w3-circle w3-margin-right" style="width:100%">
    </div>
    <div class="w3-col s8 w3-bar">
        <br>
        <span style ="font-size:large">Welcome,
        <br>
        <strong><?php echo $_SESSION['username']; ?></strong></span><br>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#dash" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="hi2.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-eye fa-fw"></i>  Overview</a>
    <a href="openings.php" class="w3-bar-item w3-button w3-padding" class="tablinks" onclick="openCity(event, 'dash')"><i class="fa fa-joomla fa-fw"></i>  Openings</a>
    <a href="achiv.php" class="w3-bar-item w3-button w3-padding" class="tablinks" onclick="openCity(event, 'open')"><i class="fa fa-trophy fa-fw"></i>  Achievements</a>
    <a href="profile.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>  Profile</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Logout</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->


</body>
</html>
