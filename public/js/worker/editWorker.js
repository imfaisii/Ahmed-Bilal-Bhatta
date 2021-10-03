$(".editWorker").click(function (e) {
    e.preventDefault();
    $(".newWorkerModal").modal("toggle");
    if ($("#NewWorkerForm").valid()) {
        var formData = new FormData($('#NewWorkerForm')[0]);
        dynamicAjax(
            $(this).attr("data-id"),
            "POST",
            formData,
            "example",
            "update",
            "Worker"
        );
        $(".WorkerModal").modal("hide");
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
    $(".editWorker").show();
    $(".addWorker").hide();
    $("[name=hidden_id]").val(id);
    $(".WorkerModal").modal("show");
    dynamicAjax(url, "POST", formData, "example", "edit", "Worker");
    $(".WorkerModal").modal("hide");
}
