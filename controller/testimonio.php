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
                $sql = 'insert into testimonio (id_user, message) values (?, ?)';
                $data = ejecutarConsulta($sql, [$_SESSION['id_user'] ,$_POST['content']], true);
                if ($data) {
                    echo json_encode(array("status" => 1, "message" => "Testimonio guardado con exito"));
                } else {
                    echo json_encode(array("status" => -1, "message" => "Error al guardar el testimonio"));
                }
                break;
            case 'get_inputs':
                $sql = 'select t.message, u.name from testimonio as t left join users as u on t.id_user = u.id_user order by create_at asc limit 100;';
                $data = ejecutarConsulta_retornaFilas($sql, [] , false);
                
                if ($data) {
                    echo json_encode(array("status" => 1, "message" => "Datos obtenido", "data" => $data));
                } else {
                    echo json_encode(array("status" => -1, "message" => "Error al obtener los testimonios"));
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
