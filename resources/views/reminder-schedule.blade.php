@extends("Layouts.sidebar-and-navbar")
@section("page-content")

    <div class="col-lg-12 col-md-12 col-12 mt-3 ">
        <div class="card h-100">

            <div class="card-header bg-white py-2">
                <div class="row">

                    <div class="col-10">
                        <h4 class="mb-0"> Reminders </h4>
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
                    <div class="alert alert-danger display-hide text-center py-6 my-6">
                    <span>{{ $message }}</span>
                    </div>
                @endforeach
            @endif

            <div class="table-responsive">

                @isset($debtors)

                    <table class="table text-nowrap">
                        <thead class="table-light">
                            <tr>
                                <th>Debtor's Name</th>

                                <th> Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ( $debtors as $debtor)

                                <tr>
                                    <td class="align-middle mr-5">
                                        <div class="d-flex align-items-center">

                                            <div class="ms-3 lh-1">
                                                <h5 class="mb-1"> {{ $debtor->first_name ." ". $debtor->last_name }} </h5>
                                            </div>
                                        </div>
                                    </td>


                                    <td class="align-middle d-flex ml-5" height="65">

                                                @if ($reminders !== null)
                                                    <div class="dropdown dropstart col mt-2 col" style="display:flex;">
                                                        <form action="{{ route("reminders.get", $debtor->id) }}" method="POST">
                                                            @csrf
                                                            <button type="submit" class="btn btn-success">
                                                                View Reminders
                                                            </button>
                                                        </form>
                                                    </div>
                                                @else
                                                    <form action="{{ route("reminder.form", $debtor->id) }}" method="">
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary">
                                                            Add Reminder
                                                        </button>
                                                    </form>
                                                @endif
                                    </td>
                                </tr>

                            @endforeach

                        </tbody>
                    </table>

                @endisset


            </div>


        </div>
    </div>

@endsection

