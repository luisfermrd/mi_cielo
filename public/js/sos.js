let latitude, longitude, accuracy, precision, url;

function geolocationData(){
    if ("geolocation" in navigator) {
        // Obtiene la ubicación actual del usuario
        navigator.geolocation.getCurrentPosition(function (position) {
            // La ubicación se encuentra en position.coords
            latitude = position.coords.latitude;
            longitude = position.coords.longitude;
            accuracy = position.coords.accuracy.toFixed(2); // Precisión en metros
            precision = (accuracy >= 1000) ? (accuracy / 1000) + " km" : accuracy + " m";
            url = `https://www.google.com/maps/search/?api=1&query=${latitude},${longitude}`;
        }, function (error) {
            // En caso de error al obtener la ubicación
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    console.error("El usuario denegó la solicitud de geolocalización.");
                    break;
                case error.POSITION_UNAVAILABLE:
                    console.error("La ubicación no está disponible.");
                    break;
                case error.TIMEOUT:
                    console.error("Tiempo de espera agotado al intentar obtener la ubicación.");
                    break;
                case error.UNKNOWN_ERROR:
                    console.error("Error desconocido al obtener la ubicación.");
                    break;
            }
        });
    } else {
        console.error("La geolocalización no está disponible en este navegador.");
    }
}

geolocationData();


var contador = 0;
const alarma = document.getElementById('alarma');

window.btnSOS.addEventListener("click", function () {
    contador++;
    alarma.style.display = 'none';
    if (contador === 3) {
        geolocationData();
        sendSOS();
        alarma.style.display = 'flex';
        contador = 0; // Reinicia el contador
    }
});

window.detenerAlarma.addEventListener("click", function () {
    alarma.style.display = 'none';
});



async function sendSOS() {

    let data = new FormData();
    data.append("precision", precision)
    data.append("url", url)
    await $.ajax({
        type: "post",
        url: "../controller/sos.php",
        data: data,
        contentType: false,
        processData: false,
        success: function (response) {
            document.getElementById('mensaje_alarma').textContent = response.message;
        }
    });
}
