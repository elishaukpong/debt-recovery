<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("assets/images/favicon/favicon.ico")}}">

    <!-- Libs CSS -->


    <link href="{{asset("node_modules/bootstrap-icons/font/bootstrap-icons.css")}}" rel="stylesheet">
    <link href="{{ asset ("node_modules/dropzone/dist/dropzone.css") }}"  rel="stylesheet">
    <link href="{{ asset("node_modules/@mdi/font/css/materialdesignicons.min.css") }}" rel="stylesheet" />
    <link href="{{ asset("node_modules/prismjs/themes/prism-okaidia.css") }}" rel="stylesheet">

    <!-- Theme CSS -->
    <!-- build:css @@webRoot/assets/css/theme.min.css -->
    <link rel="stylesheet" href="{{ asset("assets/css/theme.css") }}">
    <!-- endbuild -->
</head>
  <!-- Sidebar -->
<nav class="navbar-vertical navbar">
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 97%;"><div class="nav-scroller" style="overflow: hidden; width: auto; height: 97%;">
        <!-- Brand logo -->
        <a class="navbar-brand" href="./index.html">
            <img src="./assets/images/brand/logo/logo.svg" alt="">
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link has-arrow  active " href="./index.html">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home nav-icon icon-xs me-2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>  Dashboard
                </a>

            </li>


         <!-- Nav item -->
         <li class="nav-item">
            <div class="navbar-heading">Layouts &amp; Pages</div>
        </li>


             <!-- Nav item -->
             <li class="nav-item">
                <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navPages" aria-expanded="false" aria-controls="navPages">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers nav-icon icon-xs me-2"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg> Pages
                </a>

                <div id="navPages" class="collapse " data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="./pages/profile.html">
                                Profile
                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow   " href="./pages/settings.html">
                                Settings
                                </a>

                        </li>


                        <li class="nav-item">
                            <a class="nav-link " href="./pages/billing.html">
                                Billing
                </a>
                        </li>




                        <li class="nav-item">
                            <a class="nav-link " href="./pages/pricing.html">
                               Pricing
                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="./pages/404-error.html">
                                404 Error
                </a>
                        </li>
                    </ul>
                </div>

                </li>


                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navAuthentication" aria-expanded="false" aria-controls="navAuthentication">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock nav-icon icon-xs me-2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> Authentication
                            </a>
                            <div id="navAuthentication" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link " href="./pages/sign-in.html"> Sign In</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " href="./pages/sign-up.html"> Sign Up</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./pages/forget-password.html">
                                             Forget Password
                                </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="./pages/layout.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sidebar nav-icon icon-xs me-2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="3" x2="9" y2="21"></line></svg>
                                Layouts
                            </a>
                        </li>

                        <!-- Nav item -->
                        <li class="nav-item">
                            <div class="navbar-heading">UI Components</div>
                        </li>

                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link has-arrow " href="./docs/accordions.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package nav-icon icon-xs me-2"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>  Components
                            </a>
                         </li>


                        <li class="nav-item">
                            <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevel" aria-expanded="false" aria-controls="navMenuLevel">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-left-down nav-icon icon-xs me-2"><polyline points="14 15 9 20 4 15"></polyline><path d="M20 4h-7a4 4 0 0 0-4 4v12"></path></svg> Menu Level
                            </a>
                            <div id="navMenuLevel" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevelSecond" aria-expanded="false" aria-controls="navMenuLevelSecond">
                                    Two Level
                                </a>
                                        <div id="navMenuLevelSecond" class="collapse" data-bs-parent="#navMenuLevel">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#!">  NavItem 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#!">  NavItem 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow  collapsed  " href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevelThree" aria-expanded="false" aria-controls="navMenuLevelThree">
                                    Three Level
                                </a>
                                        <div id="navMenuLevelThree" class="collapse " data-bs-parent="#navMenuLevel">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevelThreeOne" aria-expanded="false" aria-controls="navMenuLevelThreeOne">
                                                         NavItem 1
                                            </a>
                                                    <div id="navMenuLevelThreeOne" class="collapse collapse " data-bs-parent="#navMenuLevelThree">
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item">
                                                                <a class="nav-link " href="#!">
                                                                     NavChild Item 1
                                                        </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#!">  Nav Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                                         <!-- Nav item -->
                        <li class="nav-item">
                            <div class="navbar-heading">Documentation</div>
                        </li>

                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link has-arrow " href="./docs/index.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard nav-icon icon-xs me-2"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>  Docs
                            </a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link has-arrow " href="./docs/changelog.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-pull-request nav-icon icon-xs me-2"><circle cx="18" cy="18" r="3"></circle><circle cx="6" cy="6" r="3"></circle><path d="M13 6h3a2 2 0 0 1 2 2v7"></path><line x1="6" y1="9" x2="6" y2="21"></line></svg>  Changelog
                            </a>
                         </li>




                    </ul>

                </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 741.81px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
</nav>

    <title> Dashboard </title>
</head>

