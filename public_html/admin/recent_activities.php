<?php
  $page = "recent_activities";
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Activities &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
        <?php include("navbar.php"); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Recent Activities</h1>
          </div>
          <div class="section-body">
            <h2 class="section-title">September 2022</h2>
            <div class="row">
              <div class="col-12">
                <div class="activities">
                  <div class="activity">
                    <div class="activity-icon bg-primary text-white shadow-primary">
                        <i class="fas fa-comments"></i> 
                    </div>
                    <div class="activity-detail">
                      <div class="mb-2">
                        <span class="text-job text-primary">2 min ago</span>
                        <span class="bullet"></span>
                        <a class="text-job" href="#">View</a>
                      </div>
                      <p><span class="text-primary">Joey</span> made appointment for consultation <a href="">#8</a> on <span class="text-primary">29 Sep 2022, 2.30 pm</span>.</p>
                    </div>
                  </div>
                  <div class="activity">
                    <div class="activity-icon bg-primary text-white shadow-primary">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <div class="activity-detail">
                      <div class="mb-2">
                        <span class="text-job text-primary">1 hour ago</span>
                        <span class="bullet"></span>
                        <a class="text-job" href="#">View</a>
                      </div>
                      <p>A new project <a href="">#12</a> has been confirmed by <span class="text-primary">Si Ying</span>.</p>
                    </div>
                  </div>
                  <div class="activity">
                    <div class="activity-icon bg-primary text-white shadow-primary">
                        <i class="fas fa-file-signature"></i>
                    </div>
                    <div class="activity-detail">
                      <div class="mb-2">
                        <span class="text-job text-primary">4 hour ago</span>
                        <a class="text-job" href="#">View</a>
                      </div>
                      <p><span class="text-primary">Kah Siang</span> has uploaded a contract for project <a href="">#31</a>.</p>
                    </div>
                  </div>
                  <div class="activity">
                    <div class="activity-icon bg-primary text-white shadow-primary">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="activity-detail">
                      <div class="mb-2">
                        <span class="text-job text-primary">12 hour ago</span>
                        <span class="bullet"></span>
                        <a class="text-job" href="#">View</a>
                      </div>
                      <p><span class="text-primary">Xin Ye</span> has made 3rd payment for project <a href="">#34</a>.</p>
                    </div>
                  </div>
                  <div class="activity">
                    <div class="activity-icon bg-primary text-white shadow-primary">
                        <i class="fas fa-comment-dots"></i>
                    </div>
                    <div class="activity-detail">
                      <div class="mb-2">
                        <span class="text-job text-primary">Yesterday</span>
                        <span class="bullet"></span>
                        <a class="text-job" href="#">View</a>
                      </div>
                      <p><span class="text-primary">Yoona</span> has gave a feedback for project <a href="">#15</a>.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>