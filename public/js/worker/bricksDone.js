function openBricksDoneModal(user_id, name, url) {
    $("#bricksDoneForm [name=user_id]").val(user_id);
    $(".worker-name").html(name);
    $(".bricksDoneModal").modal("show");
    $(".saveBricksReturn")
        .off()
        .click(function (e) {
            e.preventDefault();
            if ($("#bricksDoneForm").valid()) {
                var formData = new FormData($("#bricksDoneForm")[0]);
                dynamicAjax(url, "POST", formData, "example", "update", "");
                $(".bricksDoneModal").modal("hide");
            } else {
                CustomToaster(
                    "error",
                    "Please provide valid parameters",
                    "Notification"
                );
            }
        });
}
