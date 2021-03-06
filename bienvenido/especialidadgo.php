<!DOCTYPE html>
<!-- 
Template Name: Job Pro
Version: 1.0.0
Author: d
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
<script src="../utils/js/welcomeespecialidad.js"></script>
<script src="../utils/js/servicescat.js"></script>
<script src="../utils/js/utils.js"></script>
<script src="../utils/js/registroclient.js"></script>

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


    <!-- jp register wrapper start -->
    <div class="register_section">
        <!-- register_form_wrapper -->

        <div class="container">

            <center>
                <div class="row">
                    <div class="col-sm">
                        <div class="col-sm-10">
                            <div class="card">
                                <img class="card-img-top" src="frontend/assets/img/gsolicitud.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <div id="gopc">

                                        <button type="button" class="btn btn-warning btn-lg btn-block" onclick="firtsoption()">Generar Solicitud!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </center>

        </div>
        <!-- jp register wrapper end -->

    </div>
    <script>
        $(document).ready(function() {
            buscarserv();
            servicechange();

        })
    </script>
    <!-- jp Newsletter Wrapper Start -->
    <?php
    include("../frames/footerv2.php");
    ?>

</html>