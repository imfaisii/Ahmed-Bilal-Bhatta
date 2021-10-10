// global delete function by id

function deleteById(id, url, tableId, model) {
    var formData = new FormData();
    formData.append("id", id);
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            dynamicAjax(url, "POST", formData, tableId, "delete", model, "");
            Swal.fire("Deleted!", "Your file has been deleted.", "success");
        }
    });
}

function populate(data, model) {
    if (model == "Worker") {
        $("[name=wname]").val(data.name);
        $("[name=waddress]").val(data.address);
        $("[name=wphone]").val(data.phoneNo);
        $("[name=wpeshgi]").val(data.peshgi);
        $("[name=wcnic]").val(data.cnic);
    } else if (model == "Investor") {
        $("[name=name]").val(data.name);
        $("[name=address]").val(data.address);
        $("[name=phone]").val(data.phone);
        $("[name=cnic]").val(data.cnic);
    } else if (model == "Investment") {
        $("[name=investor_id]").val(data.investor.id);
        $("[name=user_id]").val(data.receiver.name);
        $("[name=amount]").val(data.amount);
    }
}
