@extends('layouts.layout')
@section('title')
    {{ 'Agency List' }}
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="display-5 d-inline "><b>Agency List</b></h1>
            <a href="{{ route('agency.create') }}" class="btn btn-primary btn-sm float-right px-3 py-2" title="Edit agencie">
                <h5>Create New agency</h5>
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
                    <tbody>
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
                                    {{-- <a href="#" class="btn btn-danger btn-sm" title="Delete Agency">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Delete
                                    </a> --}}


                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.card-body -->

    @section('script_agency')
    <script>
        $(function() {
            // $().button('toggle');

            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    @endsection
@endsection

