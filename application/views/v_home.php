<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="description"            content="HPE IT MONSTER">
    <meta name="keywords"               content="HPE IT MONSTER">
    <meta name="robots"                 content="Index,Follow">
    <meta name="date"                   content="AUGUST 15, 2019"/>
    <meta name="language"               content="en">
    <meta name="theme-color"            content="#425563">
	<title>HPE IT MONSTER</title>
    <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/favicon.ico">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>datetimepicker/css/bootstrap-material-datetimepicker.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>owl-carousel/owl.carousel.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>owl-carousel/owl.theme.default.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>metric.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="js-container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand link" href="#home">
                    <img src="<?php echo RUTA_IMG?>logo/hpe-logo.png">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item active"><a class="link" href="#home">Inicio</a></li>
                    <li class="nav-item"><a class="link" href="#register">Registro</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="home">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="js-fondo fondo1"></div>
            </div>
            <div class="item">
                <div class="js-fondo fondo2"></div>
            </div>
            <div class="item">
                <div class="js-fondo fondo3"></div>
            </div>
        </div>
        <div class="js-container">
            <div class="js-home js-flex">
                <div class="js-contenido">
                    <h2>Comparte con Hewlett Packard Enterprise, las &uacute;ltimas novedades y soluciones, para mejorar su competitividad!</h2>
                    <a href="#register" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect link js-button">Registrese aqu&iacute;</a>
                </div>
            </div>
        </div>
    </section>
    <section id="register" class="js-section">
        <div class="js-container">
            <div class="js-information">
                <h2>Jueves 12 de Setiembre, 2019 | Hora de inicio 4:00 pm</h2>
                <p>Hotel Central (Panam&aacute;)</p>
                <p>Panam&aacute;</p>
            </div>
            <div class="js-title">
                <h2>REG&Iacute;STRESE AHORA</h2>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">Nombre*</label>
                        <input type="text" id="name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">Apellido*</label>
                        <input type="text" id="surname">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                     <div class="js-input">
                        <label for="text">Empresa*</label>
                        <input type="text" id="company" >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">Cargo*</label>
                        <input type="text" id="position">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">N° T&eacute;lefono o Celular*</label>
                        <input type="text" id="phone">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">Email*</label>
                        <input type="text" id="email">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">Canal que le extendi&oacute; la invitaci&oacute;n*</label>
                        <input type="text" id="invitation">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">Deporte que le agrada*</label>
                        <input type="text" id="sport">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">Cantidad de usuarios en la empresa*</label>
                        <input type="text" id="users">
                    </div>
                </div>
            </div>
            <div class="js-section--button text-center">
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-login" onclick="sendInformation()">Enviar</button>
            </div>
            <div id="confirmation" class="js-confirmation">
                <h2>Registro realizado correctamente.</h2>
                <p>¡Lo esperamos!</p>
            </div>
        </div>
    </section>
    <footer class="js-section p-t-15 p-b-15">
        <div class="js-container text-center">
            <p>&copy;Copyright 2019 Hewlett Packard Enterprise Development LP</p>
            <p class="content">*Completando está información participa en un sorteo al final del evento.</p>
        </div>
    </footer>

	<script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>owl-carousel/owl.carousel.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>inputmask/jquery.mask.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>moment/moment.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>datetimepicker/js/bootstrap-material-datetimepicker.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jsmenu.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jsindex.js?v=<?php echo time();?>"></script>
    <script type="text/javascript">
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
            $('select').selectpicker('mobile');
        } else {
            $('select').selectpicker();
        }
    </script>
</body>
</html>