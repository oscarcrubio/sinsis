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
});

$(`input[name ="create-project-button"]`).on("click", (e) => {
    e.preventDefault();
    $("#create-project").submit();
});
$("#si:checkbox").change(function () {
    if (this.checked) {
        if ($(".pregunta-sec").hasClass("d-none")) {
            $(".pregunta-sec").removeClass("d-none");
        }
        $("#7").addClass("border");
        $("#7").css({ display: "block" });
        $("#8").addClass("border");
        $("#8").css({ display: "block" });
        $("#9").addClass("border");
        $("#9").css({ display: "block" });
    } else {
        $(".pregunta-sec").addClass("d-none");
    }
});

//Date project
var fecha = new Date($("#project-date").text());
var options = { year: "numeric", month: "long", day: "numeric" };
$("#date-format").text(fecha.toLocaleDateString("es-ES", options));
//Date project end

$("#users-project").on("change", () => {
    let user = $(`#users-project option`).filter(`:selected`).val();
    let token = $(`input[name="_token"]`).val();
    let project = $(`input[name="project"]`).val();
    $.ajax({
        method: `POST`,
        url: `/admin/project/users`,
        data: {
            user: user,
            project: project,
            _token: token,
        },
        beforeSend: () => {},
    }).done((response) => {
        $(`#users-project option`).filter(`:selected`).addClass("d-none");
        $(`#users-project-managers`)
            .append(`<li class="media">                          
        <div class="media-body text-small"><a class="text-extra-dark-gray"><span class="d-block margin-5px-bottom">${response.data.name}</span></a> <span class="d-block text-medium-gray text-small">${response.data.email}</span></div>
        </li>`);
        $(`#added-user-project`).removeClass("d-none");
        setTimeout(() => {
            $(`#added-user-project`).addClass("d-none");
        }, 2500);
    });
});
