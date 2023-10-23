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
            precision = tem.toFixed(2)+" km";
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



window.btnChat.addEventListener("click", function () {
    chatContainer.style.display = "block";
});

minimizeButton.addEventListener("click", function () {
    chatContainer.classList.toggle("minimized");
});

closeButton.addEventListener("click", function () {
    chatContainer.style.display = "none"; // Oculta el chat
});

document
    .querySelector(".header-left")
    .addEventListener("click", function () {
        if (chatContainer.classList.contains("minimized")) {
            chatContainer.classList.remove("minimized");
            localStorage.setItem('minimized', true);
        } else {
            localStorage.setItem('minimized', false);
        }
    });

sendButton.addEventListener("click", sendMessage);
messageInput.addEventListener("keydown", function (e) {
    if (e.key === "Enter") {
        sendMessage();
    }
});

function sendMessage() {
    const messageText = messageInput.value;
    if (messageText.trim() !== "") {
        addMessage(messageText, "sent");
        messageInput.value = "";
        setTimeout(function () {
            addMessage("¡Recibido!", "received");
        }, 1000);
    }
}

function addMessage(message, messageType) {
    const messageElement = document.createElement("div");
    messageElement.className = "message " + messageType;

    const messageBubble = document.createElement("div");
    messageBubble.className = "message-bubble";
    messageBubble.textContent = message;

    messageElement.appendChild(messageBubble);
    chatMessages.appendChild(messageElement);
    chatMessages.scrollTop = chatMessages.scrollHeight;
}
