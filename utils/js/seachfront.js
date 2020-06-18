function searchfront(){
    
    
    var identipservicio = $("#identipservicio option:selected").val();
    var txtsearchbar = $("#txtsearchbar").val();
    var activatesearch = "activate";
    var txtnameespe = $("#txtnameespe").val();
    // var validateubic = $("#txtdep").val();
    //Registros de ubicación
    
    var iddepartamento = $("#iddepartamento option:selected").val();
    var idprovincia = $("#idprovincia option:selected").val();
    var iddistrito = $("#iddistrito option:selected").val();
    var idmascategoria = $("#idcatservicio option:selected").val();

    $.post("../controllers/resultableespecialista.php",{   
        postidmascategoria : idmascategoria,
        postactivatesearch : activatesearch,
        postidentipservicio : identipservicio,
        // postvalidateubic : validateubic,
        posttxtsearchbar : txtsearchbar,
        postiddepartamento:iddepartamento,
        postidprovincia:idprovincia,
        postiddistrito:iddistrito,
        posttxtnameespe:txtnameespe
    },function(responsectivatesearch){
  
        $("#resultable").html(responsectivatesearch);
        $("#buttonbusq").html("<button type='button' class='btn btn-danger btn-lg btn-block' id='btntable' value='1' onclick='addtable()'><i class='fa fa-search'></i>Cargar más resultados</button>");
        
    });




}