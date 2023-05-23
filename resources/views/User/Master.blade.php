<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>User Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <link href="{{asset("assets/assets1/css/bootstrap.min.css")}}" rel="stylesheet">

    <link href="{{asset("assets/assets1/css/style.css")}}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">

        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHBOARD</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-5">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="#" class="nav-item nav-link active mb-2"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle mb-2" data-bs-toggle="dropdown"><i class="fa fa-chart-bar me-2"></i>Pending</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route("pending_emails")}}" class="nav-item dropdown-item"> Email</a>
                            <a href="{{route("pending_sms")}}" class="nav-item dropdown-item"> SMS</a>
                            <a href="{{route("pending_calls")}}" class="nav-item dropdown-item"> Call</a>
                        </div>
                    </div>
                    <a href="widget.html" class="nav-item nav-link mb-2"><i class="fa fa-table me-2"></i>Debt History</a>
                    <a href="form.html" class="nav-item nav-link mb-2"><i class="fa fa-th me-2"></i>Debt Portal</a>
                    <a href="chart.html" class="nav-item nav-link mb-2"><i class="fa fa-cog me-2"></i>Settings</a>
                </div>
            </nav>
        </div>
        @yield("content")
    </div>




    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset("assets/assets1/lib/chart/chart.min.js")}}"></script>
    <script src="{{asset("assets/assets1/lib/easing/easing.min.js")}}"></script>
    <script src="{{asset("assets/assets1/lib/waypoints/waypoints.min.js")}}"></script>
    <script src="{{asset("assets/assets1/lib/owlcarousel/owl.carousel.min.js")}}"></script>
    <script src="{{asset("assets/assets1/lib/tempusdominus/js/moment.min.js")}}"></script>
    <script src="{{asset("assets/assets1/lib/tempusdominus/js/moment-timezone.min.js")}}"></script>
    <script src="{{asset("assets/assets1/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js")}}"></script>

    <script src="{{asset("assets/assets1/js/main.js")}}"></script>

    <script>
        let navItems = document.querySelectorAll("nav-item");

        navItems.forEach(navItem => {
            navItem.addEventListener( 'click', function (){
                navItems.forEach(navItem => navItem.classList.remove('active'));
                this.classLIst.add("active");
            })
        })
    </script>
</body>

</html>
