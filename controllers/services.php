<?php
require_once("../modal/serviciosmodal.php");
$serviciosmodal = new serviciosmodal();

if(!empty($_POST['postactivatevalserv'])){
    echo "<option value=''>Escoger:</option>";
    foreach($serviciosmodal->nameservicechild($_POST['postvalserv']) as $fbservicios){
        echo "<option value='".$fbservicios['idservice2']."'>".$fbservicios['nombre']."</option>";
    }
}
?>