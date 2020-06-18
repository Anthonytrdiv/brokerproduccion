function servicechange(){

    $("#identipservicio").change(function() {
        valser = $("#identipservicio option:selected").val();
        var activatevalserv = "activate";
        $.post("../controllers/services.php",{
            postactivatevalserv:activatevalserv,
            postvalserv:valser
        },function(responseserv){
           
            $("#idcatservicio").html(responseserv);
         
           
        });
        });
}