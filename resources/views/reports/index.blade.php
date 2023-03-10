@extends('layouts.layout')
@section('title')
    {{ 'Billing file' }}
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="display-5 d-inline "><b>Billing Master File</b></h1>
            <a href="{{ route('report.create') }}" class="btn btn-primary btn-sm float-right px-3 py-2" title="Edit agencie">
                <h5>Create</h5>
            </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table id="example1" class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Short code</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    {{-- <tbody>
                        @foreach ($agencies as $agency)
                            <tr>
                                <td>{{ $agency->id }}</td>
                                <td>{{ $agency->name }}</td>
                                <td>{{ $agency->email }}</td>
                                <td>{{ $agency->short_code }}</td>
                                <td>
                                    <a href="{{ route('agency.view', ['agency' => $agency->id]) }}"
                                        class="btn btn-info btn-sm" title="View Agency">
                                        <i class="fa fa-eye" aria-hidden="true"></i>View
                                    </a>
                                    <a href="{{ route('agency.edit', ['agency' => $agency->id]) }}"
                                        class="btn btn-primary btn-sm" title="Edit Agency">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit
                                    </a>
                                   

                                </td>

                            </tr>
                        @endforeach
                    </tbody> --}}
                </table>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
@endsection
