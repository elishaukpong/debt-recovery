<!DOCTYPE html>
<html lang="en">

<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Favicon icon-->
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset("assets/images/favicon/favicon.ico")}}">

      <!-- Libs CSS -->


      <link href="{{asset("node_modules/bootstrap-icons/font/bootstrap-icons.css")}}" rel="stylesheet">
      <link href="{{ asset ("node_modules/dropzone/dist/dropzone.css") }}"  rel="stylesheet">
      <link href="{{ asset("node_modules/@mdi/font/css/materialdesignicons.min.css") }}" rel="stylesheet" />
      <link href="{{ asset("node_modules/prismjs/themes/prism-okaidia.css") }}" rel="stylesheet">

      <!-- Theme CSS -->
      <!-- build:css @@webRoot/assets/css/theme.min.css -->
      <link rel="stylesheet" href="{{ asset("assets/css/theme.css") }}">
      <!-- endbuild -->

    <title>Forget Password</title>
</head>

<body class="bg-light">
  <div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0
        min-vh-100">
      <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
        <!-- Card -->
        <div class="card smooth-shadow-md">
          <!-- Card body -->
          <div class="card-body p-6">
            <div class="mb-4">
                <a href=""><h3 class="mb-2 text-primary" alt="" >Debt Recovery</h3></a>
              <p class="mb-6">Don't worry, we'll send you an email to reset your password.
              </p>
            </div>
            <!-- Form -->
            <form>
              <!-- Email -->
              <div class="mb-3">
                <input type="email" id="email" class="form-control" name="email" placeholder="Enter Your Email" required="">
              </div>
              <!-- Button -->
              <div class="mb-3 d-grid">
                <button type="submit" class="btn btn-primary">
                    Reset Password
                  </button>
              </div>
              <span>Already have an account? <a href="{{route("login")}}">login</a></span>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  {{-- @@include("../partials/scripts.html" --}}

   <!-- Libs JS -->
   <script src="@@webRoot/node_modules/jquery/dist/jquery.min.js"></script>
   <script src="@@webRoot/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   <script src="@@webRoot/node_modules/jquery-slimscroll/jquery.slimscroll.min.js"></script>
   <script src="@@webRoot/node_modules/feather-icons/dist/feather.min.js"></script>
   <script src="@@webRoot/node_modules/prismjs/prism.js"></script>
   <script src="@@webRoot/node_modules/apexcharts/dist/apexcharts.min.js"></script>
   <script src="@@webRoot/node_modules/dropzone/dist/min/dropzone.min.js"></script>
   <script src="@@webRoot/node_modules/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
   <script src="@@webRoot/node_modules/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>




   <!-- Theme JS -->
   <!-- build:js @@webRoot/assets/js/theme.min.js -->
   <script src="{{ asset("assets/js/main.js") }}"></script>
   <script src="{{ asset("assets/js/feather.js") }}"></script>
   <script src="{{ asset ("assets/js/sidebarMenu.js") }}"></script>



    <!-- endbuild -->
</body>

</html>
