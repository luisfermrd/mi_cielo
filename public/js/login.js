window.addEventListener("load", function() {
    this.document.getElementById("loader").classList.toggle("show");
});

$(document).ready(function () {
    $('#formulario').on("submit", function (e) {
        e.preventDefault();
        login();
    });
});

async function login() {

    let form = $("#formulario")[0];
    $data = new FormData(form);
    await $.ajax({
        type: "post",
        url: "controller/login.php",
        data: $data,
        contentType: false,
        processData: false,
        success: function (response) {
            if (response.status == 1) {
                if (response.role == 1) {
                    $(location).attr("href", "views/home.php");
                } else {
                    $(location).attr("href", "views/admin/home.php");
                }
            } else {
                Swal.fire(
                    'Opps!',
                    response.message,
                    'error'
                  )
            }
        }
    });
}

const modal_container = document.getElementById('modal_container');
const close = document.getElementById('closeTerminos');
const noQuieroVerMasEsto = document.getElementById('noQuieroVerMasEsto');

let ver = localStorage.getItem("ver");

if (ver == null) {
    modal_container.classList.add('show');
}

close.addEventListener('click', () => {
    modal_container.classList.remove('show');
});
noQuieroVerMasEsto.addEventListener('click', () => {
    localStorage.setItem("ver", "no")
    modal_container.classList.remove('show');
});


//localStorage.removeItem("ver")