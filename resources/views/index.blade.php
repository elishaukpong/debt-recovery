@extends("Layouts.sidebar-and-navbar")
@section("page-content")

    <div class="container-fluid mt-3">
        <div class="row mt-6">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header bg-white  py-4">
                        <h4 class="mb-0">Active Debts</h4>
                    </div>
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
                                @if ($debtors)

                                @foreach ($debtors as $debtor)
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1"> <a href="#" class="text-inherit">{{ $debtor->first_name}} {{$debtor->last_name}}</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">{{ $debtor->due_date}}</td>
                                    <td> <div class="float-start me-3">{{$debtor->currency}} {{$debtor->amount}}</div> </td>
                                    <td class="align-middle text-dark">
                                        <div class="float-start me-3">15%</div>
                                        <div class="mt-2">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width:15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                                @else
                                <h2 class="text-center"> NO DEBTORS AVAILABLE</h2>
                                @endif

                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer bg-white text-center">
                        <a href="#" class="link-primary">View All Debts</a>

                    </div>
                </div>

            </div>
        </div>

        <div class="row my-6">
            <div class="col-xl-4 col-lg-12 col-md-12 col-12 mb-6 mb-xl-0">

                <div class="card h-100">

                    <div class="card-body">
                        <div class="d-flex align-items-center
            justify-content-between">
                            <div>
                                <h4 class="mb-0">Debt Performance </h4>
                            </div>

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

                        <div class="mb-8">
                            <div id="perfomanceChart"></div>
                        </div>

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

            <div class="col-xl-8 col-lg-12 col-md-12 col-12">
                <div class="card h-100">

                    <div class="card-header bg-white py-4">
                        <h4 class="mb-0">Last Paid</h4>
                    </div>

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


    @extends("Layouts.script")
    @section('script')
    @endsection

@endsection
