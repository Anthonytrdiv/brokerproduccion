<?php
require_once("../modal/entityusers.php");
require_once("../modal/entityprecios.php");
$entitysprecios = new preciosaprox();
$entityusersmodal = new entityusersmodal();

foreach($entityusersmodal->viewusers($_GET['id']) as $fdata){


}

foreach($entityusersmodal->viewusersubigeo($_GET['id']) as $fdata2){
    
}



?>