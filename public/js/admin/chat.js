const messageChatList = document.querySelector('#chat_vacio');
const chatMessages = document.getElementById("chat-messages");
const messageInput = document.getElementById("message-input");
const sendButton = document.getElementById("send-button");
var container = document.querySelector('.chat-list-user');

let conversation_id = 0;
let id_user = 0;

async function cargarListaDeChat() {

    let data = new FormData();
    data.append("opcion", "get_conversations")
    await $.ajax({
        type: "post",
        url: "../../controller/chat.php",
        data: data,
        contentType: false,
        processData: false,
        success: function (response) {
            //console.log(response)
            if (response.status == 1) {
                messageChatList.style.display = 'none';
                response.data.forEach(e => {
                    // Crear un div con la clase "chat-info"
                    const chatInfoDiv = document.createElement('div');
                    chatInfoDiv.id = e.id_user;
                    chatInfoDiv.classList.add('chat-info');

                    // Crear una imagen
                    const img = document.createElement('img');
                    img.src = '../../public/img/icon.png';
                    img.alt = 'icono';

                    // Crear un div con la clase "chat-info-details"
                    const chatInfoDetailsDiv = document.createElement('div');
                    chatInfoDetailsDiv.classList.add('chat-info-details');

                    // Crear un div con la clase "chat-info-left"
                    const chatInfoLeftDiv = document.createElement('div');
                    chatInfoLeftDiv.classList.add('chat-info-left');

                    // Crear un título h3
                    const h3 = document.createElement('h3');
                    h3.textContent = e.user_name;

                    // Crear un párrafo
                    const p = document.createElement('p');
                    p.textContent = (e.last_message_content !== null) ? e.last_message_content : '';

                    // Agregar el título y el párrafo al div "chat-info-left"
                    chatInfoLeftDiv.appendChild(h3);
                    chatInfoLeftDiv.appendChild(p);

                    // Crear un div con la clase "chat-info-ringth"
                    const chatInfoRightDiv = document.createElement('div');
                    chatInfoRightDiv.classList.add('chat-info-ringth');

                    // Crear un span con la clase "num_message" si hay mensajes no leídos
                    if (e.unread_messages_count !== 0) {
                        const numMessageSpan = document.createElement('span');
                        numMessageSpan.classList.add('num_message');
                        numMessageSpan.classList.add(e.id_user);
                        numMessageSpan.textContent = e.unread_messages_count;
                        chatInfoRightDiv.appendChild(numMessageSpan);
                    }

                    // Crear un span con la clase "hour"
                    const hourSpan = document.createElement('span');
                    hourSpan.classList.add('hour');
                    hourSpan.textContent = e.conversation_time;

                    // Agregar el título al div "chat-info-ringth"
                    chatInfoRightDiv.appendChild(hourSpan);

                    // Agregar "chat-info-left" y "chat-info-ringth" al div "chat-info-details"
                    chatInfoDetailsDiv.appendChild(chatInfoLeftDiv);
                    chatInfoDetailsDiv.appendChild(chatInfoRightDiv);

                    // Agregar la imagen y "chat-info-details" al div "chat-info"
                    chatInfoDiv.appendChild(img);
                    chatInfoDiv.appendChild(chatInfoDetailsDiv);

                    // Agregar "chat-info" al elemento deseado en el DOM (por ejemplo, a un contenedor existente)
                    const container = document.querySelector('.chat-list-user');
                    container.appendChild(chatInfoDiv);

                    chatInfoDiv.addEventListener('click', (event) => {
                        chatMessages.innerHTML = '';
                        cargarMensajes(e.conversation_id, e.id_user, e.user_name)
                    });

                });
            }
        }
    });
}

cargarListaDeChat()


