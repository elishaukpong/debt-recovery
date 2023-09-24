@extends("Layouts.sidebar-and-navbar")
@section("page-content")

    <div class="container-fluid p-6">

        <div class="row mb-8 ml-5 pl-5">

            <div class="col-xl-2 col-lg-2"></div>

          <div class=" ml-5 pl-5 col-xl-8 col-lg-8 col-md-12 col-12">

            <div class="card ml-5 pl-5">

              <div class="card-body">

                <div class=" mb-6">
                    <i class="fa-solid fa-send-back"></i>
                  <h4 class="mb-1">Edit Profile</h4>

                </div>
                <div class="row align-items-center mb-8">
                  <div class="col-md-3 mb-3 mb-md-0">
                    <h5 class="mb-0">Avatar</h5>
                  </div>
                  <div class="col-md-9">
                    <div class="d-flex align-items-center">
                      <div class="me-3">
                        <img src="../assets/images/avatar/avatar-5.jpg" class="rounded-circle avatar avatar-lg" alt="">
                      </div>
                      <div>
                        <button type="submit" class="btn btn-outline-white
                            me-1">Change</button>
                        <button type="submit" class="btn btn-outline-white">Remove</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mb-8">
                  <div class="col-md-3 mb-3 mb-md-0">

                    <h5 class="mb-0">Cover photo</h5>
                  </div>
                  <div class="col-md-9">

                    <div>
                      <form action="#" class="dropzone mb-3 border-dashed">
                        <div class="fallback">
                          <input name="file" type="file" multiple />
                        </div>
                      </form>
                      <button type="submit" class="btn btn-outline-white">Change</button>
                    </div>
                  </div>
                </div>
                <div>

                  <div class="mb-6">
                    <h4 class="mb-1">Basic information</h4>

                  </div>
                  <form action="{{route('profile.edit')}}">


                    <div class="mb-3 row">
                      <label for="fullName" class="col-sm-4 col-form-label
                          form-label">Full name</label>
                      <div class="col-sm-4 mb-3 mb-lg-0">
                        <input type="text" class="form-control" placeholder="First name" id="fullName" name="first_name" value="{{ old('first_name', $user->first_name) }}" required>
                      </div>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Last name" id="lastName" name="last_name" value="{{ old('last_name', $user->last_name) }}" required>
                      </div>
                    </div>

                    <div class="mb-3 row">
                      <label for="email" class="col-sm-4 col-form-label
                          form-label">Email</label>
                      <div class="col-md-8 col-12">
                        <input type="email" class="form-control" placeholder="Email" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                      </div>
                    </div>

                    <div class="mb-3 row">
                      <label for="phone" class="col-sm-4 col-form-label
                          form-label">Phone</label>
                      <div class="col-md-8 col-12">
                        <input type="text" class="form-control" placeholder="Phone" id="phone" name="phone_number" value="{{ old('first_name', $user->phone_number) }}" required>
                      </div>
                    </div>

                    <div class="mb-3 row">
                      <label for="location" class="col-sm-4 col-form-label
                          form-label" name="location" value="{{ old('location', $user->location) }}">Location</label>

                      <div class="col-md-8 col-12">
                        <select class="form-select" id="location">
                            <option selected>Select Country</option>
                            <option value="1">Canada</option>
                            <option value="2">India</option>
                            <option value="3">Nigeria</option>
                            <option value="4">UK</option>
                            <option value="5">USA</option>
                          </select>
                      </div>
                    </div>

                      <div class="offset-md-4 col-md-8 mt-4">
                        <button type="submit" class="btn btn-primary"> Save Changes</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
    </div>
@endsection
