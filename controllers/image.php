<?php
session_start();
require_once("../modal/entityusers.php");
$entityusersmodal = new entityusersmodal();
if (($_FILES["file"]["type"] == "image/pjpeg")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/png")
    || ($_FILES["file"]["type"] == "image/gif")) {

        $namearchivo = $_SESSION['iduser']."_perfil_".$_FILES['file']['name'];

    if (move_uploaded_file($_FILES["file"]["tmp_name"], "../bienvenido/images/users/".$namearchivo)) {
        //more code here...
          $entityusersmodal->updateimage($_SESSION['iduser'],$namearchivo);
        echo "../bienvenido/images/users/" . $namearchivo;
        if ($_SESSION['imageuserperfil'] == "user2-160x160.jpg") {
            $_SESSION['imageuserperfil'] = $namearchivo;
        }else{
            $_SESSION['imageuserperfil'] = $namearchivo;
        }
    } else {
        echo 0;
    }
} else {
    echo 0;
}

?>