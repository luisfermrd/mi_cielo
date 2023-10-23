<?php
header('Content-type:application/json;charset=utf-8');


if (isset($_POST['opcion'])) {

    // Conexión a la base de datos
    include_once('../config/conexion.php');

    try {

        $opcion = $_POST['opcion'];
        session_start();

        switch ($opcion) {
            case 'new_test':

                $p1 = isset($_POST["pregunta1"]) ? $_POST["pregunta1"] : "";
                $p2 = isset($_POST["pregunta2"]) ? $_POST["pregunta2"] : "";
                $p3 = isset($_POST["pregunta3"]) ? $_POST["pregunta3"] : "";
                $p4 = isset($_POST["pregunta4"]) ? $_POST["pregunta4"] : "";
                $p5 = isset($_POST["pregunta5"]) ? $_POST["pregunta5"] : "";
                $p6 = isset($_POST["pregunta6"]) ? $_POST["pregunta6"] : "";
                $p7 = isset($_POST["pregunta7"]) ? $_POST["pregunta7"] : "";
                $p8 = isset($_POST["pregunta8"]) ? $_POST["pregunta8"] : "";
                $p9 = isset($_POST["pregunta9"]) ? $_POST["pregunta9"] : "";
                $p10 = isset($_POST["pregunta10"]) ? $_POST["pregunta10"] : "";
                $p11 = isset($_POST["pregunta11"]) ? $_POST["pregunta11"] : "";

                if (empty($p1) || empty($p2) || empty($p3) || empty($p4) || empty($p5) || empty($p6) || empty($p7) || empty($p8) || empty($p9) || empty($p10) || empty($p11)) {
                    echo json_encode(array("status" => -1, "message" => "Asegurate de responder todas las preguntas"));
                } else {


                    include_once('../config/conexion.php');

                    $sql = "UPDATE test SET p1 = ?, p2 = ?, p3 = ?, p4 = ?, p5 = ?, p6 = ?, p7 = ?, p8 = ?, p9 = ?, p10 = ?, p11 = ?, respondio = ? WHERE id_user = ?;";

                    $datos = array($p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11, 1, $_SESSION['id_user']);
                    $data = ejecutarConsulta($sql, $datos, true);

                    if ($data) {
                        echo json_encode(array(
                            "status" => 1,
                            "message" => "Respuestas registradas!"
                        ));
                    } else {
                        echo json_encode(array("status" => -1, "message" => "Error al registrar las respuestas!"));
                    }
                }
                break;
            case 'get_test':
                $sql = 'select * from test where id_user = ?;';
                $data = ejecutarConsulta_retornaFilas($sql, [$_SESSION['id_user']], true);

                if ($data) {

                    echo json_encode(array("status" => 1, "message" => "Datos obtenido", "data" => $data[0]));
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
