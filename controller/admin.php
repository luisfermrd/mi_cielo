<?php
header('Content-type:application/json;charset=utf-8');

if (isset($_POST['opcion'])) {

    // Conexión a la base de datos
    include_once('../config/conexion.php');

    try {

        $opcion = $_POST['opcion'];

        switch ($opcion) {
            case 'get_users':
                $sql = 'select * from users where role = 1 order by created_at desc';
                $data = ejecutarConsulta_retornaFilas($sql, [], false);
                echo json_encode(array("status" => 1, "message" => "Datos obtenidos", "data" => $data));
                break;
            case 'get_inputs_diary':
                $sql = 'select title, content, create_at from diary where id_user = ? order by create_at asc';
                $data = ejecutarConsulta_retornaFilas($sql, [$_POST['id_user']], true);
                echo json_encode(array("status" => 1, "message" => "Datos obtenidos", "data" => $data));
                break;
            case 'get_all_reports':
                $sql = 'select * from reportes order by create_at asc';
                $data = ejecutarConsulta_retornaFilas($sql, [], false);
                echo json_encode(array("status" => 1, "message" => "Datos obtenidos", "data" => $data));
                break;
            case 'get_report':
                $sql = 'select * from reportes where id_report';
                $data = ejecutarConsulta_retornaFilas($sql, [], false);
                echo json_encode(array("status" => 1, "message" => "Datos obtenidos", "data" => $data[0]));
                break;
            case 'get_user':
                $sql = 'select * from users where id_user = ?';
                $data = ejecutarConsulta_retornaFilas($sql, [$_POST['id_user']], true);
                if ($data) {
                    echo json_encode(array("status" => 1, "message" => "Datos obtenidos", "data" => $data[0]));
                } else {
                    echo json_encode(array("status" => -1, "message" => "Error al guardar la entrada"));
                }
                break;
            case 'get_test_by_id':
                $sql = 'select * from test where id_user = ?';
                $data = ejecutarConsulta_retornaFilas($sql, [$_POST['id_user']], true);
                if ($data) {
                    echo json_encode(array("status" => 1, "message" => "Datos obtenidos", "data" => $data[0]));
                } else {
                    echo json_encode(array("status" => -1, "message" => "Error al guardar la entrada"));
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
