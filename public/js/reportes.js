$(document).ready(function () {
    $('#formulario').on("submit", function (e) {
        e.preventDefault();
        document.getElementById("loader").classList.toggle("show");
        register();
    });
});

async function register() {
    let form = $("#formulario")[0];
    $data = new FormData(form);
    await $.ajax({
        type: "post",
        url: "../controller/reportes.php",
        data: $data,
        contentType: false,
        processData: false,
        success: function (response) {
            document.getElementById("loader").classList.toggle("show");
            if (response.status == 1) {
                Swal.fire(
                    'Reporte enviado!',
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