@extends("Layouts.sidebar-and-navbar")
@section("page-content")

    <div id="db-wrapper">

        <div class="container-fluid p-4">
            <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-2 mb-2 ">

                    <h3 class="mb-0 fw-bold">Profile</h3>


                </div>
            </div>
            </div>
            <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">

                <div class="pt-20 rounded-top" style="background:
                    url(../assets/images/background/profile-cover.jpg) no-repeat;
                    background-size: cover;">
                </div>
                <div class="bg-white rounded-bottom smooth-shadow-sm ">
                    <div class="d-flex align-items-center justify-content-between
                        pt-4 pb-6 px-4">
                        <div class="d-flex align-items-center">

                        <div class="avatar-xxl avatar-indicators avatar-online me-2
                            position-relative d-flex justify-content-end
                            align-items-end mt-n10">
                            <img src="../assets/images/avatar/avatar-1.jpg" class="avatar-xxl
                                rounded-circle border border-4 border-white-color-40" alt="">
                            <a href="#!" class="position-absolute top-0 right-0 me-2" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Verified">
                                {{-- @if($user->profilepic)
                                    {{$user->profilepic}}
                                @else
                                    NULL
                                @endif --}}
                                <img src="../assets/images/svg/checked-mark.svg" alt="" height="30" width="30">
                            </a>
                        </div>

                        <div class="lh-1">
                            <h2 class="mb-0">{{$user->first_name}} {{$user->last_name}}
                            <a href="#!" class="text-decoration-none" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Beginner">

                            </a>
                            </h2>
                        </div>
                        </div>
                        <div>
                        <a href="{{route('profile.edit')}}" class="btn btn-outline-primary
                            d-none d-md-block">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="py-6">

                    <div class="card">

                        <div class="card-body">

                        <h4 class="card-title">About Me</h4>

                            <div class="row">
                                <div class="col-12 mb-5">

                                <h6 class="text-uppercase fs-5 ls-2">Gender
                                </h6>
                                <p class="mb-0">
                                    @if($user->gender)
                                    {{$user->gender}}
                                    @else
                                    NULL
                                    @endif
                                </p>
                                </div>
                                <div class="col-6 mb-5">
                                <h6 class="text-uppercase fs-5 ls-2">Phone </h6>
                                <p class="mb-0">{{$user->phone_number}}</p>
                                </div>
                                <div class="col-6 mb-5">
                                </div>
                                <div class="col-6">
                                <h6 class="text-uppercase fs-5 ls-2">Email </h6>
                                <p class="mb-0">{{$user->email}}</p>
                                </div>
                                <div class="col-6">
                                    <h6 class="text-uppercase fs-5 ls-2">Location
                                    </h6>
                                    <p class="mb-0">
                                        @if($user->gender)
                                        {{$user->gender}}
                                        @else
                                        NULL
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
@endsection
