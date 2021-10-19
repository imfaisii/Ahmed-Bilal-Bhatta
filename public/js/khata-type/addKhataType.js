$("#NewkhatatypeForm").submit(function (e) {
    e.preventDefault();
    if ($("#NewkhatatypeForm").valid()) {
        var action = $(this).attr("action");
        var method = $(this).attr("method");
        var data = new FormData(this);
        dynamicAjax(action, method, data, "example", "new", "khatatype");
        $(".newkhatatypeModal").modal("toggle");
    } else {
        CustomToaster(
            "error",
            "Please provide valid parameters",
            "Notification"
        );
    }
});

$(".openNewkhatatypeModal").click(function (e) {
    e.preventDefault();
    $(".modal-title").html("Add a new Expense / Khata Type");
    $(".addkhatatype").show();
    $(".editkhatatype").hide();
    $(".newkhatatypeModal").modal("toggle");
});

$(".newkhatatypeModal").on("hidden.bs.modal", function () {
    $("#NewkhatatypeForm").trigger("reset");
});
