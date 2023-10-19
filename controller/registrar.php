<?php
header('Content-type:application/json;charset=utf-8');

$id_user = isset($_POST["id_user"]) ? $_POST["id_user"] : "";
$name = isset($_POST["name"]) ? $_POST["name"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";
$age = isset($_POST["age"]) ? $_POST["age"] : "";
$gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
$location = isset($_POST["location"]) ? $_POST["location"] : "";

if (empty($id_user) || empty($name) || empty($age) || empty($gender) || empty($location) || empty($email) || empty($password)) {
    echo json_encode(array("status" => -1, "message" => "Debe llenar todos los campos!"));
} else {

    include_once('../config/conexion.php');
    include_once("../config/mcript.php");

    $sql = "SELECT * FROM users WHERE email= ?";
    $data = ejecutarConsulta_retornaFilas($sql, [$email], true);

    if ($data != null) {
        echo json_encode(array("status" => -1, "message" => "Ya existe una cuenta con este usuario!"));
    } else {
        $sql = "SELECT * FROM users WHERE id_user= ?";
        $data = ejecutarConsulta_retornaFilas($sql, [$id_user], true);

        if ($data != null) {
            echo json_encode(array("status" => -1, "message" => "Ya existe una cuenta con esta identificacion!"));
        } else {
            $sql = " insert into users (id_user, name, email, password, age, gender, location) values ( ?, ?, ?, ?, ?, ?, ?)";
            $pass_encriptada = $encriptar($password);
            $data = ejecutarConsulta($sql, [$id_user, $name, $email, $pass_encriptada, $age, $gender, $location], true);
            ejecutarConsulta('INSERT INTO test (id_user) VALUES (?);',[$id_user], true);
            if ($data) {
                echo json_encode(array("status" => 1, "message" => "Cuenta registrada con exito!"));
            } else {
                echo json_encode(array("status" => -1, "message" => "Error al registrar el usuario!"));
            }
        }
    }
}