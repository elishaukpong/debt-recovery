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
                            <form action="{{ route("debtor.edit", $debtor->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method("put")
                                <div class="mb-3 row">
                                    <label for="fullName" class="col-sm-4 col-form-label
                                        form-label">Full name</label>
                                    <div class="col-sm-4 mb-3 mb-lg-0">
                                        <input type="text" class="form-control" placeholder="First name" name="first_name" value="{{ old('name', $debtor->first_name) }}" required>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" placeholder="Last name" name="last_name" value="{{ old('last_name', $debtor->last_name ) }}" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="email" class="col-sm-4 col-form-label
                                        form-label">Email</label>
                                    <div class="col-md-8 col-12">
                                        <input type="email" class="form-control" placeholder="Email" id="email" name="email" value="{{ old('email', $debtor->email) }}" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="phone" class="col-sm-4 col-form-label
                                        form-label">Phone</label>
                                    <div class="col-md-8 col-12">
                                        <input type="text" class="form-control" placeholder="Phone" name="phone_number" value="{{ old('phone_number', $debtor->phone_number) }}" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="Currency" class="col-sm-4 col-form-label form-label">Currency
                                    </label>

                                    <div class="col-md-3 col-12">
                                        <select class="form-select" name="currency" value="{{ old('phone_number', $debtor->currency) }}">
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
                                        <input type="number" class="form-control" placeholder="Amount" name="amount" value="{{ old('amount', $debtor->amount) }}" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="date" class="col-sm-4 col-form-label
                                    form-label">Date</label>
                                    <div class="col-md-8 col-12">
                                        <input type="text" class="form-control" placeholder="Due Date" name="due_date" value="{{ old('due_date', $debtor->due_date) }}" required>
                                    </div>
                                </div>

                                <div class="row align-items-center">

                                    <div class="offset-md-4 col-md-8 mt-4">
                                        <button type="submit" class="btn btn-primary">
                                           Edit
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

@endsection
