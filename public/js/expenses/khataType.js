$(document).on("change", ".khataTypeChange", function (e) {
    e.preventDefault();
    $(this)
        .parent()
        .parent()
        .nextAll()
        .find(".description")
        .val(khataTypeData[$(this).val() - 1]["description"]);
});

$("#AddExpenseForm").submit(function (e) {
    e.preventDefault();
    var formData = new FormData($(this)[0]);
    if ($(this).valid()) {
        // this.submit();
        dynamicAjax(
            $(this).attr("action"),
            $(this).attr("method"),
            formData,
            "",
            "expense"
        );
    }
});
