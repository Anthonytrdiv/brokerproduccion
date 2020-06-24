<?php
session_start();

require_once("../modal/entityusers.php");
$entityusersmodal = new entityusersmodal();
if(!empty($_POST['postverifisesion'])){
    if(!empty($_SESSION['email'])){
        echo 1;
    }else{
        echo 0;
    }
}

if(!empty($_POST['postverificardatosuser'])){
    if(!empty($_SESSION['email'])){
       echo $entityusersmodal->validarregistro($_SESSION['email']); 
    }
    
}


?>