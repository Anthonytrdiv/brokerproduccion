function firtsoption(){
    
    varactivateoption = "Activate";
    $.post("../controllers/viewelcome.php",{
        requestactivate:varactivateoption
    },function(responsefirstoption){
        $("#gopc").html(responsefirstoption);
    });
}
function secondoption(){
    varactivatesecond="Activate";
    // Conseguir texto de selector:
    // var selectedespecsialidad = $("#selectioninformatico option:selected").text();
    // Tomamos el valor de la opción para crear una sesión
    var selectedespecialidad =$("#idcatservicio option:selected").val();
    if(selectedespecialidad===""){
        alert("Debes de escoger el Servicio");
    }else{
    $.post("../controllers/viewelcome.php",{
        requestactivatesecond:varactivatesecond,
        requestoptionservice:selectedespecialidad
    },function(responsesecondoption){
        $("#gopc").html(responsesecondoption);
    });
}

}