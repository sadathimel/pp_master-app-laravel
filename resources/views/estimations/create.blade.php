@extends('layouts.layout')
@section('content')
    {{-- @extends('layouts.app') --}}

    <div class="card">
        <div class="card-header">
            <h1 class="text-red display-5 px-2 py-2 bg-purple text-center d-block rounded">Add Estimation
            </h1>
            <a href="{{ route('estimation') }}" class="btn btn-primary btn-sm float-right px-3 py-2" title="estimation list">
                <h5>Estimation List</h5>
            </a>
        </div>
    </div>
    <!-- /.card-header -->

   

    <div class="modal-body">
        <div class="card-body">

            <div class="card">

                <div class="card-body">
                    <!-- /.card-header -->
                    <div class="card-body  p-0">

                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-12">


                                    <div class="card-body">
                                        <form method="POST" action="{{ route('estimation.create') }}"
                                            enctype="multipart/form-data">
                                            @csrf


                                            <div class="row mb-3">

                                                <div class="col-md-4">
                                                    <!-- Date and time -->
                                                    <div class="form-group">
                                                        <label>Estimation Date</label>
                                                        <div class="input-group date" id="estimation_date"
                                                            data-target-input="nearest">
                                                            <input name="estimation_date" type="text"
                                                                class="form-control datetimepicker-input"
                                                                data-target="#estimation_date" required />
                                                            <div class="input-group-append" data-target="#estimation_date"
                                                                data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i class="fa fa-calendar"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Agency Name</label>
                                                        <select name="agency_type" class="form-control select2"
                                                            style="width: 100%;" required>
                                                            <option disabled selected>Select</option>
                                                            @foreach ($agency_names as $id => $name)
                                                                <option value="{{ $id }}">
                                                                    {{ $name }}
                                                                </option>
                                                            @endforeach
                                                        </select>

                                                        @error('agency_type')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <!-- Date and time -->
                                                    <div class="form-group">
                                                        <label>Period Start</label>
                                                        <div class="input-group date" id="reservationdate"
                                                            data-target-input="nearest">
                                                            <input name="period_start" type="text"
                                                                class="form-control datetimepicker-input"
                                                                data-target="#reservationdate" required />
                                                            <div class="input-group-append" data-target="#reservationdate"
                                                                data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i class="fa fa-calendar"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <!-- Date and time -->
                                                    <div class="form-group">
                                                        <label>Period End</label>
                                                        <div class="input-group date" id="reservationdatetwo"
                                                            data-target-input="nearest">
                                                            <input name="period_end" type="text"
                                                                class="form-control datetimepicker-input"
                                                                data-target="#reservationdatetwo" required />
                                                            <div class="input-group-append"
                                                                data-target="#reservationdatetwo"
                                                                data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i class="fa fa-calendar"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="row mb-3">

                                                <div class="col-md-4">

                                                    <label for="estimation_id"
                                                        class=" col-form-label text-md-end">Estimation
                                                        ID:</label>
                                                    <div class="">
                                                        <input id="contact_person" type="text"
                                                            class="form-control @error('contact_person') is-invalid @enderror"
                                                            name="estimation_id" value="{{ old('estimation_id') }}" required
                                                            autocomplete="estimation_id" autofocus disabled>

                                                        @error('contact_person')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-4">

                                                    <label for="campaign_name" class="col-form-label text-md-end">Campaign
                                                        Name</label>
                                                    <div class="">
                                                        <input id="campaign_name" type="text"
                                                            class="form-control @error('campaign_name') is-invalid @enderror"
                                                            name="campaign_name" value="{{ old('campaign_name') }}"
                                                            required autocomplete="campaign_name"
                                                            placeholder="Enter campaign name">

                                                        @error('campaign_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                </div>

                                                <div class="col-md-4">
                                                    <div class="mt-3">
                                                        <label for="address" class="col-form-label text-md-end"></label>
                                                        <div class="row">
                                                            <div class="col-md-12 text-center">
                                                                <button type="submit" class="btn btn-primary px-5">
                                                                    +Add Estimation
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>



                                            {{-- 
                                    <div class="row mb-4">
                                        <div class="col-md-3">
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

                                        <div class="col-md-3">
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

                                        <div class="col-md-3">
                                            <div class="mb-4">
                                                <label for="country" class="col-form-label text-md-end">Country</label>

                                                <div class="">
                                                    <select name="country" class="form-control select2"
                                                        style="width: 100%;">
                                                        <option value="">Select Country</option>
                                                        <option value="1">Bangladesh</option>
                                                        <option value="2">Others</option>
                                                    </select>

                                                    @error('country')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-4">
                                                <label for="country" class="col-form-label text-md-end">Country</label>

                                                <div class="">
                                                    <select name="country" class="form-control select2"
                                                        style="width: 100%;">
                                                        <option value="">Select Country</option>
                                                        <option value="1">Bangladesh</option>
                                                        <option value="2">Others</option>
                                                    </select>

                                                    @error('country')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}

                                    </div>

                                    <div class=" mb-4">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>-</th>
                                                    <th>Job Head</th>
                                                    <th>
                                                        Description
                                                    </th>
                                                    <th>Impression-Clicks-Views-Lead</th>
                                                    <th>Gross Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        <button type="submit" class="btn btn-danger px-3">
                                                            Delete
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <div class="">
                                                            <div class="form-group">
                                                                <select name="agency_type" class="form-control select2"
                                                                    required>
                                                                    <option disabled selected>Select</option>
                                                                    @foreach ($agency_names as $id => $name)
                                                                        <option value="{{ $id }}">
                                                                            {{ $name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>

                                                                @error('agency_type')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="">
                                                            <input id="campaign_name" type="text"
                                                                class="form-control @error('campaign_name') is-invalid @enderror"
                                                                name="campaign_name" value="{{ old('campaign_name') }}"
                                                                required autocomplete="campaign_name"
                                                                @error('campaign_name')>
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                                </div>
                                                    </td>
                                                    <td>
                                                        <div class="">
                                                            <input id="campaign_name" type="number"
                                                                class="form-control @error('campaign_name') is-invalid @enderror"
                                                                name="campaign_name" value="{{ old('campaign_name') }}"
                                                                required autocomplete="campaign_name"
                                                                @error('campaign_name')>
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                                </div>
                                                    </td>
                                                    <td>
                                                        <div class="">
                                                            <input id="campaign_name" type="number"
                                                                class="form-control @error('campaign_name') is-invalid @enderror"
                                                                name="campaign_name" value="{{ old('campaign_name') }}"
                                                                required autocomplete="campaign_name"
                                                                @error('campaign_name')
                                                            >
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                                </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>



                                    <div class="row mb-3">

                                        <div class="col-md-6">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="estimation_id" class=" col-form-label text-md-end">Vat
                                                        Applies on</label>
                                                </div>
                                                <div class="col-md-6">

                                                    <div class="">
                                                        <input id="contact_person" type="text"
                                                            class="form-control @error('contact_person') is-invalid @enderror"
                                                            name="estimation_id" value="{{ old('estimation_id') }}"
                                                            required autocomplete="estimation_id" autofocus disabled>

                                                        @error('contact_person')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="campaign_name" class="col-form-label text-md-end">Agencys
                                                        Comm
                                                        Applies on </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <input id="campaign_name" type="text"
                                                            class="form-control @error('campaign_name') is-invalid @enderror"
                                                            name="campaign_name" value="{{ old('campaign_name') }}"
                                                            required autocomplete="campaign_name"
                                                            placeholder="Enter campaign name">

                                                        @error('campaign_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="estimation_id" class=" col-form-label text-md-end">Gross
                                                        Amount</label>
                                                </div>
                                                <div class="col-md-6">

                                                    <div class="">
                                                        <input id="contact_person" type="text"
                                                            class="form-control @error('contact_person') is-invalid @enderror"
                                                            name="estimation_id" value="{{ old('estimation_id') }}"
                                                            required autocomplete="estimation_id" autofocus disabled>

                                                        @error('contact_person')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="campaign_name" class="col-form-label text-md-end">Discount
                                                        Amount </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <input id="campaign_name" type="text"
                                                            class="form-control @error('campaign_name') is-invalid @enderror"
                                                            name="campaign_name" value="{{ old('campaign_name') }}"
                                                            required autocomplete="campaign_name"
                                                            placeholder="Enter campaign name">

                                                        @error('campaign_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="campaign_name" class="col-form-label text-md-end">Net
                                                        Amount </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <input id="campaign_name" type="text"
                                                            class="form-control @error('campaign_name') is-invalid @enderror"
                                                            name="campaign_name" value="{{ old('campaign_name') }}"
                                                            required autocomplete="campaign_name"
                                                            placeholder="Enter campaign name">

                                                        @error('campaign_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="campaign_name" class="col-form-label text-md-end">Agency
                                                        Comm </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <input id="campaign_name" type="text"
                                                            class="form-control @error('campaign_name') is-invalid @enderror"
                                                            name="campaign_name" value="{{ old('campaign_name') }}"
                                                            required autocomplete="campaign_name"
                                                            placeholder="Enter campaign name">

                                                        @error('campaign_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="campaign_name" class="col-form-label text-md-end">Agency
                                                        Comm Amount</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <input id="campaign_name" type="text"
                                                            class="form-control @error('campaign_name') is-invalid @enderror"
                                                            name="campaign_name" value="{{ old('campaign_name') }}"
                                                            required autocomplete="campaign_name"
                                                            placeholder="Enter campaign name">

                                                        @error('campaign_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="campaign_name"
                                                        class="col-form-label text-md-end">Vat</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <input id="campaign_name" type="text"
                                                            class="form-control @error('campaign_name') is-invalid @enderror"
                                                            name="campaign_name" value="{{ old('campaign_name') }}"
                                                            required autocomplete="campaign_name"
                                                            placeholder="Enter campaign name">

                                                        @error('campaign_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="campaign_name" class="col-form-label text-md-end">Vat
                                                        Amount </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <input id="campaign_name" type="text"
                                                            class="form-control @error('campaign_name') is-invalid @enderror"
                                                            name="campaign_name" value="{{ old('campaign_name') }}"
                                                            required autocomplete="campaign_name"
                                                            placeholder="Enter campaign name">

                                                        @error('campaign_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="campaign_name" class="col-form-label text-md-end">Grand
                                                        Total </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <input id="campaign_name" type="text"
                                                            class="form-control @error('campaign_name') is-invalid @enderror"
                                                            name="campaign_name" value="{{ old('campaign_name') }}"
                                                            required autocomplete="campaign_name"
                                                            placeholder="Enter campaign name">

                                                        @error('campaign_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>


                                        </div>

                                    </div>


                                    {{-- <div class="col-md-6">

                                        <div class="col-md-4">

                                            <label for="estimation_id" class=" col-form-label text-md-end">Vat Applies
                                                on</label>
                                            <div class="">
                                                <input id="contact_person" type="text"
                                                    class="form-control @error('contact_person') is-invalid @enderror"
                                                    name="estimation_id" value="{{ old('estimation_id') }}" required
                                                    autocomplete="estimation_id" autofocus disabled>

                                                @error('contact_person')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4">

                                            <label for="campaign_name" class="col-form-label text-md-end">Agency Comm
                                                Applies on </label>
                                            <div class="">
                                                <input id="campaign_name" type="text"
                                                    class="form-control @error('campaign_name') is-invalid @enderror"
                                                    name="campaign_name" value="{{ old('campaign_name') }}" required
                                                    autocomplete="campaign_name" placeholder="Enter campaign name">

                                                @error('campaign_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                        </div>
                                    </div> --}}


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
