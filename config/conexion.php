<?php
include 'config.php';

$servidor = "mysql:dbname=".DB_NAME.";host=".DB_HOST;

try {
    $pdo = new PDO($servidor, DB_USERNAME, DB_PASSWORD);
    //echo "<script>alert('Conexion exitosa a la BD');</script>";
    function ejecutarConsulta($sql, $data, $flag){
        global $pdo;
        $stmt = $pdo->prepare($sql);
        if($flag){
            for ($i=0; $i < count($data); $i++) {
                $stmt->bindparam(($i+1),$data[$i]);
            }
        }
        return $stmt->execute();
    }

    function ejecutarConsulta_retornaFilas($sql, $data, $flag){
        global $pdo;
        $stmt = $pdo->prepare($sql);
        if($flag){
            for ($i=0; $i < count($data); $i++) {
                $stmt->bindparam(($i+1),$data[$i]);
            }
        }
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>