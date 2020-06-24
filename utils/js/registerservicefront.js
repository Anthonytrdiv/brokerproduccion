
function validarsesion(codigoespe){
     var verifisesion = "activate";
      $.post("../controllers/verifysesion.php",{
        postverifisesion:verifisesion
      },function(responseverifisesion){
   
        if(responseverifisesion == 0){
            $("#modalalert").modal("show");
   
                      
        }
        if(responseverifisesion == 1){
            
             var verificardatosuser = "activate";
            $.post("../controllers/verifysesion.php",{
                postverificardatosuser:verificardatosuser
            },function(rverificardatosuser){
                if(rverificardatosuser == 0){
                    $("#modalalertnotregister").modal("show");
                }else if(rverificardatosuser == 1){
                    registerservice(codigoespe);
                }
            });
        }
      }
      );
}



function registerservice(idespe){
    
    var activaterse = "activate";
    
    titulo = $("#txttitulo").val();
    detalle = $("#txtdetalleob").val();
    select = $("#selectserv option:selected").val();

    $.post("../controllers/gsolicitudfront.php",{
        postactivaterse:activaterse,
        posttitulo:titulo,
        postdetalle:detalle,
        postselect:select,
        postidespecialista:idespe
    },function(responseregister){

        if(responseregister.trim() === "1"){
            alert("Se registro correctamente");
            //  $("#modalcontacespe").modal("hide");
            // $("#modalwhatsapp").modal("show");

        }
        $("#errorfrontcontact").html(responseregister);
    });
}

function contactarwha(){
    var activatewha = "activate";
    $.post("../controllers/modules.php",{
        postactivatewha:activatewha
    },function(responseactivatewha){
        $(location).attr('href',responseactivatewha);
        
    });


}