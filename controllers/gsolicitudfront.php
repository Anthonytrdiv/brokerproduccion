<?php
require_once("../utils/utils.php");
require_once("../controllers/flagsystem.php");
require_once("../modal/entityusers.php");
require_once("../modal/entitynewservice.php");
require_once("../modal/entityprecios.php");
require_once("../utils/utilsemail.php");

$utilsphpregister = new utilsphp();
$entityusersmodal = new entityusersmodal();
$flags = new flags();
$entitynewservice = new entitynewservice();
$emailwork = new email();
$preciosaprox = new preciosaprox();
session_start();
if(!empty($_POST['postactivaterse'])){
    $titulore = $utilsphpregister->depurateinfor($flags->tamanotitulos,$_POST['posttitulo'],"Titulo");
    $descripre = $utilsphpregister->depurateinfor($flags->tamanodescripcion,$_POST['postdetalle'],"Descripción");
    $postselect = $utilsphpregister->validarestados($_POST['postselect'],'precios','idprecio');
    
    if(!empty($titulore)){
        echo "<p class='text-danger'>".$titulore."</p>";
        
    }else if(!empty($descripre)){
        echo "<p class='text-danger'>".$descripre."</p>";
    }else if(empty($postselect)){
        echo "<p class='text-danger'> El Precio indicado no existe</p>";
    }else if($_SESSION['iduser'] == $_POST['postidespecialista']){
        echo "<p class='text-danger'> No puedes generar solicitudes para tu mismo usuario ;)</p>";
    }else{
        foreach($entityusersmodal->listarxiduser2($_POST['postidespecialista']) as $flistidespe){

        }
        if(empty($flistidespe['idtipservicio'])){
            $result = 0;
        }else{
            $result = $entitynewservice->registrarservicio($_SESSION['iduser'],$flistidespe['idtipservicio'],$_POST['posttitulo'],$_POST['postdetalle'],$_POST['postselect'],'1',$utilsphpregister->fecha(),'D',$_POST['postidespecialista']);
        }
        
        if($result === 0){
            echo "Ocurrio un error inesperado, volver a intentarlo o volver más tarde";
        }else if($result === 1){
            //here
         
            $envioemail = $emailwork->newserviceemail($utilsphpregister->fecha(),$_POST['postdetalle'],$preciosaprox->mostrarnameprecio($_POST['postselect']),$_SESSION['nameandlast'],$_SESSION['emailespetemp']);
            if($envioemail == 1){
                $_SESSION['emailespetemp'] ="";
                // $_SESSION['idespeci'] = "";
                echo 1;
            }else{
                echo 1;
            }
      
            
        }
        
    }

}
?>