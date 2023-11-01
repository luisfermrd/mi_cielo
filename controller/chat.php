<?php
header('Content-type:application/json;charset=utf-8');

if (isset($_POST['opcion'])) {

    // Conexión a la base de datos
    include_once('../config/conexion.php');

    try {
        date_default_timezone_set('America/Bogota');
        $fechaHora = date('Y-m-d H:i:s');
        $opcion = $_POST['opcion'];

        switch ($opcion) {
                //user
            case 'start_chat':
                $id = $_POST['id'];
                $sql = 'insert into conversations (id_user, date_send) values (?,?)';
                $data = ejecutarConsulta($sql, [$id, $fechaHora], true);
                if ($data) {
                    session_start();
                    $_SESSION['chat'] = true;
                    echo json_encode(array("status" => 1, "message" => "Chat iniciado. Por favor recarga la pagina para ver los cambios."));
                } else {
                    echo json_encode(array("status" => -1, "message" => "Ocurrio un error, intenta mas tarde"));
                }
                break;
            case 'sent_messague':
                $chat_id = $_POST['chat_id'];
                $message = $_POST['message'];
                $sql = 'insert into messages (conversation_id, id_user, content, date_send) values (?,?,?,?)';
                $data = ejecutarConsulta($sql, [$chat_id, 1, $message, $fechaHora], true);
                if ($data) {
                    ejecutarConsulta('UPDATE conversations SET date_send = ? WHERE conversation_id = ?', [$fechaHora, $chat_id], true);
                    echo json_encode(array("status" => 1, "message" => "Mensaje enviado"));
                } else {
                    echo json_encode(array("status" => -1, "message" => "Ocurrio un error"));
                }
                break;
            case 'get_messagues_user':
                $conversation_id = $_POST['chat_id'];
                $sql = "SELECT *
                        FROM messages
                        WHERE conversation_id = ?
                        ORDER BY date_send ASC";
                $data = ejecutarConsulta_retornaFilas($sql, [$conversation_id], true);
                echo json_encode(array("status" => 1, "message" => "Datos obtenido", "data" => $data));
                break;
            case 'new_messagues_user':
                $conversation_id = $_POST['chat_id'];
                $id_user = $_POST['id_user'];
                $sql = "SELECT *
                        FROM messages
                        WHERE conversation_id = ? AND see = 0 AND id_user = ?
                        ORDER BY date_send ASC";
                $data = ejecutarConsulta_retornaFilas($sql, [$conversation_id, $id_user], true);
                echo json_encode(array("status" => 1, "message" => "Datos obtenido", "data" => $data));
                break;
            case 'see_messagues_user':
                $conversation_id = $_POST['chat_id'];
                $id_user = $_POST['id_user'];
                ejecutarConsulta('UPDATE messages SET see = 1 WHERE conversation_id = ? AND see = 0 AND id_user = ?', [$conversation_id, $id_user], true);
                echo json_encode(array("status" => 1, "message" => "Actualizado"));
                break;









                //admin
            case 'get_conversations':
                $sql = "SELECT
                            c.conversation_id,
                            c.id_user,
                            DATE(c.date_send) AS conversation_date,
                            TIME(c.date_send) AS conversation_time,
                            u.name AS user_name,
                            u.id_user,
                            m.message_id AS last_message_id,
                            m.content AS last_message_content,
                            DATE(m.date_send) AS last_message_date,
                            TIME(m.date_send) AS last_message_time,
                            (SELECT COUNT(*) FROM messages m_count WHERE m_count.conversation_id = c.conversation_id AND m_count.see = 0 AND m_count.id_user = 1) AS unread_messages_count
                        FROM conversations c
                        JOIN users u ON c.id_user = u.id_user
                        LEFT JOIN (
                            SELECT
                                m1.conversation_id,
                                m1.message_id,
                                m1.content,
                                m1.date_send,
                                m1.see
                            FROM messages m1
                            WHERE m1.date_send = (
                                SELECT MAX(m2.date_send)
                                FROM messages m2
                                WHERE m2.conversation_id = m1.conversation_id
                            )
                        ) m ON c.conversation_id = m.conversation_id
                        GROUP BY c.conversation_id, c.id_user, conversation_date, conversation_time, user_name, last_message_id, last_message_content, last_message_date, last_message_time
                        ORDER BY c.date_send DESC";
                $data = ejecutarConsulta_retornaFilas($sql, [], false);
                if ($data) {
                    echo json_encode(array("status" => 1, "message" => "Datos obtenido", "data" => $data));
                } else {
                    echo json_encode(array("status" => -1, "message" => "Ocurrio un error, intenta mas tarde"));
                }
                break;

            case 'get_messagues_admin':
                $conversation_id = $_POST['conversation_id'];
                $id_user = $_POST['id_user'];
                $sql = "SELECT *
                        FROM messages
                        WHERE conversation_id = ?
                        ORDER BY date_send ASC";
                $data = ejecutarConsulta_retornaFilas($sql, [$conversation_id], true);
                ejecutarConsulta('UPDATE messages SET see = 1 WHERE conversation_id = ? AND see = 0 AND id_user != ?', [$conversation_id, $id_user], true);
                echo json_encode(array("status" => 1, "message" => "Datos obtenido", "data" => $data));
                break;

            case 'sent_messague_admin':
                $chat_id = $_POST['chat_id'];
                $user_id = $_POST['user_id'];
                $message = $_POST['message'];
                $sql = 'insert into messages (conversation_id, id_user, content, date_send) values (?,?,?,?)';
                $data = ejecutarConsulta($sql, [$chat_id, $user_id, $message, $fechaHora], true);
                if ($data) {
                    ejecutarConsulta('UPDATE conversations SET date_send = ? WHERE conversation_id = ?', [$fechaHora, $chat_id], true);
                    echo json_encode(array("status" => 1, "message" => "Mensaje enviado"));
                } else {
                    echo json_encode(array("status" => -1, "message" => "Ocurrio un error"));
                }
                break;
            case 'new_messagues_admin':
                $conversation_id = $_POST['chat_id'];
                $id_user = $_POST['id_user'];
                $sql = "SELECT *
                            FROM messages
                            WHERE conversation_id = ? AND see = 0 AND id_user != ?
                            ORDER BY date_send ASC";
                $data = ejecutarConsulta_retornaFilas($sql, [$conversation_id, $id_user], true);
                echo json_encode(array("status" => 1, "message" => "Datos obtenido", "data" => $data));
                break;
            case 'see_messagues_admin':
                $conversation_id = $_POST['chat_id'];
                $id_user = $_POST['id_user'];
                ejecutarConsulta('UPDATE messages SET see = 1 WHERE conversation_id = ? AND see = 0 AND id_user != ?', [$conversation_id, $id_user], true);
                echo json_encode(array("status" => 1, "message" => "Actualizado"));
                break;





            default:
                echo json_encode(array("status" => -1, "message" => "Opcion invalida"));
                break;
        }
    } catch (PDOException $e) {
        echo json_encode([
            "status" => -1,
            'message' => [
                'codigo' => $e->getCode(),
                'message' => $e->getMessage()
            ]
        ]);
    }
} else {
    echo json_encode(array("status" => -1, "message" => "No se recibio la opcion"));
}
