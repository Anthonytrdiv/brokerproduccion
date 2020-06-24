<!DOCTYPE html>
<!-- 
Template Name: Job Pro
Version: 1.0.0
Author: 
Website: 
Purchase: 
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
<!--<![endif]-->
<?php
session_start();
require_once("../modal/serviciosmodal.php");
$serviciosmodal = new serviciosmodal();
?>

<head>
    <meta charset="utf-8" />
    <title>candidate-Profile</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Job Pro" />
    <meta name="keywords" content="Job Pro" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--srart theme style -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css" />
    <link rel="stylesheet" type="text/css" href="css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="css/style_II.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive2.css" />
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="images/header/favicon.ico" />
    <script src="../utils/js/registerservicefront.js"></script>
    <script src="../utils/js/ubigeo.js"></script>
    <script src="../utils/js/validatesessionfront.js"></script>
    <script src="../utils/js/servicescat.js"></script>
    <script src="../utils/js/utils.js"></script>
</head>

<body>
    <link rel="stylesheet" type="text/css" href="css/textarea.css" />
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status"><img src="images/header/loadinganimation.gif" id="preloader_image" alt="loader">
        </div>
    </div>
    <!-- Top Scroll End -->
    <!-- Top Header Wrapper Start -->
    <?php

    include("../frames/menuv2s3.php");
    include("../controllers/mostrardatosuser.php");
    ?>
    <!-- jp Tittle Wrapper End -->
    <!-- jp profile Wrapper Start -->
    <div class="jp_cp_profile_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="jp_cp_left_side_wrapper">
                        <div class="jp_cp_left_pro_wallpaper">
                            <img src="<?php echo "images/users/".$fdata['imagen'] ?>" style='width:350;height:350px;'>
                            <h3><?php echo $fdata['nameandlast']; ?></h3>
                            <p><?php echo $fdata['name'] . ", " . $fdata['nombre']; ?></p>
                            <ul>
                            </ul>
                        </div>
                        <div class="jp_cp_rd_wrapper">
                            <ul>

                                <li><a id='<?php echo $_GET['id']?>' onclick='validarsesion(this.id)'><i class="fa fa-phone"></i> &nbsp;Solicitar Servicio</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="jp_add_resume_wrapper jp_job_location_wrapper jp_cp_left_ad_res">
                        <div class="jp_add_resume_img_overlay"></div>
                        <div class="jp_add_resume_cont">
                            <img src="images/content/resume_logo.png" alt="logo" />
                            <h4>¿Quieres rebicir novedades?</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;ADD RESUME</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="jp_cp_right_side_wrapper">
                        <div class="jp_cp_right_side_inner_wrapper">
                            <h2>Datos del especialista</h2>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="td-w25">Me dedico a </td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><strong><?php echo $fdata['name'] . ", " . $fdata['nombre']; ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td class="td-w25"><i class="fa fa-map-marker"></i> Ubicación</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo ucfirst(strtolower($fdata2['departamento'] . ", " . $fdata2['distrito'])); ?></td>

                                    </tr>
                                    <tr>
                                        <td class="td-w25">Calificación</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65">aqui</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                            <div class="jp_cp_accor_heading_wrapper">
                                <h2>Presentación</h2>
                                <p><?php echo $fdata['present']; ?></p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                            <div class="accordion_wrapper abt_page_2_wrapper">
                                <div class="panel-group" id="accordion_threeLeft">
                                    <div class="panel panel-default">
                                        <div class="panel-heading bell">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion_threeLeft" href="#collapseTwentyLeftThree" aria-expanded="false">
                                                    Indicar Detalle de Inconveniente
                                                </a>
                                            </h4>
                                        </div>

                                        <div id="collapseTwentyLeftThree" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                            <div class="panel-body">
                                                <label>Ingresa un titulo</label>
                                                <input class="w3-input" type="text" id='txttitulo'></p>
                                                <textarea id="txtdetalleob" name="w3review" rows="4" cols="50">Ingresa un detalle de tu solicitud.</textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading bell">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion_threeLeft" href="#collapseTwentyLeftThree2" aria-expanded="false">
                                                    Indicar precio Referencial
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwentyLeftThree2" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                            <div class="panel-body">
                                                <div class="box">
                                                    <style>
                                                    </style>
                                                    <select id='selectserv'>
                                                        <?php
                                                        foreach ($entitysprecios->mostrarprecios() as $fdata3) {
                                                            echo "<option value='" . $fdata3['idprecio'] . "'>" . $fdata3['rango'] . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                        <p class="text-danger">
                                            <strong>
                                                <center>
                                                    <h4>
                                                        <div id="errorfrontcontact">


                                                        </div>
                                                    </h4>
                                                </center>
                                            </strong>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp profile Wrapper End -->
    <!-- jp downlord Wrapper Start -->

    <!-- jp downlord Wrapper End -->
    <!-- jp Newsletter Wrapper Start -->
    <?php
    include("../frames/footerv2.php");
    ?>
</body>
<!-- modal alert -->
<div class="modal fade" id="modalalert" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Hola!</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">
                    <strong>Tienes que Iniciar Sesión!</strong> para poder contactar<a href="#" class="alert-link"> al especialista.</a>.
                </div>
            </div>
            <div class="modal-footer">
                <form method="post" action="logins.php" target="_blank">
                    <button type="submit" class="btn btn-warning">Iniciar sesión</button>
                </form>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalalertnotregister">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">
                    <div class="alert alert-warning">
                        <strong>Hola!</strong> terminar tu registro para continuar
                    </div>

                </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nombres y Apellidos completos</label>
                        <input type="text" class="form-control" id="txtlastname" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nro Whatsapp</label>
                        <input type="text" class="form-control" id="nrowhatsapp" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Ubicación</label>
                        <select class="form-control" id="iddepartamento">
                            <option>Departamento</option>

                        </select>
                        <select class="form-control" id="idprovincia">
                            <option>Provincia</option>

                        </select>
                        <select class="form-control" id="iddistrito">
                            <option>Distrito</option>

                        </select>

                    </div>

                    <?php
                    if ($_SESSION['tipouser'] == '2') {

                    ?>

                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Tu Ocupación</label>


                            <select class="form-control" id="identipservicio">
                                <option value="">Mas categorías</option>
                            </select>
                            <select class="form-control" id="idcatservicio">
                                <option value="">Escoge</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Tu presentación:</label>
                            <textarea class="form-control" id="txtareades" rows="3"></textarea>
                        </div>

                    <?php

                    }
                    ?>
                    <div id="msmerrorge">Hola</div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger"  onclick="registercont()">Guardar Registro</button>
            </div>

        </div>
    </div>
</div>

</div>

</div>


<script>
    $(document).ready(function() {

        //load ubigeo
        loaddepartamento();
        departamentochange();
        provinciachange();

        // load services
        buscarserv();
        servicechange();
    });
</script>

</html>