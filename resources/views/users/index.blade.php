@extends('layouts.layout')

@section('title') {{'User'}} @endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title"><b>User List</b></h1>
            <a href="{{route('user.create')}}" class="btn btn-primary btn-sm float-right px-3 py-2" title="Edit User">
                <h5>Create New User</h5>
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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    {{-- <a href="{{ url('/student/' . $user->id) }}" class="btn btn-info btn-sm" title="View Student">
                                            <i class="fa fa-eye" aria-hidden="true"></i>View
                                    </a> --}}
                                    <a href="{{ route('user.edit', ['user' => $user->id]) }}" class="btn btn-primary btn-sm"
                                        title="Edit Student">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit
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
