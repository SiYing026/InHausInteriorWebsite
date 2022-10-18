<?php
  $page = "feedbacks";
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
            <h1>Feedbacks</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover" id="staffs_table">
                          <thead>                                 
                            <tr>
                                <th>#</th>
                                <th>Datetime</th>
                                <th width="70%">Comment</th>
                                <th>Project ID</th>
                            </tr>
                          </thead>
                          <tbody>  
                            <tr>                              
                                <td><a href="feedback.php">1</a></td>
                                <td>29 Sep 2022, 3.19 pm</td>
                                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias, placeat? Quibusdam impedit non inventore! Et ducimus officia sed aliquam necessitatibus debitis odio vitae maiores ipsa omnis laudantium, accusamus, architecto nobis!</td>
                                <td><a href="project.php">6</a></td>
                            </tr> 
                            <tr>                              
                              <td><a href="feedback.php">2</a></td>
                                <td>1 Oct 2022, 9.42 pm</td>
                                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias, placeat? Quibusdam impedit non inventore! Et ducimus officia sed aliquam necessitatibus debitis odio vitae maiores ipsa omnis laudantium, accusamus, architecto nobis!</td>
                                <td><a href="project.php">8</a></td>
                            </tr> 
                            <tr>                              
                              <td><a href="feedback.php">3</a></td>
                                <td>1 Oct 2022, 11.25 pm</td>
                                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias, placeat? Quibusdam impedit non inventore! Et ducimus officia sed aliquam necessitatibus debitis odio vitae maiores ipsa omnis laudantium, accusamus, architecto nobis!</td>
                                <td><a href="project.php">10</a></td>
                            </tr> 
                            <tr>                              
                              <td><a href="feedback.php">4</a></td>
                                <td>2 Oct 2022, 2.31 pm</td>
                                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias, placeat? Quibusdam impedit non inventore! Et ducimus officia sed aliquam necessitatibus debitis odio vitae maiores ipsa omnis laudantium, accusamus, architecto nobis!</td>
                                <td><a href="project.php">5</a></td>
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