window.addEventListener("load", function() {
    this.document.getElementById("loader").classList.toggle("show");
});

$(document).ready(function () {
    $('#formulario').on("submit", function (e) {
        e.preventDefault();
        register();
    });
});

async function register() {

    let form = $("#formulario")[0];
    $data = new FormData(form);
    await $.ajax({
        type: "post",
        url: "controller/registrar.php",
        data: $data,
        contentType: false,
        processData: false,
        success: function (response) {
            if (response.status == 1) {
                Swal.fire(
                    'Bienvenido a nuestro grupo!',
                    response.message,
                    'success'
                  )
                form.reset();
            } else {
                Swal.fire(
                    'Advertencia!',
                    response.message,
                    'warning'
                  )
            }
        }
    });
}

const modal_container = document.getElementById('modal_container');
const close = document.getElementById('closeTerminos');
const noQuieroVerMasEsto = document.getElementById('noQuieroVerMasEsto');

let ver = localStorage.getItem("ver2");

if (ver == null) {
    modal_container.classList.add('show');
}

close.addEventListener('click', () => {
    modal_container.classList.remove('show');
});
noQuieroVerMasEsto.addEventListener('click', () => {
    localStorage.setItem("ver2", "no")
    modal_container.classList.remove('show');
});


//localStorage.removeItem("ver2")