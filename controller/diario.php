<?php
header('Content-type:application/json;charset=utf-8');

if (isset($_POST['opcion'])) {

    // Conexión a la base de datos
    include_once('../config/conexion.php');

    try {

        $opcion = $_POST['opcion'];
        session_start();

        date_default_timezone_set("America/Bogota");
        $fecha = date('Y-m-d H:i:s');

        switch ($opcion) {
            case 'new_entry':
                $sql = 'insert into diary (id_user, title, content) values (?, ?, ?)';
                $data = ejecutarConsulta($sql, [$_SESSION['id_user'] ,$_POST['title'], $_POST['content']], true);
                if ($data) {
                    echo json_encode(array("status" => 1, "message" => "Entrada guardada con exito"));
                } else {
                    echo json_encode(array("status" => -1, "message" => "Error al guardar la entrada"));
                }
                break;
            case 'get_inputs':
                $sql = 'select title, content, create_at from diary where id_user = ? order by create_at asc;';
                $data = ejecutarConsulta_retornaFilas($sql, [$_SESSION['id_user']], true);
                
                if ($data) {
                    echo json_encode(array("status" => 1, "message" => "Datos obtenido", "data" => $data));
                } else {
                    echo json_encode(array("status" => -1, "message" => "Error al obtener las entradas del diario"));
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
