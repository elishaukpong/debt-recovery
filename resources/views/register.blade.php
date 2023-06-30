@extends('Layouts.master')
@section('content')

    <div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0
        min-vh-100">
        <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">

        <div class="card smooth-shadow-md">

            <div class="card-body p-6">
            <div class="mb-4">
                <a href="#"><h3 class="mb-2 text-primary" alt="" > Debt Recovery </h3></a>
                <p class="mb-6">Please enter your user information.</p>
                @isset($messsage)
                    <div style="color: red"> $message </div>
                @endisset

            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route("register") }}" method="POST">
                @csrf

                <div class="mb-3">
                <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required>
                </div>

                <div class="mb-3">
                <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required>
                </div>

                <div class="mb-3">
                <input type="email"  class="form-control" name="email" placeholder="Email address here" value="{{ old('email') }}" required>
                </div>

                <div class="mb-3">
                <input type="text"  class="form-control" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}" required>
                </div>

                <div class="mb-3">
                <input type="password" id="password" class="form-control" name="password" placeholder="Password" value="{{ old('password') }}" required>
                </div>

                <div class="mb-3">
                <input type="password" id="confirm-password" class="form-control" name="password_confirmation" placeholder="Confirm Password" value="{{ old('password_confirmation') }}" required>
                </div>

                <div class="mb-3">
                <div class="form-check custom-checkbox">
                    <input type="checkbox" class="form-check-input" id="agreeCheck">
                    <label class="form-check-label" for="agreeCheck"><span
                        class="fs-5">I agree to the <a
                            href="terms-condition-page.html">Terms of
                            Service </a>and
                        <a href="terms-condition-page.html">Privacy Policy.</a></span></label>
                </div>
                </div>
                <div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">
                    Create Free Account
                    </button>
                </div>

                <div class="d-md-flex justify-content-between mt-4">
                    <div class="mb-2 mb-md-0">
                    <a href="{{ route("login")  }}" class="fs-5">Already
                        member? Login </a>
                    </div>
                    <div>
                    <a href="{{ route("forgetPassword") }}" class="text-inherit
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
