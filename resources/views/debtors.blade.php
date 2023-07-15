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

            @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
            @endif

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
                                    <td class="align-middle">{{ $debtor->due_date }} </td>
                                    <td class="align-middle d-flex" height="65">
                                       <div class="text-success mt-2 col"><em>Active</em></div>

                                       <div class="dropdown dropstart col mt-2 col">
                                            <a href="{{ route("debtor.editform") }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg>
                                            </a>

                                            <a href="#" class="mt-2">
                                                <svg class="ms-3" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z"/></svg>
                                            </a>
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

