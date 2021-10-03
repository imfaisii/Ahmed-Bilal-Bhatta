$(".addInvestor").click(function (e) {
    e.preventDefault();
    if ($("#NewInvestorForm").valid()) {
        $("#NewInvestorForm").submit();
    } else {
        CustomToaster(
            "error",
            "Please provide valid parameters",
            "Notification"
        );
    }
});

$("#NewInvestorForm").submit(function (e) {
    e.preventDefault();
    var action = $(this).attr("action");
    var method = $(this).attr("method");
    var data = new FormData(this);
    dynamicAjax(action, method, data, "example", "new", "Worker");
    $(".newInvestorModal").modal("toggle");
});

$(".openNewInvestorModal").click(function (e) {
    e.preventDefault();
    $(".modal-title").html("Add a new Investor");
    $(".addInvestor").show();
    $(".editInvestor").hide();
    $(".newInvestorModal").modal("toggle");
});
