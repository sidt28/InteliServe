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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <style>
      body,h1 {font-family: "Raleway", sans-serif}
      h3{color: #edebeb;}
      body
      {
        font-family: "Raleway", sans-serif;
			  margin:0;
			  overflow:hidden;
        height: 563px;
		  }
      .bgimg 
      {
        background: url('images/india.jpg');
        min-height: 100%;
        background-position: center;
        background-size: cover;
      }
      .mainFrame
      {
			  position:absolute;
			  top:0;
			  left:0;
			  background:black;
		  }
		  .videoBack
      {
			  width: 100%;
			  height:100%;
        margin-left: 0%;
			  position:relative;
		  }
      .mainFrame .topLayer
      {
			  position:absolute;
			  z-index:100;
			  top:0;
			  left:0;
			  background:rgba(0, 0, 0, 0);
			  width:100%;
			  height:100%;
		  }
      .close
      {
        position: absolute;
        right: 25px;
        top: 0;
        color: white;
        font-size: 35px;
        font-weight: bold;
      }
      .dropdown
      {
        position: relative;
        display: inline-block;
      }
      .dropdown-content 
      {
        display: none;
        position: absolute;
        background-color: #6abeff;;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }
      .dropdown-content a 
      {
        color: whitesmoke;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }
      .dropdown-content a:hover {background-color: #ddd;}
      .dropdown:hover .dropdown-content {display: block;}
      .card 
      {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        border-radius: 5px;
        background-color: #6abeff;
      }
      .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
      }

      .container {
        padding: 2px 16px;
      }
      form-style-10{
    width: 45%;
	padding:30px;
	margin:40px auto;
	background: #FFF;
	border-radius: 10px;
	-webkit-border-radius:10px;
	-moz-border-radius: 10px;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
	-moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
	-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
  background-color: #888;
  justify-content: center;
}
@media only screen and (max-width: 750px) {
    .form-style-10{
        width: 90%;
    }
}

.form-style-10 .inner-wrap{
	padding: 30px;
	background: #F8F8F8;
	border-radius: 15px;
	margin-bottom: 15px;
}
.form-style-10 h1{
	background: black;
	padding: 20px 30px 15px 30px;
	margin: -30px -30px 30px -30px;
	border-radius: 10px 10px 0 0;
	-webkit-border-radius: 10px 10px 0 0;
	-moz-border-radius: 10px 10px 0 0;
	color: #fff;
	text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
	font: normal 30px 'Bitter', serif;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	border: 1px solid black;
}
.form-style-10 h1 > span{
	display: block;
	margin-top: 2px;
	font: 13px Arial, Helvetica, sans-serif;
}
.form-style-10 label{
	display: block;
	font: 13px Arial, Helvetica, sans-serif;
	color: #888;
	margin-bottom: 15px;
}
.form-style-10 input[type="text"],
.form-style-10 input[type="date"],
.form-style-10 input[type="tel"],
.form-style-10 input[type="email"],
.form-style-10 input[type="number"],
.form-style-10 input[type="search"],
.form-style-10 input[type="time"],
.form-style-10 input[type="url"],
.form-style-10 input[type="password"],
.form-style-10 textarea,
.form-style-10 select{
	display: block;
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	padding: 8px;
	border-radius: 6px;
	-webkit-border-radius:6px;
	-moz-border-radius:6px;
	border: 2px solid #fff;
	box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
	-moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
	-webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}

.form-style-10 .section{
	font: normal 20px 'Bitter', serif;
	color: black;
	margin-bottom: 5px;
}
.form-style-10 .section span {
	background: black;
	padding: 5px 10px 5px 10px;
	position: absolute;
	border-radius: 50%;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border: 4px solid #fff;
	font-size: 14px;
	margin-left: -45px;
	color: #fff;
	margin-top: -3px;
}
.form-style-10 input[type="button"], 
.form-style-10 input[type="submit"],
.form-style-10 button{
	background: black;
	padding: 8px 20px 8px 20px;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	color: #fff;
	text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
	font: normal 30px 'Bitter', serif;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	border: 1px solid black;
	font-size: 15px;
}

/* latin-ext */
@font-face {
	font-family: 'Bitter';
	font-style: normal;
	font-weight: 400;
	src: local('Bitter Regular'), local('Bitter-Regular'), url(https://fonts.gstatic.com/s/bitter/v15/rax8HiqOu8IVPmn7cYxpPDk.woff2) format('woff2');
	unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  /* latin */
  @font-face {
	font-family: 'Bitter';
	font-style: normal;
	font-weight: 400;
	src: local('Bitter Regular'), local('Bitter-Regular'), url(https://fonts.gstatic.com/s/bitter/v15/rax8HiqOu8IVPmn7f4xp.woff2) format('woff2');
	unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
    </style>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['map'],
      // Note: you will need to get a mapsApiKey for your project.
      // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
      'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
    });
    google.charts.setOnLoadCallback(drawMap);

    function drawMap () {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Address');
      data.addColumn('string', 'Location');

      data.addRows([
        ['Lake Buena Vista, FL 32830, United States',                  'Walt Disney World'],
        ['6000 Universal Boulevard, Orlando, FL 32819, United States', 'Universal Studios'],
        ['7007 Sea World Drive, Orlando, FL 32821, United States',     'Seaworld Orlando' ]
      ]);

      var options = {
        mapType: 'styledMap',
        zoomLevel: 12,
        showTooltip: true,
        showInfoWindow: true,
        useMapTypeControl: true,
        maps: {
          // Your custom mapTypeId holding custom map styles.
          styledMap: {
            name: 'Styled Map', // This name will be displayed in the map type control.
            styles: [
              {featureType: 'poi.attraction',
               stylers: [{color: '#fce8b2'}]
              },
              {featureType: 'road.highway',
               stylers: [{hue: '#0277bd'}, {saturation: -50}]
              },
              {featureType: 'road.highway',
               elementType: 'labels.icon',
               stylers: [{hue: '#000'}, {saturation: 100}, {lightness: 50}]
              },
              {featureType: 'landscape',
               stylers: [{hue: '#259b24'}, {saturation: 10}, {lightness: -22}]
              }
        ]}}
      };

      var map = new google.visualization.Map(document.getElementById('map_div'));

      map.draw(data, options);
    }
  </script>
  
  </head>

<!--Body of website-->
  <body>
  <!-- Top container logo-->
  <div class="w3-bar w3-top w3-black w3-large" style="z-index:5">
    <span class="w3-bar-item w3-right">
      <img src="images/logo.jpg" width="80px" hieght="20px">
    </span>
  </div>

  <!-- main view -->
  <div class="mainFrame">
    <!-- for background video -->
    <video class="videoBack" autoplay muted loop>
      <source src="images/design3.mp4" type="video/mp4">
    </video>

<!-- text on page -->
    <div class="topLayer">
<!-- Sidebar/menu start -->
      <nav 
        class="w3-sidebar w3-collapse w3-animate-left" 
        style="z-index:3;width:15%; background-color: #aae1ffb5;" 
        id="mySidebar"
      >
        <div class="w3-col s4">
          <img src="images/avtar.jpg" class="w3-circle w3-margin-right" style="width:80%; margin: 10px;">
        </div>
        <br/>
        <span style ="font-size:large">Welcome,<br>
          <strong>
            <?php echo $_SESSION['username']; ?>
          </strong>
        </span>
        <hr>
        <div class="w3-container">
          <h5>Dashboard</h5>
        </div>
        
        <div class="w3-bar-block">
          <a href="#dash" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
          <a href="hi4.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-eye fa-fw"></i>  Overview</a>
          <a href="adopenings.php" class="w3-bar-item w3-button w3-padding" class="tablinks" onclick="openCity(event, 'dash')"><i class="fa fa-joomla fa-fw"></i>  Openings</a>
          <!-- <a href="stdet.php" class="w3-bar-item w3-button w3-padding" class="tablinks" onclick="openCity(event, 'open')"><i class="fa fa-trophy fa-fw"></i>  Student Details</a> -->
          <a href="update.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>  Update</a>
          <a href="logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Logout</a><br><br>
        </div>
      </nav>
<!-- sidebar/menue closed -->
<!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large w3-animate-opacity" 
      onclick="w3_close()" 
      style="cursor:pointer" 
      title="close side menu" 
      id="myOverlay">
  </div>

<!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:250px;margin-top:43px;">
      <header class="tabcontent" style="padding-top:22px" id="dash">
       <!--section one -->  
       <iframe src="files/t1.php" height="700px" width="1230px" title="Iframe Example"></iframe>

      </header>
    </div>
  </body>
</html>