function openEditModal(url, id) {
    var formData = new FormData();
    formData.append("id", id);
    $(".modal-title").html("Edit expense");
    $(".editexpense").show();
    $(".addexpense").hide();
    $("[name=hidden_id]").val(id);
    $(".expenseModal").modal("show");
    dynamicAjax(url, "POST", formData, "example", "edit", "Expense");
    $(".expenseModal").modal("hide");
}

$(".editexpense").click(function (e) {
    e.preventDefault();
    $(".newexpenseModal").modal("toggle");
    if ($("#NewexpenseForm").valid()) {
        var formData = new FormData($("#NewexpenseForm")[0]);
        dynamicAjax(
            $(this).attr("data-id"),
            "POST",
            formData,
            "example",
            "update",
            "expense"
        );
        $(".expenseModal").modal("hide");
    } else {
        CustomToaster(
            "error",
            "Please provide valid parameters",
            "Notification"
        );
    }
});
