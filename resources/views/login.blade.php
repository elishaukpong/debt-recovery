<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset("assets/images/favicon/favicon.ico") }}">
<link rel="stylesheet" href="{{ asset("assets/css/theme.css") }}">

  <title>Login</title>
</head>

<body class="bg-light">

  <div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0
        min-vh-100">
      <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">

        <div class="card smooth-shadow-md">

          <div class="card-body p-6">
            <div class="mb-4">
              <a href=""><h3 class="mb-2 text-primary" alt="" >Debt Recovery</h3></a>
              <p class="mb-6">Please enter your user information.</p>
            </div>

            @if(count($errors) > 0)
                @foreach( $errors->all() as $message )
                    <div class="alert alert-danger display-hide">
                    <span>{{ $message }}</span>
                    </div>
                @endforeach
            @endif

            <form action="{{ route("login") }}" method="POST">
                @csrf

              <div class="mb-3">
                <input type="email" id="email" class="form-control" name="email" placeholder="Email address here" required="">
              </div>

              <div class="mb-3">
                <input type="password" id="password" class="form-control" name="password" placeholder="**************" required="">
              </div>

              <div class="d-lg-flex justify-content-between align-items-center
                  mb-4">
                <div class="form-check custom-checkbox">
                  <input type="checkbox" class="form-check-input" id="rememberme">
                  <label class="form-check-label" for="rememberme">Remember me</label>
                </div>

              </div>

              <div>
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Login</button>
                </div>

                <div class="d-md-flex justify-content-between mt-4">
                  <div class="mb-2 mb-md-0">
                    <a href="{{ route("register") }}" class="fs-5">Create An
                        Account </a>
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
</body>

</html>
