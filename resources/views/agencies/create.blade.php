@extends('layouts.layout')
@section('content')
    {{-- @extends('layouts.app') --}}
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Create New User</h1>
            <a href="{{ route('agency') }}" class="btn btn-primary btn-sm float-right px-3 py-2" title="Edit Student">
                <h5>User List</h5>
            </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <!-- /.card-header -->
            <div class="card-body  p-0">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">


                            <div class="card-body">
                                <form method="POST" action="{{ route('user.create') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-3">
                                        <div class="col-md-4">

                                            <label for="name" class=" col-form-label text-md-end">Name</label>
                                            <div class="">
                                                <input id="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    value="{{ old('name') }}" required autocomplete="name" autofocus
                                                    placeholder="Eenter User Name">

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class=" mb-4">
                                                <label for="short_code" class="col-form-label text-md-end">Short
                                                    Code</label>
                                                <div class="">
                                                    <input id="short_code" type="text"
                                                        class="form-control @error('short_code') is-invalid @enderror"
                                                        name="short_code" value="{{ old('short_code') }}" required
                                                        autocomplete="short_code" placeholder="Enter short code">

                                                    @error('short_code')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-4">
                                                <label for="agency_type" class="col-form-label text-md-end">Agency
                                                    Type</label>

                                                <div class="">
                                                    <input id="agency_type" type="dropdown"
                                                        class="form-control @error('agency_type') is-invalid @enderror"
                                                        name="agency_type" value="{{ old('agency_type') }}" required
                                                        autocomplete="agency_type" placeholder="Enter agency type">

                                                    @error('agency_type')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">

                                        <div class="col-md-4">

                                            <label for="contact_person" class=" col-form-label text-md-end">Contact
                                                person</label>
                                            <div class="">
                                                <input id="contact_person" type="text"
                                                    class="form-control @error('contact_person') is-invalid @enderror"
                                                    name="contact_person" value="{{ old('contact_person') }}" required
                                                    autocomplete="contact_person" autofocus
                                                    placeholder="Eenter User contact_person">

                                                @error('contact_person')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class=" mb-4">
                                                <label for="email" class="col-form-label text-md-end">Email</label>
                                                <div class="">
                                                    <input id="email" type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}" required
                                                        autocomplete="email" placeholder="Enter Email">

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-4">
                                                <label for="phone" class="col-form-label text-md-end">Phone</label>

                                                <div class="">
                                                    <input id="phone" type="phone"
                                                        class="form-control @error('phone') is-invalid @enderror"
                                                        name="phone" value="{{ old('phone') }}" required
                                                        autocomplete="phone" placeholder="Enter phone">

                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <div class="mb-4">
                                                <label for="address" class="col-form-label text-md-end">Address</label>

                                                <div class="">
                                                    <input id="address" type="text"
                                                        class="form-control @error('address') is-invalid @enderror"
                                                        name="address" value="{{ old('address') }}" required
                                                        autocomplete="address" placeholder="Enter address">

                                                    @error('address')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class=" mb-4">
                                                <label for="city" class="col-form-label text-md-end">City</label>
                                                <div class="">
                                                    <input id="city" type="text"
                                                        class="form-control @error('city') is-invalid @enderror"
                                                        name="city" value="{{ old('city') }}" required
                                                        autocomplete="city" placeholder="Enter city">

                                                    @error('city')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-4">
                                                <label for="country" class="col-form-label text-md-end">Country</label>

                                                <div class="">
                                                    <input id="country" type="text"
                                                        class="form-control @error('country') is-invalid @enderror"
                                                        name="country" value="{{ old('country') }}" required
                                                        autocomplete="country" placeholder="Enter country">

                                                    @error('country')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <div class="mb-4">
                                                <label for="agency_commission" class="col-form-label text-md-end">Agency
                                                    Commission</label>

                                                <div class="">
                                                    <input id="agency_commission" type="text"
                                                        class="form-control @error('agency_commission') is-invalid @enderror"
                                                        name="agency_commission" value="{{ old('agency_commission') }}"
                                                        required autocomplete="agency_commission"
                                                        placeholder="Enter agency Commission">

                                                    @error('agency_commission')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class=" mb-4">
                                                <label for="vat" class="col-form-label text-md-end">Vat</label>
                                                <div class="">
                                                    <input id="vat" type="text"
                                                        class="form-control @error('vat') is-invalid @enderror"
                                                        name="vat" value="{{ old('vat') }}" required
                                                        autocomplete="vat" placeholder="Enter vat">

                                                    @error('vat')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-4">
                                                <label for="supplementary_vat"
                                                    class="col-form-label text-md-end">Supplementary Vat</label>

                                                <div class="">
                                                    <input id="supplementary_vat" type="text"
                                                        class="form-control @error('supplementary_vat') is-invalid @enderror"
                                                        name="supplementary_vat" value="{{ old('supplementary_vat') }}"
                                                        required autocomplete="supplementary_vat"
                                                        placeholder="Enter supplementary_vat">

                                                    @error('supplementary_vat')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <div class="mb-4">
                                                <label for="vat_on" class="col-form-label text-md-end">Vat on</label>

                                                <div class="">
                                                    <input id="vat_on" type="text"
                                                        class="form-control @error('vat_on') is-invalid @enderror"
                                                        name="vat_on" value="{{ old('vat_on') }}" required
                                                        autocomplete="vat_on" placeholder="Enter vat_on">

                                                    @error('vat_on')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class=" mb-4">
                                                <label for="commission_on" class="col-form-label text-md-end">Commission
                                                    on</label>
                                                <div class="">
                                                    <input id="commission_on" type="text"
                                                        class="form-control @error('commission_on') is-invalid @enderror"
                                                        name="commission_on" value="{{ old('commission_on') }}" required
                                                        autocomplete="commission_on" placeholder="Enter commission_on">

                                                    @error('commission_on')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>


                                    </div>







                                    <div class="row mb-0 ">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-primary px-5">
                                                Create
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
    </div>
    <!-- /.card-body -->
@endsection
