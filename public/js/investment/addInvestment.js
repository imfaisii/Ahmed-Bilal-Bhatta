$(".addInvestment").click(function (e) {
    e.preventDefault();
    if ($("#NewInvestmentForm").valid()) {
        $("#NewInvestmentForm").submit();
    } else {
        CustomToaster(
            "error",
            "Please provide valid parameters",
            "Notification"
        );
    }
});

$("#NewInvestmentForm").submit(function (e) {
    e.preventDefault();
    var action = $(this).attr("action");
    var method = $(this).attr("method");
    var data = new FormData(this);
    dynamicAjax(action, method, data, "example", "new", "Worker");
    $(".newInvestmentModal").modal("toggle");
});

$(".openNewInvestmentModal").click(function (e) {
    e.preventDefault();
    $(".modal-title").html("Add a new Investment");
    $(".addInvestment").show();
    $(".editInvestment").hide();
    $(".newInvestmentModal").modal("toggle");
});