<body class="bg-light">
    <div id="db-wrapper">
        <!-- navbar vertical -->
        {{-- @@include('partials/navbar-vertical.html', { "page": "dashboard", }) --}}
        <!-- Page content -->
        <div id="page-content">
            <div class="header @@classList">
                <!-- navbar -->
                <nav class="navbar-classic navbar navbar-expand-lg">
                  <a id="nav-toggle" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu nav-icon me-2 icon-xs"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                    <i
                      data-feather="menu"

                      class="nav-icon me-2 icon-xs"></i></a>
                  <div class="ms-lg-3 d-none d-md-none d-lg-block">
                    <!-- Form -->
                    <form class="d-flex align-items-center">
                      <input type="search" class="form-control" placeholder="Search" />
                    </form>
                  </div>
                  <!--Navbar nav -->
                  <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
                    <li class="dropdown stopevent">
                        <a class="btn btn-light btn-icon rounded-circle indicator indicator-primary text-muted show" href="#" role="button" id="dropdownNotification" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell icon-xs"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                          </a>
                      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"
                        aria-labelledby="dropdownNotification">
                        <div>
                          <div class="border-bottom px-3 pt-2 pb-3 d-flex
                            justify-content-between align-items-center">
                            <p class="mb-0 text-dark fw-medium fs-4">Notifications</p>
                            <a href="#" class="text-muted">
                              <span>
                                <i class="me-1 icon-xxs" data-feather="settings"></i>
                              </span>
                            </a>
                          </div>
                          <!-- List group -->
                          <ul class="list-group list-group-flush notification-list-scroll">
                            <!-- List group item -->
                            <li class="list-group-item bg-light">


                              <a href="#" class="text-muted">
                                  <h5 class=" mb-1">Rishi Chopra</h5>
                                  <p class="mb-0">
                                    Mauris blandit erat id nunc blandit, ac eleifend dolor pretium.
                                  </p>
                              </a>



                        </li>
                           <!-- List group item -->
                           <li class="list-group-item">


                            <a href="#" class="text-muted">
                                <h5 class=" mb-1">Neha Kannned</h5>
                                <p class="mb-0">
                                  Proin at elit vel est condimentum elementum id in ante. Maecenas et sapien metus.
                                </p>
                            </a>



                      </li>
                            <!-- List group item -->
                            <li class="list-group-item">


                              <a href="#" class="text-muted">
                                  <h5 class=" mb-1">Nirmala Chauhan</h5>
                                  <p class="mb-0">
                                    Morbi maximus urna lobortis elit sollicitudin sollicitudieget elit vel pretium.
                                  </p>
                              </a>



                        </li>
                            <!-- List group item -->
                            <li class="list-group-item">


                                  <a href="#" class="text-muted">
                                      <h5 class=" mb-1">Sina Ray</h5>
                                      <p class="mb-0">
                                        Sed aliquam augue sit amet mauris volutpat hendrerit sed nunc eu diam.
                                      </p>
                                  </a>



                            </li>
                          </ul>
                          <div class="border-top px-3 py-2 text-center">
                            <a href="#" class="text-inherit fw-semi-bold">
                              View all Notifications
                            </a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!-- List -->
                    <li class="dropdown ms-2">
                      <a class="rounded-circle" href="#" role="button" id="dropdownUser"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-md avatar-indicators avatar-online">
                          <img alt="avatar" src="{{ asset("assets/images/avatar/avatar-1.jpg") }}"
                            class="rounded-circle" />
                        </div>
                      </a>
                      <div class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="dropdownUser">
                        <div class="px-4 pb-0 pt-2">


                          <div class="lh-1 ">
                            <h5 class="mb-1"> John E. Grainger</h5>
                            <a href="#" class="text-inherit fs-6">View my profile</a>
                          </div>
                          <div class=" dropdown-divider mt-3 mb-2"></div>
                        </div>

                        <ul class="list-unstyled">

                          <li>
                            <a class="dropdown-item" href="#">
                              <i class="me-2 icon-xxs dropdown-item-icon" data-feather="user"></i>Edit
                              Profile
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item"
                              href="#">
                              <i class="me-2 icon-xxs dropdown-item-icon"
                                data-feather="activity"></i>Activity Log
                            </a>


                          </li>

                          <li>
                            <a class="dropdown-item text-primary" href="#">
                              <i class="me-2 icon-xxs text-primary dropdown-item-icon"
                                data-feather="star"></i>Go Pro
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">
                              <i class="me-2 icon-xxs dropdown-item-icon"
                                data-feather="settings"></i>Account Settings
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="@@webRoot/index.html">
                              <i class="me-2 icon-xxs dropdown-item-icon"
                                data-feather="power"></i>Sign Out
                            </a>
                          </li>
                        </ul>

                      </div>
                    </li>
                  </ul>
                </nav>
              </div>

        </div>
    </div>



    <!-- Scripts -->
    {{-- @@include("partials/scripts.html") --}}
    <!-- Libs JS -->
        <script src="@@webRoot/node_modules/jquery/dist/jquery.min.js"></script>
        <script src="@@webRoot/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="@@webRoot/node_modules/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="@@webRoot/node_modules/feather-icons/dist/feather.min.js"></script>
        <script src="@@webRoot/node_modules/prismjs/prism.js"></script>
        <script src="@@webRoot/node_modules/apexcharts/dist/apexcharts.min.js"></script>
        <script src="@@webRoot/node_modules/dropzone/dist/min/dropzone.min.js"></script>
        <script src="@@webRoot/node_modules/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
        <script src="@@webRoot/node_modules/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>




        <!-- Theme JS -->
        <!-- build:js @@webRoot/assets/js/theme.min.js -->
        <script src="{{ asset("assets/js/main.js") }}"></script>
        <script src="{{ asset("assets/js/feather.js") }}"></script>
        <script src="{{ asset ("assets/js/sidebarMenu.js") }}"></script>



<!-- endbuild -->

@yield("content")

</body>

</html>
