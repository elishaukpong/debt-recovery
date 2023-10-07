@extends('Layouts.master')
@section('content')
    <div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0
        min-vh-100">
        <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">

        <div class="card smooth-shadow-md">

            <div class="card-body p-6">
            <div class="mb-4">
                <a href=""><h3 class="mb-2 text-primary" alt="" > Set Debt Reminder</h3></a>
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

                <input type="text" name="debtor_id" value="{{$debtor->id}}" hidden/>
                <div class="mb-3">
                    <select class="form-select" name="method">
                        <option selected hidden >Method</option>
                        <option value="email">Email</option>
                        <option value="sms">SMS</option>
                    </select>
                </div>

                <div class="mb-3">
                    <select class="form-select" name="time">
                        <option selected hidden >Time</option>
                        <option value="daily">Daily</option>
                        <option value="monthly">Monthly</option>
                    </select>
                </div>

                <div class="mb-3">
                    <select class="form-select" name="frequency">
                        <option selected hidden >Frequency</option>
                        <option value=" 1"> Once </option>
                        <option value=" 2"> Two Times</option>
                        <option value=" 3"> Three Times</option>
                        <option value=" 4"> Four Times</option>
                        <option value=" 5"> Five Times</option>
                    </select>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
            </div>
        </div>
        </div>
    </div>
    </div>

@endsection
