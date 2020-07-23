// const loader = $(`#loader`);
// loader.hide();

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
        $(`#manager-loader`).css({ display: "flex" });
        setTimeout(() => {
            $(`#user-created-alert`).removeClass("d-none");
            $(`#select-manager`).append(
                `<option value="${response.data.id}" selected="selected">${response.data.name}<option>`
            );
            $(`#collapseOne-2`).removeClass("show");
            setTimeout(() => {
                $(`#user-created-alert`).addClass("d-none");
            }, 2000);
            $(`#manager-loader`).css({ display: "none" });
        }, 1500);
        $(`input[name ="manager-name"]`).val("");
        $(`input[name ="manager-email"]`).val("");
        $(`input[name ="manager-charge"]`).val("");
    });
});

$(`input[name ="create-enterprise-button"]`).on("click", (e) => {
    e.preventDefault();
    let name = $(`input[name ="enterprise-name"]`).val();
    let business_name = $(`input[name ="enterprise-business-name"]`).val();
    let location = $(`input[name ="enterprise-location"]`).val();
    let manager = $(`select[name ="enterprise-manager"]`).val();
    let token = $(`input[name ="_token"]`).val();
    $.ajax({
        method: "POST",
        url: "/admin/enterprise/create",
        data: {
            name: name,
            business_name: business_name,
            location: location,
            manager: manager,
            _token: token,
        },
        beforeSend: () => {},
    }).done((response) => {
        //console.log(response);
        $(`#enterprise-loader`).css({ display: "flex" });
        setTimeout(() => {
            $(`#enterprise-created-alert`).removeClass("d-none");
            $(`#project-enterprise`).append(
                `<option value="${response.data.id}" selected="selected">${response.data.name}<option>`
            );
            $(`#collapseOne`).removeClass("show");
            setTimeout(() => {
                $(`#enterprise-created-alert`).addClass("d-none");
            }, 2500);
            $(`#enterprise-loader`).css({ display: "none" });
        }, 1500);
        $(`input[name ="enterprise-name"]`).val("");
        $(`input[name ="enterprise-business-name"]`).val("");
        $(`input[name ="enterprise-location"]`).val("");
    });
    //console.log(name, business_name, location, manager, token);
});

$(`input[name ="create-project-button"]`).on("click", (e) => {
    e.preventDefault();
    $("#create-project").submit();
});
