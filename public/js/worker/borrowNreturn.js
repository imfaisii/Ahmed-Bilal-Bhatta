function openBorrowModal(id, name, url, type) {
    $(".modal-title").html(type + " Amount by : " + name);
    $("[name=user_id]").val(id);
    $(".borrowModal").modal("show");
    $(".saveBR")
        .off()
        .click(function (e) {
            e.preventDefault();
            if ($("#borrowNreturnForm").valid()) {
                var formData = new FormData($("#borrowNreturnForm")[0]);
                dynamicAjax(url, "POST", formData, "example", "update", "");
                $(".borrowModal").modal("hide");
            } else {
                CustomToaster(
                    "error",
                    "Please provide valid parameters",
                    "Notification"
                );
            }
        });
}
