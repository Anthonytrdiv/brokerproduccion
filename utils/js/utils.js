//Buscar en un input los departamentos
function buscardep(){

    var activacombo = "activate";
    $.post("../controllers/utilsfront.php",{
      requescmb:activacombo
    },function(restrequescmb){
      $("#resutcombo").html(restrequescmb);
    });
}
function buscardepbusq(valor){
    
    // if(valor===""){
    //     $("#resultdep").html("");
    // }else{
    //     var busqdep = "activate";
    //     $.post("../controllers/utilsfront.php",{
    //         responsebusqdep:busqdep,
    //         responsevalinput:valor
    //     },function(responsedep){
           
    //         $("#resultdep").html(responsedep);
    //     });
    // }
    
    
}
function buscarserv(){
  // Envia dos parametros el activador y la cabecera inicial del componente select para buscar servicios
        var busqserv = "activate";
      
        $.post("../controllers/utilsfront.php",{
            responsebusqserv:busqserv,
          
        },function(responsebusqserv3){
           
            $("#identipservicio").html(responsebusqserv3);
        });

}

function loadinitialespec(){
    var actespec = "activate";
    $.post("../controllers/resultableespecialista.php",{
        postactespec:actespec
    },function(responseactespec){
        
        $("#resultable").html(responseactespec);
    });
}

function myFunctionpass() {
    var x = document.getElementById("mypass1");
    var y = document.getElementById("mypass2");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }

    if (y.type === "password") {
        y.type = "text";
      } else {
        y.type = "password";
      }
  }

  function letterclaves(){
    var activatelettercl = "activate";
    // letterclave
    $.post("../controllers/utilsfront.php",{
      responseettercl:activatelettercl
    },function(responseletter){
      $("#letterclave").html(responseletter);
    });
  }

  function menuv2(){
    var activatesearch2 = "activate";

    $.post("../controllers/utilsfront.php",{
      postactivatesearch2:activatesearch2
    },function (responsesearch2) {
      $("#menu2search").html(responsesearch2);
      });
  }

 
