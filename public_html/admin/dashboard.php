<?php
  $page = "dashboard";
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dashboard &mdash; In Haus</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="assets/modules/weather-icon/css/weather-icons.min.css">
  <link rel="stylesheet" href="assets/modules/weather-icon/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">
   <link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

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
      <?php include("navbar.php") ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title">
                  </div>
                  <div class="card-stats-items d-flex justify-content-center">
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">24</div>
                      <div class="card-stats-item-label">Pending</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">23</div>
                      <div class="card-stats-item-label">Completed</div>
                    </div>
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-paint-roller"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Projects</h4>
                  </div>
                  <div class="card-body">
                    47
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
					<div class="card-stats-title">
					</div>
					<div class="card-stats-items d-flex justify-content-center">
					  <div class="card-stats-item">
						<div class="card-stats-item-count">
							<span class="text-success">
								<i class="fas fa-caret-up" style="font-size: 20px; padding-right: 5px;"></i>
							</span> 32%
						</div>
						<div class="card-stats-item-label">This Month</div>
					  </div>
					  <div class="card-stats-item">
						<div class="card-stats-item-count">
							<span class="text-danger">
								<i class="fas fa-caret-down" style="font-size: 20px; padding-right: 5px;"></i>
							</span> 17%
						</div>
						<div class="card-stats-item-label">This Year</div>
					  </div>
					</div>
				  </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Sales</h4>
                  </div>
                  <div class="card-body">
                    RM 81726.23
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
					<div class="card-stats-title">
					</div>
					<div class="card-stats-items d-flex justify-content-center">
					  <div class="card-stats-item">
						<div class="card-stats-item-count">16</div>
						<div class="card-stats-item-label">Pending</div>
					  </div>
					  <div class="card-stats-item">
						<div class="card-stats-item-count">25</div>
						<div class="card-stats-item-label">Completed</div>
					  </div>
					</div>
				  </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-comments-dollar"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Consultation</h4>
                  </div>
                  <div class="card-body">
                    41
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8">
				<div class="card">
				  <div class="card-header">
					<h4>Total Sales (2022)</h4>
					<div class="card-header-action dropdown">
						<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Year</a>
						<ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right shadow">
						  <li class="dropdown-title">Select Year</li>
						  <li><a href="#" class="dropdown-item">2019</a></li>
						  <li><a href="#" class="dropdown-item">2020</a></li>
						  <li><a href="#" class="dropdown-item active">2021</a></li>
						  <li><a href="#" class="dropdown-item">2022</a></li>
						</ul>
					</div>
				  </div>
				  <div class="card-body">
					<canvas id="myChart" height="158"></canvas>
				  </div>
				</div>
			  </div>
            <div class="col-lg-4 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4>Recent Activities</h4>
                </div>
                <div class="card-body">             
                  <ul class="list-unstyled list-unstyled-border">
                    <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-1.png" alt="avatar">
                      <div class="media-body">
                        <div class="float-right text-primary">Now</div>
                        <div class="media-title">Farhan A Mujib</div>
                        <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                      </div>
                    </li>
                    <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-2.png" alt="avatar">
                      <div class="media-body">
                        <div class="float-right">12m</div>
                        <div class="media-title">Ujang Maman</div>
                        <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                      </div>
                    </li>
                    <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-3.png" alt="avatar">
                      <div class="media-body">
                        <div class="float-right">17m</div>
                        <div class="media-title">Rizal Fakhri</div>
                        <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                      </div>
                    </li>
                    <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-4.png" alt="avatar">
                      <div class="media-body">
                        <div class="float-right">21m</div>
                        <div class="media-title">Alfa Zulkarnain</div>
                        <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                      </div>
                    </li>
                  </ul>
                  <div class="text-center pt-1 pb-1">
                    <a href="#" class="btn btn-primary btn-lg btn-round">
                      View All
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-12 col-12 col-sm-12">
				<div class="card">
					<div class="card-header">
					  <h4 class="d-inline">Latest Projects</h4>
					  <div class="card-header-action">
						<a href="#" class="btn btn-primary">View All</a>
					  </div>
					</div>
					<div class="card-body">             
					  <ul class="list-unstyled list-unstyled-border">
						<li class="media">
						  <img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-4.png" alt="avatar">
						  <div class="media-body">
							<div class="badge badge-pill badge-danger mb-1 float-right">In Progress - Building</div>
							<h6 class="media-title"><a href="#">Redesign header</a></h6>
							<div class="text-small text-muted">John Doe
						  </div>
						</li>
						<li class="media">
						  <img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-5.png" alt="avatar">
						  <div class="media-body">
							<div class="badge badge-pill badge-success mb-1 float-right">Completed</div>
							<h6 class="media-title"><a href="#">Add a new component</a></h6>
							<div class="text-small text-muted">Christina Tong 
						  </div>
						</li>
						<li class="media">
						  <img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-2.png" alt="avatar">
						  <div class="media-body">
							<div class="badge badge-pill badge-warning mb-1 float-right">Waiting for Customer Review</div>
							<h6 class="media-title"><a href="#">Fix modal window</a></h6>
							<div class="text-small text-muted">James Foo
						  </div>
						</li>
						<li class="media">
						  <img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-1.png" alt="avatar">
						  <div class="media-body">
							<div class="badge badge-pill badge-danger mb-1 float-right">Cancelled</div>
							<h6 class="media-title"><a href="#">Remove unwanted classes</a></h6>
							<div class="text-small text-muted">Mickey Mouse
						  </div>
						</li>
					  </ul>
					</div>
				  </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12 col-sm-12">
				<div class="card">
					<div class="card-header">
					  <h4>Latest Consultations</h4>
					  <div class="card-header-action">
						<a href="#" class="btn btn-primary">View All</a>
					  </div>
					</div>
					<div class="card-body p-0">
					  <div class="table-responsive">
						<table class="table table-striped mb-0">
						  <thead>
							<tr>
								<th>#</th>
								<th>Datetime</th>
								<th>Staff</th>
							</tr>
						  </thead>
						  <tbody>                         
							<tr>
								<td><a href="#">27</a></td>
								<td>22 Sep 2022, 10.00 am</td>
								<td>
									<a href="#" class="font-weight-600"><img src="assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> John Doe</a>
								</td>
							</tr>
							<tr>
								<td><a href="#">26</a></td>
								<td>23 Sep 2022, 11.30 am</td>
								<td>
									<div class="card-header-action dropdown">
										<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Assign Staff</a>
										<ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
										<li class="dropdown-title">Select Staff</li>
										<li><a href="#" class="dropdown-item">John Doe</a></li>
										<li><a href="#" class="dropdown-item">Christina Tong</a></li>
										<li><a href="#" class="dropdown-item active">James Foo</a></li>
										<li><a href="#" class="dropdown-item">Mickey Mouse</a></li>
										</ul>
									</div>
							  </td>
							</tr>
							<tr>
								<td><a href="#">25</a></td>
								<td>19 Sep 2022, 02.40 pm</td>
								<td>
									<a href="#" class="font-weight-600"><img src="assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Christina Tong</a>
								</td>
							</tr>
							<tr>
								<td><a href="#">24</a></td>
								<td>28 Sep 2022, 12:50 pm</td>
								<td>
									<a href="#" class="font-weight-600"><img src="assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Mickey Mouse</a>
								</td>
							</tr>
							<tr>
								<td><a href="#">23</a></td>
								<td>24 Sep 2022, 08.30 am</td>
							  	<td>
									<a href="#" class="font-weight-600"><img src="assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> James Foo</a>
							  	</td>
							</tr>
						  </tbody>
						</table>
					  </div>
					</div>
				  </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header pb-5">
                  <h4>Most Viewed</h4>
                </div>
                <div class="card-body">
                  <div class="row pb-5">
                    <div class="col text-center">
                      <div><img class="" src="assets/img/example-image-50.jpg" width="150px"></div>
                      <div class="mt-2 font-weight-bold">Urban Design</div>
                      <div class="text-muted text-small">1,723 views</div>
                    </div>
                    <div class="col text-center">
                      <div><img class="" src="assets/img/example-image-50.jpg" width="150px"></div>
                      <div class="mt-2 font-weight-bold">Urban Design</div>
                      <div class="text-muted text-small">1,302 views</div>
                    </div>
                    <div class="col text-center">
                      <div><img class="" src="assets/img/example-image-50.jpg" width="150px"></div>
                      <div class="mt-2 font-weight-bold">Urban Design</div>
                      <div class="text-muted text-small">1,192 views</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-hero">
                <div class="card-header">
                  <div class="card-icon">
                    <i class="far fa-question-circle"></i>
                  </div>
                  <h4>14</h4>
                  <div class="card-description">Customers need help</div>
                </div>
                <div class="card-body p-0">
                  <div class="tickets-list">
                    <a href="#" class="ticket-item">
                      <div class="ticket-title">
                        <h4>My order hasn't arrived yet</h4>
                      </div>
                      <div class="ticket-info">
                        <div>Laila Tazkiah</div>
                        <div class="bullet"></div>
                        <div class="text-primary">1 min ago</div>
                      </div>
                    </a>
                    <a href="#" class="ticket-item">
                      <div class="ticket-title">
                        <h4>Please cancel my order</h4>
                      </div>
                      <div class="ticket-info">
                        <div>Rizal Fakhri</div>
                        <div class="bullet"></div>
                        <div>2 hours ago</div>
                      </div>
                    </a>
                    <a href="#" class="ticket-item">
                      <div class="ticket-title">
                        <h4>Do you see my mother?</h4>
                      </div>
                      <div class="ticket-info">
                        <div>Syahdan Ubaidillah</div>
                        <div class="bullet"></div>
                        <div>6 hours ago</div>
                      </div>
                    </a>
                    <a href="features-tickets.php" class="ticket-item ticket-more">
                      View All <i class="fas fa-chevron-right"></i>
                    </a>
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
  <script src="assets/modules/simple-weather/jquery.simpleWeather.min.js"></script>
  <script src="assets/modules/chart.min.js"></script>
  <script src="assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="assets/modules/summernote/summernote-bs4.js"></script>
  <script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/js/page/index-0.js"></script>
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>