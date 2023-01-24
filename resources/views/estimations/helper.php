<!-- estimation -->

@section('secript_esti')
    <script>
        $(document).ready(function() {

            // $('#example').DataTable();

            var jobHeads = [];
            $.ajax({
                method: "GET",
                url: "/api/getClientJobheads",
            }).done(function(response) {
                jobHeads = response;
                console.log(jobHeads);
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
            //             console.log("salma");
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
            prepare("", "/api/saveEstimation");
            prepare("_update", "/api/updateEstimation");
            preparetable("");
            preparetable("_update");
            $("#updatePublisherForm").validate();
            var vatOnValues = [
                "Gross",
                "Net",
                "Gross-Agency Commission",
                "Net-Agency Commission",
            ];
            var commOnValues = ["Gross", "Net"];

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
                        url: "/api/getClientData/" + $(this).val(),
                    }).done(function(response) {
                        console.log(response.vat);
                        $("#modal_vat" + $suffix).val(response.vat);
                        $("#modal_ait" + $suffix).val(response.aComm);
                        $("#modal_vatOn_hidden" + $suffix).val(response.vatOn);
                        $("#modal_commOn_hidden" + $suffix).val(response.commOn);
                        $("#modal_vatOn" + $suffix).val(vatOnValues[response.vatOn]);
                        $("#modal_commOn" + $suffix).val(commOnValues[response.commOn]);
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
                console.log("xxx" + $("#modal_vatOn_hidden" + $suffix).val());
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
                                val.jobHead +
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
                    populateBillObj(billObj, $suffix);
                    //$(this).prop('disabled', true);
                    var t = $("#editDataForm").validate({
                        rules: {
                            periodStart_update: {
                                required: true,
                            },
                        },
                    });
                    console.log(t.valid());
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
                            window.location.href = "/agencyEstimation";
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
            $(".editBill").click(function() {
                var billId = $(this).parent().children(".cid").html();
                //$('#downloadPDF').attr('href', '/pdf/'+billId);
                $.ajax({
                    method: "GET",
                    url: "/api/editEstimation/" + billId,
                }).done(function(response) {
                    console.log(response);
                    billObj = {};
                    $("#PayoutDate_update").val(
                        $.datepicker.formatDate(
                            dateFormat,
                            new Date(response.estimationData.eDate)
                        )
                    );
                    $("#payoutId_update").html(response.estimationData.eID);
                    //$('#PayoutDate_update').val(response.billData.payoutDate);
                    $(".payBody_update").html("");
                    billObj["items"] = {};
                    //billObj['eID'] = response.estimationData.eID;
                    billObj["estimationId"] = response.estimationData.id;
                    billObj["eID"] = response.estimationData.eID;
                    billObj["existingBills"] = {};
                    $suffix = "_update";
                    $.each(response.estimations, function(k, v) {
                        //$('.payBody_update').append('<tr class="modal_bills_update"><td class="billOptions" style="text-align: center"><button type="button" class="btn btn-danger btn-sm deleteBill_update">Delete</button><input class="tempID" type="hidden" value="'+v.id+'"></td><td class="modal_invoice_update"><input type="text" value="'+v.invoiceNo+'" class="modal_invoice_in_update"></td><td><input type="text" value="'+v.cName+'" required class="modal_cName_update"></td><td><input value="'+$.datepicker.formatDate(dateFormat, new Date(v.payoutDate))+'" type="text" required class="modal_impression_update"></td><td><input value="'+v.grossAmount+'" type="text" required class="modal_grossBill_update"></td></tr>');
                        ///
                        var selectString =
                            '<tr class="modal_bills' +
                            $suffix +
                            '"><td class="billOptions" style="text-align: center"><button type="button" class="btn btn-danger btn-sm deleteBill' +
                            $suffix +
                            '">Delete</button><input class="tempID" type="hidden" value="' +
                            v.id +
                            '"></td><td class="modal_invoice' +
                            $suffix +
                            '">';
                        selectString =
                            selectString +
                            '<select class="form-control modal_invoice_in' +
                            $suffix +
                            '">';
                        $.each(jobHeads, function(key, val) {
                            if (val.id == v.jobhead) {
                                selectString =
                                    selectString +
                                    '<option selected="selected" value="' +
                                    val.id +
                                    '">' +
                                    val.jobHead +
                                    "</option>";
                            } else {
                                selectString =
                                    selectString +
                                    '<option value="' +
                                    val.id +
                                    '">' +
                                    val.jobHead +
                                    "</option>";
                            }
                        });
                        selectString = selectString + "</select>";
                        selectString =
                            selectString +
                            '</td><td><input type="text" value="' +
                            v.description +
                            '" required class="form-control modal_cName' +
                            $suffix +
                            '"></td><td><input type="text" required value="' +
                            v.impression +
                            '" class="form-control modal_impression' +
                            $suffix +
                            '"></td><td><input type="text" value="' +
                            v.grossAmount +
                            '" required class="form-control modal_grossBill' +
                            $suffix +
                            '"></td></tr>';
                        $(".payBody" + $suffix).append(selectString);
                        ////
                        billObj["items"][v.id] = {
                            //'eID': v.eID,
                            jobhead: v.jobhead,
                            description: v.description,
                            grossAmount: v.grossAmount,
                            impression: v.impression,
                        };
                        billObj["existingBills"][v.id] = null;
                    });
                    $("#publisherUserName_update").val(
                        response.estimationData.clientID
                    );
                    $("#periodStart_update").val(
                        $.datepicker.formatDate(
                            dateFormat,
                            new Date(response.estimationData.periodStartDate)
                        )
                    );
                    $("#periodEnd_update").val(
                        $.datepicker.formatDate(
                            dateFormat,
                            new Date(response.estimationData.periodEndDate)
                        )
                    );
                    //$('#modal_notes_update').val(response.estimationData.note);
                    $("#modal_grossAmount_update").val(
                        response.estimationData.grossAmount
                    );
                    $("#modal_discount_update").val(
                        response.estimationData.discountAmount
                    );
                    $("#modal_vat_update").val(response.estimationData.vat);
                    $("#modal_vatAmount_update").val(
                        response.estimationData.vatAmount
                    );
                    $("#modal_ait_update").val(response.estimationData.aComm);
                    $("#modal_aitAmount_update").val(
                        response.estimationData.aCommAmount
                    );
                    $("#modal_net_update").val(response.estimationData.netAmount);
                    $("#modal_gt_update").val(response.estimationData.gt);
                    $("#cName_update").val(response.estimationData.cName);
                    $("#modal_vatOn_hidden" + $suffix).val(
                        response.estimationData.vatOn
                    );
                    $("#modal_commOn_hidden" + $suffix).val(
                        response.estimationData.commOn
                    );
                    $("#modal_vatOn_update").val(
                        vatOnValues[response.estimationData.vatOn]
                    );
                    $("#modal_commOn_update").val(
                        commOnValues[response.estimationData.commOn]
                    );
                    billObj["vatOn"] = $("#modal_vatOn_hidden" + $suffix).val();
                    billObj["commOn"] = $("#modal_commOn_hidden" + $suffix).val();
                    billObj["eDate"] = $("#PayoutDate_update").val();
                    billObj["removedItems"] = {};
                });
            });
            var columnNames = [
                "Estimation Id",
                "Estimation Date",
                "Agency username",
                "Campaign Name",
                "Status",
            ];
            var cCounter = 0;
            $("#BillDetails").DataTable({
                initComplete: function() {
                    this.api()
                        .columns()
                        .every(function() {
                            var column = this;
                            console.log(column.header());
                            if (column[0][0] < 5) {
                                var select = $(
                                        '<select><option value="">' +
                                        columnNames[cCounter] +
                                        "</option></select>"
                                    )
                                    .appendTo($(column.header()).empty())
                                    .on("change", function() {
                                        var val = $.fn.dataTable.util.escapeRegex(
                                            $(this).val()
                                        );
                                        column
                                            .search(val ? "^" + val + "$" : "", true, false)
                                            .draw();
                                    });
                                column
                                    .data()
                                    .unique()
                                    .sort()
                                    .each(function(d, j) {
                                        select.append(
                                            '<option value="' + d + '">' + d + "</option>"
                                        );
                                    });
                            }
                            cCounter++;
                        });
                },
            });
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
