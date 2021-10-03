$(".editInvestor").click(function (e) {
    e.preventDefault();
    if ($("#NewInvestorForm").valid()) {
        $(".newInvestorModal").modal("toggle");
        var formData = new FormData($("#NewInvestorForm")[0]);
        dynamicAjax(
            $(this).attr("data-id"),
            "POST",
            formData,
            "example",
            "update",
            "Investor"
        );
        // $(".newInvestorModal").modal("hide");
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
    $(".modal-title").html("Edit Worker");
    $(".editInvestor").show();
    $(".addInvestor").hide();
    $("[name=hidden_id]").val(id);
    $(".newInvestorModal").modal("show");
    dynamicAjax(url, "POST", formData, "example", "edit", "Investor");
    $(".newInvestorModal").modal("hide");
}
