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
    <a href="achiv.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-trophy fa-fw"></i>  Achievements</a>
    <a href="profile.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-bullseye fa-fw"></i>  Profile</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Logout</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

<header class="w3-container" class="tabcontent" style="padding-top:22px" id="dash">
<div class="container tabcontent" id="open">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <!-- <div class="w3-display-container">
          <img src="" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2>(name of the student)</h2>
          </div>
        </div> -->
        <br>
        <br>
            <h2>(name of the student)</h2>
          <br>
          <br>
          <br>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Enrollment number <br> Name of the institute</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Address</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>Email address</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>Contact details</p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Language score</b></p>
          <p>C++</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
          </div>
          <p>Python</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
              <div class="w3-center w3-text-white">80%</div>
            </div>
          </div>
          <p>Java</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
          </div>
          <p>Data structure</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
          </div>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          <p>English</p>
          <div>
          </div>
          <p>Hindi</p>
          <div>
          </div>
          <p>German</p>
          <div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-address-book"></i>Portfolio</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Opportunities Placed</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2018-2022 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p><strong>4th Year</strong> <br><strong>B-Tech Information technology</strong> <br><strong>Amity University</strong> <br><strong>Sector 125, Noida</strong> <br></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Working as an intern (eg:Front end developer) / (Name of the company) </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar margin-right">time duration (eg:Nov 2021 - April 2022)</i></h6>
          <p><strong>Details of the work done.</strong></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Working as an intern (eg:Graphic Designer) / (Name of the company)</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar margin-right">time duration (eg:Jun 2020 - Dec 2020)</i></h6>
          <p><strong>Details of the work done.</strong> </p><br>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Educational details</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>12th Marks</b></h5>
          <h6 class="w3-text-teal">(12th Marks)</h6>
          <p><strong>(Name of the school)</strong></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>10th marks</b></h5>
          <h6 class="w3-text-teal">(10th marks)</h6>
          <p><strong>(Name of the school)</strong></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Graduation CGPA of all semesters</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2018 - 2022</h6>
          <p><strong>(1st semester CGPA)</strong><br><strong>(2nd semester CGPA)</strong><br><strong>(3rd semester CGPA)</strong><br><strong>(4th semester CGPA)</strong><br><strong>(5th semester CGPA)</strong><br><strong>(6th semester CGPA)</strong><br><strong>(7th semester CGPA)</strong><br><strong>(8th semester CGPA)</strong><br></p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>
                </div>
            </div>

        </div>
      </div>
      
</header>
</div>
</body>
</html>
