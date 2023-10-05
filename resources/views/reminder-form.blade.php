@extends('Layouts.master')
@section('content')
    <div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0
        min-vh-100">
        <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">

        <div class="card smooth-shadow-md">

            <div class="card-body p-6">
            <div class="mb-4">
                <a href=""><h3 class="mb-2 text-primary" alt="" >Debt Reminder</h3></a>
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

            <form action="{{ route("remind") }}" method="POST">
                @csrf

                <div class="mb-3">
                    <select class="form-select" name="method">
                        <option selected >Choose Method Of Reminder</option>
                        <option value="email">Email</option>
                        <option value="sms">SMS</option>
                    </select>
                </div>

                <div class="mb-3">
                    <select class="form-select" name="time">
                        {{-- <option selected >Time</option> --}}
                        <option class="form-select" name="daily"> Daily
                            <option value="morning">Morning - 8am</option>
                            <option value="afternon">Afternoon - 2pm</option>
                            <option value="evening">Evening - 8pm</option>
                        </option>
                        <option value="monthly">Monthly
                            <option value=""> CALENDER</option>
                        </option>
                    </select>
                </div>

                {{-- <div class="mb-3">
                    <select class="form-select" name="frequency">
                        <select class="form-select" name="daily">
                        <option selected >Time</option>
                        <option value="daily">Daily</option>
                        <option value="monthly">Monthly</option>
                    </select>
                </div> --}}

                <div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                <div class="d-md-flex justify-content-between mt-4">
                    <div class="mb-2 mb-md-0">
                    <a href="{{ route("register") }}" class="fs-5">Create An
                        Account </a>
                    </div>
                    <div>
                    <a href="{{ route("password.forget") }}" class="text-inherit
                        fs-5">Forgot your password?</a>
                    </div>

                </div>
                </div>


            </form>
            </div>
        </div>
        </div>
    </div>
    </div>

@endsection
