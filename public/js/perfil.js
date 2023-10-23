

const modal_container = document.getElementById('modal_container');
const close = document.getElementById('closeModal');
const formulario = document.getElementById('formulario');
const abrirModal = document.getElementById('abrirModal');



abrirModal.addEventListener('click', () => {
    modal_container.classList.add('show2');
});
close.addEventListener('click', () => {
    modal_container.classList.remove('show2');
});
formulario.addEventListener('submit', (e) => {
    e.preventDefault()
    register();
});

async function register() {

    let form = $("#formulario")[0];
    let data = new FormData(form);
    data.append("opcion", "register_contact")
    await $.ajax({
        type: "post",
        url: "../controller/perfil.php",
        data: data,
        contentType: false,
        processData: false,
        success: function (response) {
            if (response.status == 1) {
                Swal.fire(
                    'Perfecto!',
                    response.message,
                    'success'
                )
                form.reset();
                get_data();
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






function countChars(obj) {
    const MAX_LENGTH = 100;
    let str_length = obj.value.length;
    if (str_length <= MAX_LENGTH) {
        $("#num_caracter").html(str_length);
    } else {
        let str = obj.value;
        $("#message-text").val(str.slice(0, MAX_LENGTH));
    }
}


async function get_data() {

    let data = new FormData();
    data.append("opcion", "get_user")
    await $.ajax({
        type: "post",
        url: "../controller/perfil.php",
        data: data,
        contentType: false,
        processData: false,
        success: function (response) {

            while (window.tableData.firstChild) {
                window.tableData.removeChild(window.tableData.firstChild);
            }

            if (response.status == 1) {
                $("#identificacion").val(response.data.id_user);
                $("#nombre").val(response.data.name);
                $("#correo").val(response.data.email);
                $("#edad").val(response.data.age);
                $("#ubicacion").val(response.data.location);
                $("#genero").val(response.data.gender);
            }
            if (response.contacts.length != 0) {

                let html ='';
                let con = 0;
                response.contacts.forEach(element => {
                    con++;
                    html += `<tr>
                                <th scope="row">${con}</th>
                                <td>${element.name}</td>
                                <td>${element.number_phone}</td>
                                <td>${element.message}</td>
                                <td>
                                    <button class="btn btn-danger" onclick = "deleteContact(${element.id})">Eliminar</button>
                                </td>
                            </tr>`;
                });
                window.tableData.innerHTML = html;
                if (con == 3) {
                    abrirModal.style.display = "none";
                }else{
                    abrirModal.style.display = "block";
                }
            }else{

            }

        }
    });
}

get_data();

function deleteContact(id) {
    Swal.fire({
        title: 'Estas seguro?',
        text: "Si eliminas este contacto no lo podras recuperar",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, eliminar!'
      }).then((result) => {
        if (result.isConfirmed) {
            eliminar(id);
        }
      })
}

async function eliminar(id) {

    let data = new FormData();
    data.append("opcion", "delete_contact")
    data.append("id", id)
    await $.ajax({
        type: "post",
        url: "../controller/perfil.php",
        data: data,
        contentType: false,
        processData: false,
        success: function (response) {
            if (response.status == 1) {
                Swal.fire(
                    'Perfecto!',
                    response.message,
                    'success'
                )
                get_data();
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