async function cargarMensajes(id_c, id_u, name) {
    conversation_id = id_c;
    id_user = id_u;
    let data = new FormData();

    data.append("opcion", "get_messagues_admin");
    data.append("conversation_id", conversation_id);
    data.append("id_user", id_user);
    $('.' + id_u).remove();

    await $.ajax({
        type: "post",
        url: "../../controller/chat.php",
        data: data,
        contentType: false,
        processData: false,
        success: function (response) {
            if (response.status == 1) {
                $('#chat_name').text(name);
                response.data.forEach(e => {
                    if (e.id_user != 1) {
                        addMessage(e.content, "sent");
                    } else {
                        addMessage(e.content, "received");
                    }
                });
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }
            $('#chat').addClass('active');
            $('#chat_vacio_section').addClass('inactive');
        }
    });
}


window.closeChat.addEventListener('click', () => {
    $('#chat').removeClass('active');
    $('#chat_vacio_section').removeClass('inactive');
    id_user = 0;
    conversation_id = 0;
    chatMessages.innerHTML = '';
})


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

    data.append("opcion", "sent_messague_admin");
    data.append("message", message);
    data.append('chat_id', conversation_id);
    data.append('user_id', id_user);


    await $.ajax({
        type: "post",
        url: "../../controller/chat.php",
        data: data,
        contentType: false,
        processData: false,
        success: function (response) {
            console.log(response)
        }
    });
}














async function verificarListaDeChat() {

    let data = new FormData();
    data.append("opcion", "get_conversations")
    await $.ajax({
        type: "post",
        url: "../../controller/chat.php",
        data: data,
        contentType: false,
        processData: false,
        success: function (response) {
            //console.log(response)
            if (response.status == 1) {
                response.data.forEach(e => {

                    if (e.unread_messages_count != 0) {
                        let div = document.getElementById(e.id_user);
                        var exist = div.querySelector('.chat-info-ringth .num_message');

                        if (!exist) {
                            let msg = div.querySelector('.chat-info-left p');
                            msg.textContent = e.last_message_content;
                            
                            let hour = div.querySelector('.chat-info-ringth .hour');
                            hour.textContent = e.conversation_time;
                            if (conversation_id == 0 && id_user == 0) {
                                let num = div.querySelector('.chat-info-ringth');
                                num.insertAdjacentHTML('afterbegin', `<span class="num_message ${e.id_user}">${e.unread_messages_count}</span>`);
                            }
                            container.insertBefore(div, container.firstChild);
                        } else if (exist.textContent != e.unread_messages_count) {
                            let msg = div.querySelector('.chat-info-left p');
                            msg.textContent = e.last_message_content;
                            if (conversation_id == 0 && id_user == 0) {
                                exist.textContent = e.unread_messages_count;
                            }
                            let hour = div.querySelector('.chat-info-ringth .hour');
                            hour.textContent = e.conversation_time;
                            container.insertBefore(div, container.firstChild);
                        }


                    }
                });
            }
        }
    });
}



setInterval(() => {
    verificarListaDeChat()
    if (conversation_id != 0 && id_user != 0) {
        message()
    }
}, 500);


async function message() {
    let data = new FormData();

    data.append("opcion", "new_messagues_admin");
    data.append('chat_id', conversation_id);
    data.append('id_user', id_user);


    await $.ajax({
        type: "post",
        url: "../../controller/chat.php",
        data: data,
        contentType: false,
        processData: false,
        success: function (response) {
            if (response.status == 1 && response.data.length != 0) {
                response.data.forEach(e => {
                    addMessage(e.content, "received");
                    see();
                    let div = document.getElementById(id_user);
                    $('.' + id_user).remove();
                    let msg = div.querySelector('.chat-info-left p');
                    msg.textContent = e.content;
                    let hour = div.querySelector('.chat-info-ringth .hour');
                    hour.textContent = e.date_send.split(' ')[1];
                    container.insertBefore(div, container.firstChild);

                });
                chatMessages.scrollTop = chatMessages.scrollHeight;

            }
        }
    });
}


async function see() {
    let data = new FormData();

    data.append("opcion", "see_messagues_admin");
    data.append('chat_id', conversation_id);
    data.append('id_user', id_user);


    await $.ajax({
        type: "post",
        url: "../../controller/chat.php",
        data: data,
        contentType: false,
        processData: false,
        success: function (response) {

        }
    });
}