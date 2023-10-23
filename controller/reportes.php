<?php
header('Content-type:application/json;charset=utf-8');
session_start();
// Importar la clase PHPMailer
require '../lib/phpmailer/PHPMailer.php';
require '../lib/phpmailer/SMTP.php';
require '../lib/phpmailer/Exception.php';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $imageFile = $_FILES['img']['name'];
    $tmp_dir = $_FILES['img']['tmp_name'];


    $upload_dir = '../img_reportes/';

    $imageExt = strtolower(pathinfo($imageFile, PATHINFO_EXTENSION));

    $valid_extensions = array('jpg', 'jpeg', 'png', 'gif');
    $random = random_int(1000, 9999);
    $fechaHoraActual = date("Ymd_His");
    $userpic = "img_" . $fechaHoraActual . "_" . $random . "." . $imageExt;
    if (move_uploaded_file($tmp_dir, $upload_dir . $userpic)) {


        include_once('../config/conexion.php');

        $sql = " insert into reportes (id_user, name, email, departament, number_phone, location, date, hour, police, details, cause, recommendations, notes, name_img) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $data = ejecutarConsulta($sql, [$_SESSION['id_user'], $_POST['nombre'], $_SESSION['email'], $_POST['departamento'], $_POST['telefono'], $_POST['ubicacion'], $_POST['fecha'], $_POST['hora'], $_POST['policia'], $_POST['detalles'], $_POST['causas'], $_POST['recomendaciones'], $_POST['notas'], $userpic], true);

        if ($data) {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'micieloreportes@gmail.com';                     //SMTP username
            $mail->Password   = 'eqjmapvfajaevsnj';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            // Configuración del remitente y del destinatario
            $mail->setFrom('micieloreportes@gmail.com', 'Reportes Mi cielo');  // Cambia 'tu_correo@example.com' y 'Tu Nombre' por tus datos
            $mail->addAddress('milu061216@gmail.com', 'Cielo Tordecilla');  // Cambia 'destinatario@example.com' y 'Nombre Destinatario' por los datos del destinatario


            //Attachments
            // Adjuntar un archivo
            $mail->addAttachment('../img_reportes/' . $userpic);

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Reporte de posible caso de violencia';
            $mail->Body = '<!DOCTYPE html>
                            <html lang="es">
                            
                            <head>
                                <meta charset="UTF-8">
                                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                                <title>Reporte</title>
                            </head>
                            
                            <style type="text/css">
                                body{
                                    background-color: #E7008A;
                                }
                            </style>
                            
                            <body bgcolor="#E7008A" style="margin: 0; padding: 0; box-sizing: border-box; font-family: "Nunito", sans-serif; background-color: #E7008A;">
                                <div>
                                <div>
                                    <img src="https://i.ibb.co/9g1bQb6/imagen-fother.png" alt="imagen-pie" style="width: 100%;"/>
                                </div>
                                    <center>
                                        <font color="black" style="font-size: 28px; margin: 40px">Reporte de posible caso de violencia.</font>
                                    </center>
                                    <hr>
                                    <div style="padding: 20px; margin: 10px 20px 10px 20px;">
                                        <font color="black" style="font-size: 18px; letter-spacing: 0.5px; font-weight: 400; margin-bottom: 15px; "><span style="font-weight: bolder; font-size: 18px;">Nombre: </span>' . $_POST['nombre'] . '</font><br>
                                        <font color="black" style="font-size: 18px; letter-spacing: 0.5px; font-weight: 400; margin-bottom: 15px; "><span style="font-weight: bolder; font-size: 18px;">Correo de contacto: </span>' . $_SESSION['email'] . '</font><br>
                                        <font color="black" style="font-size: 18px; letter-spacing: 0.5px; font-weight: 400; margin-bottom: 15px; "><span style="font-weight: bolder; font-size: 18px;">Departamento: </span>' . $_POST['departamento'] . '</font><br>
                                        <font color="black" style="font-size: 18px; letter-spacing: 0.5px; font-weight: 400; margin-bottom: 15px; "><span style="font-weight: bolder; font-size: 18px;">Telefono: </span>' . $_POST['telefono'] . '</font><br>
                                        <font color="black" style="font-size: 18px; letter-spacing: 0.5px; font-weight: 400; margin-bottom: 15px; "><span style="font-weight: bolder; font-size: 18px;">Ubicacion: </span>' . $_POST['ubicacion'] . '</font><br>
                                        <font color="black" style="font-size: 18px; letter-spacing: 0.5px; font-weight: 400; margin-bottom: 15px; "><span style="font-weight: bolder; font-size: 18px;">Fecha: </span>' . $_POST['fecha'] . '</font><br>
                                        <font color="black" style="font-size: 18px; letter-spacing: 0.5px; font-weight: 400; margin-bottom: 15px; "><span style="font-weight: bolder; font-size: 18px;">Hora: </span>' . $_POST['hora'] . '</font><br>
                                        <font color="black" style="font-size: 18px; letter-spacing: 0.5px; font-weight: 400; margin-bottom: 15px; "><span style="font-weight: bolder; font-size: 18px;">Informo a la policia: </span>' . $_POST['policia'] . '</font><br>
                                        <font color="black" style="font-size: 18px; letter-spacing: 0.5px; font-weight: 400; margin-bottom: 15px; "><span style="font-weight: bolder; font-size: 18px;">Detalles: </span>' . $_POST['detalles'] . '</font><br>
                                        <font color="black" style="font-size: 18px; letter-spacing: 0.5px; font-weight: 400; margin-bottom: 15px; "><span style="font-weight: bolder; font-size: 18px;">Causas: </span>' . $_POST['causas'] . '</font><br>
                                        <font color="black" style="font-size: 18px; letter-spacing: 0.5px; font-weight: 400; margin-bottom: 15px; "><span style="font-weight: bolder; font-size: 18px;">Recomendaciones: </span>' . $_POST['recomendaciones'] . '</font><br>
                                        <font color="black" style="font-size: 18px; letter-spacing: 0.5px; font-weight: 400; margin-bottom: 15px; "><span style="font-weight: bolder; font-size: 18px;">Notas: </span>' . $_POST['notas'] . '</font><br>
                                    </div>
                                    <center>
                                        <img src="https://i.ibb.co/KXzj2DG/icon.png" alt="icon" style="width: 200px;"/>
                                    </center>
                                    
                                </div>
                                <div>
                                    <img src="https://i.ibb.co/6mG4XNw/imagen-pie.png" alt="imagen-pie" style="width: 100%;"/>
                                </div>
                            </body>

                            
                            </html>';


            $mail->CharSet = 'UTF-8';
            $mail->send();


            echo json_encode(array("status" => 1, "message" => "Datos enviados a las autoridades correspondientes"));
        } else {
            echo json_encode(array("status" => -1, "message" => "Error al insertar los datos"));
        }
    } else {
        echo json_encode(array("status" => -1, "message" => "Error al mover el archivo"));
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
