@extends('layouts.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title"><b>Agency List</b></h1>
            <a href="{{route('user.create')}}" class="btn btn-primary btn-sm float-right px-3 py-2" title="Edit User">
                <h5>Create New Agency</h5>
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
                    
                </table>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
@endsection
