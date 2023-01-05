@extends('layouts.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title"><b>agency List</b></h1>
            <a href="{{ route('agency.create') }}" class="btn btn-primary btn-sm float-right px-3 py-2" title="Edit agencie">
                <h5>Create New agency</h5>
            </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Short code</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($agencies as $agency)
                            <tr>
                                <td>{{ $agency->id }}</td>
                                <td>{{ $agency->name }}</td>
                                <td>{{ $agency->email }}</td>
                                <td>{{ $agency->short_code }}</td>
                                <td>
                                    <a href="{{ route('agency.view', ['agency' => $agency->id]) }}"
                                        class="btn btn-info btn-sm" title="View Student">
                                        <i class="fa fa-eye" aria-hidden="true"></i>View
                                    </a>
                                    <a href="#" class="btn btn-primary btn-sm" title="Edit Student">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm" title="Edit Student">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Delete
                                    </a>


                                </td>
                                {{-- <td><span class="tag tag-success">Approved</span></td>
                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
@endsection
