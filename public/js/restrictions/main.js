function changeAccess(url, check, user_id, table) {
    $.ajax({
        type: "post",
        url: url,
        data: {
            check: check,
            user_id: user_id,
        },
        beforeSend: function () {
            $("#preloader").css({
                display: "block",
                "z-index": 1,
            });
            CustomToaster("info", 'Sending request please wait....', "Notification");
        },
        dataType: "json",
        success: function (response) {
            console.log("success");
            console.log(response);
            $("#example").load(" #example");
            Swal.fire(
                "Successfully!",
                "The permission is changed !",
                "success"
            );
        },
        error: function (response) {
            console.log("error");
            console.log(response);
        },
        complete: function () {
            $("#preloader").css({
                display: "none",
                "z-index": 0,
            });
        },
    });
}
