@extends('Layouts.master')
@section('content')

    <nav class="navbar-vertical navbar" id="navbar-vertical navbar" style="display: block">
        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 97%;">
            <div class="nav-scroller" style="overflow: hidden; width: auto; height: 97%;">

            <a class="navbar-brand" href="./index.html">
                <h3 class="text-light">Debt Recovery</h3>
            </a>

            <ul class="navbar-nav flex-column" id="sideNavbar">
                <li class="nav-item mb-3">
                    <a class="nav-link has-arrow  active " href="./index.html">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home nav-icon icon-xs me-2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>  Dashboard
                    </a>

                </li>


                            <li class="nav-item mb-3">
                                <a class="nav-link " href="./pages/layout.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sidebar nav-icon icon-xs me-2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="3" x2="9" y2="21"></line></svg>
                                    Email Reminders
                                </a>
                            </li>

                            <li class="nav-item mb-3">
                                <a class="nav-link " href="./pages/layout.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock nav-icon icon-xs me-2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    SMS Reminders
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="nav-link " href="{{route("debtors")}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sidebar nav-icon icon-xs me-2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="3" x2="9" y2="21"></line></svg>
                                    Debtors
                                </a>
                            </li>

                            <li class="nav-item mb-3">
                                <a class="nav-link has-arrow " href="./docs/index.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard nav-icon icon-xs me-2"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                                    Settings
                                </a>
                             </li>




                        </ul>

                    </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 741.81px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
    </nav>

    <div id="db-wrapper">
        <div id="page-content">
            <div class="header @@classList">

                <nav class="navbar-classic navbar navbar-expand-lg">
                  <div class="d-flex">
                    <a id="nav-toggle" href="#" onclick="toggleMenu()" class="mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu nav-icon me-2 icon-xs"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                        <i
                          data-feather="menu"

                          class="nav-icon me-2 icon-xs">
                        </i>
                      </a>
                      <div class="ms-lg-3 d-none d-md-none d-lg-block">

                        <form class="d-flex align-items-center">
                          <input type="search" class="form-control" placeholder="Search" />
                        </form>
                      </div>
                  </div>

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

                          <ul class="list-group list-group-flush notification-list-scroll">

                            <li class="list-group-item bg-light">


                              <a href="#" class="text-muted">
                                  <h5 class=" mb-1">Rishi Chopra</h5>
                                  <p class="mb-0">
                                    Mauris blandit erat id nunc blandit, ac eleifend dolor pretium.
                                  </p>
                              </a>
                            </li>

                           <li class="list-group-item">


                            <a href="#" class="text-muted">
                                <h5 class=" mb-1">Neha Kannned</h5>
                                <p class="mb-0">
                                  Proin at elit vel est condimentum elementum id in ante. Maecenas et sapien metus.
                                </p>
                            </a>



                      </li>

                            <li class="list-group-item">


                              <a href="#" class="text-muted">
                                  <h5 class=" mb-1">Nirmala Chauhan</h5>
                                  <p class="mb-0">
                                    Morbi maximus urna lobortis elit sollicitudin sollicitudieget elit vel pretium.
                                  </p>
                              </a>



                        </li>

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
                            <h5 class="mb-1"> {{ auth()->user()->first_name ." ".auth()->user()->last_name }} </h5>
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
                              <form action="{{ route('logout') }}" method="POST">
                                  @csrf
                                    <a class="dropdown-item">
                                        <button type="submit" style="background: none; color:inherit; outline:inherit; border:none">
                                            <i class="me-2 icon-xxs dropdown-item-icon" data-feather="power"></i>
                                            Sign Out
                                        </button>
                                    </a>
                                </form>
                          </li>
                        </ul>
                    </li>
                  </ul>
                </nav>
            </div>


            <div class="container-fluid mt-3 px-6">
                <!-- row  -->
                <div class="row mt-6">
                    <div class="col-md-12 col-12">
                        <!-- card  -->
                        <div class="card">
                            <!-- card header  -->
                            <div class="card-header bg-white  py-4">
                                <h4 class="mb-0">Active Debts</h4>
                            </div>
                            <!-- table  -->
                            <div class="table-responsive">
                                <table class="table text-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Debtor name</th>
                                            <th>Due Date</th>
                                            <th>Amount</th>
                                            <th>Progress</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-3 lh-1">
                                                        <h5 class=" mb-1"> <a href="#" class="text-inherit">Dropbox Design System</a></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">34</td>
                                            <td> <div class="float-start me-3"> NGN 1500</div> </td>
                                            <td class="align-middle text-dark">
                                                <div class="float-start me-3">15%</div>
                                                <div class="mt-2">
                                                    <div class="progress" style="height: 5px;">
                                                        <div class="progress-bar" role="progressbar" style="width:15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-3 lh-1">
                                                        <h5 class=" mb-1"> <a href="#" class="text-inherit">Dropbox Design System</a></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">34</td>
                                            <td> <div class="float-start me-3"> NGN 1500</div> </td>
                                            <td class="align-middle text-dark">
                                                <div class="float-start me-3">15%</div>
                                                <div class="mt-2">
                                                    <div class="progress" style="height: 5px;">
                                                        <div class="progress-bar" role="progressbar" style="width:15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-3 lh-1">
                                                        <h5 class=" mb-1"> <a href="#" class="text-inherit">Dropbox Design System</a></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">34</td>
                                            <td> <div class="float-start me-3"> NGN 1500</div> </td>
                                            <td class="align-middle text-dark">
                                                <div class="float-start me-3">15%</div>
                                                <div class="mt-2">
                                                    <div class="progress" style="height: 5px;">
                                                        <div class="progress-bar" role="progressbar" style="width:15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-3 lh-1">
                                                        <h5 class=" mb-1"> <a href="#" class="text-inherit">Dropbox Design System</a></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">34</td>
                                            <td> <div class="float-start me-3"> NGN 1500</div> </td>
                                            <td class="align-middle text-dark">
                                                <div class="float-start me-3">15%</div>
                                                <div class="mt-2">
                                                    <div class="progress" style="height: 5px;">
                                                        <div class="progress-bar" role="progressbar" style="width:15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-3 lh-1">
                                                        <h5 class=" mb-1"> <a href="#" class="text-inherit">Dropbox Design System</a></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">34</td>
                                            <td> <div class="float-start me-3"> NGN 1500</div> </td>
                                            <td class="align-middle text-dark">
                                                <div class="float-start me-3">15%</div>
                                                <div class="mt-2">
                                                    <div class="progress" style="height: 5px;">
                                                        <div class="progress-bar" role="progressbar" style="width:15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-3 lh-1">
                                                        <h5 class=" mb-1"> <a href="#" class="text-inherit">Dropbox Design System</a></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">34</td>
                                            <td> <div class="float-start me-3"> NGN 1500</div> </td>
                                            <td class="align-middle text-dark">
                                                <div class="float-start me-3">15%</div>
                                                <div class="mt-2">
                                                    <div class="progress" style="height: 5px;">
                                                        <div class="progress-bar" role="progressbar" style="width:15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-3 lh-1">
                                                        <h5 class=" mb-1"> <a href="#" class="text-inherit">Dropbox Design System</a></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">34</td>
                                            <td> <div class="float-start me-3"> NGN 1500</div> </td>
                                            <td class="align-middle text-dark">
                                                <div class="float-start me-3">15%</div>
                                                <div class="mt-2">
                                                    <div class="progress" style="height: 5px;">
                                                        <div class="progress-bar" role="progressbar" style="width:15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-3 lh-1">
                                                        <h5 class=" mb-1"> <a href="#" class="text-inherit">Dropbox Design System</a></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">34</td>
                                            <td> <div class="float-start me-3"> NGN 1500</div> </td>
                                            <td class="align-middle text-dark">
                                                <div class="float-start me-3">15%</div>
                                                <div class="mt-2">
                                                    <div class="progress" style="height: 5px;">
                                                        <div class="progress-bar" role="progressbar" style="width:15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-3 lh-1">
                                                        <h5 class=" mb-1"> <a href="#" class="text-inherit">Dropbox Design System</a></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">34</td>
                                            <td> <div class="float-start me-3"> NGN 1500</div> </td>
                                            <td class="align-middle text-dark">
                                                <div class="float-start me-3">15%</div>
                                                <div class="mt-2">
                                                    <div class="progress" style="height: 5px;">
                                                        <div class="progress-bar" role="progressbar" style="width:15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- card footer  -->
                            <div class="card-footer bg-white text-center">
                                <a href="#" class="link-primary">View All Debts</a>

                            </div>
                        </div>

                    </div>
                </div>
                <!-- row  -->
                <div class="row my-6">
                    <div class="col-xl-4 col-lg-12 col-md-12 col-12 mb-6 mb-xl-0">
                        <!-- card  -->
                        <div class="card h-100">
                            <!-- card body  -->
                            <div class="card-body">
                                <div class="d-flex align-items-center
                    justify-content-between">
                                    <div>
                                        <h4 class="mb-0">Debt Performance </h4>
                                    </div>
                                    <!-- dropdown  -->
                                    <div class="dropdown dropstart">
                                        <a class="text-muted text-primary-hover" href="#" role="button" id="dropdownTask" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-xxs" data-feather="more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownTask">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- chart  -->
                                <div class="mb-8">
                                    <div id="perfomanceChart"></div>
                                </div>
                                <!-- icon with content  -->
                                <div class="d-flex align-items-center justify-content-around">
                                    <div class="text-center">
                                        <i class="icon-sm text-success" data-feather="check-circle"></i>
                                        <h1 class="mt-3  mb-1 fw-bold">76%</h1>
                                        <p>Completed</p>
                                    </div>
                                    <div class="text-center">
                                        <i class="icon-sm text-warning" data-feather="trending-up"></i>
                                        <h1 class="mt-3  mb-1 fw-bold">32%</h1>
                                        <p>In-Progress</p>
                                    </div>
                                    <div class="text-center">
                                        <i class="icon-sm text-danger" data-feather="trending-down"></i>
                                        <h1 class="mt-3  mb-1 fw-bold">13%</h1>
                                        <p>Behind</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card  -->
                    <div class="col-xl-8 col-lg-12 col-md-12 col-12">
                        <div class="card h-100">
                            <!-- card header  -->
                            <div class="card-header bg-white py-4">
                                <h4 class="mb-0">Last Paid</h4>
                            </div>
                            <!-- table  -->
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Name</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-3 lh-1">
                                                        <h5 class=" mb-1">Anita Parmar</h5>
                                                        <p class="mb-0">anita@example.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">NGN 20000</td>
                                            <td class="align-middle">3 May, 2023</td>
                                            <td class="align-middle">
                                                <div class="dropdown dropstart">
                                                    <a class="text-muted text-primary-hover" href="#" role="button" id="dropdownTeamOne" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="icon-xxs" data-feather="more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownTeamOne">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else
                                here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-3 lh-1">
                                                        <h5 class=" mb-1">Jitu Chauhan</h5>
                                                        <p class="mb-0">jituchauhan@example.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">NGN 5000</td>
                                            <td class="align-middle">Today</td>
                                            <td class="align-middle">
                                                <div class="dropdown dropstart">
                                                    <a class="text-muted text-primary-hover" href="#" role="button" id="dropdownTeamTwo" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="icon-xxs" data-feather="more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownTeamTwo">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else
                                here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-3 lh-1">
                                                        <h5 class=" mb-1">Sandeep Chauhan</h5>
                                                        <p class="mb-0">sandeepchauhan@example.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">NGN 20000</td>
                                            <td class="align-middle">Yesterday</td>
                                            <td class="align-middle">
                                                <div class="dropdown dropstart">
                                                    <a class="text-muted text-primary-hover" href="#" role="button" id="dropdownTeamThree" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="icon-xxs" data-feather="more-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownTeamThree">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else
                                here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">

                                                    <div>
                                                        <img src="assets/images/avatar/avatar-4.jpg" alt="" class="avatar-md avatar rounded-circle">
                                                    </div>

                                                    <div class="ms-3 lh-1">
                                                        <h5 class=" mb-1">Amanda Darnell</h5>
                                                        <p class="mb-0">amandadarnell@example.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">NGN 3500</td>
                                            <td class="align-middle">3 May, 2023</td>
                                            <td class="align-middle">
                                                <div class="dropdown dropstart">
                                                    <a class="text-muted text-primary-hover" href="#" role="button" id="dropdownTeamFour" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="icon-xxs" data-feather="more-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownTeamFour">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else
                                here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">

                                                    <div>
                                                        <img src="assets/images/avatar/avatar-5.jpg" alt="" class="avatar-md avatar rounded-circle">
                                                    </div>

                                                    <div class="ms-3 lh-1">
                                                        <h5 class=" mb-1">Patricia Murrill</h5>
                                                        <p class="mb-0">patriciamurrill@example.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">NGN 4000</td>
                                            <td class="align-middle">3 May, 2023</td>
                                            <td class="align-middle">
                                                <div class="dropdown dropstart">
                                                    <a class="text-muted text-primary-hover" href="#" role="button" id="dropdownTeamFive" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="icon-xxs" data-feather="more-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownTeamFive">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else
                                here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle border-bottom-0">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img src="assets/images/avatar/avatar-6.jpg" alt="" class="avatar-md avatar rounded-circle">
                                                    </div>
                                                    <div class="ms-3 lh-1">
                                                        <h5 class=" mb-1">Darshini Nair</h5>
                                                        <p class="mb-0">darshininair@example.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle border-bottom-0">NGN 10000</td>
                                            <td class="align-middle border-bottom-0">3 May, 2023</td>
                                            <td class="align-middle border-bottom-0">
                                                <div class="dropdown dropstart">
                                                    <a class="text-muted text-primary-hover" href="#" role="button" id="dropdownTeamSix" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="icon-xxs" data-feather="more-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownTeamSix">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else
                                here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @extends("Layouts.script")
    @section('script')
    @endsection

@endsection
