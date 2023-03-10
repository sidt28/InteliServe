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
          <a href="#dash" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>?? Close Menu</a>
          <a href="hi4.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-eye fa-fw"></i>?? Overview</a>
          <a href="adopenings.php" class="w3-bar-item w3-button w3-padding" class="tablinks" onclick="openCity(event, 'dash')"><i class="fa fa-joomla fa-fw"></i>?? Filter</a>
          <!-- <a href="stdet.php" class="w3-bar-item w3-button w3-padding" class="tablinks" onclick="openCity(event, 'open')"><i class="fa fa-trophy fa-fw"></i>?? Student Details</a> -->
          <a href="update.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>?? Update</a>
          <a href="logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>?? Logout</a><br><br>
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
<div class="w3-main" style="margin-left:230px;margin-top:43px; margin-right:60px;">
      <header class="tabcontent" style="padding-top:22px" id="dash">
       <!--section one -->  
        <h5>
          <b>
            <i  class="fa fa-dashboard" style=" color: #edebeb;"></i>
            <span style=" color: #edebeb;"> Statistics</span>
          </b>
        </h5>
        <!-- graph1 -->
        <div style="max-width:1160px;">
          <div class="w3-container w3-padding-10" style="color:white; background-color: #080241b4;">
            <div class="dropdown">
              <div class="dropbtn">
                Dropdown <i  class="	fa fa-angle-double-down" style=" color: #edebeb;"></i>
              </div>
              <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
              </div>
            </div>
            
            <canvas id="myChart" style="width:100%; height:10px; margin-top: 15px;" class="w3-padding-10"></canvas>
            <script>
              var xValues = [2001,2002,2003,2004,2005,2006,2007,2008,2009,2010];
              var yValues = [723,731,753,753,779,756,749,764,748,746];

              new Chart("myChart", 
              {
                type: "line",
                data: 
                {
                  labels: xValues,
                  datasets: 
                  [{
                      fill: false,
                      lineTension: 0,
                      backgroundColor: "rgba(0,0,0)",
                      borderColor: "rgba(0,0,255,1)",
                      data: yValues,
                  }]
                },
                options: 
                {
                  legend: {display: false},
                  scales: 
                  {
                    yAxes: 
                    [{
                      
                      ticks: 
                      {
                        fontColor: "white",
                        fontSize: 18,
                      }
                    }],
                    xAxes: 
                    [{
                      ticks: 
                      {
                        fontColor: "white",
                        fontSize: 14,
                      }
                    }]
                  }
                }
              });
            </script>
          </div>
        </div>
        <br/>
        <!--Section two -->
        <!-- graph 2 -->
        <div class="row">
        <div class="col-sm-4">
        <div class="card" style="background-color: #b11265d8;">   
          <div class="container">
          <h5 style="color:#edebeb"><i class='fas fa-map-marker-alt' style='font-size:24px; color:#edebeb;'>Distinct Crime </i></h5>
          <div id="piechart" style="margin-left: -130px ;"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            // Load google charts
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            // Draw the chart and set the chart values
            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Crime', 'Number of records'],
              ['Rape', 2810],
              ['Murder', 1018],
              ['Theft', 1865],
              ['Kidnap', 3569]
            ]);

              // Optional; add a title and set the width and height of the chart
              var options = {backgroundColor: 'transparent', 'width':600, 'height':255, is3D: true,
                legend : { position : 'right' }
              };

              // Display the chart inside the <div> element with id="piechart"
              var chart = new google.visualization.PieChart(document.getElementById('piechart'));
              chart.draw(data, options);
            }
            </script>
          </div>
        </div>
        </div>
        <!-- map -->
        <div class="col-sm-4">
        <div class="card" style="background-color: #790fc0d8; width:350px;">  

          <div class="container">
          <h5 style="color:#edebeb"><i class='fas fa-map-marker-alt' style='font-size:24px; color:#edebeb;'>Accessed Location</i></h5>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.8590711634333!2d77.33079511455752!3d28.54395539483632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce44e80a9461b%3A0x302ec8d3d5cb8d1a!2sAmity%20University%20Noida!5e0!3m2!1sen!2sin!4v1632862440169!5m2!1sen!2sin" width="320" height="247" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
        </div>
          <!-- box three -->
        <div class="col-sm-3">
        <div class="card" style="width:400px;background-color: #fc0000a1;">   
          <div class="container">
          <h5 style="color:#edebeb"><i class='fas fa-map-marker-alt' style='font-size:24px; color:#edebeb;'>Distinct Crimes vs Year</i></h5>
            <div id="barchart_material" style="width: 380px; height: 250px;"></div>
          </div>
          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
          <script type="text/javascript">
            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['Year', 'Rape', 'Kidnap', 'Theft + Murder'],
                ['2001-2003', 953, 1018, 1154,],
                ['2004-2007', 900, 1478, 935],
                ['2008-2011', 957, 1073, 794]
              ]);

              var options = {
                chart: {
                  
                },
                bars: 'vertical',
                backgroundColor: 'transparent',
                scales: 
                  {
                    yAxes: 
                    [{
                      ticks: 
                      {
                        fontColor: "white",
                        fontSize: 18,
                      }
                    }],
                    xAxes: 
                    [{
                      ticks: 
                      {
                        fontColor: "white",
                        fontSize: 14,
                      }
                    }]
                  } // Required for Material Bar Charts.
              };

              var chart = new google.charts.Bar(document.getElementById('barchart_material'));

              chart.draw(data, google.charts.Bar.convertOptions(options));
            }
          </script>
        </div>
        </div>
        </br> 
      </header>
    </div>
  </body>
</html>