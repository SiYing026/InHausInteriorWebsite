<?php
  $page = "projects";
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Bootstrap Components &rsaquo; Form &mdash; Stisla</title>

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
            <h1>Project</h1>
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-icon icon-left btn-primary mr-2"><i class="fas fa-check"></i> Save Changes</button> 
                        <a href="projects.php" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Close</a>
                    </div>
                    <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Project ID</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="23" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Created Datetime</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="25-09-2022 01:12:33" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Last Modified</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="25-09-2022 01:12:33" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Project Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="Twilight House">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Project Status</label>
                        <div class="col-sm-9">
                            <select class="form-control">
                                <option value="">Contract Approved</option>
                                <option value="">Waiting for Customer to Sign Contract</option>
                                <option value="">Contract Signed</option>
                                <option value="" selected>In Progress - Designing</option>
                                <option value="">Waiting for Admin Approval (Design)</option>
                                <option value="">Design Approved</option>
                                <option value="">Release design to customer</option>
                                <option value="">Waiting for customer review</option>
                                <option value="">Design revision</option>
                                <option value="">In Progress - Building</option>
                                <option value="">Completed</option>
                                <option value="">Cancelled</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Contract</label>
                        <!-- <a href="assets/img/avatar/avatar-1.png" target="_blank">avatar-1.png</a> -->
                        <div class="col-sm-8 ml-3 custom-file">
                          <input type="file" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Remark</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="" cols="30" rows="10"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Details</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="" cols="30" rows="10"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Customer Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="Mickey Mouse">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Customer E-mail</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" value="mickeymouse@gmail.com">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Customer Contact</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" value="0161234567">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Project Fee</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" value="87600.00">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Payment Status</label>
                        <div class="col-sm-9">
                            <select class="form-control">
                              <option>Waiting for 1st payment (20%)</option>
                              <option selected>1st Payment Done</option>
                              <option>Waiting for 2nd payment (50%)</option>
                              <option>2nd Payment Done</option>
                              <option>Waiting for 3rd payment (30%)</option>
                              <option>3rd Payment Done</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">1st Payment Datetime</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="25-09-2022 01:12:33" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">2nd Payment Datetime</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">3rd Payment Datetime</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Product Manager</label>
                        <div class="col-sm-9">
                            <select class="form-control">
                              <option>John Doe</option>
                              <option>Christina Tong</option>
                              <option>James Foo</option>
                              <option>Mickey Mouse</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Consultation ID</label>
                        <div class="col-sm-9">
                          <a href="consultation.php">15</a>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </section>
      </div>
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