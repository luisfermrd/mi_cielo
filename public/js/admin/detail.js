async function get_data() {

    let data = new FormData();
    data.append("opcion", "get_user")
    data.append("id_user", $("#id_user_pagine").val())
    await $.ajax({
      type: "post",
      url: "../../../controller/admin.php",
      data: data,
      contentType: false,
      processData: false,
      success: function (response) {
        if (response.status == 1) {
          $("#identificacion").val(response.data.id_user);
          $("#nombre").val(response.data.name);
          $("#correo").val(response.data.email);
          $("#edad").val(response.data.age);
          $("#ubicacion").val(response.data.location);
          $("#genero").val(response.data.gender);
          $("#fecha").val(response.data.created_at);
  
        }
      }
    });
  }
  
  get_data();