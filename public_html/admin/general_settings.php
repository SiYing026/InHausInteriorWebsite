<?php
  $page = "general_settings";
  session_start();

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Settings &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/modules/codemirror/lib/codemirror.css">
  <link rel="stylesheet" href="assets/modules/codemirror/theme/duotone-dark.css">

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
            <div class="section-header-back">
              <!-- <a href="features-settings.php" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a> -->
            </div>
            <h1>General Settings</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a></div>
              <div class="breadcrumb-item active"><a href="general_settings.php">Settings</a></div>
              <div class="breadcrumb-item">General Settings</div>
            </div>
          </div>

          <div class="section-body">

            <div id="output-status"></div>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <!-- <div class="card">
                  <div class="card-header">
                    <button type="submit" class="btn btn-icon icon-left btn-primary mr-2"><i class="fas fa-check"></i> Save Changes</button> 
                    <input type="hidden" name="updated" value="true">
                  </div>
                </div> -->
                  <div class="card">
                      <div class="card-header">
                        <h4>Contact</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>E-mail</label>
                          <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label>Contact No</label>
                          <input type="text" name="contact_no" class="form-control" required>
                        </div>
                        <div class="form-group mb-0">
                          <label>Address</label>
                          <textarea class="form-control" required></textarea>
                        </div>
                      </div>
                  </div>
              </div>
			  <div class="col-12 col-md-6 col-lg-6">
					<div class="card">
						<div class="card-header">
							<h4>Payment</h4>
						</div>
						<div class="card-body">
							<div class="form-group row align-items-end">
								<label>1st Payment</label>
								<div class="col-sm-6 col-md-3 input-group">
                                    <input type="number" name="first_payment" class="form-control" value="30">
                                    <span class="input-group-addon d-flex align-items-end pl-2">%</span>
                                </div>
							</div>
							<div class="form-group row align-items-end">
								<label>2nd Payment</label>
								<div class="col-sm-6 col-md-3 input-group">
                                    <input type="number" name="second_payment" class="form-control" value="50">
                                    <span class="input-group-addon d-flex align-items-end pl-2">%</span>
                                </div>
							</div>
							<div class="form-group row align-items-end">
								<label>3rd Payment</label>
								<div class="col-sm-6 col-md-3 input-group">
                                    <input type="number" name="third_payment" class="form-control" value="20">
                                    <span class="input-group-addon d-flex align-items-end pl-2">%</span>
                                </div>
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
  <script src="assets/modules/codemirror/lib/codemirror.js"></script>
  <script src="assets/modules/codemirror/mode/javascript/javascript.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/js/page/features-setting-detail.js"></script>
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>