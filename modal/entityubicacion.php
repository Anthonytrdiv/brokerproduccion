<?php
class modalubicacion{

    // buscar ubicacion x texto y no por codigo
    function buscarxcodubic($codubic){
        require("../utils/config/conex.php");
        $arrayubicacion = array();
        $queryubicacion = mysqli_query($enlacego,"SELECT * FROM ubigeo WHERE unido LIKE '%$codubic%' limit 1");
        while($rowubicacion = mysqli_fetch_assoc($queryubicacion)){
            $arrayubicacion[] = $rowubicacion;
        }
        return $arrayubicacion;
       
    }
    function selectdataubigeo($codubigeo){
        require("../utils/config/conex.php");
        $arrayubigeo = array();
        $queryubicacion = mysqli_query($enlacego,"select * from viewubigeo where idDistrito='$codubigeo'");
        while($rowubigeo = mysqli_fetch_assoc($queryubicacion)){
            $arrayubigeo[] = $rowubigeo;
        }
        return $arrayubigeo;
    }
    
        // buscar ubicacion x texto y no por codigo
        function buscarxcodubicfront($codubic){
            require("../utils/config/conex.php");
            $arrayubicacion = array();
            $queryubicacion = mysqli_query($enlacego,"SELECT * FROM ubigeo WHERE unido LIKE '%$codubic%' limit 1");
            while($rowubicacion = mysqli_fetch_assoc($queryubicacion)){
                $arrayubicacion[] = $rowubicacion;
            }
            return $arrayubicacion;
        }
        function mnameubic($codubic2){
            require("../utils/config/conex.php");
            
            $querymnameubic = mysqli_query($enlacego,"SELECT * FROM viewubigeo WHERE idDistrito = '$codubic2'");
            while($rowmnameubic = mysqli_fetch_assoc($querymnameubic)){
                $lugar = $rowmnameubic['distrito'].", ".$rowmnameubic['departamento'];
            }
            return $lugar;
            mysqli_close($enlacego);
        }
}

?>