<?php

	$dbc = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($dbc, 'in_haus');

	$query = 'SELECT * FROM portfolio';

	if (!$r = mysqli_query($dbc, $query)) {
		echo '<p style="color:red;">Could not retrieve the data because: <br/>' . mysqli_error($dbc) . '</p><p>The query being run was: ' . $query . '</p>';
	}

	mysqli_close($dbc);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Consultations &mdash; In Haus</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/modules/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/modules/chocolat/dist/css/chocolat.css">
	<link rel="stylesheet" href="assets/modules/glightbox/css/glightbox.min.css">
  <link rel="stylesheet" href="assets/modules/aos/aos.css">
  <link rel="stylesheet" href="assets/modules/swiper/swiper-bundle.min.css">

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
        <nav class="navbar navbar-expand-lg main-navbar">
          <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
              <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
              <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
            </ul>
          </form>
          <ul class="navbar-nav navbar-right">
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">Hi, Superman</div></a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">Logged in 5 min ago</div>
                <a href="features-profile.html" class="dropdown-item has-icon">
                  <i class="far fa-user"></i> Profile
                </a>
                <a href="features-activities.html" class="dropdown-item has-icon">
                  <i class="fas fa-bolt"></i> Activities
                </a>
                <a href="features-settings.html" class="dropdown-item has-icon">
                  <i class="fas fa-cog"></i> Settings
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item has-icon text-danger">
                  <i class="fas fa-sign-out-alt"></i> Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <div class="main-sidebar sidebar-style-2">
          <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
              <a href="index.html">In Haus</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
              <a href="index.html">IH</a>
            </div>
            <ul class="sidebar-menu">
              <li><a class="nav-link" href="dashboard.html"><i class="fas fa-chart-line"></i> <span>Dashboard</span></a></li>
              <li><a class="nav-link" href="recent_activities.html"><i class="fas fa-chart-line"></i> <span>Recent Activities</span></a></li>
              <li><a class="nav-link" href="consultations.html"><i class="fas fa-handshake"></i> <span>Consultations</span></a></li>
              <li><a class="nav-link" href="projects.html"><i class="fas fa-clipboard-list"></i> <span>Projects</span></a></li>
              <li><a class="nav-link" href="feedbacks.html"><i class="fas fa-comment-dots"></i> <span>Feedbacks</span></a></li>
              <li><a class="nav-link" href="livechat.html"><i class="fas fa-headset"></i> <span>Live Chat</span></a></li>
              <li class="active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-cog"></i><span>Settings</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="general_settings.html">General</a></li>
                  <li class="active"><a class="nav-link" href="portfolios.html">Portfolios</a></li>
                  <li><a class="nav-link" href="staffs.html">Staffs</a></li>
                </ul>
              </li>
            </ul>
          </aside>
        </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header mb-0">
            <h1>Portfolios</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <a href="portfolio.php" class="btn btn-icon icon-left btn-success"><i class="fas fa-plus"></i> Add</a>
                  </div>
                  <div class="card-body">
                  <section id="projects" class="projects">
                    <div class="container aos-init aos-animate" data-aos="fade-up">

                      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

                        <ul class="portfolio-flters aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                          <li data-filter="*" class="filter-active">All</li>
                          <li data-filter=".filter-remodeling">Remodeling</li>
                          <li data-filter=".filter-construction">Construction</li>
                          <li data-filter=".filter-repairs">Repairs</li>
                          <li data-filter=".filter-design">Design</li>
                        </ul><!-- End Projects Filters -->

                        <div class="row gy-4 portfolio-container aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" style="position: relative; height: 1163.94px;">

                          <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling" style="position: absolute; left: 0px; top: 0px;">
                            <div class="portfolio-content h-100">
                              <img src="assets\img\sample1.jpg" class="img-fluid" alt="">
                              <div class="portfolio-info">
                                <h4>Remodeling 1</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets\img\sample1.jpg" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="fas fa-chart-line"></i></a>
                                <a href="project-details.html" title="More Details" class="details-link"><i class="fas fa-chart-line"></i></a>
                              </div>
                            </div>
                          </div><!-- End Projects Item -->

                          <div class="col-lg-4 col-md-6 portfolio-item filter-construction" style="position: absolute; left: 379.991px; top: 0px;">
                            <div class="portfolio-content h-100">
                              <img src="assets\img\sample2.jpg" class="img-fluid" alt="">
                              <div class="portfolio-info">
                                <h4>Construction 1</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets\img\sample2.jpg" title="Construction 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                              </div>
                            </div>
                          </div><!-- End Projects Item -->

                          <div class="col-lg-4 col-md-6 portfolio-item filter-repairs" style="position: absolute; left: 759.982px; top: 0px;">
                            <div class="portfolio-content h-100">
                              <img src="assets/img/avatar/avatar-1.png" class="img-fluid" alt="">
                              <div class="portfolio-info">
                                <h4>Repairs 1</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/avatar/avatar-1.png" title="Repairs 1" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                              </div>
                            </div>
                          </div><!-- End Projects Item -->

                          <div class="col-lg-4 col-md-6 portfolio-item filter-design" style="position: absolute; left: 0px; top: 290.986px;">
                            <div class="portfolio-content h-100">
                              <img src="assets/img/projects/design-1.jpg" class="img-fluid" alt="">
                              <div class="portfolio-info">
                                <h4>Design 1</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/projects/design-1.jpg" title="Repairs 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                              </div>
                            </div>
                          </div><!-- End Projects Item -->

                          <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling" style="position: absolute; left: 379.991px; top: 290.986px;">
                            <div class="portfolio-content h-100">
                              <img src="assets/img/projects/remodeling-2.jpg" class="img-fluid" alt="">
                              <div class="portfolio-info">
                                <h4>Remodeling 2</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/projects/remodeling-2.jpg" title="Remodeling 2" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                              </div>
                            </div>
                          </div><!-- End Projects Item -->

                          <div class="col-lg-4 col-md-6 portfolio-item filter-construction" style="position: absolute; left: 759.982px; top: 290.986px;">
                            <div class="portfolio-content h-100">
                              <img src="assets/img/projects/construction-2.jpg" class="img-fluid" alt="">
                              <div class="portfolio-info">
                                <h4>Construction 2</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                              </div>
                            </div>
                          </div><!-- End Projects Item -->

                          <div class="col-lg-4 col-md-6 portfolio-item filter-repairs" style="position: absolute; left: 0px; top: 581.972px;">
                            <div class="portfolio-content h-100">
                              <img src="assets/img/projects/repairs-2.jpg" class="img-fluid" alt="">
                              <div class="portfolio-info">
                                <h4>Repairs 2</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/projects/repairs-2.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                              </div>
                            </div>
                          </div><!-- End Projects Item -->

                          <div class="col-lg-4 col-md-6 portfolio-item filter-design" style="position: absolute; left: 379.991px; top: 581.972px;">
                            <div class="portfolio-content h-100">
                              <img src="assets/img/projects/design-2.jpg" class="img-fluid" alt="">
                              <div class="portfolio-info">
                                <h4>Design 2</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/projects/design-2.jpg" title="Repairs 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                              </div>
                            </div>
                          </div><!-- End Projects Item -->

                          <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling" style="position: absolute; left: 759.982px; top: 581.972px;">
                            <div class="portfolio-content h-100">
                              <img src="assets/img/projects/remodeling-3.jpg" class="img-fluid" alt="">
                              <div class="portfolio-info">
                                <h4>Remodeling 3</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/projects/remodeling-3.jpg" title="Remodeling 3" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                              </div>
                            </div>
                          </div><!-- End Projects Item -->

                          <div class="col-lg-4 col-md-6 portfolio-item filter-construction" style="position: absolute; left: 0px; top: 872.958px;">
                            <div class="portfolio-content h-100">
                              <img src="assets/img/projects/construction-3.jpg" class="img-fluid" alt="">
                              <div class="portfolio-info">
                                <h4>Construction 3</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/projects/construction-3.jpg" title="Construction 3" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                              </div>
                            </div>
                          </div><!-- End Projects Item -->

                          <div class="col-lg-4 col-md-6 portfolio-item filter-repairs" style="position: absolute; left: 379.991px; top: 872.958px;">
                            <div class="portfolio-content h-100">
                              <img src="assets/img/projects/repairs-3.jpg" class="img-fluid" alt="">
                              <div class="portfolio-info">
                                <h4>Repairs 3</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/projects/repairs-3.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                              </div>
                            </div>
                          </div><!-- End Projects Item -->

                          <div class="col-lg-4 col-md-6 portfolio-item filter-design" style="position: absolute; left: 759.982px; top: 872.958px;">
                            <div class="portfolio-content h-100">
                              <img src="assets/img/projects/design-3.jpg" class="img-fluid" alt="">
                              <div class="portfolio-info">
                                <h4>Design 3</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/projects/design-3.jpg" title="Repairs 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                              </div>
                            </div>
                          </div><!-- End Projects Item -->

                        </div><!-- End Projects Container -->

                      </div>

                    </div>
                  </section>
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
  <script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
  <script src="assets/modules/aos/aos.js"></script>
  <script src="assets/modules/glightbox/js/glightbox.min.js"></script>
  <script src="assets/modules/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/modules/swiper/swiper-bundle.min.js"></script>
   <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/js/page/components-table.js"></script>
  <script src="assets/js/page/modules-datatables.js"></script>
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>