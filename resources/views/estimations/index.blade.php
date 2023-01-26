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





    <div class="row">
        <div class="col-md-10">
            <h3>Estimation Page</h3>
        </div>
        <div class="col-2">
            <button id="loadPayouts" type="button" class="btn btn-primary" data-toggle="modal">
                Add Estimation
            </button>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-12">
            <h3>Estimation Details</h3>
        </div>
    </div>
    <div class="row">
        <div class="col table-responsive">
            <table id=" BillDetails" class="table table-hover text-nowrap">
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
        </div>
    </div>

    {{-- modal --}}
    <div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="bill" aria-hidden="true">
        <div style="max-width: 1024px" class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bill">Add Estimation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">


                        <div class="row">
                            <div class="col-4">
                                <select id="publisherUserName" name="publisherUserName" class="form-control">
                                    <option value="-1">Select Agencies</option>
                                    @foreach ($agencies as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach


                                </select>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="periodStart" class="col-sm-5 col-form-label col-form-label-sm">Period
                                        Start</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control form-control-sm" id="periodStart" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="periodEnd" class="col-sm-5 col-form-label col-form-label-sm">Period
                                        End</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control form-control-sm" id="periodEnd" />
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-3">
                                <span id="payoutId">Estimation ID: Not yet generated</span>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="cName" class="col-sm-5 col-form-label col-form-label-sm">Campaign
                                        Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control form-control-sm" id="cName" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group row">
                                    <label for="PayoutDate" class="col-sm-7 col-form-label col-form-label-sm">Estimation
                                        Date</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-sm" id="PayoutDate" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <button id="addBill" type="button" class="btn btn-primary btn-sm">
                                    + Add Estimation
                                </button>
                            </div>
                            <div class="col-12">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center" scope="col">-</th>
                                            <th>Job Head</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Impression-Clicks-Views-Lead</th>
                                            <th scope="col">Gross Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tableBody payBody"></tbody>
                                </table>
                            </div>
                            <div class="col-6">
                                <div class="form-group row">
                                    <label for="modal_vatOn" class="col-sm-6 col-form-label col-form-label-sm">Vat Applies
                                        on</label>
                                    <div class="col-sm-6">
                                        <input readonly type="text" class="form-control form-control-sm"
                                            id="modal_vatOn" placeholder="" />
                                        <input readonly type="hidden" class="form-control form-control-sm"
                                            id="modal_vatOn_hidden" placeholder="" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="modal_commOn" class="col-sm-6 col-form-label col-form-label-sm">Agency
                                        Comm. Applies on</label>
                                    <div class="col-sm-6">
                                        <input readonly type="text" class="form-control form-control-sm"
                                            id="modal_commOn" placeholder="" />
                                        <input readonly type="hidden" class="form-control form-control-sm"
                                            id="modal_commOn_hidden" placeholder="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group row">
                                    <label for="modal_grossAmount" class="col-sm-6 col-form-label col-form-label-sm">Gross
                                        Amount</label>
                                    <div class="col-sm-6">
                                        <input readonly type="text" class="form-control form-control-sm"
                                            id="modal_grossAmount" placeholder="0" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="modal_discount" class="col-sm-6 col-form-label col-form-label-sm">Discount
                                        Amount</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-sm" id="modal_discount"
                                            placeholder="0" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="modal_net" class="col-sm-6 col-form-label col-form-label-sm">Net
                                        Amount</label>
                                    <div class="col-sm-6">
                                        <input readonly type="text" class="form-control form-control-sm"
                                            id="modal_net" placeholder="0" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="modal_ait" class="col-sm-6 col-form-label col-form-label-sm">Agency
                                        Comm</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-sm" id="modal_ait"
                                            placeholder="0" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="modal_aitAmount" class="col-sm-6 col-form-label col-form-label-sm">Agency
                                        Comm
                                        Amount</label>
                                    <div class="col-sm-6">
                                        <input readonly type="text" class="form-control form-control-sm"
                                            id="modal_aitAmount" placeholder="0.00" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="modal_vat" class="col-sm-6 col-form-label col-form-label-sm">Vat</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-sm" id="modal_vat"
                                            placeholder="0" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="modal_vatAmount" class="col-sm-6 col-form-label col-form-label-sm">Vat
                                        Amount</label>
                                    <div class="col-sm-6">
                                        <input readonly type="text" class="form-control form-control-sm"
                                            id="modal_vatAmount" placeholder="0.00" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="modal_gt" class="col-sm-6 col-form-label col-form-label-sm">Grand
                                        Total</label>
                                    <div class="col-sm-6">
                                        <input readonly type="text" class="form-control form-control-sm"
                                            id="modal_gt" placeholder="0" />
                                    </div>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <div class="offset-9 col-3">
                        <button id="generatePayout" type="button" class="btn btn-success">
                            Generate Estimation
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- end modal --}}

    <!-- Edit data modal starts here -->
    <div class="modal fade" id="editData" tabindex="-1" role="dialog" aria-labelledby="bill_update"
        aria-hidden="true">
        <form id="editDataForm" novalidate>
            <div style="max-width: 1024px" class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="bill_update">Edit Payout</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <select id="publisherUserName_update" name="publisherUserName" class="form-control">
                                    <option value="-1">Agencies</option>
                                    <option value="28">Mediacom Limited</option>
                                    <option value="29">
                                        Starcom Bangladesh (Activate Media Solutions).
                                    </option>
                                    <option value="30">Melonades</option>
                                    <option value="31">Starcom Bangladesh</option>
                                    <option value="32">Jarvis Digital Limited</option>
                                    <option value="33">
                                        Starcom Bangladesh (Activate Media Solutions)
                                    </option>
                                    <option value="34">bkash Limited</option>
                                    <option value="35">Mindshare Bangladesh</option>
                                    <option value="36">Octagen</option>
                                    <option value="37">X SOLUTIONS LIMITED</option>
                                    <option value="38">Media Consultants Limited</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="periodStart_update"
                                        class="col-sm-5 col-form-label col-form-label-sm">Period Start</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control form-control-sm"
                                            name="periodStart_update" id="periodStart_update" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="periodEnd_update" class="col-sm-5 col-form-label col-form-label-sm">Period
                                        End</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control form-control-sm"
                                            id="periodEnd_update" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                Estimation ID: <span id="payoutId_update"></span>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="cName_update" class="col-sm-5 col-form-label col-form-label-sm">Campaign
                                        Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control form-control-sm" id="cName_update" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group row">
                                    <label for="PayoutDate_update"
                                        class="col-sm-7 col-form-label col-form-label-sm">Estimation Date</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-sm"
                                            id="PayoutDate_update" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <button id="addBill_update" type="button" class="btn btn-primary btn-sm">
                                    + Add Estimation
                                </button>
                            </div>
                            <div class="col-12">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center" scope="col">-</th>
                                            <th>Job Head</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Impression-Clicks-Views-Lead</th>
                                            <th scope="col">Gross Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tableBody payBody_update"></tbody>
                                </table>
                            </div>
                            <div class="col-6">
                                <div class="form-group row">
                                    <label for="modal_vatOn_update" class="col-sm-6 col-form-label col-form-label-sm">Vat
                                        Applies on</label>
                                    <div class="col-sm-6">
                                        <input readonly type="text" class="form-control form-control-sm"
                                            id="modal_vatOn_update" placeholder="" />
                                        <input readonly type="hidden" class="form-control form-control-sm"
                                            id="modal_vatOn_hidden_update" placeholder="" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="modal_commOn_update"
                                        class="col-sm-6 col-form-label col-form-label-sm">Agency Comm. Applies
                                        on</label>
                                    <div class="col-sm-6">
                                        <input readonly type="text" class="form-control form-control-sm"
                                            id="modal_commOn_update" placeholder="" />
                                        <input readonly type="hidden" class="form-control form-control-sm"
                                            id="modal_commOn_hidden_update" placeholder="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group row">
                                    <label for="modal_grossAmount_update"
                                        class="col-sm-6 col-form-label col-form-label-sm">Gross Amount</label>
                                    <div class="col-sm-6">
                                        <input readonly type="text" class="form-control form-control-sm"
                                            id="modal_grossAmount_update" placeholder="0" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="modal_discount_update"
                                        class="col-sm-6 col-form-label col-form-label-sm">Discount Amount</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-sm"
                                            id="modal_discount_update" placeholder="0" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="modal_net_update" class="col-sm-6 col-form-label col-form-label-sm">Net
                                        Amount</label>
                                    <div class="col-sm-6">
                                        <input readonly type="text" class="form-control form-control-sm"
                                            id="modal_net_update" placeholder="0" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="modal_ait_update" class="col-sm-6 col-form-label col-form-label-sm">Agency
                                        Comm</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-sm" id="modal_ait_update"
                                            placeholder="0" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="modal_aitAmount_update"
                                        class="col-sm-6 col-form-label col-form-label-sm">Agency Comm
                                        Amount</label>
                                    <div class="col-sm-6">
                                        <input readonly type="text" class="form-control form-control-sm"
                                            id="modal_aitAmount_update" placeholder="0.00" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="modal_vat_update"
                                        class="col-sm-6 col-form-label col-form-label-sm">Vat</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-sm" id="modal_vat_update"
                                            placeholder="0" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="modal_vatAmount_update"
                                        class="col-sm-6 col-form-label col-form-label-sm">Vat Amount</label>
                                    <div class="col-sm-6">
                                        <input readonly type="text" class="form-control form-control-sm"
                                            id="modal_vatAmount_update" placeholder="0.00" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="modal_gt_update" class="col-sm-6 col-form-label col-form-label-sm">Grand
                                        Total</label>
                                    <div class="col-sm-6">
                                        <input readonly type="text" class="form-control form-control-sm"
                                            id="modal_gt_update" placeholder="0" />
                                    </div>
                                </div>
                            </div>
                            <div class="offset-6 col-6">
                                <button id="generatePayout_update" type="button" class="btn btn-success">
                                    Generate Estimation
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer"></div>
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>

