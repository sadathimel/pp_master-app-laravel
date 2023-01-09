@extends('layouts.layout')
@section('title') {{$agency->name}} @endsection
@section('content')
    <div class="card">
        <div class="card-header">

            <h1 class="display-5 d-inline"><b>{{ $agency->name }} All information</b></h1>
            <a href="{{ route('agency') }}" class="btn btn-primary btn-sm float-right px-3 py-2" title="Edit agencie">
                <h5>Agency List</h5>
            </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="viewexample1" class="table table-bordered table-striped ">
                <thead class="">
                    <tr>
                        <th></th>
                        <th class="text-primary">{{ $agency->name }}</th>
                        <th class="text-primary">All Information</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Agency Name</th>
                        <td>{{ $agency->name }}</td>

                        <th>Agency Short Code</th>
                        <td>{{ $agency->short_code }}</td>
                    </tr>
                    <tr>
                        <th>Agency Type</th>
                        <td>{{ $agency->agency_type }}</td>
                        <th>Contact Person Name</th>
                        <td>{{ $agency->contact_person }}</td>
                    </tr>

                    <tr>
                        <th>Email Address</th>
                        <td>{{ $agency->email }}</td>
                        <th>Phone No</th>
                        <td>{{ $agency->phone }}</td>
                    </tr>

                    <tr>
                        <th>Agency Address</th>
                        <td>{{ $agency->address }}</td>
                        <th>City</th>
                        <td>{{ $agency->city }}</td>
                    </tr>

                    <tr>
                        <th>Country</th>
                        <td>{{ $agency->country }}</td>
                        <th>Agency Commission</th>
                        <td>{{ $agency->agency_commission }}</td>
                    </tr>

                    <tr>

                        <th>Vat</th>
                        <td>{{ $agency->vat }}</td>
                        <th>Supplementary Vat</th>
                        <td>{{ $agency->supplementary_vat }}</td>
                    </tr>

                    <tr>
                        <th>Vat On</th>
                        <td>{{ $agency->vat_on }}</td>
                        <th>Commission On</th>
                        <td>{{ $agency->commission_on }}</td>
                    </tr>




                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>


    </div>
    <!-- /.card-body -->
@endsection
