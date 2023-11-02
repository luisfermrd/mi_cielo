<?php
// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
/* require_once '../vendor/autoload.php';

use Twilio\Rest\Client;

$sid    = "ACe632d480504fe739976b6b5186e9a897";
$token  = "cf6af09418d464d4d874263426f7f39f";
$twilio = new Client($sid, $token);

$message = $twilio->messages
  ->create(
    "+573017998748", // to
    array(
      "from" => "+12539489975",
      "body" => "Mensaje de prueba desde Twilio https://www.twilio.com/en-us"
    )
  );

print($message->sid);
print('No reboto'); */

/* require_once '../vendor/autoload.php';

use Twilio\Rest\Client; */

// Importar la clase PHPMailer
require '../lib/phpmailer/PHPMailer.php';
require '../lib/phpmailer/SMTP.php';
require '../lib/phpmailer/Exception.php';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

header('Content-type:application/json;charset=utf-8');

session_start();
$id_user = $_SESSION['id_user'];
$name = $_SESSION['name'];
if (isset($id_user)) {
  try {
    // Conexión a la base de datos
    include_once('../config/conexion.php');

    $url = isset($_POST['url']) ? $_POST['url'] : '';
    $precision = isset($_POST['precision']) ? $_POST['precision'] : '';

    $sql = 'select * from contacts where id_user = ?';
    $data = ejecutarConsulta_retornaFilas($sql, [$id_user], true);

    $mensaje = "";
    if ($data) {


      $sid    = "ACe632d480504fe739976b6b5186e9a897";
      $token  = "cf6af09418d464d4d874263426f7f39f";
      /* $twilio = new Client($sid, $token); */


      foreach ($data as $value) {

        /* Hola Luis Miranda, eres el contacto de emergencia registrado en la app "Mi Cielo" y se necesita tu ayuda. Por favor, comunícate con sus familiares. Puedes verificar su posible ubicación aquí: https://www.google.com/maps/search/?api=1&query=9.240576,-75.726848  Puede estar a unos 4.2 km de esa ubicación. */
        $mensaje = $mensaje . "Hola " . $value['name'] . ', ' . $name . ' te tiene registrado como contacto de emergencia en la app Mi Cielo, y necesita de tu ayuda. Por favor, comunicate con sus familiares. ';
        if ($precision != '') {
          $mensaje = $mensaje . 'Puedes verificar su posible ubicación aqui: ' . $url . ' puede estar a unos ' . $precision . ' de esa ubicación.';
        }
        $phone = preg_replace("/\s+/", "", $value['number_phone']);
        $email = $value['message']; //me dio flojera cambiar el nombre en la BD
        if(!enviarMail($email, $value['name'], $mensaje)){
          enviarMail($email, $value['name'], $mensaje);
        }
        /* $message = $twilio->messages
          ->create(
            $phone, // to
            array(
              "from" => "+12539489975",
              "body" => $mensaje
            )
          ); */
        $mensaje = "";
      }
      echo json_encode(array("status" => 1, "message" => "Se le a enviado un mensaje a tus contactos de emergencia"));
    } else {
      echo json_encode(array("status" => -1, "message" => "Lo sentimos, no tienes contactos de emergencia registrados"));
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

function enviarMail($email, $name, $mensaje)
{
  $mail = new PHPMailer(true);

  try {
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
        $mail->addAddress($email, $name);  // Cambia 'destinatario@example.com' y 'Nombre Destinatario' por los datos del destinatario

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = '⚠️🚨S.O.S🚨⚠️';
        $mail->Body = $mensaje;


        $mail->CharSet = 'UTF-8';
        $mail->send();


        return true;
      
  } catch (Exception $e) {
    return false;
  }
}
