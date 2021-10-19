$(".editkhatatype").click(function (e) {
    e.preventDefault();
    if ($("#NewkhatatypeForm").valid()) {
        $(".newkhatatypeModal").modal("toggle");
        var formData = new FormData($("#NewkhatatypeForm")[0]);
        dynamicAjax(
            $(this).attr("data-id"),
            "POST",
            formData,
            "example",
            "update",
            "khatatype"
        );
        // $(".newkhatatypeModal").modal("hide");
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
    $(".modal-title").html("Edit khatatype");
    $(".editkhatatype").show();
    $(".addkhatatype").hide();
    $("[name=hidden_id]").val(id);
    $(".newkhatatypeModal").modal("show");
    dynamicAjax(url, "POST", formData, "example", "edit", "khatatype");
    $(".newkhatatypeModal").modal("hide");
}
