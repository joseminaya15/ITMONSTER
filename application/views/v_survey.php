<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="description"            content="HPE Panama">
    <meta name="keywords"               content="HPE Panama">
    <meta name="robots"                 content="Index,Follow">
    <meta name="date"                   content="AUGUST 15, 2019"/>
    <meta name="language"               content="en">
    <meta name="theme-color"            content="#425563">
	<title>HPE Panama</title>
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
        </div>
    </nav>
    <section class="js-section">
        <div class="js-container">
            <div class="js-title">
                <h2>Evaluaci&oacute;n</h2>
            </div>
            <div class="js-information">
                <p>Favor de marcar el n&uacute;mero que represente mejor su opini&oacute;n sobre los siguientes temas, tomando en cuenta que:</p>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="jm-textfield">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="name_survey">
                            <label class="mdl-textfield__label" for="name_survey">Nombre</label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="jm-textfield">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="company_survey">
                            <label class="mdl-textfield__label" for="company_survey">Empresa</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jm-survey">
                <div class="jm-survey__item">
                    <div class="jm-survey__title">
                        <p>1. ¿C&oacute;mo calificar&iacute;a la exposici&oacute;n en general?</p>
                    </div>
                    <div class="jm-survey__number">
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question1-1">
                                <input type="radio" id="question1-1" hidden class="mdl-radio__button" name="question1" value="1">
                                <span class="mdl-radio__label">1</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question1-2">
                                <input type="radio" id="question1-2" hidden class="mdl-radio__button" name="question1" value="2">
                                <span class="mdl-radio__label">2</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question1-3">
                                <input type="radio" id="question1-3" hidden class="mdl-radio__button" name="question1" value="3">
                                <span class="mdl-radio__label">3</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question1-4">
                                <input type="radio" id="question1-4" hidden class="mdl-radio__button" name="question1" value="4">
                                <span class="mdl-radio__label">4</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question1-5">
                                <input type="radio" id="question1-5" hidden class="mdl-radio__button" name="question1" value="5">
                                <span class="mdl-radio__label">5</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="jm-survey__item">
                    <div class="jm-survey__title">
                        <p>2. La informaci&oacute;n recibida es de utilidad para su negocio</p>
                    </div>
                    <div class="jm-survey__number">
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question2-1">
                                <input type="radio" id="question2-1" hidden class="mdl-radio__button" name="question2" value="1">
                                <span class="mdl-radio__label">1</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question2-2">
                                <input type="radio" id="question2-2" hidden class="mdl-radio__button" name="question2" value="2">
                                <span class="mdl-radio__label">2</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question2-3">
                                <input type="radio" id="question2-3" hidden class="mdl-radio__button" name="question2" value="3">
                                <span class="mdl-radio__label">3</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question2-4">
                                <input type="radio" id="question2-4" hidden class="mdl-radio__button" name="question2" value="4">
                                <span class="mdl-radio__label">4</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question2-5">
                                <input type="radio" id="question2-5" hidden class="mdl-radio__button" name="question2" value="5">
                                <span class="mdl-radio__label">5</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="jm-survey__item">
                    <div class="jm-survey__title">
                        <p>3. Claridad al explicar los beneficios de la soluci&oacute;n HPE SimpliVity 325</p>
                    </div>
                    <div class="jm-survey__number">
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question3-1">
                                <input type="radio" id="question3-1" hidden class="mdl-radio__button" name="question3" value="1">
                                <span class="mdl-radio__label">1</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question3-2">
                                <input type="radio" id="question3-2" hidden class="mdl-radio__button" name="question3" value="2">
                                <span class="mdl-radio__label">2</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question3-3">
                                <input type="radio" id="question3-3" hidden class="mdl-radio__button" name="question3" value="3">
                                <span class="mdl-radio__label">3</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question3-4">
                                <input type="radio" id="question3-4" hidden class="mdl-radio__button" name="question3" value="4">
                                <span class="mdl-radio__label">4</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question3-5">
                                <input type="radio" id="question3-5" hidden class="mdl-radio__button" name="question3" value="5">
                                <span class="mdl-radio__label">5</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="jm-survey__item">
                    <div class="jm-survey__title">
                        <p>4. Temas expuestos</p>
                    </div>
                    <div class="jm-survey__number">
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question4-1">
                                <input type="radio" id="question4-1" hidden class="mdl-radio__button" name="question4" value="1">
                                <span class="mdl-radio__label">1</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question4-2">
                                <input type="radio" id="question4-2" hidden class="mdl-radio__button" name="question4" value="2">
                                <span class="mdl-radio__label">2</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question4-3">
                                <input type="radio" id="question4-3" hidden class="mdl-radio__button" name="question4" value="3">
                                <span class="mdl-radio__label">3</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question4-4">
                                <input type="radio" id="question4-4" hidden class="mdl-radio__button" name="question4" value="4">
                                <span class="mdl-radio__label">4</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question4-5">
                                <input type="radio" id="question4-5" hidden class="mdl-radio__button" name="question4" value="5">
                                <span class="mdl-radio__label">5</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="jm-survey__item">
                    <div class="jm-survey__title">
                        <p>5. ¿C&oacute;mo calificar&iacute;a a los expositores?</p>
                    </div>
                    <div class="jm-survey__number">
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question5-1">
                                <input type="radio" id="question5-1" hidden class="mdl-radio__button" name="question5" value="1">
                                <span class="mdl-radio__label">1</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question5-2">
                                <input type="radio" id="question5-2" hidden class="mdl-radio__button" name="question5" value="2">
                                <span class="mdl-radio__label">2</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question5-3">
                                <input type="radio" id="question5-3" hidden class="mdl-radio__button" name="question5" value="3">
                                <span class="mdl-radio__label">3</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question5-4">
                                <input type="radio" id="question5-4" hidden class="mdl-radio__button" name="question5" value="4">
                                <span class="mdl-radio__label">4</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question5-5">
                                <input type="radio" id="question5-5" hidden class="mdl-radio__button" name="question5" value="5">
                                <span class="mdl-radio__label">5</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="jm-survey__item">
                    <div class="jm-survey__title">
                        <p>6. Producci&oacute;n del evento</p>
                    </div>
                    <div class="jm-survey__number">
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question6-1">
                                <input type="radio" id="question6-1" hidden class="mdl-radio__button" name="question6" value="1">
                                <span class="mdl-radio__label">1</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question6-2">
                                <input type="radio" id="question6-2" hidden class="mdl-radio__button" name="question6" value="2">
                                <span class="mdl-radio__label">2</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question6-3">
                                <input type="radio" id="question6-3" hidden class="mdl-radio__button" name="question6" value="3">
                                <span class="mdl-radio__label">3</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question6-4">
                                <input type="radio" id="question6-4" hidden class="mdl-radio__button" name="question6" value="4">
                                <span class="mdl-radio__label">4</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question6-5">
                                <input type="radio" id="question6-5" hidden class="mdl-radio__button" name="question6" value="5">
                                <span class="mdl-radio__label">5</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="jm-survey__item">
                    <div class="jm-survey__title">
                        <p>7. Alimentos y bebidas</p>
                    </div>
                    <div class="jm-survey__number">
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question7-1">
                                <input type="radio" id="question7-1" hidden class="mdl-radio__button" name="question7" value="1">
                                <span class="mdl-radio__label">1</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question7-2">
                                <input type="radio" id="question7-2" hidden class="mdl-radio__button" name="question7" value="2">
                                <span class="mdl-radio__label">2</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question7-3">
                                <input type="radio" id="question7-3" hidden class="mdl-radio__button" name="question7" value="3">
                                <span class="mdl-radio__label">3</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question7-4">
                                <input type="radio" id="question7-4" hidden class="mdl-radio__button" name="question7" value="4">
                                <span class="mdl-radio__label">4</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question7-5">
                                <input type="radio" id="question7-5" hidden class="mdl-radio__button" name="question7" value="5">
                                <span class="mdl-radio__label">5</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="jm-survey__item">
                    <div class="jm-survey__title">
                        <p>8. Audio y Video</p>
                    </div>
                    <div class="jm-survey__number">
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question8-1">
                                <input type="radio" id="question8-1" hidden class="mdl-radio__button" name="question8" value="1">
                                <span class="mdl-radio__label">1</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question8-2">
                                <input type="radio" id="question8-2" hidden class="mdl-radio__button" name="question8" value="2">
                                <span class="mdl-radio__label">2</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question8-3">
                                <input type="radio" id="question8-3" hidden class="mdl-radio__button" name="question8" value="3">
                                <span class="mdl-radio__label">3</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question8-4">
                                <input type="radio" id="question8-4" hidden class="mdl-radio__button" name="question8" value="4">
                                <span class="mdl-radio__label">4</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question8-5">
                                <input type="radio" id="question8-5" hidden class="mdl-radio__button" name="question8" value="5">
                                <span class="mdl-radio__label">5</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="jm-survey__item">
                    <div class="jm-survey__title">
                        <p>9. Log&iacute;stica</p>
                    </div>
                    <div class="jm-survey__number">
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question9-1">
                                <input type="radio" id="question9-1" hidden class="mdl-radio__button" name="question9" value="1">
                                <span class="mdl-radio__label">1</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question9-2">
                                <input type="radio" id="question9-2" hidden class="mdl-radio__button" name="question9" value="2">
                                <span class="mdl-radio__label">2</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question9-3">
                                <input type="radio" id="question9-3" hidden class="mdl-radio__button" name="question9" value="3">
                                <span class="mdl-radio__label">3</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question9-4">
                                <input type="radio" id="question9-4" hidden class="mdl-radio__button" name="question9" value="4">
                                <span class="mdl-radio__label">4</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question9-5">
                                <input type="radio" id="question9-5" hidden class="mdl-radio__button" name="question9" value="5">
                                <span class="mdl-radio__label">5</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="jm-survey__item">
                    <div class="jm-survey__title">
                        <p>10. ¿Considerar&iacute;a usted en una futura necesidad de adquisici&oacute;n de servidores con procesadores AMD?</p>
                    </div>
                    <div class="jm-survey__text">
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question10-1">
                                <input type="radio" id="question10-1" hidden class="mdl-radio__button" name="question10" value="Si">
                                <span class="mdl-radio__label">Si</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question10-2">
                                <input type="radio" id="question10-2" hidden class="mdl-radio__button" name="question10" value="No">
                                <span class="mdl-radio__label">No</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="jm-survey__item">
                    <div class="jm-survey__title">
                        <p>11. ¿Recuerda la cantidad de memoria m&aacute;xima de memoria RAM soportan los procesadores AMD EPYC serie 7002?</p>
                    </div>
                    <div class="jm-survey__text">
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question11-1">
                                <input type="radio" id="question11-1" hidden class="mdl-radio__button" name="question11" value="2TB">
                                <span class="mdl-radio__label">2TB</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question11-2">
                                <input type="radio" id="question11-2" hidden class="mdl-radio__button" name="question11" value="4TB">
                                <span class="mdl-radio__label">4TB</span>
                            </label>
                        </div>
                        <div class="jm-radio">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question11-3">
                                <input type="radio" id="question11-3" hidden class="mdl-radio__button" name="question11" value="1TB">
                                <span class="mdl-radio__label">1TB</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="js-section--button text-center">
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-login" onclick="sendSurvey($(this))">Enviar</button>
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