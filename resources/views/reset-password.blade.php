@extends('Layouts.master')
@section('content')

  <div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0
        min-vh-100">
      <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">

        <div class="card smooth-shadow-md">

          <div class="card-body p-6">
            <div class="mb-4">
                <a href=""><h3 class="mb-2 text-primary" alt="" >Debt Recovery</h3></a>
              <p class="mb-6">Reset your password here.
              </p>
            </div>

            @if(count($errors) > 0)
                @foreach( $errors->all() as $message )
                    <div class="alert alert-danger display-hide">
                    <span>{{ $message }}</span>
                    </div>
                @endforeach
            @endif

            <form action="{{route('password.reset')}}" method="POST">
                @csrf
              <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{ request()-> email }}" readonly>
              </div>

              <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Enter Your New Password" required>
              </div>

              <div class="mb-3">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
              </div>

              <div class="mb-3 d-grid">
                <button type="submit" class="btn btn-primary">
                    Reset Password
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
