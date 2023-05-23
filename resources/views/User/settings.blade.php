<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Settings</title>
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
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>


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
                    <a href="{{route("user_dashboard")}}" class="nav-item nav-link  mb-2"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle mb-2 " data-bs-toggle="dropdown"><i class="fa fa-chart-bar me-2"></i>Pending</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route("pending_emails")}}" class="dropdown-item"> Email</a>
                            <a href="{{route("pending_sms")}}" class="dropdown-item "> SMS</a>
                            <a href="{{route("pending_calls")}}" class="dropdown-item"> Call</a>
                        </div>
                    </div> <a href="{{route("debt_history")}}" class="nav-item nav-link mb-2"><i class="fa fa-table me-2"></i>Debt History</a>
                    <a href="{{route("debt_portal")}}" class="nav-item nav-link mb-2"><i class="  fa fa-th me-2"></i>Debt Portal</a>
                    <a href="{{route("settings")}}" class="active nav-item nav-link mb-2"><i class="fa fa-cog me-2"></i>Settings</a>

                </div>
            </nav>
        </div>


        <div class="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"> <h2>Settings</h2> </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a class="menu-nav-link ms-2 ps-5 active" aria-current="page" href="#" id="profileLink"><div  onclick="showProfile()"> Profile</div></a>
                      <a class="menu-nav-link ms-5 ps-5" href="#"><div onclick="showPassword()"> Password </div></a>
                    </div>
                  </div>
                </div>
            </nav>

            <div class="container-fluid pt-1 px-4">
                <div class="profile row g-4 setmenu" id="profile" style="display: none">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-5">

                            <h4 class="mb-4">Profile</h4>
                            <small>Update your personal details here</small>

                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                  <label for="First Name" class="col-form-label" >First Name</label>
                                </div>
                                <div class="col-7">
                                  <input type="text" class="form-control" name="first_name">
                                </div>
                            </div>

                            <div class="row g-3 pt-4 align-items-center">
                                <div class="col-3">
                                  <label for="Last Name" class="col-form-label" >Last Name</label>
                                </div>
                                <div class="col-7">
                                  <input type="text" class="form-control" name="last_name">
                                </div>
                            </div>

                            <div class="row g-3  pt-4 align-items-center">
                                <div class="col-3">
                                  <label class="col-form-label" name="email">Email</label>
                                </div>
                                <div class="col-7">
                                  <input type="email" class="form-control">
                                </div>
                            </div>

                            <div class="row g-3 pt-4 align-items-center">
                                <div class="col-3">
                                  <label class="col-form-label">Phone number</label>
                                </div>
                                <div name="phone_number" class="col-7">
                                  <input type="number" class="form-control"  placeholder="08034728913">
                                </div>
                            </div>

                            <div class="row g-3 pt-4 align-items-center">
                                <div class="col-3">
                                    <label for="inputPassword6" class="col-form-label">Photo</label>
                                </div>
                                <div class="col-7">
                                    <input type="file" name="photo">
                                </div>
                            </div>

                        </div>

                        <button class="btn btn-primary mt-3 col-1">Edit</button>
                    </div>
                </div>

                <div class="password row g-4 setmenu" id="password" style="display: none">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-5">

                            <h4 class="mb-4">Reset Password</h4>

                            <div class="row g-3 pt-4 align-items-center">

                              <div class="col-3">
                                <label for="inputPassword6" class="col-form-label">Old Password</label>
                              </div>

                              <div class="col-7">
                                <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="password">
                              </div>

                              <div class="col-3">
                                <label for="inputPassword6" class="col-form-label">New Password</label>
                              </div>

                              <div class="col-7">
                                <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="password">
                              </div>

                              <div class="col-3">
                                <label for="inputPassword6" class="col-form-label">Confirm Password</label>
                              </div>

                              <div class="col-7">
                                <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="password">
                              </div>

                            </div>


                        </div>

                        <button class="btn btn-primary mt-3 col-1">Change</button>
                    </div>
                </div>

            </div>
        </div>
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

        const Setmenus = document.querySelectorAll('.setmenu');
        let Profile = document.getElementById("profile");
        let Password = document.getElementById("password");
        let Menus = document.querySelectorAll('.menu-nav-link');

        window.addEventListener('load', function (){
            showProfile();
            document.getElementById('profileLink').click();

        });

        Menus.forEach(menu => {
          menu.addEventListener('click', ()=>{
            menu.style.color = '#009CFF';
          })
        })

        function hide(){
            Setmenus.forEach(Setmenu => {
            Setmenu.style.display = 'none';

            Menus.forEach(function(menu){
                menu.style.color = '#000';

            })
            });

        }

        function showProfile() {
            hide();

            if (Profile.style.display === "none") {
                Profile.style.display = "block";
            }

        }

        function showPassword() {
            hide();

            if (Password.style.display === "none") {
                Password.style.display = "block";
            }

        }

    </script>
</body>

</html>
