<?php
header('Content-type:application/json;charset=utf-8');


$email=isset($_POST["email"])? $_POST["email"]:"";
$password=isset($_POST["password"])? $_POST["password"]:"";

if(empty($email) || empty($password)){
    echo json_encode(array("status"=>-1,"message"=>"Debe llenar todos los campos!"));
}else{
    
    include_once('../config/conexion.php');
    include_once("../config/mcript.php");

    $sql="SELECT * FROM users WHERE email='$email'";
    $data=ejecutarConsulta_retornaFilas($sql, [], false);

    if($data){
        $pass_encriptada = $data[0]['password'];
        $pass_desencriptada = $desencriptar($pass_encriptada);
        if($pass_desencriptada == $password){
            session_start();
            $_SESSION['name']=$data[0]['name'];
            $_SESSION['id_user']=$data[0]['id_user'];
            $_SESSION['email']=$data[0]['email'];
            echo json_encode(array("status"=>1,"message"=>"Acceso conseguido"));
        }else{
            echo json_encode(array("status"=>-1,"message"=>"Usuario o contraseña incorrectas!")); 
        }
         
    }else{
        echo json_encode(array("status"=>-1,"message"=>"Usuario o contraseña incorrectas!")); 
    }
}
?>