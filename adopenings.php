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
    <link rel="stylesheet" href="files/style.css">
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
          <a href="hi4.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Overview</a>
          <a href="adopenings.php" class="w3-bar-item w3-button w3-padding  w3-blue" class="tablinks" onclick="openCity(event, 'dash')"><i class="fa fa-joomla fa-fw"></i>  Openings</a>
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
    <div class="w3-main" style="margin-left:270px;margin-top:43px; margin-right:60px;">
      <header class="tabcontent" style="padding-top:22px" id="dash">
        <div class="row">
            <div class="col-md-12" style="width: 1280px;" >
              <div class="card">
                <form action="" method="GET">
                  <!-- <div class="input-group mb-3"> -->
                  <div class="col-md-5">
                    <input style="width: 450px;" type="text" style="width:510px;" class="login-input" name="username" placeholder="Username" autofocus="true" required>                                  
                  </div>
                  <div class="col-md-5">
                    <input type="text" style="width: 450px;" class="login-input" name="username" placeholder="Username" autofocus="true" required>      
                  </div>
                  <button style=" background-color:transparent; padding-top:5px;" type="submit"> 
                  <i class="fa fa-search" style="font-size:36px"></i>
                </button>  
                </form>
              </div>
            </div>
          </div>
            <!-- Brand List  -->
            <div class="col-md-3">
                <form action="" method="GET">
                    <div class="card shadow mt-3">
                        <div class="card-header">
                            <h5>Filter Options
                                <button type="submit" class="btn btn-primary btn-sm float-end">Search</button>
                            </h5>
                        </div>
                        <div class="card-body">
                            <h6>Filter</h6>
                            <hr>
                            <?php
                                $con = mysqli_connect("localhost","root","12345","placement");

                                $brand_query = "SELECT * FROM a_brands";
                                $brand_query_run  = mysqli_query($con, $brand_query);

                                if(mysqli_num_rows($brand_query_run) > 0)
                                {
                                    foreach($brand_query_run as $brandlist)
                                    {
                                        $checked = [];
                                        if(isset($_GET['brands']))
                                        {
                                            $checked = $_GET['brands'];
                                        }
                                        ?>
                                            <div>
                                                <input type="checkbox" name="brands[]" value="<?= $brandlist['id']; ?>" 
                                                    <?php if(in_array($brandlist['id'], $checked)){ echo "checked"; } ?>
                                                 />
                                                <?= $brandlist['name']; ?>
                                            </div>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "No Brands Found";
                                }
                            ?>
                        </div>
                    </div>
                </form>
            </div>



            
            <!-- Brand Items - Products -->
            <div class="col-md-9 mt-3">
                <div class="card ">
                    <div class="card-body row">
                    <table class="w3-table w3-striped w3-white">
                                                        <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Company Name</th>
                                                                <th>CGPA</th>
                                                                <th>Back Log</th>
                                                                <th>Package</th>
                                                                <th>SEX</Address></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                        <?php
                            if(isset($_GET['brands']))
                            {
                                $branchecked = [];
                                $branchecked = $_GET['brands'];
                                foreach($branchecked as $rowbrand)
                                {
                                    // echo $rowbrand;
                                    $products = "SELECT * FROM a_products WHERE brand_id IN ($rowbrand)";
                                    $products_run = mysqli_query($con, $products);
                                    if(mysqli_num_rows($products_run) > 0)
                                    {
                                        foreach($products_run as $proditems) :
                                            ?>
                                            
                                                                <th><?= $proditems['id']; ?></th>
                                                                <th><?= $proditems['name']; ?></th>
                                                                <th><?= $proditems['cgpa']; ?></th>
                                                                <th><?= $proditems['price']; ?></th>
                                                                <th><?= $proditems['package']; ?></th>
                                                                <th><?= $proditems['gender']; ?></th>
                                                                
                                                            </tr>
                                                        
                                                    </div>
        
                                                </div>
                                               
                                            <?php
                                        endforeach;
                                    }
                                }
                            }
                            else
                            {
                                $products = "SELECT * FROM a_products";
                                $products_run = mysqli_query($con, $products);
                                if(mysqli_num_rows($products_run) > 0)
                                {
                                    foreach($products_run as $proditems) :
                                        ?>
                                         
                                                                <th><?= $proditems['id']; ?></th>
                                                                <th><?= $proditems['name']; ?></th>
                                                                <th><?= $proditems['cgpa']; ?></th>
                                                                <th><?= $proditems['price']; ?></th>
                                                                <th><?= $proditems['package']; ?></th>
                                                                <th><?= $proditems['gender']; ?></th>
                                                                
                                                            </tr>
                                                        
                                                        
                                                    </div>
        
                                                </div>
                                       
                                        <?php
                                    endforeach;
                                }
                                else
                                {
                                    echo "No Items Found";
                                }
                            }
                        ?>
                        </tbody>
                        </table>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
</div>
</body>
</html>