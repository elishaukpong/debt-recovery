@extends("Layouts.sidebar-and-navbar")
@section("page-content")

    <div class="container-fluid p-6" style="overflow: hidden">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">

                <div class="border-bottom pb-4 mb-4">
                    <h3 class="mb-0 fw-bold">Debtor's Form</h3>

                </div>

            </div>
            </div>
            <div class="row mb-8">
                <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                    <div class="mb-4 mb-lg-0">
                        <h4 class="mb-1">Create Debtor</h4>
                        <p class="mb-0 fs-5 text-muted">Fill the form to create a debtor</p>
                    </div>

                </div>

                <div class="col-xl-9 col-lg-8 col-md- col-12">
                    <div class="card">
                        <div class="card-body">

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

                            <div class="mb-6">
                                <h3 class="mb-1">Form</h3>


                            </div>
                            <form action="{{ route("debtor.create") }}" method="POST">
                                @csrf

                                <div class="mb-3 row">
                                    <label for="fullName" class="col-sm-4 col-form-label
                                        form-label">Full name</label>
                                    <div class="col-sm-4 mb-3 mb-lg-0">
                                        <input type="text" class="form-control" placeholder="First name" name=first_name value="{{ old('first_name') }}" required>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" placeholder="Last name" name=last_name value="{{ old('last_name') }}" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="email" class="col-sm-4 col-form-label
                                        form-label">Email</label>
                                    <div class="col-md-8 col-12">
                                        <input type="email" class="form-control" placeholder="Email" id="email" name="email" value="{{ old('email') }}" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="phone" class="col-sm-4 col-form-label
                                        form-label">Phone</label>
                                    <div class="col-md-8 col-12">
                                        <input type="text" class="form-control" placeholder="Phone" name="phone_number" value="{{ old('phone_number') }}" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="Currency" class="col-sm-4 col-form-label form-label">Currency
                                    </label>

                                    <div class="col-md-3 col-12">
                                        <select class="form-select" name="currency" value="NGN">
                                            <option selected>NGN</option>
                                            <option>USD</option>
                                            <option>Pounds</option>
                                            <option>Cedis</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="mb-3 row">
                                    <label for="amount" class="col-sm-4 col-form-label
                                    form-label">Amount</label>
                                    <div class="col-md-8 col-12">
                                        <input type="number" class="form-control" placeholder="Amount" name="amount" value="{{ old('amount') }}" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="date" class="col-sm-4 col-form-label
                                    form-label">Date</label>
                                    <div class="col-md-8 col-12">
                                        <input type="text" class="form-control" placeholder="Due Date" name="due_date" value="{{ old('due_date') }}" required>
                                    </div>
                                </div>


                                <div class="row align-items-center">

                                    <div class="offset-md-4 col-md-8 mt-4">
                                        <button type="submit" class="btn btn-primary">
                                           Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>












    {{-- <div class="container-fluid p-6">
        <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->

            <div class="border-bottom pb-4 mb-4">

                <h3 class="mb-0 fw-bold">Debtors</h3>

                <div class="col-12 mb-6">
                    <!-- card  -->
                    <div class="card">
                    <!-- card header  -->
                    <div class="card-header p-4 bg-white">
                        <h4 class="mb-0">Billing address</h4>
                    </div>
                    <!-- card body  -->
                    <div class="card-body">
                        <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 col-12 mb-4 mb-lg-0">
                            <div class="mb-3 mb-lg-0">
                            <!-- radio  -->
                            <div class="form-check ">
                                <input type="radio" id="shippingBillingAddress" name="customRadio" class="form-check-input" checked>
                                <label class="form-check-label" for="shippingBillingAddress">
                                    <span class="d-block mb-3 text-dark
                                    fw-bold">Shipping Billing Address
                                    </span>
                                    <span class="d-block text-dark
                                    fw-medium fs-4">Valarie
                                    Tarrant</span>
                                    <span class="d-block mb-4">3757 Morgan Street
                                    Tallahassee, FL 32301</span>
                                    <a href="#" class="me-2 link-success">Edit</a>
                                    <a href="#" class="me-2 link-danger">Delete</a>
                                    <a href="#" class="me-2 text-muted
                                    text-primary-hover">Remove as Default Billing</a>
                                </label>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12 d-flex
                            justify-content-lg-end">
                            <!-- text  -->
                            <div class="mb-2">
                            <p class="mb-1">E-mail: <a href="#">valarietarrant@dashui.com</a></p>
                            <p>Phone: 321-654-0987</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <!-- hr  -->
                            <hr class="my-6">
                        </div>
                        <div class="col-lg-6 col-md-12 col-12 mb-4 mb-lg-0">
                            <!-- radio  -->
                            <div class="form-check ">
                            <input type="radio" id="customRadio2" name="customRadio" class="form-check-input">
                            <label class="form-check-label" for="customRadio2">
                                <span class="d-block mb-3 text-dark
                                    fw-bold">Default Billing Address
                                </span>
                                <span class="d-block text-dark fw-medium
                                    fs-4">Mildred Cantu</span>
                                <span class="d-block mb-4">3757 Morgan Street
                                    Tallahassee, FL 32301</span>
                                <a href="#" class="me-2 link-success">Edit</a>
                                <a href="#" class="me-2 link-danger">Delete</a>
                                <a href="#" class="me-2 text-muted
                                    text-primary-hover">Set as Default</a>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12 d-flex
                            justify-content-lg-end">
                            <!-- text  -->
                            <div class="mb-2">
                            <p class="mb-1">E-mail: <a href="#">valarietarrant@dashui.com</a></p>
                            <p>Phone: 321-654-0987</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <!-- hr  -->
                            <hr class="mt-6 mb-4">
                        </div>
                        <div class="col-12">
                            <!-- button  -->
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#billingAddressModal">Add New Address</a>
                        </div>
                        </div>
                    </div>

                    </div>
                </div>

                </div>

            </div>
        </div>

    </div> --}}
@endsection
