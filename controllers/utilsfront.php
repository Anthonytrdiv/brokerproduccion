<?php
require_once("../modal/entityubicacion.php");
require_once("../modal/serviciosmodal.php");
require_once("../modal/entityusers.php");
$entityubi = new modalubicacion();
$entityserv = new serviciosmodal();
$entityusers = new entityusersmodal();
session_start();
// Busqueda de Departamento Utils
// if(!empty($_POST['requescmb'])){
//    echo " <div class='md-form mt-0'>";
//    echo " <input class='form-control' type='text' id='txtdep' onkeyup='buscardepbusq(this.value)' placeholder='Buscar en.:Departamento,Provincia,Distrito' aria-label='Search'>";
//    echo "<div id='resultdep'>";
//    echo "Ejem.: Lima,Lima,San Luis";
//    echo "</div>";
//    echo " </div>";

// }

if(!empty($_POST['responsebusqdep'])){

   $valorsearch = $_POST['responsevalinput'];


   foreach ($entityubi->buscarxcodubicfront($valorsearch) as $fresultubic){
      
   }
   if(!empty($fresultubic['unido'])){
      $_SESSION['ubigeofron'] = $fresultubic['idubigeo'];
      echo "<span class='badge badge-primary'>".$fresultubic['unido']." - Encontrado!</span>";
      
      
   }else{
      $_SESSION['ubigeofron'] ="";
      echo "No existe! - Buscar en todas los departamentos";
   }

   }

if (!empty($_POST['responsebusqserv'])) {


   echo "<option value=''>Tipo de servicio</option>";
   foreach ($entityserv->listarservicios() as $fresulserv) {
      echo "<option value='" . $fresulserv['idtipserviciodet'] . "'>" . $fresulserv['name'] . "</option>";
   }

  
}

if(!empty($_POST['responseettercl'])){

   foreach($entityserv->listarservicioslimit(5) as $flettercla){
      echo "<li><a href='".$flettercla['idtipserviciodet']."'>".$flettercla['name'].",</a></li>";
   }


}

if(!empty($_POST['postactivatesearch2'])){

   foreach ($entityserv->listarservicioslimit(6) as $flettercla2) {
      echo "<div class='jp_top_jobs_category_wrapper jp_job_cate_left_border jp_job_cate_left_border_bottom'>
            <div class='jp_top_jobs_category'>
            <i class='".$flettercla2['emoticon']."'></i>
            <h3><a href='".$flettercla2['idtipserviciodet']."'>".$flettercla2['name']."</a></h3>
            <p>(Especialistas)</p>
            </div>
            </div>";
   }
}
// Fin de Busqueda de Departamento Utils



?>