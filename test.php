
<?php
session_start();
if(isset($_SESSION['username'])){
  header("Location: hi4.php");
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="files/style.css">
<script type="text/javascript" src="files/style.js"></script>
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
<body onload = typeText()>
    
    <div class="mainFrame">
        <video class="videoBack" autoplay muted loop>
              <source src="images/design.mp4" type="video/mp4">
        </video>
        <div class="topLayer">
            <p id="typed-content" class="str"></p>
          <button class="log button2" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
              Login
          </button>
          <div id="id01" class="modal">
          <?php
        require('db.php');
        // When form submitted, check and create user session.
        if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: hi4.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } 
    else {
    ?>
    <form class="" method="post" name="login">
    <div class="modal-content" style="width: 50%;">
      <div class="close" style=" margin-top: 70px; margin-right: 305px;">
        <span onclick="document.getElementById('id01').style.display='none'" title="Close Modal">&times;</span>
      </div>
        <h1 class="login-title" style="text-align:center; color:whitesmoke"><strong> Please Login !!!</strong></h1>
        <form action="/action_page.php" method="post">
            <div class="imgcontainer">
           
                <img src="images/avtar.jpg" alt="Avatar" width="20%">
          <br/>
          <br/>
          
              <label for="uname" style="color:aliceblue"><b>Username : </b></label>
              <input type="text" style="width:600px;" class="login-input" name="username" placeholder="Username" autofocus="true" required>
              <br/>
                <label for="psw" style="color:aliceblue"><b>Password : </b></label>
                    <input type="password" style="width:600px;" class="login-input" name="password" placeholder="Password"/>
              </div>
                    <button type="submit" style="background-color: indigo;" class="cen">Submit</button>
                    <br>
            <br>
           <br/>
      </div>
        </form>
        <?php
            }
        ?>
    </form>

    <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>