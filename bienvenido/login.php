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
</head>

<body>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status"><img src="images/header/loadinganimation.gif" id="preloader_image" alt="loader">
        </div>
    </div>
<?php

include("../frames/menuv2s3.php");
?>
    <!-- jp Tittle Wrapper End -->
	
	<!-- jp login wrapper start -->
	<div class="login_section">
		<!-- login_form_wrapper -->
		<div class="login_form_wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<!-- login_wrapper -->
						<h1>Iniciar Sesión</h1>
						<div class="login_wrapper">
							<div class="row">
								<!-- <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
									<a href="#" class="btn btn-primary"> <span>Login with Facebook</span> <i class="fa fa-facebook"></i> </a>
								</div>
								<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
									<a href="#" class="btn btn-primary google-plus"> Login  with Google <i class="fa fa-google-plus"></i> </a>
								</div> -->
							</div>
							<h2>IbrokerGo!</h2>
							<div class="formsix-pos">
								<div class="form-group i-email">
									<input type="email" class="form-control" required="" id="email2" placeholder="Email*">
								</div>
							</div>
							<div class="formsix-e">
								<div class="form-group i-password">
									<input type="password" class="form-control" required="" id="password2" placeholder="Password *">
								</div>
							</div>
							<div class="login_remember_box">
								<label class="control control--checkbox">Recuerdame
									<input type="checkbox">
									<span class="control__indicator"></span>
								</label>
								<a href="#" class="forget_password">
									¿Se te perdio la contraseña?
								</a>
							</div>
							<div class="login_btn_wrapper">
								<a href="#" class="btn btn-primary login_btn"> Login </a>
							</div>
							<div class="login_message">
								<p>No tienes cuenta ? <a href="#"> Registrate </a> </p>
							</div>
						</div>
						<p>En caso de que esté utilizando una computadora pública / compartida, le recomendamos que
cierra sesión para evitar cualquier acceso no autorizado a su cuenta</p>
						<!-- /.login_wrapper-->
					</div>
				</div>
			</div>
		</div>
		<!-- /.login_form_wrapper-->
	</div>
	<!-- jp login wrapper end -->
	<!-- jp Newsletter Wrapper Start -->
    <?php
    include("../frames/footerv2.php");
    ?>
</body>

</html>