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
            case 'get_statistics':
                $sql1 = 'WITH DateRange AS (
                             SELECT CURDATE() - INTERVAL (n - 1) DAY AS fecha
                             FROM (
                             SELECT 1 AS n
                             UNION ALL SELECT 2
                             UNION ALL SELECT 3
                             UNION ALL SELECT 4
                             UNION ALL SELECT 5
                             UNION ALL SELECT 6
                             UNION ALL SELECT 7
                             ) Numbers
                         )
                         
                         SELECT dr.fecha, COUNT(u.id_user) AS cantidad_usuarios
                         FROM DateRange dr
                         LEFT JOIN users u ON dr.fecha = DATE(u.created_at)
                         GROUP BY dr.fecha
                         ORDER BY dr.fecha;';

                $sql2 = 'SELECT AVG(age) AS promedio_edad
                         FROM users WHERE id_user != 1;';

                $sql3 = 'SELECT u.name AS nombre_usuario, COUNT(t.id) AS cantidad_testimonios
                         FROM users u
                         INNER JOIN testimonio t ON u.id_user = t.id_user
                         GROUP BY u.id_user, u.name;';
                         
                $sql4 = 'WITH HourRange AS (
                            SELECT 0 AS hora
                            UNION ALL SELECT 1
                            UNION ALL SELECT 2
                            UNION ALL SELECT 3
                            UNION ALL SELECT 4
                            UNION ALL SELECT 5
                            UNION ALL SELECT 6
                            UNION ALL SELECT 7
                            UNION ALL SELECT 8
                            UNION ALL SELECT 9
                            UNION ALL SELECT 10
                            UNION ALL SELECT 11
                            UNION ALL SELECT 12
                            UNION ALL SELECT 13
                            UNION ALL SELECT 14
                            UNION ALL SELECT 15
                            UNION ALL SELECT 16
                            UNION ALL SELECT 17
                            UNION ALL SELECT 18
                            UNION ALL SELECT 19
                            UNION ALL SELECT 20
                            UNION ALL SELECT 21
                            UNION ALL SELECT 22
                            UNION ALL SELECT 23
                        )
                        
                        SELECT hr.hora, COUNT(t.id) AS cantidad_testimonios
                        FROM HourRange hr
                        LEFT JOIN testimonio t ON hr.hora = HOUR(t.create_at)
                        GROUP BY hr.hora
                        ORDER BY hr.hora;';

                $sql5 = 'WITH HourRange AS (
                        SELECT 0 AS hora
                        UNION ALL SELECT 1
                        UNION ALL SELECT 2
                        UNION ALL SELECT 3
                        UNION ALL SELECT 4
                        UNION ALL SELECT 5
                        UNION ALL SELECT 6
                        UNION ALL SELECT 7
                        UNION ALL SELECT 8
                        UNION ALL SELECT 9
                        UNION ALL SELECT 10
                        UNION ALL SELECT 11
                        UNION ALL SELECT 12
                        UNION ALL SELECT 13
                        UNION ALL SELECT 14
                        UNION ALL SELECT 15
                        UNION ALL SELECT 16
                        UNION ALL SELECT 17
                        UNION ALL SELECT 18
                        UNION ALL SELECT 19
                        UNION ALL SELECT 20
                        UNION ALL SELECT 21
                        UNION ALL SELECT 22
                        UNION ALL SELECT 23
                        )

                        SELECT hr.hora, COUNT(d.id_record) AS cantidad_registros_diario
                        FROM HourRange hr
                        LEFT JOIN diary d ON hr.hora = HOUR(d.create_at)
                        GROUP BY hr.hora
                        ORDER BY hr.hora;';
                        
                $sql6 = "WITH GenderRange AS (
                            SELECT 'Prefiero no decirlo' AS gender
                            UNION ALL SELECT 'Hombre'
                            UNION ALL SELECT 'Mujer'
                            UNION ALL SELECT 'Otro'
                        )
                        
                        SELECT gr.gender, ROUND(IFNULL(AVG(u.age), 0), 1) AS promedio_edad
                        FROM GenderRange gr
                        LEFT JOIN users u ON gr.gender = u.gender
                        GROUP BY gr.gender;";
                        
                $sql7 = "SELECT
                            'p1' AS pregunta,
                            SUM(CASE WHEN p1 = 'si' THEN 1 ELSE 0 END) AS respondieron_si,
                            SUM(CASE WHEN p1 = 'no' THEN 1 ELSE 0 END) AS respondieron_no
                        FROM test
                        WHERE respondio = 1
                        UNION ALL
                        SELECT
                            'p2' AS pregunta,
                            SUM(CASE WHEN p2 = 'si' THEN 1 ELSE 0 END) AS respondieron_si,
                            SUM(CASE WHEN p2 = 'no' THEN 1 ELSE 0 END) AS respondieron_no
                        FROM test
                        WHERE respondio = 1
                        UNION ALL
                        SELECT
                            'p3' AS pregunta,
                            SUM(CASE WHEN p3 = 'si' THEN 1 ELSE 0 END) AS respondieron_si,
                            SUM(CASE WHEN p3 = 'no' THEN 1 ELSE 0 END) AS respondieron_no
                        FROM test
                        WHERE respondio = 1
                        UNION ALL
                        SELECT
                            'p4' AS pregunta,
                            SUM(CASE WHEN p4 = 'si' THEN 1 ELSE 0 END) AS respondieron_si,
                            SUM(CASE WHEN p4 = 'no' THEN 1 ELSE 0 END) AS respondieron_no
                        FROM test
                        WHERE respondio = 1
                        UNION ALL
                        SELECT
                            'p5' AS pregunta,
                            SUM(CASE WHEN p5 = 'si' THEN 1 ELSE 0 END) AS respondieron_si,
                            SUM(CASE WHEN p5 = 'no' THEN 1 ELSE 0 END) AS respondieron_no
                        FROM test
                        WHERE respondio = 1
                        UNION ALL
                        SELECT
                            'p6' AS pregunta,
                            SUM(CASE WHEN p6 = 'si' THEN 1 ELSE 0 END) AS respondieron_si,
                            SUM(CASE WHEN p6 = 'no' THEN 1 ELSE 0 END) AS respondieron_no
                        FROM test
                        WHERE respondio = 1
                        UNION ALL
                        SELECT
                            'p7' AS pregunta,
                            SUM(CASE WHEN p7 = 'si' THEN 1 ELSE 0 END) AS respondieron_si,
                            SUM(CASE WHEN p7 = 'no' THEN 1 ELSE 0 END) AS respondieron_no
                        FROM test
                        WHERE respondio = 1
                        UNION ALL
                        SELECT
                            'p8' AS pregunta,
                            SUM(CASE WHEN p8 = 'si' THEN 1 ELSE 0 END) AS respondieron_si,
                            SUM(CASE WHEN p8 = 'no' THEN 1 ELSE 0 END) AS respondieron_no
                        FROM test
                        WHERE respondio = 1
                        UNION ALL
                        SELECT
                            'p9' AS pregunta,
                            SUM(CASE WHEN p9 = 'si' THEN 1 ELSE 0 END) AS respondieron_si,
                            SUM(CASE WHEN p9 = 'no' THEN 1 ELSE 0 END) AS respondieron_no
                        FROM test
                        WHERE respondio = 1
                        UNION ALL
                        SELECT
                            'p10' AS pregunta,
                            SUM(CASE WHEN p10 = 'si' THEN 1 ELSE 0 END) AS respondieron_si,
                            SUM(CASE WHEN p10 = 'no' THEN 1 ELSE 0 END) AS respondieron_no
                        FROM test
                        WHERE respondio = 1
                        UNION ALL
                        SELECT
                            'p11' AS pregunta,
                            SUM(CASE WHEN p11 = 'si' THEN 1 ELSE 0 END) AS respondieron_si,
                            SUM(CASE WHEN p11 = 'no' THEN 1 ELSE 0 END) AS respondieron_no
                        FROM test
                        WHERE respondio = 1";


                        echo json_encode(array(
                            "status" => 1, 
                            "message" => "Datos obtenidos", 
                            "data1" => ejecutarConsulta_retornaFilas($sql1, [], false),
                            "data2" => ejecutarConsulta_retornaFilas($sql2, [], false),
                            "data3" => ejecutarConsulta_retornaFilas($sql3, [], false),
                            "data4" => ejecutarConsulta_retornaFilas($sql4, [], false),
                            "data5" => ejecutarConsulta_retornaFilas($sql5, [], false),
                            "data6" => ejecutarConsulta_retornaFilas($sql6, [], false),
                            "data7" => ejecutarConsulta_retornaFilas($sql7, [], false),
                        ));
                        

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