@section('secript_esti')
    <script>
        $(document).ready(function() {

            var vatOnValues = [
                "Gross",
                "Net",
                "Gross-Agency Commission",
                "Net-Agency Commission",
            ];

            console.log(vatOnValues);
            var commOnValues = ["Gross", "Net"];

            // $('#example').DataTable();

            var jobHeads = [];
            $.ajax({
                method: "GET",
                url: "get-job-heads",
            }).done(function(response) {
                jobHeads = response;
                // console.log(jobHeads);
                // console.log('Himel')
            });

            function formatDate() {
                var d = new Date(),
                    month = "" + (d.getMonth() + 1),
                    day = "" + d.getDate(),
                    year = d.getFullYear();

                if (month.length < 2) month = "0" + month;
                if (day.length < 2) day = "0" + day;

                return [day, month, year].join("/");
            }
            var dateFormat = "dd/mm/yy",
                from = $("#periodStart")
                .datepicker({
                    dateFormat: dateFormat,
                    changeMonth: true,
                    changeYear: true,
                })
                .on("change", function() {
                    to.datepicker("option", "minDate", getDate(this));
                }),
                to = $("#periodEnd")
                .datepicker({
                    dateFormat: dateFormat,
                    changeMonth: true,
                    changeYear: true,
                })
                .on("change", function() {
                    from.datepicker("option", "maxDate", getDate(this));
                });
            pd = $("#PayoutDate").datepicker({
                dateFormat: dateFormat,
                changeMonth: true,
                changeYear: true,
                showButtonPanel: true,
                onClose: function(dateText, inst) {
                    $(this).datepicker(
                        "setDate",
                        new Date(inst.selectedYear, inst.selectedMonth, 1)
                    );
                },
            });
            pd_update = $("#PayoutDate_update").datepicker({
                dateFormat: dateFormat,
                changeMonth: true,
                changeYear: true,
                showButtonPanel: true,
                onClose: function(dateText, inst) {
                    $(this).datepicker(
                        "setDate",
                        new Date(inst.selectedYear, inst.selectedMonth, 1)
                    );
                },
            });
            (from3 = $("#periodStart_update")
                .datepicker({
                    dateFormat: dateFormat,
                    changeMonth: true,
                    changeYear: true,
                })
                .on("change", function() {
                    to3.datepicker("option", "minDate", getDate(this));
                })),
            (to3 = $("#periodEnd_update")
                .datepicker({
                    dateFormat: dateFormat,
                    changeMonth: true,
                    changeYear: true,
                })
                .on("change", function() {
                    from3.datepicker("option", "maxDate", getDate(this));
                }));

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
            $("#addData").on("show.bs.modal", function(event) {});
            // $('body').on('focus', ".modal_impression", function() {
            //     $(this).datepicker({
            //         dateFormat: dateFormat,
            //         changeMonth: true,
            //         changeYear: true,
            //         showButtonPanel: true,
            //         onClose: function(dateText, inst) {
            //             $(this).datepicker('setDate', new Date(inst.selectedYear, inst
            //                 .selectedMonth, 1));
            //             var element = $(this).parent().parent().children('.billOptions')
            //                 .children('.tempID').val();
            //             billObj['items'][element]['payoutDate'] = $(this).val();
            //             
            //         }
            //     });
            // });
            // $('body').on('focus', ".modal_impression_update", function() {
            //     $(this).datepicker({
            //         dateFormat: dateFormat,
            //         changeMonth: true,
            //         changeYear: true,
            //         showButtonPanel: true,
            //         onClose: function(dateText, inst) {
            //             $(this).datepicker('setDate', new Date(inst.selectedYear, inst
            //                 .selectedMonth, 1));
            //             var element = $(this).parent().parent().children('.billOptions')
            //                 .children('.tempID').val();
            //             billObj['items'][element]['impression'] = $(this).val();
            //             console.log(billObj);
            //             console.log("Himel")
            //         }
            //     });
            // });
            var billObj = {};
            var counter = 0;
            $("#loadPayouts").click(function() {
                billObj = {};
                counter = 0;
                $(".payBody").html("");
                initiateBill("");
                $("#addData").modal("show");
            });
            prepare("", "estimation");
            prepare("_update", "/api/updateEstimation");
            preparetable("");
            preparetable("_update");
            $("#updatePublisherForm").validate();


            function preparetable($suffix) {
                $(".payBody" + $suffix).on(
                    "click",
                    ".deleteBill" + $suffix,
                    function() {
                        console.log(
                            $(this).parent().children(".tempID").val().toString()
                        );
                        delete billObj["items"][
                            $(this).parent().children(".tempID").val().toString()
                        ];
                        if ($suffix != "") {
                            if (
                                $(this).parent().children(".tempID").val().toString() in
                                billObj["existingBills"]
                            ) {
                                billObj["removedItems"][
                                    $(this).parent().children(".tempID").val().toString()
                                ] = null;
                            }
                        }
                        $(this).parent().parent().remove();
                        sumGrossAmount($suffix);
                        calculateBill($suffix);
                    }
                );
                $(".payBody" + $suffix).on(
                    "keyup",
                    ".modal_grossBill" + $suffix,
                    function() {
                        var element = $(this)
                            .parent()
                            .parent()
                            .children(".billOptions")
                            .children(".tempID")
                            .val();
                        billObj["items"][element]["grossAmount"] = $(this).val();
                        sumGrossAmount($suffix);
                        calculateBill($suffix);
                    }
                );
                $(".payBody" + $suffix).on(
                    "keyup",
                    ".modal_cName" + $suffix,
                    function() {
                        var element = $(this)
                            .parent()
                            .parent()
                            .children(".billOptions")
                            .children(".tempID")
                            .val();
                        billObj["items"][element]["description"] = $(this).val();
                    }
                );
                $(".payBody" + $suffix).on(
                    "keyup",
                    ".modal_impression" + $suffix,
                    function() {
                        var element = $(this)
                            .parent()
                            .parent()
                            .children(".billOptions")
                            .children(".tempID")
                            .val();
                        billObj["items"][element]["impression"] = $(this).val();
                    }
                );
                $(".payBody" + $suffix).on(
                    "change",
                    ".modal_invoice_in" + $suffix,
                    function() {
                        var element = $(this)
                            .parent()
                            .parent()
                            .children(".billOptions")
                            .children(".tempID")
                            .val();
                        console.log(billObj["items"][element]);
                        billObj["items"][element]["jobhead"] = $(this).val();
                        calculateBill($suffix);
                    }
                );
                $("#publisherUserName" + $suffix).change(function() {
                    $.ajax({
                        method: "GET",
                        url: "get-agencyDetails",
                        data: {
                            id: $(this).val()
                        },
                    }).done(function(response) {
                        // console.log(response.vat_on);
                        // console.log(typeof(response.vat_on));
                        $("#modal_vat" + $suffix).val(response.vat);
                        $("#modal_ait" + $suffix).val(response.agency_commission);
                        $("#modal_vatOn_hidden" + $suffix).val(response.vat_on);
                        $("#modal_commOn_hidden" + $suffix).val(response.commission_on);
                        $("#modal_vatOn" + $suffix).val(vatOnValues[response.vat_on]);
                        $("#modal_commOn" + $suffix).val(commOnValues[response.commission_on]);

                        calculateBill($suffix);
                    });
                });
            }

            function sumGrossAmount($suffix) {
                var sum = 0.0;
                $(".modal_grossBill" + $suffix).each(function() {
                    sum += +$(this).val();
                });
                $("#modal_grossAmount" + $suffix).val(sum);
            }

            function initiateBill($suffix) {
                $("#modal_grossAmount" + $suffix).val(0.0);
                $("#PayoutDate" + $suffix).val(formatDate());
                billObj["eDate"] = $("#PayoutDate" + $suffix).val();
                billObj["items"] = {};
                $("#modal_vatAmount" + $suffix).val(0);
                $("#modal_aitAmount" + $suffix).val(0);
                $("#modal_discount" + $suffix).val(0);
                $("#modal_net" + $suffix).val(
                    Math.round(
                        (
                            parseFloat($("#modal_grossAmount" + $suffix).val()) -
                            parseFloat($("#modal_discount" + $suffix).val())
                        ).toFixed(2)
                    )
                );
                $("#modal_gt" + $suffix).val(
                    Math.round(
                        (
                            parseFloat($("#modal_net" + $suffix).val()) +
                            parseFloat($("#modal_vatAmount" + $suffix).val()) +
                            parseFloat($("#modal_aitAmount" + $suffix).val())
                        ).toFixed(2)
                    )
                );
            }

            function calculateBill($suffix) {
                $("#modal_net" + $suffix).val(
                    Math.round(
                        (
                            parseFloat($("#modal_grossAmount" + $suffix).val()) -
                            parseFloat($("#modal_discount" + $suffix).val())
                        ).toFixed(2)
                    )
                );
                // console.log("xxx" + $("#modal_vatOn_hidden" + $suffix).val());
                switch (parseInt($("#modal_vatOn_hidden" + $suffix).val())) {
                    case 0:
                        $("#modal_vatAmount" + $suffix).val(
                            Math.round(
                                (
                                    $("#modal_grossAmount" + $suffix).val() *
                                    ($("#modal_vat" + $suffix).val() / 100)
                                ).toFixed(2)
                            )
                        );
                        break;
                    case 1:
                        $("#modal_vatAmount" + $suffix).val(
                            Math.round(
                                (
                                    $("#modal_net" + $suffix).val() *
                                    ($("#modal_vat" + $suffix).val() / 100)
                                ).toFixed(2)
                            )
                        );
                        break;
                    case 2:
                        $("#modal_vatAmount" + $suffix).val(
                            Math.round(
                                (
                                    ($("#modal_grossAmount" + $suffix).val() -
                                        $("#modal_aitAmount" + $suffix).val()) *
                                    ($("#modal_vat" + $suffix).val() / 100)
                                ).toFixed(2)
                            )
                        );
                        break;
                    case 3:
                        $("#modal_vatAmount" + $suffix).val(
                            Math.round(
                                (
                                    ($("#modal_net" + $suffix).val() -
                                        $("#modal_aitAmount" + $suffix).val()) *
                                    ($("#modal_vat" + $suffix).val() / 100)
                                ).toFixed(2)
                            )
                        );
                        break;
                }
                switch (parseInt($("#modal_commOn_hidden" + $suffix).val())) {
                    case 0:
                        $("#modal_aitAmount" + $suffix).val(
                            Math.round(
                                (
                                    $("#modal_grossAmount" + $suffix).val() *
                                    ($("#modal_ait" + $suffix).val() / 100)
                                ).toFixed(2)
                            )
                        );
                        break;
                    case 1:
                        $("#modal_aitAmount" + $suffix).val(
                            Math.round(
                                (
                                    $("#modal_net" + $suffix).val() *
                                    ($("#modal_ait" + $suffix).val() / 100)
                                ).toFixed(2)
                            )
                        );
                        break;
                }
                $("#modal_gt" + $suffix).val(
                    Math.round(
                        (
                            parseFloat($("#modal_net" + $suffix).val()) +
                            parseFloat($("#modal_vatAmount" + $suffix).val()) -
                            parseFloat($("#modal_aitAmount" + $suffix).val())
                        ).toFixed(2)
                    )
                );
            }

            function prepare($suffix, $url) {
                $("#addBill" + $suffix).click(function() {
                    if (
                        $("#publisherUserName" + $suffix).val() != -1 &&
                        $("#periodStart" + $suffix).val().length > 0 &&
                        $("#periodEnd" + $suffix).val().length > 0
                    ) {
                        var selectString =
                            '<tr class="modal_bills' +
                            $suffix +
                            '"><td class="billOptions" style="text-align: center"><button type="button" class="btn btn-danger btn-sm deleteBill' +
                            $suffix +
                            '">Delete</button><input class="tempID" type="hidden" value="n' +
                            counter +
                            '"></td><td class="modal_invoice' +
                            $suffix +
                            '">';
                        selectString =
                            selectString +
                            '<select class="form-control modal_invoice_in' +
                            $suffix +
                            '">';
                        $.each(jobHeads, function(key, val) {
                            selectString =
                                selectString +
                                '<option value="' +
                                val.id +
                                '">' +
                                val.name +
                                "</option>";
                        });
                        selectString = selectString + "</select>";
                        selectString =
                            selectString +
                            '</td><td><input type="text" required class="form-control modal_cName' +
                            $suffix +
                            '"></td><td><input type="text" required class="form-control modal_impression' +
                            $suffix +
                            '"></td><td><input type="text" required class="form-control modal_grossBill' +
                            $suffix +
                            '"></td></tr>';
                        $(".payBody" + $suffix).append(selectString);
                        billObj["items"]["n" + counter] = {
                            jobhead: "",
                            description: "",
                            impression: "",
                            grossAmount: 0.0,
                        };
                        counter = counter + 1;
                    }
                });
                $("#modal_vat" + $suffix).keyup(function() {
                    calculateBill($suffix);
                });
                $("#modal_ait" + $suffix).keyup(function() {
                    calculateBill($suffix);
                });
                $("#modal_discount" + $suffix).keyup(function() {
                    calculateBill($suffix);
                });
                $("#generatePayout" + $suffix).click(function() {

                    calculateBill($suffix);

                    console.log(billObj)

                    populateBillObj(billObj, $suffix);
                    // $(this).prop('disabled', true);
                    var t = $("#editDataForm").validate({
                        rules: {
                            periodStart_update: {
                                required: true,
                            },
                        },
                    });
                    console.log(t.valid());
                    console.log(billObj);
                    var size = Object.keys(billObj["items"]).length;
                    if (size > 0 && t.valid()) {
                        $.ajax({
                            method: "POST",
                            async: true,
                            url: $url,
                            data: {
                                estimations: JSON.stringify(billObj),
                            },
                        }).done(function(response) {
                            console.log("posted!!");
                            window.location.href = "/estimation";
                        });
                    }
                });
            }

            function populateBillObj(billObj, $suffix) {
                billObj["grossAmount"] = $("#modal_grossAmount" + $suffix).val();
                billObj["discount"] = $("#modal_discount" + $suffix).val();
                billObj["vat"] = $("#modal_vat" + $suffix).val();
                billObj["vatAmount"] = $("#modal_vatAmount" + $suffix).val();
                billObj["ait"] = $("#modal_ait" + $suffix).val();
                billObj["aitAmount"] = $("#modal_aitAmount" + $suffix).val();
                billObj["netAmount"] = $("#modal_net" + $suffix).val();
                billObj["gt"] = $("#modal_gt" + $suffix).val();
                billObj["note"] = $("#modal_notes" + $suffix).val();
                billObj["startDate"] = $("#periodStart" + $suffix).val();
                billObj["endDate"] = $("#periodEnd" + $suffix).val();
                billObj["eDate"] = $("#PayoutDate" + $suffix).val();
                billObj["clientID"] = $("#publisherUserName" + $suffix)
                    .children("option:selected")
                    .val();
                billObj["cName"] = $("#cName" + $suffix).val();
                billObj["vatOn"] = $("#modal_vatOn_hidden" + $suffix).val();
                billObj["commOn"] = $("#modal_commOn_hidden" + $suffix).val();
            }
            $(".deletePublisher").click(function() {
                var elem = $(this).parent().children(".cid").html();
                $("#deleteContent").attr(
                    "href",
                    "/agencyEstimation/delete/" + elem
                );
                $("#deleteDiag").modal("show");
            });
            //Methods related to the edit function are below
            // $(".editBill").click(function() {
            //     var billId = $(this).parent().children(".cid").html();
            //     //$('#downloadPDF').attr('href', '/pdf/'+billId);
            //     $.ajax({
            //         method: "GET",
            //         url: "/api/editEstimation/" + billId,
            //     }).done(function(response) {
            //         console.log(response);
            //         billObj = {};
            //         $("#PayoutDate_update").val(
            //             $.datepicker.formatDate(
            //                 dateFormat,
            //                 new Date(response.estimationData.eDate)
            //             )
            //         );
            //         $("#payoutId_update").html(response.estimationData.eID);
            //         //$('#PayoutDate_update').val(response.billData.payoutDate);
            //         $(".payBody_update").html("");
            //         billObj["items"] = {};
            //         //billObj['eID'] = response.estimationData.eID;
            //         billObj["estimationId"] = response.estimationData.id;
            //         billObj["eID"] = response.estimationData.eID;
            //         billObj["existingBills"] = {};
            //         $suffix = "_update";
            //         $.each(response.estimations, function(k, v) {
            //             //$('.payBody_update').append('<tr class="modal_bills_update"><td class="billOptions" style="text-align: center"><button type="button" class="btn btn-danger btn-sm deleteBill_update">Delete</button><input class="tempID" type="hidden" value="'+v.id+'"></td><td class="modal_invoice_update"><input type="text" value="'+v.invoiceNo+'" class="modal_invoice_in_update"></td><td><input type="text" value="'+v.cName+'" required class="modal_cName_update"></td><td><input value="'+$.datepicker.formatDate(dateFormat, new Date(v.payoutDate))+'" type="text" required class="modal_impression_update"></td><td><input value="'+v.grossAmount+'" type="text" required class="modal_grossBill_update"></td></tr>');
            //             ///
            //             var selectString =
            //                 '<tr class="modal_bills' +
            //                 $suffix +
            //                 '"><td class="billOptions" style="text-align: center"><button type="button" class="btn btn-danger btn-sm deleteBill' +
            //                 $suffix +
            //                 '">Delete</button><input class="tempID" type="hidden" value="' +
            //                 v.id +
            //                 '"></td><td class="modal_invoice' +
            //                 $suffix +
            //                 '">';
            //             selectString =
            //                 selectString +
            //                 '<select class="form-control modal_invoice_in' +
            //                 $suffix +
            //                 '">';
            //             $.each(jobHeads, function(key, val) {
            //                 if (val.id == v.jobhead) {
            //                     selectString =
            //                         selectString +
            //                         '<option selected="selected" value="' +
            //                         val.id +
            //                         '">' +
            //                         val.jobHead +
            //                         "</option>";
            //                 } else {
            //                     selectString =
            //                         selectString +
            //                         '<option value="' +
            //                         val.id +
            //                         '">' +
            //                         val.jobHead +
            //                         "</option>";
            //                 }
            //             });
            //             selectString = selectString + "</select>";
            //             selectString =
            //                 selectString +
            //                 '</td><td><input type="text" value="' +
            //                 v.description +
            //                 '" required class="form-control modal_cName' +
            //                 $suffix +
            //                 '"></td><td><input type="text" required value="' +
            //                 v.impression +
            //                 '" class="form-control modal_impression' +
            //                 $suffix +
            //                 '"></td><td><input type="text" value="' +
            //                 v.grossAmount +
            //                 '" required class="form-control modal_grossBill' +
            //                 $suffix +
            //                 '"></td></tr>';
            //             $(".payBody" + $suffix).append(selectString);
            //             ////
            //             billObj["items"][v.id] = {
            //                 //'eID': v.eID,
            //                 jobhead: v.jobhead,
            //                 description: v.description,
            //                 grossAmount: v.grossAmount,
            //                 impression: v.impression,
            //             };
            //             billObj["existingBills"][v.id] = null;
            //         });
            //         $("#publisherUserName_update").val(
            //             response.estimationData.clientID
            //         );
            //         $("#periodStart_update").val(
            //             $.datepicker.formatDate(
            //                 dateFormat,
            //                 new Date(response.estimationData.periodStartDate)
            //             )
            //         );
            //         $("#periodEnd_update").val(
            //             $.datepicker.formatDate(
            //                 dateFormat,
            //                 new Date(response.estimationData.periodEndDate)
            //             )
            //         );
            //         //$('#modal_notes_update').val(response.estimationData.note);
            //         $("#modal_grossAmount_update").val(
            //             response.estimationData.grossAmount
            //         );
            //         $("#modal_discount_update").val(
            //             response.estimationData.discountAmount
            //         );
            //         $("#modal_vat_update").val(response.estimationData.vat);
            //         $("#modal_vatAmount_update").val(
            //             response.estimationData.vatAmount
            //         );
            //         $("#modal_ait_update").val(response.estimationData.aComm);
            //         $("#modal_aitAmount_update").val(
            //             response.estimationData.aCommAmount
            //         );
            //         $("#modal_net_update").val(response.estimationData.netAmount);
            //         $("#modal_gt_update").val(response.estimationData.gt);
            //         $("#cName_update").val(response.estimationData.cName);
            //         $("#modal_vatOn_hidden" + $suffix).val(
            //             response.estimationData.vatOn
            //         );
            //         $("#modal_commOn_hidden" + $suffix).val(
            //             response.estimationData.commOn
            //         );
            //         $("#modal_vatOn_update").val(
            //             vatOnValues[response.estimationData.vatOn]
            //         );
            //         $("#modal_commOn_update").val(
            //             commOnValues[response.estimationData.commOn]
            //         );
            //         billObj["vatOn"] = $("#modal_vatOn_hidden" + $suffix).val();
            //         billObj["commOn"] = $("#modal_commOn_hidden" + $suffix).val();
            //         billObj["eDate"] = $("#PayoutDate_update").val();
            //         billObj["removedItems"] = {};
            //     });
            // });
            // var columnNames = [
            //     "Estimation Id",
            //     "Estimation Date",
            //     "Agency username",
            //     "Campaign Name",
            //     "Status",
            // ];
            var cCounter = 0;
            // $("#BillDetails").DataTable({
            //     initComplete: function() {
            //         this.api()
            //             .columns()
            //             .every(function() {
            //                 var column = this;
            //                 console.log(column.header());
            //                 if (column[0][0] < 5) {
            //                     var select = $(
            //                             '<select><option value="">' +
            //                             columnNames[cCounter] +
            //                             "</option></select>"
            //                         )
            //                         .appendTo($(column.header()).empty())
            //                         .on("change", function() {
            //                             var val = $.fn.dataTable.util.escapeRegex(
            //                                 $(this).val()
            //                             );
            //                             column
            //                                 .search(val ? "^" + val + "$" : "", true, false)
            //                                 .draw();
            //                         });
            //                     column
            //                         .data()
            //                         .unique()
            //                         .sort()
            //                         .each(function(d, j) {
            //                             select.append(
            //                                 '<option value="' + d + '">' + d + "</option>"
            //                             );
            //                         });
            //                 }
            //                 cCounter++;
            //             });
            //     },
            // });
        });
    </script>

    <script>
        $(function() {
            // $().button('toggle');

            $('#BillDetails').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection

<!-- /.card-body -->

@endsection
