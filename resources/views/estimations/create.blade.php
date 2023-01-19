@extends('layouts.layout')
@section('style')
@endsection
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

        <!-- /.card-header -->
        <div class="card-body  p-0">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">

                        <form method="POST" action="{{ route('estimation.create') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <!-- Date and time -->
                                    <div class="form-group">
                                        <label>Estimation Date</label>
                                        <div class="input-group date" id="estimation_date" data-target-input="nearest">
                                            <input name="estimation_date" type="text"
                                                class="form-control datetimepicker-input" data-target="#estimation_date"
                                                required />
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
                                        <select name="agency_name" class="form-control select2" style="width: 100%;"
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

                                <div class="col-md-4">
                                    <!-- Date and time -->
                                    <div class="form-group">
                                        <label>Period Start</label>
                                        <div class="input-group date" id="period_start" data-target-input="nearest">
                                            <input name="period_start" type="text"
                                                class="form-control datetimepicker-input" data-target="#period_start"
                                                required />
                                            <div class="input-group-append" data-target="#period_start"
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
                                        <div class="input-group date" id="period_end" data-target-input="nearest">
                                            <input name="period_end" type="text"
                                                class="form-control datetimepicker-input" data-target="#period_end"
                                                required />
                                            <div class="input-group-append" data-target="#period_end"
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
                                    <label for="estimation_id" class=" col-form-label text-md-end">Estimation
                                        ID:</label>
                                    <div class="">
                                        <input id="estimation_id" type="text"
                                            class="form-control @error('estimation_id') is-invalid @enderror"
                                            name="estimation_id" value="{{ old('estimation_id') }}" required
                                            autocomplete="estimation_id" autofocus disabled>

                                        @error('estimation_id')
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
                                            name="campaign_name" value="{{ old('campaign_name') }}" required
                                            autocomplete="campaign_name" placeholder="Enter campaign name">

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
                                            <div class="col-md-12 text-center" id="">
                                                <button class="btn btn-primary px-5" id="add_estimation">
                                                    +Add Estimation
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="mb-4">
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
                                                        <select name="agency_type" class="form-control select2" required>
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
                                                        name="campaign_name" value="{{ old('campaign_name') }}" required
                                                        autocomplete="campaign_name"
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
                                                        name="campaign_name" value="{{ old('campaign_name') }}" required
                                                        autocomplete="campaign_name"
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
                                                        name="campaign_name" value="{{ old('campaign_name') }}" required
                                                        autocomplete="campaign_name"
                                                        @error('campaign_name') >
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                        </div>
                                            </td>
                                            
                                        </tr>
                                        
                                        <div class="add_field" id="add_field">
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
                                                                @error('campaign_name') >
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                                </div>
                                                    </td>
                                                </tr>
                                        </div>
                                    </tbody>
                                </table>
                            </div>

                            <div class="row mb-3">

                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="vatapplies_on" class=" col-form-label text-md-end">Vat
                                                Applies on</label>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="">
                                                <input id="vatapplies_on" type="text"
                                                    class="form-control @error('vatapplies_on') is-invalid @enderror"
                                                    name="vatapplies_on" value="{{ old('vatapplies_on') }}" required
                                                    autocomplete="vatapplies_on" autofocus disabled>

                                                @error('vatapplies_on')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="agcomapplies_on" class="col-form-label text-md-end">Agencys
                                                Comm
                                                Applies on </label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="">
                                                <input id="agcomapplies_on" type="text"
                                                    class="form-control @error('agcomapplies_on') is-invalid @enderror"
                                                    name="agcomapplies_on" value="{{ old('agcomapplies_on') }}" required
                                                    autocomplete="agcomapplies_on" disabled>

                                                @error('agcomapplies_on')
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
                                                    name="estimation_id" value="{{ old('estimation_id') }}" required
                                                    autocomplete="estimation_id" autofocus disabled>

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
                                            <label for="discount_amount" class="col-form-label text-md-end">Discount
                                                Amount </label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="">
                                                <input id="discount_amount" type="text"
                                                    class="form-control @error('discount_amount') is-invalid @enderror"
                                                    name="discount_amount" value="{{ old('discount_amount') }}" required
                                                    autocomplete="discount_amount">

                                                @error('discount_amount')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="net_amount" class="col-form-label text-md-end">Net
                                                Amount </label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="">
                                                <input id="net_amount" type="text"
                                                    class="form-control @error('net_amount') is-invalid @enderror"
                                                    name="net_amount" value="{{ old('net_amount') }}" required
                                                    autocomplete="net_amount" disabled>

                                                @error('net_amount')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="agency_comm" class="col-form-label text-md-end">Agency
                                                Comm </label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="">
                                                <input id="agency_comm" type="text"
                                                    class="form-control @error('agency_comm') is-invalid @enderror"
                                                    name="agency_comm" value="{{ old('agency_comm') }}" required
                                                    autocomplete="agency_comm">

                                                @error('agency_comm')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="agency_comm_amount" class="col-form-label text-md-end">Agency Comm
                                                Amount</label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="">
                                                <input id="agency_comm_amount" type="text"
                                                    class="form-control @error('agency_comm_amount') is-invalid @enderror"
                                                    name="agency_comm_amount" value="{{ old('agency_comm_amount') }}"
                                                    required autocomplete="agency_comm_amount" disabled>

                                                @error('agency_comm_amount')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="sub_total" class="col-form-label text-md-end">Sub Total</label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="">
                                                <input id="sub_total" type="text"
                                                    class="form-control @error('sub_total') is-invalid @enderror"
                                                    name="sub_total" value="{{ old('sub_total') }}" required
                                                    autocomplete="sub_total" disabled>

                                                @error('sub_total')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="vat" class="col-form-label text-md-end">Vat</label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="">
                                                <input id="vat" type="text"
                                                    class="form-control @error('vat') is-invalid @enderror"
                                                    name="vat" value="{{ old('vat') }}" required
                                                    autocomplete="vat">

                                                @error('vat')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="vat_amount" class="col-form-label text-md-end">Vat
                                                Amount </label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="">
                                                <input id="vat_amount" type="text"
                                                    class="form-control @error('vat_amount') is-invalid @enderror"
                                                    name="vat_amount" value="{{ old('vat_amount') }}" required
                                                    autocomplete="vat_amount" disabled>

                                                @error('vat_amount')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="grand_total" class="col-form-label text-md-end">Grand
                                                Total </label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="">
                                                <input id="grand_total" type="text"
                                                    class="form-control @error('grand_total') is-invalid @enderror"
                                                    name="grand_total" value="{{ old('grand_total') }}" required
                                                    autocomplete="grand_total" disabled>

                                                @error('grand_total')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>


                                </div>

                            </div>

                            <div class="row mb-3 ">
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
    <!-- /.card-body -->

    {{-- <script>
        // $(document).ready(function() {
        //     console.log("ready!");
        //     $('#agency_comm').keyup(function() {
        //         var agency_comm = $('#agency_comm').val();
        //         var agency_comm_amount = $('#agency_comm_amount').val();
        //         var sub_total = $('#sub_total').val();
        //         var vat = $('#vat').val();
        //         var vat_amount = $('#vat_amount').val();
        //         var grand_total = $('#grand_total').val();
        //         var total = $('#total').val();
        //         var agency_comm_amount = (agency_comm * total) / 100;
        //         var sub_total = total - agency_comm_amount;
        //         var vat_amount = (vat * sub_total) / 100;
        //         var grand_total = sub_total + vat_amount;
        //         $('#agency_comm_amount').val(agency_comm_amount);
        //         $('#sub_total').val(sub_total);
        //         $('#vat_amount').val(vat_amount);
        //         $('#grand_total').val(grand_total);

        //     });
        //     $('#vat').keyup(function() {
        //         var agency_comm = $('#agency_comm').val();
        //         var agency_comm_amount = $('#agency_comm_amount').val();
        //         var sub_total = $('#sub_total').val();
        //         var vat = $('#vat').val();
        //         var vat_amount = $('#vat_amount').val();
        //         var grand_total = $('#grand_total').val();
        //         var total = $('#total').val();
        //         var agency_comm_amount = (agency_comm * total) / 100;
        //         var sub_total = total - agency_comm_amount;
        //         var vat_amount = (vat * sub_total) / 100;
        //         var grand_total = sub_total + vat_amount;
        //         $('#agency_comm_amount').val(agency_comm_amount);
        //         $('#sub_total').val(sub_total);
        //         $('#vat_amount').val(vat_amount);
        //         $('#grand_total').val(grand_total);
        //     });
        // });

        $(document).ready(function() {
            //Date picker
            $('#estimation_date').datetimepicker({
                format: 'L'
            });
            //Date picker
            $('#period_start').datetimepicker({
                format: 'L'
            });
            $('#period_end').datetimepicker({
                format: 'L'
            });

            //Date and time picker



            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })

        });
    </script> --}}
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            //Date picker
            $('#estimation_date').datetimepicker({
                format: 'L'
            });
            //Date picker
            $('#period_start').datetimepicker({
                format: 'L'
            });
            $('#period_end').datetimepicker({
                format: 'L'
            });


            $('#add_estimation').click(function(e) {
                e.preventDefault();
                // $('#add_field').append(`<tr>
                //                             <td>
                //                                     <button type="submit" class="btn btn-danger px-3">
                //                                         Delete
                //                                     </button>
                //                                 </td>
                //                                 <td>
                //                                     <div class="">
                //                                         <div class="form-group">
                //                                             <select name="agency_type" class="form-control select2"
                //                                                 required>
                //                                                 <option disabled selected>Select</option>
                //                                                 @foreach ($agency_names as $id => $name)
                //                                                     <option value="{{ $id }}">
                //                                                         {{ $name }}
                //                                                     </option>
                //                                                 @endforeach
                //                                             </select>

                //                                             @error('agency_type')
                //                                                 <span class="invalid-feedback" role="alert">
                //                                                     <strong>{{ $message }}</strong>
                //                                                 </span>
                //                                             @enderror
                //                                         </div>
                //                                     </div>
                //                                 </td>
                //                                 <td>
                //                                     <div class="">
                //                                         <input id="campaign_name" type="text"
                //                                             class="form-control @error('campaign_name') is-invalid @enderror"
                //                                             name="campaign_name" value="{{ old('campaign_name') }}"
                //                                             required autocomplete="campaign_name"
                //                                             @error('campaign_name')>
                //                                             <span class="invalid-feedback" role="alert">
                //                                                 <strong>{{ $message }}</strong>
                //                                             </span>
                //                                         @enderror
                //                                             </div>
                //                                 </td>
                //                                 <td>
                //                                     <div class="">
                //                                         <input id="campaign_name" type="number"
                //                                             class="form-control @error('campaign_name') is-invalid @enderror"
                //                                             name="campaign_name" value="{{ old('campaign_name') }}"
                //                                             required autocomplete="campaign_name"
                //                                             @error('campaign_name')>
                //                                             <span class="invalid-feedback" role="alert">
                //                                                 <strong>{{ $message }}</strong>
                //                                             </span>
                //                                         @enderror
                //                                             </div>
                //                                 </td>
                //                                 <td>
                //                                     <div class="">
                //                                         <input id="campaign_name" type="number"
                //                                             class="form-control @error('campaign_name') is-invalid @enderror"
                //                                             name="campaign_name" value="{{ old('campaign_name') }}"
                //                                             required autocomplete="campaign_name"
                //                                             @error('campaign_name') >
                //                                         <span class="invalid-feedback" role="alert">
                //                                             <strong>{{ $message }}</strong>
                //                                         </span>
                //                                         @enderror
                //                                             </div>
                //                                 </td>
                //                             </tr>`);
            });

        });
    </script>
@endsection
