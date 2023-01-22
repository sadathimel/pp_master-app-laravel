@extends('layouts.layout')
@section('title')
    {{ 'Estimation List' }}
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="display-5 d-inline "><b>Estimation List</b></h1>
            <a href="{{ route('estimation.create') }}" class="btn btn-primary btn-sm float-right px-3 py-2"
                title="Edit agencie">
                <h5>Add Estimation</h5>
            </a>



            {{-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                Launch Default Modal
            </button> --}}



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

                        <h1>Estimation</h1>
                        {{-- @foreach ($agencies as $agency)
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
                                    <a href="#" class="btn btn-danger btn-sm" title="Delete Agency">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Delete
                                    </a>


                                </td>

                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
@endsection

<table id="example" class="table table-hover text-nowrap">
    <thead>
        <tr>
            <th>Estimation ID</th>
            <th scope="col">Estimation Date</th>
            <th scope="col">Agency Name</th>
            <th scope="col">Campaign Name</th>
            <th scope="col">Status</th>
            <th scope="col">Options</th>
        </tr>
    </thead>



    <tbody>
        <tr>
            <td>PP/S.COM/01/Digital/Web/08022020</td>
            <td>20/08/2020</td>
            <td>Starcom Bangladesh (Activate Media Solutions).</td>
            <td>4 Days 3GB 58tk January Campaign</td>
            <td>Bill Generated</td>
            <td>
                <div class="btn-group">
                    <button class="btn btn-info btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        PDF
                    </button>
                    <div class="dropdown-menu">
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation/5">PDF 1 Soft
                            Copy</a>
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation4/5">PDF 1 Hard
                            Copy</a>
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation2/5">PDF 2 Soft
                            Copy</a>
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation3/5">PDF 2 Hard
                            Copy</a>
                    </div>
                </div>
                <span class="cid" style="display: none">5</span>
            </td>
        </tr>

    </tbody>




</table>




<table id="BillDetails example" class="table table-hover text-nowrap table-striped table-bordered" style="width: 100%">
    <thead>
        <tr>
            <th>Estimation ID</th>
            <th scope="col">Estimation Date</th>
            <th scope="col">Agency Name</th>
            <th scope="col">Campaign Name</th>
            <th scope="col">Status</th>
            <th scope="col">Options</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>PP/S.COM/01/Digital/Web/08022020</td>
            <td>20/08/2020</td>
            <td>Starcom Bangladesh (Activate Media Solutions).</td>
            <td>4 Days 3GB 58tk January Campaign</td>
            <td>Bill Generated</td>
            <td>
                <div class="btn-group">
                    <button class="btn btn-info btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        PDF
                    </button>
                    <div class="dropdown-menu">
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation/5">PDF 1 Soft
                            Copy</a>
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation4/5">PDF 1 Hard
                            Copy</a>
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation2/5">PDF 2 Soft
                            Copy</a>
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation3/5">PDF 2 Hard
                            Copy</a>
                    </div>
                </div>
                <span class="cid" style="display: none">5</span>
            </td>
        </tr>
        <tr>
            <td>PP/S.COM/01/Digital/Web/08022020</td>
            <td>20/08/2020</td>
            <td>Starcom Bangladesh (Activate Media Solutions).</td>
            <td>4 Days 3GB 58tk January Campaign</td>
            <td>Bill Generated</td>
            <td>
                <div class="btn-group">
                    <button class="btn btn-info btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        PDF
                    </button>
                    <div class="dropdown-menu">
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation/5">PDF 1 Soft
                            Copy</a>
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation4/5">PDF 1 Hard
                            Copy</a>
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation2/5">PDF 2 Soft
                            Copy</a>
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation3/5">PDF 2 Hard
                            Copy</a>
                    </div>
                </div>
                <span class="cid" style="display: none">5</span>
            </td>
        </tr>
        <tr>
            <td>PP/S.COM/02/Digital/Web/08022020</td>
            <td>01/08/2020</td>
            <td>Starcom Bangladesh (Activate Media Solutions).</td>
            <td>29tk Rate Cutter January Campaign 2020</td>
            <td>Bill Generated</td>
            <td>
                <div class="btn-group">
                    <button class="btn btn-info btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        PDF
                    </button>
                    <div class="dropdown-menu">
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation/6">PDF 1 Soft
                            Copy</a>
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation4/6">PDF 1 Hard
                            Copy</a>
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation2/6">PDF 2 Soft
                            Copy</a>
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation3/6">PDF 2 Hard
                            Copy</a>
                    </div>
                </div>
                <span class="cid" style="display: none">6</span>
            </td>
        </tr>
        <tr>
            <td>PP/S.COM/03/Digital/Web/08022020</td>
            <td>26/08/2020</td>
            <td>Starcom Bangladesh (Activate Media Solutions).</td>
            <td>197tk Bundle offer January Campaign</td>
            <td>Bill Generated</td>
            <td>
                <div class="btn-group">
                    <button class="btn btn-info btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        PDF
                    </button>
                    <div class="dropdown-menu">
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation/7">PDF 1 Soft
                            Copy</a>
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation4/7">PDF 1 Hard
                            Copy</a>
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation2/7">PDF 2 Soft
                            Copy</a>
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation3/7">PDF 2 Hard
                            Copy</a>
                    </div>
                </div>
                <span class="cid" style="display: none">7</span>
            </td>
        </tr>
        <tr>
            <td>PP/S.COM/04/Digital/Web/08022020</td>
            <td>26/08/2020</td>
            <td>Starcom Bangladesh (Activate Media Solutions).</td>
            <td>Mixed Bundle Offer January campaign</td>
            <td>Bill Generated</td>
            <td>
                <div class="btn-group">
                    <button class="btn btn-info btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        PDF
                    </button>
                    <div class="dropdown-menu">
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation/8">PDF 1 Soft
                            Copy</a>
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation4/8">PDF 1 Hard
                            Copy</a>
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation2/8">PDF 2 Soft
                            Copy</a>
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation3/8">PDF 2 Hard
                            Copy</a>
                    </div>
                </div>
                <span class="cid" style="display: none">8</span>
            </td>
        </tr>
        <tr>
            <td>PP/S.COM/Digital/Web/005/02-2020</td>
            <td>26/08/2020</td>
            <td>Starcom Bangladesh (Activate Media Solutions)</td>
            <td>Sensodyne Rapid Relief Campaign</td>
            <td>Bill Generated</td>
            <td>
                <div class="btn-group">
                    <button class="btn btn-info btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        PDF
                    </button>
                    <div class="dropdown-menu">
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation/9">PDF 1 Soft
                            Copy</a>
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation4/9">PDF 1 Hard
                            Copy</a>
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation2/9">PDF 2 Soft
                            Copy</a>
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation3/9">PDF 2 Hard
                            Copy</a>
                    </div>
                </div>
                <span class="cid" style="display: none">9</span>
            </td>
        </tr>
        <tr>
            <td>PP/JDL/011/Digital/Web/010022020</td>
            <td>13/09/2020</td>
            <td>Jarvis Digital Limited</td>
            <td>Berger Carnival January Campaign</td>
            <td>Bill Generated</td>
            <td>
                <div class="btn-group">
                    <button class="btn btn-info btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        PDF
                    </button>
                    <div class="dropdown-menu">
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation/11">PDF 1 Soft
                            Copy</a>
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation4/11">PDF 1
                            Hard Copy</a>
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation2/11">PDF 2
                            Soft Copy</a>
                        <a target="_BLANK" class="dropdown-item" href="/pdf_estimation3/11">PDF 2
                            Hard Copy</a>
                    </div>
                </div>
                <span class="cid" style="display: none">11</span>
            </td>
        </tr>
        <tr></tr>
    </tbody>
</table>
