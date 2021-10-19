// settings csrf for POST reqs

$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

// toaster

function CustomToaster(type, message, heading) {
    var data =
        "toastr." +
        type +
        '("' +
        message +
        '","' +
        heading +
        '", {' +
        "timeOut: 5000," +
        "closeButton: !0," +
        "debug: !1," +
        "newestOnTop: !0," +
        "progressBar: !0," +
        'positionClass: "toast-top-right",' +
        "preventDuplicates: !0," +
        "onclick: null," +
        'showDuration: "300",' +
        'hideDuration: "1000",' +
        'extendedTimeOut: "1000",' +
        'showEasing: "swing",' +
        'hideEasing: "linear",' +
        'showMethod: "fadeIn",' +
        'hideMethod: "fadeOut",' +
        "tapToDismiss: !1" +
        "});";
    eval(data);
}

function dynamicAjax(url, method, data, tableId, callType, model) {
    $.ajax({
        url: url,
        method: method,
        contentType: false,
        processData: false,
        data: data,
        dataType: "json",
        beforeSend: function () {
            $("#preloader").css({
                display: "block",
                "z-index": 9999,
            });
        },
        success: function (data) {
            console.log("success");
            console.log(data);
            if (
                callType == "new" ||
                callType == "delete" ||
                callType == "update"
            ) {
                if (callType == "delete") {
                    data.status == 200
                        ? Swal.fire(
                              "Deleted!",
                              "Your file has been deleted.",
                              "success"
                          )
                        : Swal.fire(
                              "Deleted!",
                              "Failed to delete the request record",
                              "error"
                          );
                }
                newCall(data.status, data.message, tableId);
            } else if (callType == "expense") {
                data.status == 200
                    ? CustomToaster("success", data.message, "Notification")
                    : CustomToaster("error", data.message, "Notification");
            } else {
                populate(data, model);
            }
        },
        error: function (response) {
            console.log("error");
            console.log(response);
            if (response.status == 422) {
                $.each(response.responseJSON.errors, function (key, value) {
                    CustomToaster("error", value, "Notification");
                });
            } else if (response.status == 400) {
                CustomToaster(
                    "error",
                    response.responseJSON.message,
                    "Notification"
                );
            } else if (response.status == 409) {
                CustomToaster(
                    "error",
                    response.responseJSON.exception,
                    "Notification"
                );
            } else {
                CustomToaster("error", response.statusText, "Notification");
            }
        },
        complete: function () {
            $("#preloader").css({
                display: "none",
                "z-index": 0,
            });
        },
    });
}

function newCall(status, message, tableId) {
    status == 200
        ? CustomToaster("success", message, "Notification")
        : CustomToaster("error", message, "Notification");
    $("#" + tableId).load(" #" + tableId);
}
