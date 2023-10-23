async function get_data() {

    let data = new FormData();
    data.append("opcion", "get_report")
    data.append("id_user", $("#id_report").val())
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
          $("#departamento").val(response.data.departament);
          $("#telefono").val(response.data.number_phone);
          $("#ubicacion").val(response.data.location);
          $("#fecha").val(response.data.date);
          $("#hora").val(response.data.hour);
          $('input[name="policia"][value="'+response.data.police+'"]').prop('checked', true);
          $("#detalles").val(response.data.details);
          $("#causas").val(response.data.cause);
          $("#recomendaciones").val(response.data.recommendations);
          $("#notas").val(response.data.notes);
          $("#imagen").attr('src', '../../../img_reportes/'+response.data.name_img);
  
        }
      }
    });
  }
  
  get_data();