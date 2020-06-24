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
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title></title>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status"><img src="images/header/loadinganimation.gif" id="preloader_image" alt="loader">
        </div>
    </div>
    <!-- Top Scroll End -->
    <!-- Top Header Wrapper Start -->
    <?php
    include("../frames/header.menu.php");
    ?>
    <!-- Top Header Wrapper End -->
    <!-- Header Wrapper Start -->
    <?php include("../frames/menuv2.php") ?>
    <script src="../utils/js/registroclient.js"></script>

    <!-- jp register wrapper start -->
    <div class="register_section">
        <!-- register_form_wrapper -->

        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-sm">
                <form class="form-signin">
                    <img class="mb-4" src="frontend/assets/img/logobig.png" alt="" width="110" height="110">
                    <h4 class="h5 mb-3 font-weight-normal">Registrate Especialista!</h4>
                    <label for="txtnombrescompletos" class="sr-only">Nombres y Apellidos</label>
                    <input type="text" id="txtnombrescompletos" class="form-control" placeholder="Nombres y Apellidos" required="" autofocus="">

                    <label for="txtemail" class="sr-only">Email</label>
                    <input type="email" id="txtemail" class="form-control" placeholder="Email" required="" autofocus="">

                    <label for="txtpass1" class="sr-only">Contraseña</label>
                    <input type="password" id="txtpass1" class="form-control" placeholder="Password" required="">

                    <label for="txtpass2" class="sr-only">Repetir contraseña</label>
                    <input type="password" id="txtpass2" class="form-control" placeholder="Repetir contraseña" required="">

                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" name="aceptar" id="aceptar"> <small>Al crear una cuenta acepto los <a href='terms.php' target='_blank' tabindex='-1' rel='noopener' class='underline green'>términos de servicio</a> y la <a href='politica-privacidad.php' target='_blank' tabindex='-1' rel='noopener' class='underline green'>Política y privacidad</a> de IBrokerGo!</small>
                        </label>
                    </div>

                    <div id="alertval">
                    </div>
                    <div id="alertsesion"></div>
                    <button class="btn btn-lg btn-primary btn-block" type="button" onclick="registrar(2)">Registrate!</button>
                    <a href="logingo.php" class="text-center">Ya tienes cuenta? - Inicia Sesión</a>
                    <p class="mt-5 mb-3 text-muted">© 2020-2020</p>
                </form>
            </div>
            <div class="col-sm">

            </div>
        </div>
        <!-- jp register wrapper end -->

    </div>

    <!-- jp Newsletter Wrapper Start -->
    <?php
    include("../frames/footerv2.php");
    ?>

</html>