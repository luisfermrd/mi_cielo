<?php
header('Content-type:application/json;charset=utf-8');


$email = isset($_POST["email"]) ? $_POST["email"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";

if (empty($email) || empty($password)) {
    echo json_encode(array("status" => -1, "message" => "Debe llenar todos los campos!"));
} else {

    include_once('../config/conexion.php');
    include_once("../config/mcript.php");

    $sql = "SELECT * FROM users WHERE email='$email'";
    $data = ejecutarConsulta_retornaFilas($sql, [], false);

    if ($data) {
        $pass_encriptada = $data[0]['password'];
        $pass_desencriptada = $desencriptar($pass_encriptada);
        if ($pass_desencriptada == $password) {
            session_start();
            $_SESSION['name'] = $data[0]['name'];
            $_SESSION['id_user'] = $data[0]['id_user'];
            $_SESSION['email'] = $data[0]['email'];
            $_SESSION['role'] = $data[0]['role'];
            $id = $data[0]['id_user'];
            $sql2 = "SELECT * FROM conversations WHERE id_user='$id'";
            $data2 = ejecutarConsulta_retornaFilas($sql2, [], false);

            if ($data2) {
                $_SESSION['chat'] = true;
                $_SESSION['chat_id'] = $data2[0]['conversation_id'];
            }else{
                $_SESSION['chat'] = false;
                $_SESSION['chat_id'] = null;
            }
            echo json_encode(array("status" => 1, "message" => "Acceso conseguido", "role" => $data[0]['role']));
        } else {
            echo json_encode(array("status" => -1, "message" => "Usuario o contraseña incorrectas!"));
        }
    } else {
        echo json_encode(array("status" => -1, "message" => "Usuario o contraseña incorrectas!"));
    }
}
