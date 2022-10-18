<?php
  $page = "consultations";
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
            <h1>Consultations</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover" id="consultations_table">
                          <thead>                                 
                            <tr>
                                <th>#</th>
                                <th>Type</th>
                                <th>Datetime</th>
                                <th>Preferred Style</th>
                                <th>Design Range</th>
                                <th style="width:33%">Remark</th>
                                <th style="width:15%">Status</th>
                                <th>Customer</th>
                                <th style="width:13%">Product Leader</th>
                            </tr>
                          </thead>
                          <tbody>  
                            <tr>                              
                                <td><a href="consultation.php">29</a></td>
                                <td>Phone Call</td>
                                <td>24 Sep 2022, 10.00 am</td>
                                <td>Urban</th>
                                <td>Kitchen</td>
                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde illo, neque nobis aliquam sit soluta, tempore et, ipsum nulla debitis quod ex. Ab culpa et, a deserunt accusantium fugiat cupiditate.</td>
                                <td>
                                    <select class="form-control">
                                        <option value="1" selected>Pending</option>
                                        <option value="2">Done</option>
                                        <option value="3">Project Confirmed</option>
                                    </select>
                                </td>
                                <td>Ah Beng</td>
                                <td>
                                  <select class="form-control">
                                    <option value="" selected disabled>Select Staff</option>
                                    <option value="1">Christina Tong</option>
                                    <option value="2">John Doe</option>
                                    <option value="">James Foo</option>
                                    <option value="3">Mickey Mouse</option>
                                  </select>
                                </td>
                            </tr> 
                            <tr>                              
                                <td><a href="consultation.php">28</a></td>
                                <td>Virtual Meeting</td>
                                <td>23 Sep 2022, 10.00 am</td>
                                <td>Urban</th>
                                <td>Condo</td>
                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde illo, neque nobis aliquam sit soluta, tempore et, ipsum nulla debitis quod ex. Ab culpa et, a deserunt accusantium fugiat cupiditate.</td>
                                <td>
                                    <select class="form-control">
                                        <option value="1" >Pending</option>
                                        <option value="2">Done</option>
                                        <option value="3" selected>Project Confirmed</option>
                                    </select>
                                </td>
                                <td>Minnie Mouse</td>
                                <td>James Foo</td>
                            </tr> 
                            <tr>                              
                                <td><a href="consultation.php">27</a></td>
                                <td>In Store</td>
                                <td>22 Sep 2022, 10.00 am</td>
                                <td>Urban</th>
                                <td>Living Room</td>
                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde illo, neque nobis aliquam sit soluta, tempore et, ipsum nulla debitis quod ex. Ab culpa et, a deserunt accusantium fugiat cupiditate.</td>
                                <td>
                                    <select class="form-control">
                                        <option value="1" >Pending</option>
                                        <option value="2" selected>Done</option>
                                        <option value="3">Project Confirmed</option>
                                    </select>
                                </td>
                                <td>Mei Ling</td>
                                <td>John Doe</td>
                            </tr> 
                            <tr>                              
                                <td><a href="consultation.php">26</a></td>
                                <td>In Home</td>
                                <td>21 Sep 2022, 10.00 am</td>
                                <td>Urban</th>
                                <td>Office</td>
                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde illo, neque nobis aliquam sit soluta, tempore et, ipsum nulla debitis quod ex. Ab culpa et, a deserunt accusantium fugiat cupiditate.</td>
                                <td>
                                    <select class="form-control">
                                        <option value="1" >Pending</option>
                                        <option value="2">Done</option>
                                        <option value="3" selected>Project Confirmed</option>
                                    </select>
                                </td>
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