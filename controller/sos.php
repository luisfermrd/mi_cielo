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

require_once '../vendor/autoload.php';

use Twilio\Rest\Client;

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
      $twilio = new Client($sid, $token);


      foreach ($data as $value) {
        $mensaje = $mensaje . "Hola " . $value['name'] . ', ' . $name . ' te tiene registrado/a como contacto de emergencia en la app mi cielo, en estos momentos necesita ayuda. Por favor, ponte en contacto con sus familiares. ';
        if ($value['message'] != null) {
          $mensaje = $mensaje . 'Dejo este mensaje para ti: ' . $value['message'] . '. ';
        }
        if ($precision != '') {
          $mensaje = $mensaje . 'Su ultima posible ubicacion la puedes consultar aqui: ' . $url . ' puede estar a ' . $precision . ' a la redonda de dicha ubicacion';
        }
        $phone = preg_replace("/\s+/", "", $value['number_phone']);
        $message = $twilio->messages
          ->create(
            $phone, // to
            array(
              "from" => "+12539489975",
              "body" => $mensaje
            )
          );
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
