let latitude, longitude, accuracy, precision, url;

const chatMessages = document.getElementById("chat-messages");
const messageInput = document.getElementById("message-input");
const sendButton = document.getElementById("send-button");
const chatContainer = document.querySelector(".chat-container");
const minimizeButton = document.getElementById("minimize-button");
const closeButton = document.getElementById("close-button");

function geolocationData() {
    if ("geolocation" in navigator) {
        // Obtiene la ubicación actual del usuario
        navigator.geolocation.getCurrentPosition(function (position) {
            // La ubicación se encuentra en position.coords
            latitude = position.coords.latitude;
            longitude = position.coords.longitude;
            accuracy = position.coords.accuracy.toFixed(2); // Precisión en metros
            let tem = (accuracy / 1000);
            precision = tem.toFixed(2) + " km";
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










//chat

let chatOpen = false;

window.btnChat.addEventListener("click", function () {
    chatContainer.style.display = "block";
    chatOpen = true;
    chatMessages.scrollTop = chatMessages.scrollHeight;
});

minimizeButton.addEventListener("click", function () {
    chatContainer.classList.toggle("minimized");
    chatOpen = false;
});

closeButton.addEventListener("click", function () {
    chatContainer.style.display = "none"; // Oculta el chat
    chatOpen = false;
});

document
    .querySelector(".header-left")
    .addEventListener("click", function () {
        if (chatContainer.classList.contains("minimized")) {
            chatContainer.classList.remove("minimized");
        } else {
            chatContainer.classList.add("minimized");
        }
    });




const btnStartChat = document.getElementById('start-chat');

btnStartChat.addEventListener("click", function () {
    startChat();
});


async function startChat() {
    let data = new FormData();
    data.append('opcion', 'start_chat')
    data.append('id', $('#id_user').val())
    await $.ajax({
        type: "post",
        url: "../controller/chat.php",
        data: data,
        contentType: false,
        processData: false,
        success: function (response) {
            if (response.status == 1) {
                Swal.fire(
                    'Ok!',
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


