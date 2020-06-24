
 <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head> 
<script src="js/servicescat.js"></script>
<script src="js/utils.js"></script>
<script>
    $(document).ready(function() {
        buscarserv();
        servicechange();

    })
</script>

<select class='form-control' id='identipservicio'>
</select>
<select class='form-control' id='idcatservicio'>
<option value="">Escoger categoria</option>
</select>