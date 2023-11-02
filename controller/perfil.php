<?php
header('Content-type:application/json;charset=utf-8');

if (isset($_POST['opcion'])) {

    // Conexión a la base de datos
    include_once('../config/conexion.php');

    try {

        $opcion = $_POST['opcion'];
        session_start();
        $id_user = $_SESSION['id_user'];

        switch ($opcion) {
            case 'get_user':
                $sql = 'select * from users where id_user = ?';
                $data = ejecutarConsulta_retornaFilas($sql, [$id_user], true);
                if ($data) {
                    $sql2 = 'select * from contacts where id_user = ?';
                    $data2 = ejecutarConsulta_retornaFilas($sql2, [$id_user], true);
                    echo json_encode(array("status" => 1, "message" => "Datos obtenidos", "data" => $data[0], "contacts" => $data2));
                } else {
                    echo json_encode(array("status" => -1, "message" => "Error al guardar obtener los datos"));
                }
                break;
            case 'register_contact':
                $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
                $indicativo = isset($_POST["indicativo"]) ? $_POST["indicativo"] : "";
                $numero = isset($_POST["numero"]) ? $_POST["numero"] : "";
                $mensaje = isset($_POST["email"]) ? $_POST["email"] : "";
                $cadenaSinEspacios = preg_replace("/\s+/", "", $numero);
                $number_phone = $indicativo.' '.$cadenaSinEspacios;
                $sql = 'insert into contacts (id_user, name, number_phone, message) values (?, ?, ?, ?)';
                $data = ejecutarConsulta($sql, [$id_user, $nombre, $number_phone, $mensaje], true);
                if ($data) {
                    echo json_encode(array("status" => 1, "message" => "Contacto de emergencia registrado"));
                } else {
                    echo json_encode(array("status" => -1, "message" => "Error al guardar el contacto"));
                }
                break;
            case 'delete_contact':
                $id = isset($_POST["id"]) ? $_POST["id"] : "";
                $sql = 'delete from contacts where id = ?';
                $data = ejecutarConsulta($sql, [$id], true);
                if ($data) {
                    echo json_encode(array("status" => 1, "message" => "Contacto eliminado"));
                } else {
                    echo json_encode(array("status" => -1, "message" => "Error al eliminar el contacto"));
                }
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
                'mensaje' => $e->getMessage()
            ]
        ]);
    }
} else {
    echo json_encode(array("status" => -1, "message" => "No se recibio la opcion"));
}
