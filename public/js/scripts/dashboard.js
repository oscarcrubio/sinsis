$(`input[name ="create-manager-button"]`).on("click", (e) => {
    e.preventDefault();
    let name = $(`input[name ="manager-name"]`).val();
    let email = $(`input[name ="manager-email"]`).val();
    let charge = $(`input[name ="manager-charge"]`).val();
    let token = $(`input[name ="_token"]`).val();
    $.ajax({
        method: "POST",
        url: "/admin/user/create",
        data: {
            name: name,
            email: email,
            charge: charge,
            _token: token,
        },
        beforeSend: () => {},
    }).done((response) => {
        console.log();
        $(`#user-created-alert`).removeClass("d-none");
        $(`#select-manager`).append(
            `<option value="${response.data.id}" selected="selected">${response.data.name}<option>`
        );
        $(`#collapseOne-2`).removeClass("show");
        setTimeout(() => {
            $(`#user-created-alert`).addClass("d-none");
        }, 2000);
    });
    // alert(`${name},${email},${charge}`);
});
