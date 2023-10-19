<?php
    // Update the path below to your autoload.php,
    // see https://getcomposer.org/doc/01-basic-usage.md
    require_once './vendor/autoload.php';
    use Twilio\Rest\Client;

    $sid    = "ACe632d480504fe739976b6b5186e9a897";
    $token  = "cf6af09418d464d4d874263426f7f39f";
    $twilio = new Client($sid, $token);

    $message = $twilio->messages
      ->create("+573017998748", // to
        array(
          "from" => "+12539489975",
          "body" => "Mensaje de prueba desde Twilio https://www.twilio.com/en-us"
        )
      );

print($message->sid);
print('No reboto');