<div class="chat-container" style="display: none;">
    <input type="hidden" id="id_user" value="<?php echo $_SESSION['id_user'];?>">
    <input type="hidden" id="chat_id" value="<?php echo $_SESSION['chat_id'];?>">
    <div class="chat-header">
        <div class="header-left">Chat Mi Cielo</div>
        <div class="header-right">
            <button id="minimize-button">-</button>
            <button id="close-button">X</button>
        </div>
    </div>

    <?php if (!$_SESSION['chat']) { ?>
        <div class="start-chat">
            <button id="start-chat">Inicar chat!</button>
        </div>
    <?php } else { ?>
        <div class="chat-messages" id="chat-messages">
            <!-- <div class="message received">
                <div class="message-bubble">¡Hola! ¿Cómo estás?</div>
            </div>
            <div class="message sent">
                <div class="message-bubble">Hola, estoy bien, ¿y tú?</div>
            </div> -->
        </div>
        <div class="chat-input">
            <input type="text" id="message-input" placeholder="Escribe un mensaje" />
            <button id="send-button">Enviar</button>
        </div>
    <?php } ?>
</div>