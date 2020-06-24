function validatesession(codespecialist){

var activatecontaces = "activate";
$.post("../controllers/frontcontactarespec.php",{
    postactivatecontaces:activatecontaces,
    postcodespecialist:codespecialist
},function(responsecodespecialist){
      if(responsecodespecialist == 0){
          $("#centralModalWarningDemo").modal("show");
      }
      if(responsecodespecialist == 1){
        // Validar si el usuario registro sus datos personales
        var verifyregistro = "Activate";
        $.post("../controllers/frontcontactarespec.php",{
          postverifyregistro:verifyregistro
        },function(vuserreg){
            if(vuserreg == 1){
              var requestmodal = "activate";
              $.post("../controllers/frontcontactarespec.php",{
                postmodal:requestmodal,
                postcodespecialist:codespecialist
              },function(responsemodal){
                $("#informcontac").html(responsemodal);
              });
            $("#modalcontacespe").modal("show");
            }
            if(vuserreg == 0){
              var activatere = "activate";
             
              $.post("../controllers/modules.php",{
                registeruser:activatere
              },function(responseregister){
                $("#moduleregisteruser").html(responseregister);
                
              });
              alert("Eres nuevo? , te falta completar tus datos , te vamos a redirigir!");
              $(location).attr('href','complete.php');
                
                
            }

        });
    }
});

}

function registercont() {

  var actiateregister = "activate";
  var txtlastname = $("#txtlastname").val();
  var nrowhatsapp = $("#nrowhatsapp").val();
  var iddistrito = $("#iddistrito option:selected").val();


  var slstipodoc = $("#idcatservicio option:selected").val();
  var txtareades = $("#txtareades").val();
  // var slstdocumento = $("#slstdocumento option:selected").val();
  // var txtnrodocumento = $("#txtnrodocumento").val();
  // var txtubicaciond = $("#txtubicacion").val();

  // var txtdirecciond = $("#txtdirecciond").val();




  $.post("../controllers/modules.php", {
    pactiateregister: actiateregister,
    ptxtlastname: txtlastname,
    pnrowhatsapp: nrowhatsapp,
    postiddistrito: iddistrito,
    pslstipodoc: slstipodoc,  // Tipo de Servicio que realiza
    ptxtareades: txtareades
    // pslstdocumento:slstdocumento,
    // ptxtnrodocumento:txtnrodocumento,
    // ptxtubicaciond:txtubicaciond,
    // ptxtdirecciond:txtdirecciond,
  }, function (responsere) {

    var filtrado = responsere.trim();

    if (filtrado === "1") {
      alert("Gracias por terminar tu registro en IBROKERGO!")
      $("#modalalertnotregister").modal("hide");
    } else {
      $("#msmerrorge").html(responsere);

    }

  });
}

function registercont2() {

  var actiateregister = "activate";
  var txtlastname = $("#txtlastname").val();
  var nrowhatsapp = $("#nrowhatsapp").val();
  var iddistrito = $("#iddistrito option:selected").val();

  var slstipodoc = $("#idcatservicio option:selected").val();
  var txtareades = $("#txtareades").val();

  $.post("../controllers/modules.php", {
    pactiateregister: actiateregister,
    ptxtlastname: txtlastname,
    pnrowhatsapp: nrowhatsapp,
    postiddistrito: iddistrito,
    pslstipodoc: slstipodoc,  // Tipo de Servicio que realiza
    ptxtareades: txtareades
  }, function (responsere) {

    var filtrado = responsere.trim();

    if (filtrado === "1") {
      alert("Gracias por terminar tu registro en IBROKERGO!")
      cancelar();
    } else {
      $("#msmerrorge").html("<div class='alert alert-info alert-dismissible'>"+responsere+"</div>");

    }

  });
}
function detval(){
 var dato = $("#txtareades").val();
 if(dato === ""){
  $("#smsdetalle").html("");
 }else{
   var actdetalle = "activate";
   $.post("../controllers/modules.php",{
     pactdetalle:actdetalle,
     pdato:dato
   },function(resva){
    $("#smsdetalle").html(resva);
   });
   
 }
}

