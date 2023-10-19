// Preguntas del test
var preguntas = [
    "¿¿Alguna vez has tenido que ocultar moretones?",
    "¿Has experimentado algún tipo de violencia verbal o emocional en los últimos seis meses?",
    "¿Has sido objeto de algún tipo de abuso sexual o acoso en los últimos seis meses?",
    "¿Has presenciado o sufrido violencia en tu entorno familiar?",
    "¿Has recibido amenazas de violencia física en los últimos seis meses?",
    "¿Has sentido miedo de tu pareja o de alguien en tu entorno cercano?",
    "¿Has sido restringido(a) físicamente para evitar que salgas de casa o te relaciones con otras personas?",
    "¿Has experimentado control o vigilancia constante por parte de tu pareja o alguien en tu entorno?",
    "¿En alguna ocasion te han humillado o te han criticado en publico o privado?",
    "¿Has presenciado o sufrido violencia en tu lugar de trabajo o estudio?",
    "¿Has notado cambios en tu comportamiento, como aislamiento social o depresión, debido a situaciones de violencia?",
  ];
  
  
  // Respuestas del usuario
  var respuestas = [];
  
  // Función para realizar el test
  function realizarTest() {
    for (var i = 0; i < preguntas.length; i++) {
      var respuesta = prompt(preguntas[i] + " (Responde sí o no)");
      respuestas.push(respuesta.toLowerCase());
    }
    
    // Evaluar respuestas
    evaluarRespuestas();
  }
  
  // Función para evaluar las respuestas
  function evaluarRespuestas() {
    var contadorViolencia = 0;
    
    for (var i = 0; i < respuestas.length; i++) {
      if (respuestas[i] === "sí") {
        contadorViolencia++;
      }
    }
    
    // Mostrar resultado
    if (contadorViolencia > 0) {
      console.log("Es posible que estés sufriendo algún tipo de violencia. Te recomendamos buscar ayuda y apoyo.");
    } else {
      console.log("No parece que estés sufriendo violencia en este momento, pero recuerda que siempre puedes buscar ayuda si lo necesitas.");
    }
  }
  
  // Ejecutar el test
  realizarTest();
  