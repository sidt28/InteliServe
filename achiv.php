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
    <a href="hi2.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Overview</a>
    <a href="openings.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-joomla fa-fw"></i>  Openings</a>
    <a href="achiv.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-trophy fa-fw"></i>  Achievements</a>
    <a href="profile.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>  Profile</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Logout</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

<header class="w3-container" class="tabcontent" style="padding-top:22px" id="dash">
    <h5><b><i class="fa fa-dashboard"></i> Achievements</b></h5></header>

    <div class="center">
<div class="w3-container" class="tabcontent" style="padding-top:22px" id="dash">
         <h1><strong>Form Page for Achievements</strong></h1>
         <form action="insert.php" method="post">
             
<h3>
               <label for="name">Name:</label>
               <input type="text" name="name" id="Name">
</h3>
 
             
<h3>
               <label for="cgpa">Skills:</label>
               <input type="float" name="cgpa" id="cgpa">
            </p>
 
             
<h3>
               <label for="skills">Achievements:</label>
               <input type="text" name="skills" id="skills">
</h3>
 
             
<h3>
               <label for="xthclassmarks">Experience :</label>
               <input type="text" name="xthclassmarks" id="xthclassmarks">
</h3>
 
             
<h3>
               <label for="12th class marks">Active Email ID:</label>
               <input type="text" name="xxthclassmarks" id="xxthclassmarks">
</h3>
 
<h3>
               <label for="back">Active Backlog:</label>
               <input type="text" name="back" id="back">
</h3>
      <div class="">
      <form class="" action="insert.php" method="post" enctype="multipart/form-data">
        <label for="">Choose Your PDF File</label><br>
        <input id="pdf" type="file" name="pdf" value="" required><br><br>
        <input id="upload" type="submit" name="submit" value="Upload">
        <?php
        include 'db.php';

        if (isset($_POST['submit'])) {
          $pdf=$_FILES['pdf']['name'];
          $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $pdf_store="pdf/".$pdf;

          move_uploaded_file($pdf_tem_loc,$pdf_store);

          $sql="INSERT INTO pdf_file(pdf) values('$pdf')";
          $query=mysqli_query($conn,$sql);



        }



         ?>

      </form>

    </div>

</div>
    </div></div>
   </body>
</html>
