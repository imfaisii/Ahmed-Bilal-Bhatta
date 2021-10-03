$(".addWorker").click(function (e) {
    e.preventDefault();
    if ($("#NewWorkerForm").valid()) {
        $("#NewWorkerForm").submit();
    } else {
        CustomToaster(
            "error",
            "Please provide valid parameters",
            "Notification"
        );
    }
});

$("#NewWorkerForm").submit(function (e) {
    e.preventDefault();
    var action = $(this).attr("action");
    var method = $(this).attr("method");
    var data = new FormData(this);
    dynamicAjax(action, method, data, "example", "new", "Worker");
    $(".WorkerModal").modal("toggle");
});

$(".openNewWorkerModal").click(function (e) {
    e.preventDefault();
    $(".modal-title").html("Add a new Worker");
    $(".addWorker").show();
    $(".editWorker").hide();
    $(".WorkerModal").modal("toggle");
});
