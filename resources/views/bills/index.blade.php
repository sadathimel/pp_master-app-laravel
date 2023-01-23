@extends('layouts.layout')
@section('title')
    {{-- {{ 'Estimation List' }} --}}
@endsection

@section('header_script')
    <!-- <link rel="stylesheet" src="./css/bootstrap-datepicker.standalone.min.css"> -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

    {{-- <script src="{{ asset('backend/plugins/jquery.validate.min.js') }}"></script> --}}
    <script src="{{ asset('backend/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <!-- <script src="./js/bootstrap-datepicker.min.js"></script> -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
    {{-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}
    {{-- <link rel="stylesheet" type="text/css" href="./css/dataTables.bootstrap4.min.css" /> --}}
    {{-- <script type="text/javascript" language="javascript" src="./js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="./js/dataTables.bootstrap4.min.js"></script> --}}
    <!-- For export option-->

    <style>
        .error {
            border-color: red;
            color: red;
        }

        .valid {
            border-color: green;
        }

        .container {
            max-width: 1500px;
        }
    </style>
@endsection


@section('content')







    <main role="main" class="container">
        <div class="row">
            <div class="col-10">
                <h3>Bill Page</h3>
            </div>
            <div class="col-2">
                <!-- <button id="loadPayouts" type="button" class="btn btn-primary" data-toggle="modal">Add Estimation</button> -->
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-12">
                <h3>Bill Details</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table id="BillDetails" class="table table-striped table-bordered" style="width: 100%;">
                    <thead>
                        <tr>
                            <th scope="col">Bill ID</th>
                            <th scope="col">Estimation ID</th>
                            <th scope="col">Estimation Date</th>
                            <th scope="col">Agency Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PP/S.COM/Digital/Web/001/02-2020</td>
                            <td>PP/S.COM/01/Digital/Web/08022020</td>
                            <td>Starcom Bangladesh (Activate Media Solutions).</td>
                            <td>22/01/2020 - 31/01/2020</td>
                            <td>Bill Generated</td>
                            <!-- <td><button data-target="#editData" data-toggle="modal" type="button" class="btn btn-primary btn-sm editBill">Edit</button> | <a target="_BLANK" class="btn btn-sm btn-success" href="/pdf_bill/<?#= esc($p['bmID']) ?>">PDF</a> | <a target="_BLANK" class="btn btn-sm btn-success" href="/pdf_bill2/<?#= esc($p['bmID']) ?>">PDF 2</a> | <a target="_BLANK" class="btn btn-sm btn-success" href="/pdf_bill3/<?#= esc($p['bmID']) ?>">PDF 3</a> | <button data-toggle="modal" type="button" class="btn btn-danger btn-sm deletePublisher">Delete</button><span class="cid" style="display: none"><?#= esc($p['bmID']) ?></span></td> -->
                            <td><button data-target="#editData" data-toggle="modal" type="button"
                                    class="btn btn-primary btn-sm editBill">Edit</button> | <div class="btn-group">
                                    <button class="btn btn-info btn-sm dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        PDF
                                    </button>
                                    <div class="dropdown-menu">
                                        <a target="_BLANK" class="dropdown-item" href="/pdf_bill/2">PDF 1 Soft Copy</a>
                                        <a target="_BLANK" class="dropdown-item" href="/pdf_bill4/2">PDF 1 Hard Copy</a>
                                        <a target="_BLANK" class="dropdown-item" href="/pdf_bill2/2">PDF 2 Soft Copy</a>
                                        <a target="_BLANK" class="dropdown-item" href="/pdf_bill3/2">PDF 2 Hard Copy</a>
                                    </div>
                                </div> | <button data-toggle="modal" type="button"
                                    class="btn btn-danger btn-sm deletePublisher">Delete</button><span class="cid"
                                    style="display: none">2</span></td>
                        </tr>









                        <tr>
                            <td>PP/CEOL/Web/1272/01-23</td>
                            <td>PP/CEOL/1306/Web/01122022</td>
                            <td>CITY EDIBLE OIL LIMITED</td>
                            <td>01/12/2022 - 31/12/2022</td>
                            <td>Bill Generated</td>
                            <!-- <td><button data-target="#editData" data-toggle="modal" type="button" class="btn btn-primary btn-sm editBill">Edit</button> | <a target="_BLANK" class="btn btn-sm btn-success" href="/pdf_bill/<?#= esc($p['bmID']) ?>">PDF</a> | <a target="_BLANK" class="btn btn-sm btn-success" href="/pdf_bill2/<?#= esc($p['bmID']) ?>">PDF 2</a> | <a target="_BLANK" class="btn btn-sm btn-success" href="/pdf_bill3/<?#= esc($p['bmID']) ?>">PDF 3</a> | <button data-toggle="modal" type="button" class="btn btn-danger btn-sm deletePublisher">Delete</button><span class="cid" style="display: none"><?#= esc($p['bmID']) ?></span></td> -->
                            <td><button data-target="#editData" data-toggle="modal" type="button"
                                    class="btn btn-primary btn-sm editBill">Edit</button> | <div class="btn-group">
                                    <button class="btn btn-info btn-sm dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        PDF
                                    </button>
                                    <div class="dropdown-menu">
                                        <a target="_BLANK" class="dropdown-item" href="/pdf_bill/1272">PDF 1 Soft
                                            Copy</a>
                                        <a target="_BLANK" class="dropdown-item" href="/pdf_bill4/1272">PDF 1 Hard
                                            Copy</a>
                                        <a target="_BLANK" class="dropdown-item" href="/pdf_bill2/1272">PDF 2 Soft
                                            Copy</a>
                                        <a target="_BLANK" class="dropdown-item" href="/pdf_bill3/1272">PDF 2 Hard
                                            Copy</a>
                                    </div>
                                </div> | <button data-toggle="modal" type="button"
                                    class="btn btn-danger btn-sm deletePublisher">Delete</button><span class="cid"
                                    style="display: none">1272</span></td>
                        </tr>
                        <tr>
                            <td>PP/CEOL/Web/1273/01-23</td>
                            <td>PP/CEOL/1307/Web/01122022</td>
                            <td>CITY EDIBLE OIL LIMITED</td>
                            <td>19/12/2022 - 31/12/2022</td>
                            <td>Bill Generated</td>
                            <!-- <td><button data-target="#editData" data-toggle="modal" type="button" class="btn btn-primary btn-sm editBill">Edit</button> | <a target="_BLANK" class="btn btn-sm btn-success" href="/pdf_bill/<?#= esc($p['bmID']) ?>">PDF</a> | <a target="_BLANK" class="btn btn-sm btn-success" href="/pdf_bill2/<?#= esc($p['bmID']) ?>">PDF 2</a> | <a target="_BLANK" class="btn btn-sm btn-success" href="/pdf_bill3/<?#= esc($p['bmID']) ?>">PDF 3</a> | <button data-toggle="modal" type="button" class="btn btn-danger btn-sm deletePublisher">Delete</button><span class="cid" style="display: none"><?#= esc($p['bmID']) ?></span></td> -->
                            <td><button data-target="#editData" data-toggle="modal" type="button"
                                    class="btn btn-primary btn-sm editBill">Edit</button> | <div class="btn-group">
                                    <button class="btn btn-info btn-sm dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        PDF
                                    </button>
                                    <div class="dropdown-menu">
                                        <a target="_BLANK" class="dropdown-item" href="/pdf_bill/1273">PDF 1 Soft
                                            Copy</a>
                                        <a target="_BLANK" class="dropdown-item" href="/pdf_bill4/1273">PDF 1 Hard
                                            Copy</a>
                                        <a target="_BLANK" class="dropdown-item" href="/pdf_bill2/1273">PDF 2 Soft
                                            Copy</a>
                                        <a target="_BLANK" class="dropdown-item" href="/pdf_bill3/1273">PDF 2 Hard
                                            Copy</a>
                                    </div>
                                </div> | <button data-toggle="modal" type="button"
                                    class="btn btn-danger btn-sm deletePublisher">Delete</button><span class="cid"
                                    style="display: none">1273</span></td>
                        </tr>
                        <tr>
                            <td>PP/MEDIA/Web/1274/01-23</td>
                            <td>PP/MEDIA/1308/Web/11012023</td>
                            <td>Mediacom Limited</td>
                            <td>11/12/2022 - 10/01/2023</td>
                            <td>Bill Generated</td>
                            <!-- <td><button data-target="#editData" data-toggle="modal" type="button" class="btn btn-primary btn-sm editBill">Edit</button> | <a target="_BLANK" class="btn btn-sm btn-success" href="/pdf_bill/<?#= esc($p['bmID']) ?>">PDF</a> | <a target="_BLANK" class="btn btn-sm btn-success" href="/pdf_bill2/<?#= esc($p['bmID']) ?>">PDF 2</a> | <a target="_BLANK" class="btn btn-sm btn-success" href="/pdf_bill3/<?#= esc($p['bmID']) ?>">PDF 3</a> | <button data-toggle="modal" type="button" class="btn btn-danger btn-sm deletePublisher">Delete</button><span class="cid" style="display: none"><?#= esc($p['bmID']) ?></span></td> -->
                            <td><button data-target="#editData" data-toggle="modal" type="button"
                                    class="btn btn-primary btn-sm editBill">Edit</button> | <div class="btn-group">
                                    <button class="btn btn-info btn-sm dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        PDF
                                    </button>
                                    <div class="dropdown-menu">
                                        <a target="_BLANK" class="dropdown-item" href="/pdf_bill/1274">PDF 1 Soft
                                            Copy</a>
                                        <a target="_BLANK" class="dropdown-item" href="/pdf_bill4/1274">PDF 1 Hard
                                            Copy</a>
                                        <a target="_BLANK" class="dropdown-item" href="/pdf_bill2/1274">PDF 2 Soft
                                            Copy</a>
                                        <a target="_BLANK" class="dropdown-item" href="/pdf_bill3/1274">PDF 2 Hard
                                            Copy</a>
                                    </div>
                                </div> | <button data-toggle="modal" type="button"
                                    class="btn btn-danger btn-sm deletePublisher">Delete</button><span class="cid"
                                    style="display: none">1274</span></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>PP/STARG/731/Web/01082021</td>
                            <td>Starcom Bangladesh (Activate Media Solutions)</td>
                            <td>01/08/2021 - 28/08/2021</td>
                            <td>Estimation Generated</td>
                            <td>
                                <button data-target="#editData" type="button" class="createBill btn btn-success btn-sm"
                                    data-toggle="modal">Create Bill</button>
                                <span class="cid" style="display: none">731</span>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
        <div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="bill"
            aria-hidden="true">
            <div style="max-width: 1024px;" class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="bill">Add Bill</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <select id="publisherUserName" name="publisherUserName" class="form-control">
                                    <option value="-1">Agencies</option>
                                    <option value="28">Mediacom Limited</option>
                                    <option value="29">Starcom Bangladesh (Activate Media Solutions).</option>
                                    <option value="30">Melonades</option>

                                    <option value="61">Pink Creative Limited</option>
                                    <option value="62">pHd Media Network</option>

                                </select>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="periodStart" class="col-sm-5 col-form-label col-form-label-sm">Period
                                        Start</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control form-control-sm" id="periodStart">
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="periodEnd" class="col-sm-5 col-form-label col-form-label-sm">Period
                                        End</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control form-control-sm" id="periodEnd">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <span id="payoutId">Bill ID: Not yet generated</span>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="cName" class="col-sm-5 col-form-label col-form-label-sm">Campaign
                                        Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control form-control-sm" id="cName">
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group row">
                                    <label for="PayoutDate" class="col-sm-7 col-form-label col-form-label-sm">Bill
                                        Date</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-sm" id="PayoutDate">
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <button id="addBill" type="button" class="btn btn-primary btn-sm">+ Add
                                    Bill</button>
                            </div>
                            <div class="col-12">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;" scope="col">-</th>
                                            <th>Job Head</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Impression-Clicks-Views-Lead</th>
                                            <th scope="col">Gross Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tableBody payBody">
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-6">
                                <div class="form-group row">
                                    <label for="modal_vatOn" class="col-sm-6 col-form-label col-form-label-sm">Vat
                                        Applies on</label>
                                    <div class="col-sm-6">
                                        <input readonly type="text" class="form-control form-control-sm"
                                            id="modal_vatOn" placeholder="">
                                        <input readonly type="hidden" class="form-control form-control-sm"
                                            id="modal_vatOn_hidden" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="modal_commOn" class="col-sm-6 col-form-label col-form-label-sm">Agency
                                        Comm. Applies on</label>
                                    <div class="col-sm-6">
                                        <input readonly type="text" class="form-control form-control-sm"
                                            id="modal_commOn" placeholder="">
                                        <input readonly type="hidden" class="form-control form-control-sm"
                                            id="modal_commOn_hidden" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group row">
                                    <label for="modal_grossAmount" class="col-sm-6 col-form-label col-form-label-sm">Gross
                                        Amount</label>
                                    <div class="col-sm-6">
                                        <input readonly type="text" class="form-control form-control-sm"
                                            id="modal_grossAmount" placeholder="0">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="modal_discount" class="col-sm-6 col-form-label col-form-label-sm">Discount
                                        Amount</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-sm" id="modal_discount"
                                            placeholder="0">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="modal_net" class="col-sm-6 col-form-label col-form-label-sm">Net
                                        Amount</label>
                                    <div class="col-sm-6">
                                        <input readonly type="text" class="form-control form-control-sm"
                                            id="modal_net" placeholder="0">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="modal_ait" class="col-sm-6 col-form-label col-form-label-sm">Agency
                                        Comm</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-sm" id="modal_ait"
                                            placeholder="0">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="modal_aitAmount" class="col-sm-6 col-form-label col-form-label-sm">Agency
                                        Comm Amount</label>
                                    <div class="col-sm-6">
                                        <input readonly type="text" class="form-control form-control-sm"
                                            id="modal_aitAmount" placeholder="0.00">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="modal_vat" class="col-sm-6 col-form-label col-form-label-sm">Vat</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-sm" id="modal_vat"
                                            placeholder="0">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="modal_vatAmount" class="col-sm-6 col-form-label col-form-label-sm">Vat
                                        Amount</label>
                                    <div class="col-sm-6">
                                        <input readonly type="text" class="form-control form-control-sm"
                                            id="modal_vatAmount" placeholder="0.00">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="modal_gt" class="col-sm-6 col-form-label col-form-label-sm">Grand
                                        Total</label>
                                    <div class="col-sm-6">
                                        <input readonly type="text" class="form-control form-control-sm"
                                            id="modal_gt" placeholder="0">
                                    </div>
                                </div>
                            </div>
                            <div class="offset-9 col-3">
                                <button id="generatePayout" type="button" class="btn btn-success">Generate
                                    Bill</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit data modal starts here -->
        <div class="modal fade" id="editData" tabindex="-1" role="dialog" aria-labelledby="bill_update"
            aria-hidden="true">
            <form id="editDataForm" novalidate>
                <div style="max-width: 1024px;" class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="bill_update">Bill</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-6">
                                    Estimation ID: <span id="payoutId_update"></span>
                                </div>
                                <div class="col-6">
                                    Bill ID: <span id="billId_update"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <select id="publisherUserName_update" name="publisherUserName" class="form-control">
                                        <option value="-1">Agencies</option>
                                        <option value="28">Mediacom Limited</option>
                                        <option value="29">Starcom Bangladesh (Activate Media Solutions).</option>
                                        <option value="30">Melonades</option>

                                    </select>
                                </div>
                                <div class="col-6">
                                    <div class="form-group row">
                                        <label for="PayoutDate_update"
                                            class="col-sm-7 col-form-label col-form-label-sm">Bill Date</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control form-control-sm"
                                                id="PayoutDate_update">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group row">
                                        <label for="cName_update"
                                            class="col-sm-5 col-form-label col-form-label-sm">Campaign Name</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control form-control-sm" id="cName_update">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <div class="form-group row">
                                        <label for="periodStart_update"
                                            class="col-sm-5 col-form-label col-form-label-sm">Period Start</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control form-control-sm"
                                                name="periodStart_update" id="periodStart_update">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group row">
                                        <label for="periodEnd_update"
                                            class="col-sm-5 col-form-label col-form-label-sm">Period End</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control form-control-sm"
                                                id="periodEnd_update">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <button id="addBill_update" type="button" class="btn btn-primary btn-sm">+ Add
                                        Bill</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;" scope="col">-</th>
                                                <th>Job Head</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Impression-Clicks-Views-Lead</th>
                                                <th scope="col">Gross Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody class="tableBody payBody_update">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group row">
                                        <label for="modal_vatOn_update"
                                            class="col-sm-6 col-form-label col-form-label-sm">Vat Applies on</label>
                                        <div class="col-sm-6">
                                            <input readonly type="text" class="form-control form-control-sm"
                                                id="modal_vatOn_update" placeholder="">
                                            <input readonly type="hidden" class="form-control form-control-sm"
                                                id="modal_vatOn_hidden_update" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="modal_commOn_update"
                                            class="col-sm-6 col-form-label col-form-label-sm">Agency Comm. Applies
                                            on</label>
                                        <div class="col-sm-6">
                                            <input readonly type="text" class="form-control form-control-sm"
                                                id="modal_commOn_update" placeholder="">
                                            <input readonly type="hidden" class="form-control form-control-sm"
                                                id="modal_commOn_hidden_update" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group row">
                                        <label for="modal_grossAmount_update"
                                            class="col-sm-6 col-form-label col-form-label-sm">Gross Amount</label>
                                        <div class="col-sm-6">
                                            <input readonly type="text" class="form-control form-control-sm"
                                                id="modal_grossAmount_update" placeholder="0">
                                            <input readonly type="hidden" class="form-control form-control-sm"
                                                id="modal_grossAmountFixed_update" placeholder="0">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="modal_discount_update"
                                            class="col-sm-6 col-form-label col-form-label-sm">Discount Amount</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-sm"
                                                id="modal_discount_update" placeholder="0">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="modal_net_update"
                                            class="col-sm-6 col-form-label col-form-label-sm">Net Amount</label>
                                        <div class="col-sm-6">
                                            <input readonly type="text" class="form-control form-control-sm"
                                                id="modal_net_update" placeholder="0">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="modal_ait_update"
                                            class="col-sm-6 col-form-label col-form-label-sm">Agency Comm</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-sm"
                                                id="modal_ait_update" placeholder="0">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="modal_aitAmount_update"
                                            class="col-sm-6 col-form-label col-form-label-sm">Agency Comm
                                            Amount</label>
                                        <div class="col-sm-6">
                                            <input readonly type="text" class="form-control form-control-sm"
                                                id="modal_aitAmount_update" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="modal_vat_update"
                                            class="col-sm-6 col-form-label col-form-label-sm">Vat</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-sm"
                                                id="modal_vat_update" placeholder="0">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="modal_vatAmount_update"
                                            class="col-sm-6 col-form-label col-form-label-sm">Vat Amount</label>
                                        <div class="col-sm-6">
                                            <input readonly type="text" class="form-control form-control-sm"
                                                id="modal_vatAmount_update" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="modal_gt_update"
                                            class="col-sm-6 col-form-label col-form-label-sm">Grand Total</label>
                                        <div class="col-sm-6">
                                            <input readonly type="text" class="form-control form-control-sm"
                                                id="modal_gt_update" placeholder="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="offset-6 col-6">
                                    <button id="generatePayout_update" type="button" class="btn btn-success">Generate
                                        Bill</button>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- Delete dialogue box -->
        <div id="deleteDiag" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete content</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to proceed?</p>
                    </div>
                    <div class="modal-footer">
                        <a id="deleteContent" class="btn btn-danger" href="#">Delete</a>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        @section('billScript')
        <script>
            $(document).ready(function() {
                var trigger = 0; // if trigger value is 1 then create bill else if 2, then edit
                var url = ''; //Switches between creation and editable links
                var jobHeads = [];
                $.ajax({
                        method: 'GET',
                        url: '/api/getClientJobheads'
                    })
                    .done(function(response) {
                        jobHeads = response;
                        console.log(jobHeads);
                    });

                function formatDate() {
                    var d = new Date(),
                        month = '' + (d.getMonth() + 1),
                        day = '' + d.getDate(),
                        year = d.getFullYear();

                    if (month.length < 2)
                        month = '0' + month;
                    if (day.length < 2)
                        day = '0' + day;

                    return [day, month, year].join('/');
                }
                var dateFormat = "dd/mm/yy",

                    from = $("#periodStart")
                    .datepicker({
                        dateFormat: dateFormat,
                        changeMonth: true,
                        changeYear: true
                    })
                    .on("change", function() {
                        to.datepicker("option", "minDate", getDate(this));
                    }),
                    to = $("#periodEnd").datepicker({
                        dateFormat: dateFormat,
                        changeMonth: true,
                        changeYear: true
                    })
                    .on("change", function() {
                        from.datepicker("option", "maxDate", getDate(this));
                    });
                pd = $('#PayoutDate').datepicker({
                    dateFormat: dateFormat,
                    changeMonth: true,
                    changeYear: true,
                    showButtonPanel: true,
                    onClose: function(dateText, inst) {
                        $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
                    }
                });
                pd_update = $('#PayoutDate_update').datepicker({
                    dateFormat: dateFormat,
                    changeMonth: true,
                    changeYear: true,
                    showButtonPanel: true,
                    onClose: function(dateText, inst) {
                        $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
                    }
                });
                from3 = $("#periodStart_update")
                    .datepicker({
                        dateFormat: dateFormat,
                        changeMonth: true,
                        changeYear: true
                    })
                    .on("change", function() {
                        to3.datepicker("option", "minDate", getDate(this));
                    }),
                    to3 = $("#periodEnd_update").datepicker({
                        dateFormat: dateFormat,
                        changeMonth: true,
                        changeYear: true
                    })
                    .on("change", function() {
                        from3.datepicker("option", "maxDate", getDate(this));
                    });

                function getDate(element) {
                    var date;
                    try {
                        date = $.datepicker.parseDate(dateFormat, element.value);
                    } catch (error) {
                        console.log(error);
                        date = null;
                    }
                    return date;
                }
                $('#addData').on('show.bs.modal', function(event) {});
                // $('body').on('focus',".modal_impression", function(){
                //   $(this).datepicker({
                //       dateFormat: dateFormat,
                //       changeMonth: true,
                //       changeYear: true,
                //       showButtonPanel: true,
                //       onClose: function(dateText, inst) { 
                //         $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
                //         var element = $(this).parent().parent().children('.billOptions').children('.tempID').val();
                //         billObj['items'][element]['payoutDate'] = $(this).val();
                //       }
                //     });
                // });
                // $('body').on('focus',".modal_impression_update", function(){
                //   $(this).datepicker({
                //       dateFormat: dateFormat,
                //       changeMonth: true,
                //       changeYear: true,
                //       showButtonPanel: true,
                //       onClose: function(dateText, inst) { 
                //           $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
                //           var element = $(this).parent().parent().children('.billOptions').children('.tempID').val();
                //           billObj['items'][element]['impression'] = $(this).val();
                //           console.log(billObj);
                //       }
                //     });
                // });
                var billObj = {};
                var counter = 0;
                $('.loadPayouts').click(function() {
                    billObj = {};
                    counter = 0;
                    $('.payBody').html('');
                    initiateBill('');
                    $('#addData').modal('show');
                });
                //prepare('', '/api/saveEstimation');
                prepare('_update', url);
                preparetable('');
                preparetable('_update');
                $('#updatePublisherForm').validate();
                var vatOnValues = ['Gross', 'Net', 'Gross-Agency Commission', 'Net-Agency Commission'];
                var commOnValues = ['Gross', 'Net'];

                function preparetable($suffix) {
                    $('.payBody' + $suffix).on('click', '.deleteBill' + $suffix, function() {
                        console.log($(this).parent().children('.tempID').val().toString());
                        delete billObj['items'][$(this).parent().children('.tempID').val().toString()];
                        if ($suffix != '') {
                            if ($(this).parent().children('.tempID').val().toString() in billObj[
                                    'existingBills']) {
                                billObj['removedItems'][$(this).parent().children('.tempID').val().toString()] =
                                    null;
                            }
                        }
                        $(this).parent().parent().remove();
                        sumGrossAmount($suffix);
                        calculateBill($suffix);
                    });
                    $('.payBody' + $suffix).on('keyup', '.modal_grossBill' + $suffix, function() {
                        var element = $(this).parent().parent().children('.billOptions').children('.tempID')
                            .val();
                        billObj['items'][element]['grossAmount'] = $(this).val();
                        sumGrossAmount($suffix);
                        calculateBill($suffix);
                    });
                    $('.payBody' + $suffix).on('keyup', '.modal_cName' + $suffix, function() {
                        var element = $(this).parent().parent().children('.billOptions').children('.tempID')
                            .val();
                        billObj['items'][element]['description'] = $(this).val();
                    });
                    $('.payBody' + $suffix).on('keyup', '.modal_impression' + $suffix, function() {
                        var element = $(this).parent().parent().children('.billOptions').children('.tempID')
                            .val();
                        billObj['items'][element]['impression'] = $(this).val();
                    });
                    $('.payBody' + $suffix).on('change', '.modal_invoice_in' + $suffix, function() {
                        var element = $(this).parent().parent().children('.billOptions').children('.tempID')
                            .val();
                        console.log(billObj['items'][element]);
                        billObj['items'][element]['jobhead'] = $(this).val();
                        calculateBill($suffix);
                    });
                    $('#publisherUserName' + $suffix).change(function() {
                        $.ajax({
                                method: 'GET',
                                url: '/api/getClientData/' + $(this).val()
                            })
                            .done(function(response) {
                                console.log(response.vat);
                                $('#modal_vat' + $suffix).val(response.vat);
                                $('#modal_ait' + $suffix).val(response.aComm);
                                $('#modal_vatOn_hidden' + $suffix).val(response.vatOn);
                                $('#modal_commOn_hidden' + $suffix).val(response.commOn);
                                $('#modal_vatOn' + $suffix).val(vatOnValues[response.vatOn]);
                                $('#modal_commOn' + $suffix).val(commOnValues[response.commOn]);
                                calculateBill($suffix);
                            });
                    });
                }

                function sumGrossAmount($suffix) {
                    var sum = 0.00;
                    $('.modal_grossBill' + $suffix).each(function() {
                        sum += +$(this).val();
                    });
                    $('#modal_grossAmount' + $suffix).val(sum);
                }

                function initiateBill($suffix) {
                    $('#modal_grossAmount' + $suffix).val(0.00);
                    $('#PayoutDate' + $suffix).val(formatDate());
                    billObj['eDate'] = $('#PayoutDate' + $suffix).val();
                    billObj['items'] = {};
                    $('#modal_vatAmount' + $suffix).val(0);
                    $('#modal_aitAmount' + $suffix).val(0);
                    $('#modal_discount' + $suffix).val(0);
                    $('#modal_net' + $suffix).val(Math.round((parseFloat($('#modal_grossAmount' + $suffix).val()) -
                        parseFloat($('#modal_discount' + $suffix).val())).toFixed(2)));
                    $('#modal_gt' + $suffix).val(Math.round((parseFloat($('#modal_net' + $suffix).val()) + parseFloat($(
                        '#modal_vatAmount' + $suffix).val()) + parseFloat($('#modal_aitAmount' +
                        $suffix).val())).toFixed(2)));
                }

                function calculateBill($suffix) {
                    $('#modal_net' + $suffix).val(Math.round((parseFloat($('#modal_grossAmount' + $suffix).val()) -
                        parseFloat($('#modal_discount' + $suffix).val())).toFixed(2)));
                    console.log('xxx' + $('#modal_vatOn_hidden' + $suffix).val());
                    switch (parseInt($('#modal_vatOn_hidden' + $suffix).val())) {
                        case 0:
                            $('#modal_vatAmount' + $suffix).val(Math.round(($('#modal_grossAmount' + $suffix).val() * (
                                $('#modal_vat' + $suffix).val() / 100)).toFixed(2)));
                            break;
                        case 1:
                            $('#modal_vatAmount' + $suffix).val(Math.round(($('#modal_net' + $suffix).val() * ($(
                                '#modal_vat' + $suffix).val() / 100)).toFixed(2)));
                            break;
                        case 2:
                            $('#modal_vatAmount' + $suffix).val(Math.round((($('#modal_grossAmount' + $suffix).val() -
                                $('#modal_aitAmount' + $suffix).val()) * ($('#modal_vat' + $suffix)
                                .val() / 100)).toFixed(2)));
                            break;
                        case 3:
                            $('#modal_vatAmount' + $suffix).val(Math.round((($('#modal_net' + $suffix).val() - $(
                                '#modal_aitAmount' + $suffix).val()) * ($('#modal_vat' + $suffix)
                                .val() / 100)).toFixed(2)));
                            break;
                    }
                    switch (parseInt($('#modal_commOn_hidden' + $suffix).val())) {
                        case 0:
                            $('#modal_aitAmount' + $suffix).val(Math.round(($('#modal_grossAmount' + $suffix).val() * (
                                $('#modal_ait' + $suffix).val() / 100)).toFixed(2)));
                            break;
                        case 1:
                            $('#modal_aitAmount' + $suffix).val(Math.round(($('#modal_net' + $suffix).val() * ($(
                                '#modal_ait' + $suffix).val() / 100)).toFixed(2)));
                            break;
                    }
                    $('#modal_gt' + $suffix).val(Math.round((parseFloat($('#modal_net' + $suffix).val()) + parseFloat($(
                        '#modal_vatAmount' + $suffix).val()) - parseFloat($('#modal_aitAmount' +
                        $suffix).val())).toFixed(2)));
                }

                function prepare($suffix, $url) {
                    $('#addBill' + $suffix).click(function() {
                        if ($('#publisherUserName' + $suffix).val() != -1 && $('#periodStart' + $suffix).val()
                            .length > 0 && $('#periodEnd' + $suffix).val().length > 0) {
                            var selectString = '<tr class="modal_bills' + $suffix +
                                '"><td class="billOptions" style="text-align: center"><button type="button" class="btn btn-danger btn-sm deleteBill' +
                                $suffix + '">Delete</button><input class="tempID" type="hidden" value="n' +
                                counter + '"></td><td class="modal_invoice' + $suffix + '">';
                            selectString = selectString + '<select class="form-control modal_invoice_in' +
                                $suffix + '">';
                            $.each(jobHeads, function(key, val) {
                                selectString = selectString + '<option value="' + val.id + '">' + val
                                    .jobHead + '</option>';
                            });
                            selectString = selectString + '</select>';
                            selectString = selectString +
                                '</td><td><input type="text" required class="form-control modal_cName' +
                                $suffix +
                                '"></td><td><input type="text" required class="form-control modal_impression' +
                                $suffix +
                                '"></td><td><input type="text" required class="form-control modal_grossBill' +
                                $suffix + '"></td></tr>';
                            $('.payBody' + $suffix).append(selectString);
                            billObj['items']['n' + counter] = {
                                'jobhead': '',
                                'description': '',
                                'impression': '',
                                'grossAmount': 0.00
                            };
                            counter = counter + 1;
                        }
                    });
                    $('#modal_vat' + $suffix).keyup(function() {
                        calculateBill($suffix);
                    });
                    $('#modal_ait' + $suffix).keyup(function() {
                        calculateBill($suffix);
                    });
                    $('#modal_discount' + $suffix).keyup(function() {
                        calculateBill($suffix);
                    });
                    $('#generatePayout' + $suffix).click(function() {
                        calculateBill($suffix);
                        populateBillObj(billObj, $suffix);
                        //$(this).prop('disabled', true);
                        var t = $('#editDataForm').validate({
                            rules: {
                                periodStart_update: {
                                    required: true
                                }
                            }
                        });
                        var size = Object.keys(billObj['items']).length;
                        console.log($('#modal_grossAmountFixed_update').val());
                        console.log($('#modal_grossAmount_update').val());
                        console.log(url);
                        //if(size > 0 && t.valid() && parseFloat($('#modal_grossAmountFixed_update').val()) >= parseFloat($('#modal_grossAmount_update').val())){
                        if (size > 0 && t.valid()) {
                            console.log('posted');
                            $.ajax({
                                    method: 'POST',
                                    async: true,
                                    url: url,
                                    data: {
                                        estimations: JSON.stringify(billObj)
                                    }
                                })
                                .done(function(response) {
                                    console.log('posted!!');
                                    window.location.href = "/agencyBill";
                                });
                        }
                    });
                };

                function populateBillObj(billObj, $suffix) {
                    billObj['grossAmount'] = $('#modal_grossAmount' + $suffix).val();
                    billObj['discount'] = $('#modal_discount' + $suffix).val();
                    billObj['vat'] = $('#modal_vat' + $suffix).val();
                    billObj['vatAmount'] = $('#modal_vatAmount' + $suffix).val();
                    billObj['ait'] = $('#modal_ait' + $suffix).val();
                    billObj['aitAmount'] = $('#modal_aitAmount' + $suffix).val();
                    billObj['netAmount'] = $('#modal_net' + $suffix).val();
                    billObj['gt'] = $('#modal_gt' + $suffix).val();
                    billObj['note'] = $('#modal_notes' + $suffix).val();
                    billObj['startDate'] = $('#periodStart' + $suffix).val();
                    billObj['endDate'] = $('#periodEnd' + $suffix).val();
                    billObj['eDate'] = $('#PayoutDate' + $suffix).val();
                    billObj['clientID'] = $('#publisherUserName' + $suffix).children("option:selected").val();
                    billObj['cName'] = $('#cName' + $suffix).val();
                    billObj['vatOn'] = $('#modal_vatOn_hidden' + $suffix).val();
                    billObj['commOn'] = $('#modal_commOn_hidden' + $suffix).val();
                };

                //Methods related to the edit function are below

                $('.createBill').click(function() {
                    trigger = 1;
                    url = 'api/createBill';
                    var billId = $(this).parent().children('.cid').html();
                    //$('#downloadPDF').attr('href', '/pdf/'+billId);
                    $.ajax({
                            method: 'GET',
                            url: '/api/createBill/' + billId
                        })
                        .done(function(response) {
                            console.log(response);
                            billObj = {};
                            //$('#PayoutDate_update').val($.datepicker.formatDate(dateFormat, new Date(response.estimationData.eDate)));
                            //$('#PayoutDate_update').val($.datepicker.formatDate(dateFormat, new Date(response.estimationData.eDate)));
                            $('#PayoutDate_update').val($.datepicker.formatDate(dateFormat, new Date()));
                            $('#payoutId_update').html(response.estimationData.eID);
                            $('#billId_update').html('Not yet generated.');
                            //$('#PayoutDate_update').val(response.billData.payoutDate);
                            $('.payBody_update').html('');
                            billObj['items'] = {};
                            //billObj['eID'] = response.estimationData.eID;
                            billObj['estimationId'] = response.estimationData.id;
                            billObj['eID'] = response.estimationData.eID;
                            billObj['existingBills'] = {};
                            $suffix = '_update';
                            $.each(response.estimations, function(k, v) {
                                //$('.payBody_update').append('<tr class="modal_bills_update"><td class="billOptions" style="text-align: center"><button type="button" class="btn btn-danger btn-sm deleteBill_update">Delete</button><input class="tempID" type="hidden" value="'+v.id+'"></td><td class="modal_invoice_update"><input type="text" value="'+v.invoiceNo+'" class="modal_invoice_in_update"></td><td><input type="text" value="'+v.cName+'" required class="modal_cName_update"></td><td><input value="'+$.datepicker.formatDate(dateFormat, new Date(v.payoutDate))+'" type="text" required class="modal_impression_update"></td><td><input value="'+v.grossAmount+'" type="text" required class="modal_grossBill_update"></td></tr>');
                                ///
                                var selectString = '<tr class="modal_bills' + $suffix +
                                    '"><td class="billOptions" style="text-align: center"><button type="button" class="btn btn-danger btn-sm deleteBill' +
                                    $suffix +
                                    '">Delete</button><input class="tempID" type="hidden" value="' +
                                    v.id + '"></td><td class="modal_invoice' + $suffix + '">';
                                selectString = selectString +
                                    '<select class="form-control modal_invoice_in' + $suffix + '">';
                                $.each(jobHeads, function(key, val) {
                                    if (val.id == v.jobhead) {
                                        selectString = selectString +
                                            '<option selected="selected" value="' + val.id +
                                            '">' + val.jobHead + '</option>';
                                    } else {
                                        selectString = selectString + '<option value="' +
                                            val.id + '">' + val.jobHead + '</option>';
                                    }
                                });
                                selectString = selectString + '</select>';
                                selectString = selectString +
                                    '</td><td><input type="text" value="' + v.description +
                                    '" required class="form-control modal_cName' + $suffix +
                                    '"></td><td><input type="text" required value="' + v
                                    .impression + '" class="form-control modal_impression' +
                                    $suffix + '"></td><td><input type="text" value="' + v
                                    .grossAmount +
                                    '" required class="form-control modal_grossBill' + $suffix +
                                    '"></td></tr>';
                                $('.payBody' + $suffix).append(selectString);
                                ////
                                billObj['items'][v.id] = {
                                    //'eID': v.eID,
                                    'jobhead': v.jobhead,
                                    'description': v.description,
                                    'grossAmount': v.grossAmount,
                                    'impression': v.impression
                                };
                                billObj['existingBills'][v.id] = null;
                            });
                            $('#publisherUserName_update').val(response.estimationData.clientID);
                            $('#periodStart_update').val($.datepicker.formatDate(dateFormat, new Date(
                                response.estimationData.periodStartDate)));
                            $('#periodEnd_update').val($.datepicker.formatDate(dateFormat, new Date(response
                                .estimationData.periodEndDate)));
                            //$('#modal_notes_update').val(response.estimationData.note);
                            $('#modal_grossAmount_update').val(response.estimationData.grossAmount);
                            $('#modal_grossAmountFixed_update').val(response.estimationData.grossAmount);
                            $('#modal_discount_update').val(response.estimationData.discountAmount);
                            $('#modal_vat_update').val(response.estimationData.vat);
                            $('#modal_vatAmount_update').val(response.estimationData.vatAmount);
                            $('#modal_ait_update').val(response.estimationData.aComm);
                            $('#modal_aitAmount_update').val(response.estimationData.aCommAmount);
                            $('#modal_net_update').val(response.estimationData.netAmount);
                            $('#modal_gt_update').val(response.estimationData.gt);
                            $('#cName_update').val(response.estimationData.cName);
                            $('#modal_vatOn_hidden' + $suffix).val(response.estimationData.vatOn);
                            $('#modal_commOn_hidden' + $suffix).val(response.estimationData.commOn);
                            $('#modal_vatOn_update').val(vatOnValues[response.estimationData.vatOn]);
                            $('#modal_commOn_update').val(commOnValues[response.estimationData.commOn]);
                            billObj['vatOn'] = $('#modal_vatOn_hidden' + $suffix).val();
                            billObj['commOn'] = $('#modal_commOn_hidden' + $suffix).val();
                            billObj['bDate'] = $('#PayoutDate_update').val();
                            billObj['removedItems'] = {};
                        });
                });
                $('.deletePublisher').click(function() {
                    var elem = $(this).parent().children('.cid').html();
                    $('#deleteContent').attr('href', '/agencyBill/delete/' + elem);
                    $('#deleteDiag').modal('show');
                });
                $('.editBill').click(function() {
                    trigger = 2;
                    url = 'api/editAgencyBill';
                    var billId = $(this).parent().children('.cid').html();
                    //$('#downloadPDF').attr('href', '/pdf/'+billId);
                    $.ajax({
                            method: 'GET',
                            url: '/api/pullAgencyBill/' + billId
                        })
                        .done(function(response) {
                            console.log(response);
                            billObj = {};
                            //$('#PayoutDate_update').val($.datepicker.formatDate(dateFormat, new Date(response.estimationData.eDate)));
                            //$('#PayoutDate_update').val($.datepicker.formatDate(dateFormat, new Date(response.estimationData.eDate)));
                            $('#PayoutDate_update').val($.datepicker.formatDate(dateFormat, new Date(
                                response.estimationData.bDate)));
                            $('#payoutId_update').html(response.estimationData.eID);
                            $('#billId_update').html(response.estimationData.bID);
                            //$('#PayoutDate_update').val(response.billData.payoutDate);
                            $('.payBody_update').html('');
                            billObj['items'] = {};
                            //billObj['eID'] = response.estimationData.eID;
                            billObj['estimationId'] = response.estimationData.id;
                            billObj['eID'] = response.estimationData.eID;
                            billObj['bID'] = response.estimationData.id;
                            billObj['existingBills'] = {};
                            $suffix = '_update';
                            $.each(response.estimations, function(k, v) {
                                //$('.payBody_update').append('<tr class="modal_bills_update"><td class="billOptions" style="text-align: center"><button type="button" class="btn btn-danger btn-sm deleteBill_update">Delete</button><input class="tempID" type="hidden" value="'+v.id+'"></td><td class="modal_invoice_update"><input type="text" value="'+v.invoiceNo+'" class="modal_invoice_in_update"></td><td><input type="text" value="'+v.cName+'" required class="modal_cName_update"></td><td><input value="'+$.datepicker.formatDate(dateFormat, new Date(v.payoutDate))+'" type="text" required class="modal_impression_update"></td><td><input value="'+v.grossAmount+'" type="text" required class="modal_grossBill_update"></td></tr>');
                                ///
                                var selectString = '<tr class="modal_bills' + $suffix +
                                    '"><td class="billOptions" style="text-align: center"><button type="button" class="btn btn-danger btn-sm deleteBill' +
                                    $suffix +
                                    '">Delete</button><input class="tempID" type="hidden" value="' +
                                    v.id + '"></td><td class="modal_invoice' + $suffix + '">';
                                selectString = selectString +
                                    '<select class="form-control modal_invoice_in' + $suffix + '">';
                                $.each(jobHeads, function(key, val) {
                                    if (val.id == v.jobhead) {
                                        selectString = selectString +
                                            '<option selected="selected" value="' + val.id +
                                            '">' + val.jobHead + '</option>';
                                    } else {
                                        selectString = selectString + '<option value="' +
                                            val.id + '">' + val.jobHead + '</option>';
                                    }
                                });
                                selectString = selectString + '</select>';
                                selectString = selectString +
                                    '</td><td><input type="text" value="' + v.description +
                                    '" required class="form-control modal_cName' + $suffix +
                                    '"></td><td><input type="text" required value="' + v
                                    .impression + '" class="form-control modal_impression' +
                                    $suffix + '"></td><td><input type="text" value="' + v
                                    .grossAmount +
                                    '" required class="form-control modal_grossBill' + $suffix +
                                    '"></td></tr>';
                                $('.payBody' + $suffix).append(selectString);
                                ////
                                billObj['items'][v.id] = {
                                    //'eID': v.eID,
                                    'jobhead': v.jobhead,
                                    'description': v.description,
                                    'grossAmount': v.grossAmount,
                                    'impression': v.impression
                                };
                                billObj['existingBills'][v.id] = null;
                            });
                            $('#publisherUserName_update').val(response.estimationData.clientID);
                            $('#periodStart_update').val($.datepicker.formatDate(dateFormat, new Date(
                                response.estimationData.periodStartDate)));
                            $('#periodEnd_update').val($.datepicker.formatDate(dateFormat, new Date(response
                                .estimationData.periodEndDate)));
                            //$('#modal_notes_update').val(response.estimationData.note);
                            $('#modal_grossAmount_update').val(response.estimationData.grossAmount);
                            $('#modal_grossAmountFixed_update').val(response.mainEstimationGT);
                            $('#modal_discount_update').val(response.estimationData.discountAmount);
                            $('#modal_vat_update').val(response.estimationData.vat);
                            $('#modal_vatAmount_update').val(response.estimationData.vatAmount);
                            $('#modal_ait_update').val(response.estimationData.aComm);
                            $('#modal_aitAmount_update').val(response.estimationData.aCommAmount);
                            $('#modal_net_update').val(response.estimationData.netAmount);
                            $('#modal_gt_update').val(response.estimationData.gt);
                            $('#cName_update').val(response.estimationData.cName);
                            $('#modal_vatOn_hidden' + $suffix).val(response.estimationData.vatOn);
                            $('#modal_commOn_hidden' + $suffix).val(response.estimationData.commOn);
                            $('#modal_vatOn_update').val(vatOnValues[response.estimationData.vatOn]);
                            $('#modal_commOn_update').val(commOnValues[response.estimationData.commOn]);
                            billObj['vatOn'] = $('#modal_vatOn_hidden' + $suffix).val();
                            billObj['commOn'] = $('#modal_commOn_hidden' + $suffix).val();
                            billObj['bDate'] = $('#PayoutDate_update').val();
                            billObj['removedItems'] = {};
                        });
                });

                $('.editBill2').click(function() {
                    trigger = 2;
                    url = 'api/test2';
                    var billId = $(this).parent().children('.cid').html();
                    //$('#downloadPDF').attr('href', '/pdf/'+billId);
                    $.ajax({
                            method: 'GET',
                            url: '/api/editEstimation/' + billId
                        })
                        .done(function(response) {
                            console.log(response);
                            billObj = {};
                            $('#PayoutDate_update').val($.datepicker.formatDate(dateFormat, new Date(
                                response.estimationData.eDate)));
                            $('#payoutId_update').html(response.estimationData.eID);
                            //$('#PayoutDate_update').val(response.billData.payoutDate);
                            $('.payBody_update').html('');
                            billObj['items'] = {};
                            //billObj['eID'] = response.estimationData.eID;
                            billObj['estimationId'] = response.estimationData.id;
                            billObj['eID'] = response.estimationData.eID;
                            billObj['existingBills'] = {};
                            $suffix = '_update';
                            $.each(response.estimations, function(k, v) {
                                //$('.payBody_update').append('<tr class="modal_bills_update"><td class="billOptions" style="text-align: center"><button type="button" class="btn btn-danger btn-sm deleteBill_update">Delete</button><input class="tempID" type="hidden" value="'+v.id+'"></td><td class="modal_invoice_update"><input type="text" value="'+v.invoiceNo+'" class="modal_invoice_in_update"></td><td><input type="text" value="'+v.cName+'" required class="modal_cName_update"></td><td><input value="'+$.datepicker.formatDate(dateFormat, new Date(v.payoutDate))+'" type="text" required class="modal_impression_update"></td><td><input value="'+v.grossAmount+'" type="text" required class="modal_grossBill_update"></td></tr>');
                                ///
                                var selectString = '<tr class="modal_bills' + $suffix +
                                    '"><td class="billOptions" style="text-align: center"><button type="button" class="btn btn-danger btn-sm deleteBill' +
                                    $suffix +
                                    '">Delete</button><input class="tempID" type="hidden" value="' +
                                    v.id + '"></td><td class="modal_invoice' + $suffix + '">';
                                selectString = selectString +
                                    '<select class="form-control modal_invoice_in' + $suffix + '">';
                                $.each(jobHeads, function(key, val) {
                                    if (val.id == v.jobhead) {
                                        selectString = selectString +
                                            '<option selected="selected" value="' + val.id +
                                            '">' + val.jobHead + '</option>';
                                    } else {
                                        selectString = selectString + '<option value="' +
                                            val.id + '">' + val.jobHead + '</option>';
                                    }
                                });
                                selectString = selectString + '</select>';
                                selectString = selectString +
                                    '</td><td><input type="text" value="' + v.description +
                                    '" required class="form-control modal_cName' + $suffix +
                                    '"></td><td><input type="text" required value="' + v
                                    .impression + '" class="form-control modal_impression' +
                                    $suffix + '"></td><td><input type="text" value="' + v
                                    .grossAmount +
                                    '" required class="form-control modal_grossBill' + $suffix +
                                    '"></td></tr>';
                                $('.payBody' + $suffix).append(selectString);
                                ////
                                billObj['items'][v.id] = {
                                    //'eID': v.eID,
                                    'jobhead': v.jobhead,
                                    'description': v.description,
                                    'grossAmount': v.grossAmount,
                                    'impression': v.impression
                                };
                                billObj['existingBills'][v.id] = null;
                            });
                            $('#publisherUserName_update').val(response.estimationData.clientID);
                            $('#periodStart_update').val($.datepicker.formatDate(dateFormat, new Date(
                                response.estimationData.periodStartDate)));
                            $('#periodEnd_update').val($.datepicker.formatDate(dateFormat, new Date(response
                                .estimationData.periodEndDate)));
                            //$('#modal_notes_update').val(response.estimationData.note);
                            $('#modal_grossAmount_update').val(response.estimationData.grossAmount);
                            $('#modal_grossAmountFixed_update').val(response.estimationData.grossAmount);
                            $('#modal_discount_update').val(response.estimationData.discountAmount);
                            $('#modal_vat_update').val(response.estimationData.vat);
                            $('#modal_vatAmount_update').val(response.estimationData.vatAmount);
                            $('#modal_ait_update').val(response.estimationData.aComm);
                            $('#modal_aitAmount_update').val(response.estimationData.aCommAmount);
                            $('#modal_net_update').val(response.estimationData.netAmount);
                            $('#modal_gt_update').val(response.estimationData.gt);
                            $('#cName_update').val(response.estimationData.cName);
                            $('#modal_vatOn_hidden' + $suffix).val(response.estimationData.vatOn);
                            $('#modal_commOn_hidden' + $suffix).val(response.estimationData.commOn);
                            $('#modal_vatOn_update').val(vatOnValues[response.estimationData.vatOn]);
                            $('#modal_commOn_update').val(commOnValues[response.estimationData.commOn]);
                            billObj['vatOn'] = $('#modal_vatOn_hidden' + $suffix).val();
                            billObj['commOn'] = $('#modal_commOn_hidden' + $suffix).val();
                            billObj['bDate'] = $('#PayoutDate_update').val();
                            billObj['removedItems'] = {};
                        });
                });
                var columnNames = ['Bill Id', 'Estimation Id', 'Agency Name', 'Activity Period', 'Status'];
                var cCounter = 0;
                $('#BillDetails').DataTable({
                    initComplete: function() {
                        this.api().columns().every(function() {
                            var column = this;
                            console.log(column.header());
                            if (column[0][0] < 5) {
                                var select = $('<select><option value="">' + columnNames[cCounter] +
                                        '</option></select>')
                                    .appendTo($(column.header()).empty())
                                    .on('change', function() {
                                        var val = $.fn.dataTable.util.escapeRegex(
                                            $(this).val()
                                        );
                                        column
                                            .search(val ? '^' + val + '$' : '', true, false)
                                            .draw();
                                    });
                                column.data().unique().sort().each(function(d, j) {
                                    select.append('<option value="' + d + '">' + d +
                                        '</option>')
                                });
                            }
                            cCounter++;
                        });
                    }
                });
            });
        </script>
    @endsection

    <!-- /.card-body -->

@endsection
