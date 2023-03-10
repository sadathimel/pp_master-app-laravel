@extends('layouts.layout')
@section('title')
    {{ $agency->name }}
@endsection

@section('content')
    {{-- @extends('layouts.app') --}}
    <div class="card">
        <div class="card-header">
            <h1 class="text-red display-5 px-2 py-2 bg-purple text-center d-block rounded">Edit Agency</h1>
            <a href="{{ route('agency') }}" class="btn btn-primary btn-sm float-right px-3 py-2" title="agency list">
                <h5>Agency List</h5>
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
                                <form method="POST" action="{{ route('agency.edit', ['agency' => $agency->id]) }}"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-3">
                                        <div class="col-md-4">

                                            <label for="name" class=" col-form-label text-md-end">Agency Name</label>
                                            <div class="">
                                                <input id="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    value="{{ old('name') ?? $agency->name }}" required autocomplete="name"
                                                    autofocus placeholder="Enter Agency Name">

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class=" mb-4">
                                                <label for="short_code" class="col-form-label text-md-end">Agency Short
                                                    Code</label>
                                                <div class="">
                                                    <input id="short_code" type="text"
                                                        class="form-control @error('short_code') is-invalid @enderror"
                                                        name="short_code"
                                                        value="{{ old('short_code') ?? $agency->short_code }}" required
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

                                                    <select name="agency_type" class="form-control select2"
                                                        style="width: 100%;">
                                                        <option value="0"
                                                            {{ empty(old('agency_type')) ? ($errors->has('agency_type') ? '' : ($agency->agency_type == 0 ? 'selected' : '')) : (old('agency_type') === 0 ? 'selected' : '') }}>
                                                            Agency
                                                        </option>

                                                        <option value="1"
                                                            {{ empty(old('agency_type')) ? ($errors->has('agency_type') ? '' : ($agency->agency_type == 1 ? 'selected' : '')) : (old('agency_type') === 1 ? 'selected' : '') }}>
                                                            Direct
                                                        </option>
                                                    </select>

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
                                                Person Name</label>
                                            <div class="">
                                                <input id="contact_person" type="text"
                                                    class="form-control @error('contact_person') is-invalid @enderror"
                                                    name="contact_person" value="{{ $agency->contact_person }}" required
                                                    autocomplete="contact_person" autofocus
                                                    placeholder="Enter Contact Person Name">

                                                @error('contact_person')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class=" mb-4">
                                                <label for="email" class="col-form-label text-md-end">Email
                                                    address</label>
                                                <div class="">
                                                    <input id="email" type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email" value="{{ $agency->email }}" required
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
                                                <label for="phone" class="col-form-label text-md-end">Phone No</label>

                                                <div class="">
                                                    <input id="phone" type="phone"
                                                        class="form-control @error('phone') is-invalid @enderror"
                                                        name="phone" value="{{ $agency->phone }}" required
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
                                                        name="address" value="{{ $agency->address }}" required
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
                                                        name="city" value="{{ $agency->city }}" required
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
                                                    <select name="country" class="form-control select2"
                                                        style="width: 100%;">
                                                        <option value="">Select Country</option>
                                                        <option value="0"
                                                            {{ empty(old('country')) ? ($errors->has('country') ? '' : ($agency->country == 0 ? 'selected' : '')) : (old('country') === 0 ? 'selected' : '') }}>
                                                            Bangladesh

                                                        </option>
                                                        <option value="1"
                                                            {{ $agency->country == 1 ? 'selected' : '' }}>


                                                            {{ empty(old('country')) ? $errors->has('country' ? '' : ($agency->country === 1 ? 'selected' : '')) : (old('country') === 1 ? 'selectted' : '') }}

                                                            Others</option>
                                                    </select>

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

                                                <div class="input-group mb-3">
                                                    <input id="agency_commission" type="text"
                                                        class="form-control @error('agency_commission') is-invalid @enderror"
                                                        name="agency_commission" value="{{ $agency->agency_commission }}"
                                                        required autocomplete="agency_commission" placeholder=".00">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">%</span>
                                                    </div>
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
                                                <div class="input-group mb-3">
                                                    <input id="vat" type="text"
                                                        class="form-control @error('vat') is-invalid @enderror"
                                                        name="vat" value="{{ $agency->vat }}" required
                                                        autocomplete="vat" placeholder=".00">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">%</span>
                                                    </div>
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

                                                <div class="input-group mb-3">
                                                    <input id="supplementary_vat" type="text"
                                                        class="form-control @error('supplementary_vat') is-invalid @enderror"
                                                        name="supplementary_vat" value="{{ $agency->supplementary_vat }}"
                                                        required autocomplete="supplementary_vat" placeholder=".00">

                                                    <div class="input-group-append">
                                                        <span class="input-group-text">%</span>
                                                    </div>
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
                                                    <select name="vat_on" class="form-control select2"
                                                        style="width: 100%;">
                                                        <option value="">Select</option>

                                                        <option value="0"
                                                            {{ empty(old('vat_on')) ? ($errors->has('vat_on') ? '' : ($agency->vat_on == 0 ? 'selected' : '')) : (old('vat_on') === 0 ? 'selected' : '') }}>
                                                            Gross
                                                        </option>

                                                        <option value="1"
                                                            {{ empty(old('vat_on')) ? ($errors->has('vat_on') ? '' : ($agency->vat_on == 1 ? 'selected' : '')) : (old('vat_on') === 1 ? 'selected' : '') }}>
                                                            Net
                                                        </option>

                                                        <option value="2"
                                                            {{ empty(old('vat_on')) ? ($errors->has('vat_on') ? '' : ($agency->vat_on == 2 ? 'selected' : '')) : (old('vat_on') === 2 ? 'selected' : '') }}>
                                                            Gross-Agency Commission
                                                        </option>

                                                        <option value="3"
                                                            {{ empty(old('vat_on')) ? ($errors->has('vat_on') ? '' : ($agency->vat_on == 3 ? 'selected' : '')) : (old('vat_on') === 3 ? 'selected' : '') }}>
                                                            Net-Agency Commission
                                                        </option>

                                                    </select>

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
                                                    <select name="commission_on" class="form-control select2"
                                                        style="width: 100%;">
                                                        <option value="">Select</option>

                                                        <option value="0"
                                                            {{ empty(old('commission_on')) ? ($errors->has('commission_on') ? '' : ($agency->commission_on == 0 ? 'selected' : '')) : (old('commission_on') === 0 ? 'selected' : '') }}>
                                                            Gross
                                                        </option>

                                                        <option value="1"
                                                            {{ empty(old('commission_on')) ? ($errors->has('commission_on') ? '' : ($agency->commission_on == 1 ? 'selected' : '')) : (old('commission_on') === 1 ? 'selected' : '') }}>
                                                            Net
                                                        </option>

                                                    </select>

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
                                                Updated
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
