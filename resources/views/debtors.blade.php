@extends("Layouts.sidebar-and-navbar")
@section("page-content")
    <div class="col-lg-12 col-md-12 col-12 mt-3 ">
        <div class="card h-100">

            <div class="card-header bg-white py-2">
                <div class="row">

                    <div class="col-10">
                        <h4 class="mb-0">Debtors </h4>
                    </div>

                    <div class="col-2">
                        <a href="{{ route('debtor.form') }}" class="btn btn-outline-primary
                            d-md-block">Create Debtor
                        </a>
                    </div>
                </div>
            </div>

            @if(count($errors) > 0)
                @foreach( $errors->all() as $message )
                    <div class="alert alert-danger display-hide">
                    <span>{{ $message }}</span>
                    </div>
                @endforeach
            @endif

            @isset($debtors)

                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Phone Number</th>
                                <th>Amount</th>
                                <th>Due Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($debtors as $debtor)
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">
                                            @isset($debtor->image)

                                                <div>
                                                    <img src="assets/images/avatar/avatar-2.jpg" alt="" class="avatar-md avatar rounded-circle">
                                                </div>
                                            @endisset
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1">{{ $debtor->first_name . " ". $debtor->last_name}}</h5>
                                                <p class="mb-0">{{ $debtor->email}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">{{ $debtor->phone_number }}</td>
                                    <td class="align-middle"> {{ $debtor->currency." ".$debtor->amount }}</td>
                                    <td class="align-middle">{{ $debtor->due_date}} </td>
                                    <td>
                                       <div class="text-success"><em>Active</em></div>
                                        <div class="dropdown dropstart">
                                            <a class="text-muted text-primary-hover" href="#" role="button" id="dropdownTeamOne" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="icon-xxs" data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownTeamOne">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something elsehere</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            @endisset

        </div>
    </div>
@endsection

