<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
  ?>
<!-- Price box minimal--><!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Appointment Form</title>
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
    </div> <a class="banner banner-top" href="https://www.templatemonster.com/website-templates/monstroid2.html" target="_blank"><img src="images/monstroid-2.jpg" alt="" height="0"></a>
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
                  <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/logo.jpeg" alt="" width="232" height="67"/><img class="brand-logo-light" src="images/logo-inverse-86x104.png" alt="" width="86" height="104"/></a>
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
      


      <!-- Get in touch with us-->
      <section class="section section-md bg-default">
        <div class="container">
          <h4>Appointment Detail</h4>
          <p class="big">Please fill in all of the information below:</p>
          <!-- RD Mailform-->
          <form class="rd-form rd-mailform form-boxed" data-form-output="form-output-global" data-form-type="contact" method="post" action="savForm.php">
           
            <div class="row row-50">
                
                <p>Please click on the course to select the first course you like</p>
                <br>
                <div class="col-lg-12">
                  <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="course1" name="preferred_style[]" value="course1" />
                  <label class="form-check-label" for="course1">Course 1</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="course2" name="preferred_style[]" value="course2" />
                  <label class="form-check-label" for="course2">Course 2</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="course3" name="preferred_style[]" value="course3"/>
                  <label class="form-check-label" for="course3">Course 3</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="course4" name="preferred_style[]" value="course4"/>
                  <label class="form-check-label" for="course4">Course 4</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="course5" name="preferred_style[]" value="course5"/>
                  <label class="form-check-label" for="course5">Course 5</label>
                </div>
                </div>

                <div class="col-lg-10">
                <div class="form-wrap form-wrap-icon">
                  <p>Consultation type</p>
                  <label class="form-label" for="consulType">Consultation type</label>
                  <select name="consulType" id="consulType" >
                    <option value="online">Online</option>
                    <option value="otherPlace">Other Place</option>
                    <option value="office">Office</option>
                  </select>
                </div>
                </div>
                
              <div class="col-12">
              <p>Appointment Date</p>
              <input class="form-input" id="date" type="date" name="date" >
              <label class="form-label" for="date"></label>
              </div>

              <div class="col-12">
              <p>Appointment time</p>
              <input class="form-input" id="time" type="time" name="time">
              <label class="form-label" for="time"></label>
              </div>

              <div class="col-12">
                <div class="form-wrap form-wrap-icon"></div>
                <input class="form-input" id="area" type="text" name="area" data-constraints="@Required">
                <label class="form-label" for="area">Design Area Eg: bathroom, bedroom, livingroom</label>
                </div>
              </div>

              <div class="col-12">
                <div class="form-wrap form-wrap-icon">
                  <label class="form-label" for="comment">Additional Comment</label>
                  <textarea class="form-input" id="comment" name="comment" data-constraints="@Required"></textarea>
                </div>
              </div>
                

              <div class="col-2 ">
              <div class="form-wrap form-wrap-icon">
              <div style="margin-top:25px;">
                <button class="button button-default" type="submit">Send</button>
              </div>
              </div>
              </div>
            </div>

           
          </form>
        </div>
      </section>


      
      
    </div>
    <div class="snackbars" id="form-output-global"></div>
     <script src="js/core.min.js"></script>
    <script src="js/script2.js"></script> 

    

    <!--<script>
       $window.on('load', function () {
        // Page loader & Page transition
        if (plugins.preloader.length && !isNoviBuilder) {
          pageTransition({
            target: document.querySelector( '.page1' ),
            delay: 0,
            duration: 500,
            classIn: 'fadeIn',
            classOut: 'fadeOut',
            classActive: 'animated',
            conditions: function (event, link) {
              return !/(\#|callto:|tel:|mailto:|:\/\/)/.test(link) && !event.currentTarget.hasAttribute('data-lightgallery');
            },
            onTransitionStart: function ( options ) {
              setTimeout( function () {
                plugins.preloader.removeClass('loaded');
              }, options.duration * .75 );
            },
            onReady: function () {
              plugins.preloader.addClass('loaded');
              windowReady = true;
            }
          });
        }

        // jQuery Count To
        if ( plugins.counter.length ) {
          for ( var i = 0; i < plugins.counter.length; i++ ) {
            var
              counter = $(plugins.counter[i]),
              initCount = function () {
                var counter = $(this);
                if ( !counter.hasClass( "animated-first" ) && isScrolledIntoView( counter ) ) {
                  counter.countTo({
                    refreshInterval: 40,
                    speed: counter.attr("data-speed") || 1000,
                    from: 0,
                    to: parseInt( counter.text(), 10 )
                  });
                  counter.addClass('animated-first');
                }
              };

            $.proxy( initCount, counter )();
            $window.on( "scroll", $.proxy( initCount, counter ) );
          }
        }

      });

    </script>-->

  </body>
</html>