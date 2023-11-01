

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
        sentMessage(messageText)
        /* setTimeout(function () {
            addMessage("¡Recibido!", "received");
        }, 1000); */

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

async function sentMessage(message) {
    let data = new FormData();

    data.append("opcion", "sent_messague");
    data.append("message", message);
    data.append('chat_id', $('#chat_id').val());


    await $.ajax({
        type: "post",
        url: "../controller/chat.php",
        data: data,
        contentType: false,
        processData: false,
        success: function (response) {
            console.log(response)
        }
    });
}
async function mountMessage() {
    let data = new FormData();

    data.append("opcion", "get_messagues_user");
    data.append('chat_id', $('#chat_id').val());


    await $.ajax({
        type: "post",
        url: "../controller/chat.php",
        data: data,
        contentType: false,
        processData: false,
        success: function (response) {
            if (response.status == 1) {
                response.data.forEach(e => {
                    if (e.id_user == 1) {
                        addMessage(e.content, "sent");
                    } else {
                        addMessage(e.content, "received");
                    }
                });
            }
        }
    });
}

mountMessage()

async function message() {
    let data = new FormData();

    data.append("opcion", "new_messagues_user");
    data.append('chat_id', $('#chat_id').val());
    data.append('id_user', $('#id_user').val());


    await $.ajax({
        type: "post",
        url: "../controller/chat.php",
        data: data,
        contentType: false,
        processData: false,
        success: function (response) {
            if (response.status == 1 && response.data.length != 0) {
                if (chatOpen) {
                    response.data.forEach(e => {
                           addMessage(e.content, "received");
                           see()
                   });
                   chatMessages.scrollTop = chatMessages.scrollHeight; 
                   $("#btnChat").css('background-color', '#e7008a');
                }else{
                    $("#btnChat").css('background-color', 'green');
                }
            }
        }
    });
}

setInterval(() => {
    message()
}, 1000);

async function see() {
    let data = new FormData();

    data.append("opcion", "see_messagues_user");
    data.append('chat_id', $('#chat_id').val());
    data.append('id_user', $('#id_user').val());


    await $.ajax({
        type: "post",
        url: "../controller/chat.php",
        data: data,
        contentType: false,
        processData: false,
        success: function (response) {
            
        }
    });
}