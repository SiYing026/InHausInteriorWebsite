<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['user_id'])){
    header("location: login.php");
  }
?>
<!-- Price box minimal--><!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title> Profile </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900%7CRoboto:300,300i,400,400i,500,500i,700,700i,900,900i">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    .ie-panel{display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);
      clear: both;
      text-align:center;
      position: relative;
      z-index: 1;
    } 
    html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}
    

/* CSS */
.button-74 {
  background-color: #fbeee0;
  border: 2px solid #422800;
  border-radius: 30px;
  box-shadow: #422800 4px 4px 0 0;
  color: #422800;
  cursor: pointer;
  display: inline-block;
  font-weight: 600;
  font-size: 18px;
  padding: 0 18px;
  line-height: 50px;
  text-align: center;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-74:hover {
  background-color: #fff;
}

.button-74:active {
  box-shadow: #422800 2px 2px 0 0;
  transform: translate(2px, 2px);
}

@media (min-width: 768px) {
  .button-74 {
    min-width: 120px;
    padding: 0 25px;
  }
}

    .wrapper{
      top: 20vh;
      left: 40%;
      text-align: center;
      position: absolute;
      max-width: 450px;
      width: 100%;
      border-radius: 16px;
      box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
                  0 32px 64px -48px rgba(0,0,0,0.5);
      min-height: 50vh;
      background: #f3ddc3;
      padding: 0 10px;
      
    }
    
    .probg{
      opacity: 0.5;
      z-index: -1;
      position: relative; 
      top: 0; 
      left: 18%;
      /* Preserve aspet ratio */
      min-width: 100%;
      min-height: 100%;
    }

    </style>

    <!--this is time picker de js-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.js"></script>
    <!--end of time picker de js-->
    
</head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div><a class="banner banner-top" href="https://www.templatemonster.com/website-templates/monstroid2.html" target="_blank"><img src="images/monstroid-2.jpg" alt="" height="0"></a>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-wide" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/logo.jpeg" alt="" width="232" height="67"/><img class="brand-logo-light" src="images/logo.jpeg" alt="" width="86" height="104"/></a>
                  </div>
                </div>
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item"><a class="rd-nav-link" href="index.html">Home</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.html">About</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="typography.html">Typography</a>
                    </li>
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="appointmentForm.php">Appointment</a>
                    </li>
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="users.php">Chat</a>
                    </li>
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="profile.php">Profile</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      
      <div class="probg" >
        <img src="images/profilebg.jpg" alt=""/>
  </div>
  
      <div class="wrapper">

      
      <?php
							$dbc = mysqli_connect("localhost","root","");
							mysqli_select_db($dbc, "in_haus");
							
							$query="SELECT * FROM user WHERE user_id='".$_SESSION['user_id']."' ";
							
							if($r = mysqli_query($dbc, $query ) ) {
								
									while ($row=mysqli_fetch_array($r)){
									
									echo"<tr height='50px'>";
										print "<td><h2>Name: {$row['name']}</h2></td>";
									print "</tr>";
									
									print"<tr height='50px'>";
										print"<td><p>email: {$row['email']}</p></td>";
									print"</tr>";

                  print"<tr height='50px'>";
										print"<td><p>Access Level: {$row['access_level']}</p></td>";
									print"</tr>";

                  print"<tr height='50px'>";
                 
										print"<td> <button class='button-74' role='button'><a href='php/logout.php?logout_id= {$row['user_id']}' class='logout'>Logout</a></button></td>";
									print"</tr>";
									
										}
									
									
								}else{
									print'<p style="color:red;">Could not retrieve the data because :<br/>' .mysqli_error($dbc).
									'.</p><p>the query being run was : '.$query.'</p>';
								}
							
								mysqli_close($dbc);
							
							?>
      
      </div>
      
      
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>


  </body>
</html>