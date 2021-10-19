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
    if ($(this).valid()) {
        this.submit();
    }
});
