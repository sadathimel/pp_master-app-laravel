@extends('layouts.layout')
@section('content')
    {{-- @extends('layouts.app') --}}
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Create New User</h1>
            <a href="{{ route('user') }}" class="btn btn-primary btn-sm float-right px-3 py-2" title="Edit Student">
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
                                        <label for="name" class="col-md-3 col-form-label text-md-end">Name</label>

                                        <div class="col-md-9">
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

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-3 col-form-label text-md-end">Email</label>

                                        <div class="col-md-9">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email"
                                                placeholder="Enter Email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password" class="col-md-3 col-form-label text-md-end">Password</label>

                                        <div class="col-md-9">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="new-password" placeholder="Enter PassWord">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password-confirm" class="col-md-3 col-form-label text-md-end">Confirm
                                            Password</label>

                                        <div class="col-md-9">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password"
                                                placeholder="Enter Confirm PassWord">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password-confirm" class="col-md-3 col-form-label text-md-end">Profile
                                            Picture upload</label>
                                        <div class="col-md-9">
                                            <input type="file" name="image">
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
