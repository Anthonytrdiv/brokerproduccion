<?php
class historylogin{

function insertlogin($fechalogin,$iduser){

    require("../utils/config/conex.php");
    $insertlogin = mysqli_query($enlacego,"INSERT INTO historilogin values (NULL,'$fechalogin',$iduser)");
    mysqli_close($enlacego);
}

}
?>