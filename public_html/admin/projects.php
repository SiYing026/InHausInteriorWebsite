<?php
  $page = "projects";
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Consultations &mdash; In Haus</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/modules/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">

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
            <h1>Projects</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover" id="projects_table">
                          <thead>                                 
                            <tr>
                                <th>#</th>
                                <th>Project Name</th>
                                <th>Fee (RM)</th>
                                <th style="width:23%">Remark</th>
                                <th>Contract</th>
                                <th style="width:17%">Project Status</th>
                                <th style="width:17%">Payment Status</th>
                                <th>Consultation ID</th>
                                <th>Customer</th>
                                <th>Product Manager</th>
                            </tr>
                          </thead>
                          <tbody>  
                            <tr>                              
                                <td><a href="project.php">26</a></td>
                                <td>Twilight House</td>
                                <td>88,000</td>
                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde illo, neque nobis aliquam sit soluta, tempore et, ipsum nulla debitis quod ex.</td>
                                <td><a href="assets/img/avatar/avatar-1.png" target="_blank">avatar-1.png</a></td>
                                <td>Waiting for Admin Approval (Contract)</td>
                                <td>
                                  <select class="form-control">
                                    <option selected>Waiting for 1st payment (20%)</option>
                                    <option>1st Payment Done</option>
                                    <option>Waiting for 2nd payment (50%)</option>
                                    <option>2nd Payment Done</option>
                                    <option>Waiting for 3rd payment (30%)</option>
                                    <option>3rd Payment Done</option>
                                  </select>
                                </td>
                                <td><a href="consultation.php">13</a></td>
                                <td>Ah Beng</td>
                                <td>Christina Tong</td>
                            </tr> 
                            <tr>                              
                                <td><a href="project.php">27</a></td>
                                <td>Astute Residence</td>
                                <td>213,500</td>
                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde illo, neque nobis aliquam sit soluta, tempore et, ipsum nulla debitis quod ex. </td>
                                <td><a href="assets/img/avatar/avatar-1.png" target="_blank">avatar-1.png</a></td>
                                <td>
                                  <select class="form-control">
                                    <option value="" selected>Contract Approved</option>
                                    <option value="">Waiting for Customer to Sign Contract</option>
                                    <option value="">Contract Signed</option>
                                    <option value="">In Progress - Designing</option>
                                    <option value="">Waiting for Admin Approval (Design)</option>
                                    <option value="">Design Approved</option>
                                    <option value="">Release design to customer</option>
                                    <option value="">Waiting for customer review</option>
                                    <option value="">Design revision</option>
                                    <option value="">In Progress - Building</option>
                                    <option value="">Completed</option>
                                    <option value="">Cancelled</option>
                                  </select>
                                </td>
                                <td>
                                  <select class="form-control">
                                    <option selected>Waiting for 1st payment (20%)</option>
                                    <option>1st Payment Done</option>
                                    <option>Waiting for 2nd payment (50%)</option>
                                    <option>2nd Payment Done</option>
                                    <option>Waiting for 3rd payment (30%)</option>
                                    <option>3rd Payment Done</option>
                                  </select>
                                </td>
                                <td><a href="consultation.php">14</a></td>
                                <td>Minnie Mouse</td>
                                <td>James Foo</td>
                            </tr> 
                            <tr>                              
                                <td><a href="project.php">28</a></td>
                                <td>House of Small Wonders</td>
                                <td>130,000</td>
                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde illo, neque nobis aliquam sit soluta, tempore et, ipsum nulla debitis quod ex. </td>
                                <td><a href="assets/img/avatar/avatar-1.png" target="_blank">avatar-1.png</a></td>
                                <td>
                                  <select class="form-control">
                                    <option value="">Contract Approved</option>
                                    <option value="" selected>Waiting for Customer to Sign Contract</option>
                                    <option value="">Contract Signed</option>
                                    <option value="">In Progress - Designing</option>
                                    <option value="">Waiting for Admin Approval (Design)</option>
                                    <option value="">Design Approved</option>
                                    <option value="">Release design to customer</option>
                                    <option value="">Waiting for customer review</option>
                                    <option value="">Design revision</option>
                                    <option value="">In Progress - Building</option>
                                    <option value="">Completed</option>
                                    <option value="">Cancelled</option>
                                  </select>
                                </td>
                                <td>
                                  <select class="form-control">
                                    <option selected>Waiting for 1st payment (20%)</option>
                                    <option>1st Payment Done</option>
                                    <option>Waiting for 2nd payment (50%)</option>
                                    <option>2nd Payment Done</option>
                                    <option>Waiting for 3rd payment (30%)</option>
                                    <option>3rd Payment Done</option>
                                  </select>
                                </td>
                                <td><a href="consultation.php">15</a></td>
                                <td>Mei Ling</td>
                                <td>John Doe</td>
                            </tr> 
                            <tr>                              
                                <td><a href="project.php">29</a></td>
                                <td>Bondi Beach Apartment</td>
                                <td>54,000</td>
                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde illo, neque nobis aliquam sit soluta, tempore et, ipsum nulla debitis quod ex. </td>
                                <td><a href="assets/img/avatar/avatar-1.png" target="_blank">avatar-1.png</a></td>
                                <td>
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
                                </td>
                                <td>
                                  <select class="form-control">
                                    <option>Waiting for 1st payment (20%)</option>
                                    <option selected>1st Payment Done</option>
                                    <option>Waiting for 2nd payment (50%)</option>
                                    <option>2nd Payment Done</option>
                                    <option>Waiting for 3rd payment (30%)</option>
                                    <option>3rd Payment Done</option>
                                  </select>
                                </td>
                                <td><a href="consultation.php">16</a></td>
                                <td>Jessica Leong</td>
                                <td>Mickey Mouse</td>
                            </tr> 
                          </tbody>
                        </table>
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
  <script src="assets/modules/datatables/datatables.min.js"></script>
  <script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="assets/modules/jquery-ui/jquery-ui.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/js/page/components-table.js"></script>
  <script src="assets/js/page/modules-datatables.js"></script>
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>