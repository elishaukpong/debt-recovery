@extends("Layouts.sidebar-and-navbar")
@section("page-content")

    <div class="col-lg-12 col-md-12 col-12 mt-3 ">
        <div class="card h-100">

            <div class="card-header bg-white py-2">
                <div class="row">

                    <div class="col-10">
                        <h4 class="mb-0"> {{ $debtor->first_name}} {{ $debtor->last_name}}'s Reminders </h4>
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

            <div class="table-responsive">

                <table class="table text-nowrap">
                    <thead class="table-light">
                        <tr>
                            <th>Method</th>
                            <th>Time</th>
                            <th>Frequency</th>
                            <th> Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ( $reminders as $reminder)

                            <tr>
                                <td class="align-middle mr-5">
                                    <div class="d-flex align-items-center">

                                        <div class="ms-3 lh-1">
                                            <h5 class="mb-1"> {{ $reminder->method}} </h5>
                                        </div>
                                    </div>
                                </td>

                                <td class="align-middle mr-5">
                                    <div class="d-flex align-items-center">

                                        <div class="ms-3 lh-1">
                                            <h5 class="mb-1"> {{ $reminder->time}} </h5>
                                        </div>
                                    </div>
                                </td>

                                <td class="align-middle mr-5">
                                    <div class="d-flex align-items-center">

                                        <div class="ms-3 lh-1">
                                            <h5 class="mb-1"> {{ $reminder->frequency}} </h5>
                                        </div>
                                    </div>
                                </td>

                                <td class="text-success"> Pending</td>

                            </tr>

                        @endforeach

                    </tbody>
                </table>

            </div>


        </div>
    </div>

@endsection

