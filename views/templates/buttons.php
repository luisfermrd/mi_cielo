<div class="section_buttons">
    <div class="con-btn">
        <div class="button" id="btnSOS" style="--i:1">
            <img src="../public/img/sos.png" alt="icon sos">
        </div>
        <span class="message1">Pulsa aqui si te encuentras en peligro, recuerda que debes pulsar varias veces</span>
    </div>
    <div class="con-btn">
        <div class="button" id="btnChat" style="--i:2">
            <img src="../public/img/chat.png" alt="icon chat">
        </div>
        <span class="message2">Chatea con nosotros</span>
    </div>
</div>
<section class="alarma" id="alarma">
    <img src="../public/img/alarma.png" alt="">
    <p id="mensaje_alarma"></p>
    <button id="detenerAlarma">Cerrar</button>
</section>

<?php
include_once('chat.php');
?>