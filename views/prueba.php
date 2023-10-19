<?php
echo var_dump($_POST);
$imageFile = $_FILES['img']['name'];
$tmp_dir = $_FILES['img']['tmp_name'];
$imageSize = $_FILES['img']['size'];

if (!empty($imageFile)) {
    $upload_dir = '../img_reportes/';

    $imageExt = strtolower(pathinfo($imageFile, PATHINFO_EXTENSION));

    $valid_extensions = array('jpg', 'jpeg', 'png', 'gif');
    $random = random_int(10000000,2147483647);
    $userpic = $random . "." . $imageExt;
    if (in_array($imageExt, $valid_extensions)) {
        if ($imageSize < 1000000) {
            if (move_uploaded_file($tmp_dir, $upload_dir . $userpic)) {
                echo json_encode(array("status" => 1, "message" => "Archivo movido: " . $userpic));
            } else {
                echo json_encode(array("status" => -1, "message" => "Error al mover el archivo"));
            }
        } else {
            echo json_encode(array("status" => -1, "message" => "Error, la imagen es muy grande"));
        }
    } else {
        echo json_encode(array("status" => -1, "message" => "Error, el archivo no es una imagen válida"));
    }
} else {
    echo json_encode(array("status" => -1, "message" => "Error, no se recibió el archivo"));
}

?>

