async function get_data() {

  let data = new FormData();
  data.append("opcion", "get_test_by_id")
  data.append("id_user", $("#id_user_pagine").val())
  await $.ajax({
    type: "post",
    url: "../../../controller/admin.php",
    data: data,
    contentType: false,
    processData: false,
    success: function (response) {
      if (response.status == 1) {
        if (response.data.respondio == 0) {
          $("#no_respondio").css('display', 'block');
        } else {
          let con = 0;
          let valor_pregunta = 9.0909090909090909090909090909091;
          if (response.data.p1 == 'si') {
            con++;
            $("#p1").html("si");
          }
          if (response.data.p2 == 'si') {
            con++;
            $("#p2").html("si");
          }
          if (response.data.p3 == 'si') {
            con++;
            $("#p3").html("si");
          }
          if (response.data.p4 == 'si') {
            con++;
            $("#p4").html("si");
          }
          if (response.data.p5 == 'si') {
            con++;
            $("#p5").html("si");
          }
          if (response.data.p6 == 'si') {
            con++;
            $("#p6").html("si");
          }
          if (response.data.p7 == 'si') {
            con++;
            $("#p7").html("si");
          }
          if (response.data.p8 == 'si') {
            con++;
            $("#p8").html("si");
          }
          if (response.data.p9 == 'si') {
            con++;
            $("#p9").html("si");
          }
          if (response.data.p10 == 'si') {
            con++;
            $("#p10").html("si");
          }
          if (response.data.p11 == 'si') {
            con++;
            $("#p11").html("si");
          }
          let porcentaje = Math.round(con * valor_pregunta);

          document.getElementById('mercury').style.height = 100 - porcentaje + '%';

          if (porcentaje <= 20) {
            document.getElementById('respuestaTest').innerHTML = 'Me complace informarte que según el violímetro, el nivel de violencia en esta situación es mínimo. Esto indica que las interacciones se están llevando a cabo de manera pacífica y respetuosa. Sigamos promoviendo la comunicación abierta y el entendimiento mutuo.No parece que estés sufriendo violencia en este momento, pero recuerda que siempre puedes buscar ayuda si lo necesitas.';
          } else if (porcentaje <= 40) {
            document.getElementById('respuestaTest').innerHTML = 'Según el violímetro, se ha identificado un nivel moderado de violencia en esta situación. Es importante abordar estas conductas de manera adecuada y buscar alternativas pacíficas para resolver conflictos. Fomentemos el diálogo y la empatía como herramientas para reducir la violencia.';
          } else if (porcentaje <= 60) {
            document.getElementById('respuestaTest').innerHTML = 'La evaluación del violímetro indica que existe un nivel significativo de violencia en esta situación. Es fundamental tomar medidas inmediatas para abordar esta problemática y buscar soluciones no violentas. Prioricemos la seguridad y el bienestar de todas las personas involucradas.';
          } else if (porcentaje <= 80) {
            document.getElementById('respuestaTest').innerHTML = 'El violímetro ha registrado un nivel alto de violencia en esta situación, lo cual es motivo de preocupación. Es esencial tomar acciones urgentes para detener y prevenir cualquier forma de violencia. Busquemos la ayuda de profesionales y trabajemos en conjunto para promover la paz y la seguridad.';
          } else {
            document.getElementById('respuestaTest').innerHTML = 'Lamentablemente, el violímetro ha detectado un nivel extremo de violencia en esta situación. Es imperativo actuar de manera inmediata y enérgica para proteger a las personas involucradas y poner fin a la violencia. Busquemos apoyo de autoridades competentes y organizaciones especializadas en el manejo de situaciones de alta violencia.';
          }
          $("#respondio").css('display', 'block');

        }

      }
    }
  });
}

get_data();
