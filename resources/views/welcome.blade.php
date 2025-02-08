<!DOCTYPE html>
<html lang="en" class="loading">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description"
    content="Convex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords"
    content="admin template, Convex admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title>eCommerce Dashboard - Convex bootstrap 4 admin dashboard template</title>
  <link rel="apple-touch-icon" sizes="60x60" href="../app-assets/img/ico/apple-icon-60.html">
  <link rel="apple-touch-icon" sizes="76x76" href="../app-assets/img/ico/apple-icon-76.html">
  <link rel="apple-touch-icon" sizes="120x120" href="../app-assets/img/ico/apple-icon-120.html">
  <link rel="apple-touch-icon" sizes="152x152" href="../app-assets/img/ico/apple-icon-152.html">
  <link rel="shortcut icon" type="image/x-icon"
    href="https://pixinvent.com/demo/convex-bootstrap-admin-dashboard-template/app-assets/img/ico/favicon.ico">
  <link rel="shortcut icon" type="image/png" href="../app-assets/img/ico/favicon-32.png">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <link
    href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../app-assets/fonts/feather/style.min.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/fonts/simple-line-icons/style.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/fonts/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/perfect-scrollbar.min.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/prism.min.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/chartist.min.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/app.css">
</head>

<body data-col="2-columns" class=" 2-columns ">
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="wrapper">
    <!-- layouts.sidebar -->
    @include('layouts.sidebar')


    <!-- layouts.navbar -->
    @include('layouts.navbar')

    <div class="main-panel">
      <div class="main-content">
        <div class="content-wrapper">
          <!-- layouts.dashboard -->
          <!-- yield permet de recuperer un content definit dans un environnement content -->
          <!-- pour que le contenu s'affiche, nous devons lui creer une route -->
          @yield('content')
          <!-- @yield('content-second') -->
        </div>
      </div>

      <footer class="footer footer-static footer-light">
        <p class="clearfix text-muted text-center px-2"><span>Copyright &copy; 2018 <a
              href="https://1.envato.market/pixinvent_portfolio" id="pixinventLink" target="_blank"
              class="text-bold-800 primary darken-2">PIXINVENT </a>, All rights reserved. </span></p>
      </footer>

    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->

  <aside id="notification-sidebar" class="notification-sidebar d-none d-sm-none d-md-block"><a
      class="notification-sidebar-close"><i class="ft-x font-medium-3"></i></a>
    <div class="side-nav notification-sidebar-content">
      <div class="row">
        <div class="col-12 mt-1">
          <ul class="nav nav-tabs">
            <li class="nav-item"><a id="base-tab1" data-toggle="tab" aria-controls="base-tab1" href="#activity-tab"
                aria-expanded="true" class="nav-link active"><strong>Activity</strong></a></li>
            <li class="nav-item"><a id="base-tab2" data-toggle="tab" aria-controls="base-tab2" href="#settings-tab"
                aria-expanded="false" class="nav-link"><strong>Settings</strong></a></li>
          </ul>
          <div class="tab-content">
            <div id="activity-tab" role="tabpanel" aria-expanded="true" aria-labelledby="base-tab1"
              class="tab-pane active">
              <div id="activity-timeline" class="col-12 timeline-left">
                <h6 class="mt-1 mb-3 text-bold-400">RECENT ACTIVITY</h6>
                <div class="timeline">
                  <ul class="list-unstyled base-timeline activity-timeline ml-0">
                    <li>
                      <div class="timeline-icon bg-danger"><i class="ft-shopping-cart"></i></div>
                      <div class="base-timeline-info"><a href="#" class="text-uppercase text-danger">Update</a><span
                          class="d-block">Jim Doe Purchased new equipments for zonal office.</span></div><small
                        class="text-muted">just now</small>
                    </li>
                    <li>
                      <div class="timeline-icon bg-primary"><i class="fa fa-plane"></i></div>
                      <div class="base-timeline-info"><a href="#" class="text-uppercase text-primary">Added</a><span
                          class="d-block">Your Next flight for USA will be on 15th August 2015.</span></div><small
                        class="text-muted">25 hours ago</small>
                    </li>
                    <li>
                      <div class="timeline-icon bg-dark"><i class="ft-mic"></i></div>
                      <div class="base-timeline-info"><a href="#" class="text-uppercase text-dark">Assined</a><span
                          class="d-block">Natalya Parker Send you a voice mail for next conference.</span></div><small
                        class="text-muted">15 days ago</small>
                    </li>
                    <li>
                      <div class="timeline-icon bg-warning"><i class="ft-map-pin"></i></div>
                      <div class="base-timeline-info"><a href="#" class="text-uppercase text-warning">New</a><span
                          class="d-block">Jessy Jay open a new store at S.G Road.</span></div><small
                        class="text-muted">20 days ago</small>
                    </li>
                    <li>
                      <div class="timeline-icon bg-primary"><i class="ft-inbox"></i></div>
                      <div class="base-timeline-info"><a href="#" class="text-uppercase text-primary">Added</a><span
                          class="d-block">voice mail for conference.</span></div><small class="text-muted">2 Week
                        Ago</small>
                    </li>
                    <li>
                      <div class="timeline-icon bg-danger"><i class="ft-mic"></i></div>
                      <div class="base-timeline-info"><a href="#" class="text-uppercase text-danger">Update</a><span
                          class="d-block">Natalya Parker Jessy Jay open a new store at S.G Road.</span></div><small
                        class="text-muted">1 Month Ago</small>
                    </li>
                    <li>
                      <div class="timeline-icon bg-dark"><i class="ft-inbox"></i></div>
                      <div class="base-timeline-info"><a href="#" class="text-uppercase text-dark">Assined</a><span
                          class="d-block">Natalya Parker Send you a voice mail for Updated conference.</span></div>
                      <small class="text-muted">1 Month ago</small>
                    </li>
                    <li>
                      <div class="timeline-icon bg-warning"><i class="ft-map-pin"></i></div>
                      <div class="base-timeline-info"><a href="#" class="text-uppercase text-warning">New</a><span
                          class="d-block">Started New project with Jessie Lee.</span></div><small class="text-muted">2
                        Month ago</small>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div id="settings-tab" aria-labelledby="base-tab2" class="tab-pane">
              <div id="settings" class="col-12">
                <h6 class="mt-1 mb-3 text-bold-400">GENERAL SETTINGS</h6>
                <ul class="list-unstyled">
                  <li>
                    <div class="togglebutton">
                      <div class="switch"><span class="text-bold-500">Notifications</span>
                        <div class="float-right">
                          <div class="form-group">
                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input id="notifications1" checked="checked" type="checkbox" class="custom-control-input">
                              <label for="notifications1" class="custom-control-label"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p>Use checkboxes when looking for yes or no answers.</p>
                  </li>
                  <li>
                    <div class="togglebutton">
                      <div class="switch"><span class="text-bold-500">Show recent activity</span>
                        <div class="float-right">
                          <div class="form-group">
                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input id="recent-activity1" checked="checked" type="checkbox"
                                class="custom-control-input">
                              <label for="recent-activity1" class="custom-control-label"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                  </li>
                  <li>
                    <div class="togglebutton">
                      <div class="switch"><span class="text-bold-500">Notifications</span>
                        <div class="float-right">
                          <div class="form-group">
                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input id="notifications2" type="checkbox" class="custom-control-input">
                              <label for="notifications2" class="custom-control-label"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p>Use checkboxes when looking for yes or no answers.</p>
                  </li>
                  <li>
                    <div class="togglebutton">
                      <div class="switch"><span class="text-bold-500">Show recent activity</span>
                        <div class="float-right">
                          <div class="form-group">
                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input id="recent-activity2" type="checkbox" class="custom-control-input">
                              <label for="recent-activity2" class="custom-control-label"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                  </li>
                  <li>
                    <div class="togglebutton">
                      <div class="switch"><span class="text-bold-500">Show your emails</span>
                        <div class="float-right">
                          <div class="form-group">
                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input id="show-emails" type="checkbox" class="custom-control-input">
                              <label for="show-emails" class="custom-control-label"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p>Use checkboxes when looking for yes or no answers.</p>
                  </li>
                  <li>
                    <div class="togglebutton">
                      <div class="switch"><span class="text-bold-500">Show Task statistics</span>
                        <div class="float-right">
                          <div class="form-group">
                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input id="show-stats" checked="checked" type="checkbox" class="custom-control-input">
                              <label for="show-stats" class="custom-control-label"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-sm-none d-md-block"><a
      class="customizer-close"><i class="ft-x font-medium-3"></i></a><a id="customizer-toggle-icon"
      class="customizer-toggle bg-danger"><i class="ft-settings font-medium-4 fa fa-spin white align-middle"></i></a>
    <div data-ps-id="df6a5ce4-a175-9172-4402-dabd98fc9c0a" class="customizer-content p-3 ps-container ps-theme-dark">
      <h4 class="mb-0 text-bold-400">Theme Customizer</h4>
      <p>Customize &amp; Preview in Real Time</p>
      <hr>
      <h6 class="text-center text-bold-500 mb-3 text-uppercase">Sidebar Background Image</h6>
      <div class="cz-bg-image row">
        <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/01.jpg" width="50" height="100" alt="Bg image1"
            class="rounded box-shadow-2"></div>
        <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/02.jpg" width="50" height="100" alt="Bg image2"
            class="rounded box-shadow-2"></div>
        <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/03.jpg" width="50" height="100" alt="Bg image3"
            class="rounded box-shadow-2"></div>
        <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/04.jpg" width="50" height="100" alt="Bg image4"
            class="rounded box-shadow-2"></div>
        <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/05.jpg" width="50" height="100" alt="Bg image5"
            class="rounded box-shadow-2"></div>
        <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/06.jpg" width="50" height="100" alt="Bg image6"
            class="rounded box-shadow-2"></div>
        <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/07.jpg" width="50" height="100" alt="Bg image7"
            class="rounded box-shadow-2"></div>
        <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/08.jpg" width="50" height="100" alt="Bg image8"
            class="rounded box-shadow-2"></div>
      </div>
      <hr>
      <div class="togglebutton">
        <div class="switch"><span class="text-bold-400">Show / Hide Sidebar Bg Image</span>
          <div class="float-right">
            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
              <input id="sidebar-bg-img" type="checkbox" checked="" class="custom-control-input cz-bg-image-display">
              <label for="sidebar-bg-img" class="custom-control-label"></label>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <h6 class="text-center text-bold-500 mb-3 text-uppercase">Sidebar Color Options</h6>
      <div class="cz-bg-color">
        <div class="row p-1">
          <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="aqua-marine"
              class="gradient-aqua-marine d-block rounded box-shadow-2"></span></div>
          <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="sublime-vivid"
              class="gradient-sublime-vivid d-block rounded box-shadow-2"></span></div>
          <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="crystal-clear"
              class="gradient-crystal-clear d-block rounded box-shadow-2"></span></div>
          <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="timber"
              class="gradient-timber d-block rounded box-shadow-2"></span></div>
        </div>
        <div class="row p-1">
          <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="black"
              class="bg-black d-block rounded box-shadow-2"></span></div>
          <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="white"
              class="bg-white d-block rounded box-shadow-2"></span></div>
          <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="primary"
              class="bg-primary d-block rounded box-shadow-2"></span></div>
          <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="danger"
              class="bg-danger d-block rounded box-shadow-2"></span></div>
        </div>
      </div>
      <hr>
      <div class="togglebutton">
        <div class="switch"><span class="text-bold-400">Compact Menu</span>
          <div class="float-right">
            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
              <input id="cz-compact-menu" type="checkbox" class="custom-control-input cz-compact-menu">
              <label for="cz-compact-menu" class="custom-control-label"></label>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div>
        <label for="cz-sidebar-width" class="text-bold-400">Sidebar Width</label>
        <select id="cz-sidebar-width" class="custom-select cz-sidebar-width float-right">
          <option value="small">Small</option>
          <option value="medium" selected="">Medium</option>
          <option value="large">Large</option>
        </select>
      </div>
    </div>
  </div>
  <!-- BEGIN VENDOR JS-->
  <script src="../app-assets/vendors/js/core/jquery-3.3.1.min.js"></script>
  <script src="../app-assets/vendors/js/core/popper.min.js"></script>
  <script src="../app-assets/vendors/js/core/bootstrap.min.js"></script>
  <script src="../app-assets/vendors/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="../app-assets/vendors/js/prism.min.js"></script>
  <script src="../app-assets/vendors/js/jquery.matchHeight-min.js"></script>
  <script src="../app-assets/vendors/js/screenfull.min.js"></script>
  <script src="../app-assets/vendors/js/pace/pace.min.js"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="../app-assets/vendors/js/chartist.min.js"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN CONVEX JS-->
  <script src="../app-assets/js/app-sidebar.js"></script>
  <script src="../app-assets/js/notification-sidebar.js"></script>
  <script src="../app-assets/js/customizer.js"></script>
  <!-- END CONVEX JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../app-assets/js/dashboard-ecommerce.js"></script>
  <!-- END PAGE LEVEL JS-->
</body>

<!-- Mirrored from pixinvent.com/demo/convex-bootstrap-admin-dashboard-template/demo-3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Jan 2022 15:37:02 GMT -->

</html>