$(".editInvestment").click(function (e) {
    e.preventDefault();
    if ($("#NewInvestmentForm").valid()) {
        $(".newInvestmentModal").modal("toggle");
        var formData = new FormData($("#NewInvestmentForm")[0]);
        dynamicAjax(
            $(this).attr("data-id"),
            "POST",
            formData,
            "example",
            "update",
            "Investment"
        );
        // $(".newInvestmentModal").modal("hide");
    } else {
        CustomToaster(
            "error",
            "Please provide valid parameters",
            "Notification"
        );
    }
});

function openEditModal(url, id) {
    var formData = new FormData();
    formData.append("id", id);
    $(".modal-title").html("Edit Investment");
    $(".editInvestment").show();
    $(".addInvestment").hide();
    $("[name=hidden_id]").val(id);
    $(".newInvestmentModal").modal("show");
    dynamicAjax(url, "POST", formData, "example", "edit", "Investment");
    $(".newInvestmentModal").modal("hide");
}