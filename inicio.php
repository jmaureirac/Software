
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>..:: DIFUSION UTEM ::..</title>
        <meta name="description" content="Portal de servicios para los alumnos de la Universidad Tecnológica Metropolitana" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="/css/css5c0a.css" />
        <link rel="stylesheet" type="text/css" href="/css/ace.min.css" />
        <link href="/css/bootstrap-responsive.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="/css/select2.min.css" />
        <link rel="stylesheet" href="/css/ace-responsive.min.css" />
        <link rel="stylesheet" href="/css/dataTables.bootstrap.css" />
        <link rel="stylesheet" href="/css/bootstrap-editable.css" />
        <link rel="stylesheet" href="/css/colorbox.min.css" />

        <link rel="stylesheet" href="/css/ace-skins.min.css" />
        <link rel="stylesheet" href="/css/datepicker.min.css" />
        <link rel="apple-touch-icon" href="/images/apple-touch-icon.png">
        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/bootbox.min.js"></script>
        <script src="/js/ace-elements.min.js"></script>
        <script src="/js/jquery.dataTables.min.js"></script>
        <script src="/js/jquery.dataTables.bootstrap.min.js"></script>

        <script src="/js/jquery.colorbox-min.js"></script>
        <script src="/js/ace.min.js"></script>
        <script src="/js/fuelux/fuelux.wizard.min.js"></script>
        <script src="/js/x-editable/ace-editable.min.js"></script>
        <script src="/js/x-editable/bootstrap-editable.min.js"></script>
        <script src="/js/jquery-ui.js"></script>
        <script src="/js/date-time/datepicker.min.js"></script>
        <script src="/js/date-time/moment.js"></script>
        <script src="/js/date-time/bootstrap-datepicker.min.js"></script>


    </head>
    <body class="no-skin">
        <div id="navbar" class="navbar navbar-default">
            <div class="navbar-container" id="navbar-container">
                <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                    <span class="sr-only">Toggle sidebar</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-header pull-left">
                    <a href="/inicio" class="navbar-brand">
                        <small>
                            <img src="/images/utemcito-blanco-sintitulo.png" height="23px">
                            Difusion Utem
                        </small>
                    </a>
                </div>

                <div class="navbar-buttons navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">
                                                                                                <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">

                                <img class='nav-user-photo' src="/foto.jpg" />
                                <span class="user-info">
                                    <small>Hola Expositor</small>
                                    </span>

                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>

                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li>
                                    <a href="/perfil/mis_datos">
                                        <i class="ace-icon fa fa-user"></i>
                                        Mis Datos
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="/salir">
                                        <i class="ace-icon fa fa-power-off"></i>
                                        Salir
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- /.navbar-container -->
        </div>

        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try {
                    ace.settings.check('main-container', 'fixed')
                } catch (e) {
                }
            </script>

            <div id="sidebar" class="sidebar responsive">
                <script type="text/javascript">
    try {
        ace.settings.check('sidebar', 'fixed')
    } catch (e) {
    }
</script>


<ul class="nav nav-list">
    <li>
        <a href="/inicio">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Inicio </span>
        </a>
        <b class="arrow"></b>
    </li>
    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-text"> Mi Perfil </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="">
                <a href="/perfil/mis_datos">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Mis Datos
                </a>
                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="/perfil/mi_situacion_arancelaria">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Mi Situación Arancelaria
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-book"></i>
            <span class="menu-text"> Datos Académicos </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
                            <li class="">
                    <a href="/academia/mis_notas">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Mis Notas
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="/perfil/mi_horario">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Mi Horario
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="/perfil/bitacora_clases">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Bitácora de Clases
                    </a>

                    <b class="arrow"></b>
                </li>
                        <li class="">
                <a href="/perfil/mi_avance_malla">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Mi Avance Malla
                </a>

                <b class="arrow"></b>
            </li>
            <li class="">
                <a href="/perfil/boletin_notas">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Bolet&iacute;n de Notas
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
    <!-- @SESSION.hasEncuestaSatisfaccion || -->
            <li class="">
            <a href="/encuesta_DEA/Satisfaccion"> 
                <i class="menu-icon fa fa-check-square-o"></i>
                <span class="menu-text">Encuesta Satisfacción
                    <span class="badge badge-primary"></span>
                </span>
            </a>
            <b class="arrow"></b>
        </li>
     
        <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-check-square-o"></i>
            <span class="menu-text"> Eval. Docente </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
                            <li class="">
                    <a href="/encuesta_DEA">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Contestar
                    </a>
                    <b class="arrow"></b>
                </li>
                                </ul>
    </li>
    <!--    <li class="">
        <a href="/encuesta_DEA">
            <i class="menu-icon fa fa-check-square-o"></i>
            <span class="menu-text">Eval. Francisco
                
            </span>
        </a>
        <b class="arrow"></b>
    </li>-->
            <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-medkit"></i>
                <span class="menu-text"> SESAES </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="">
                    <a href="/sesaes/reserva_hora">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Reservar Hora
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="/sesaes/anular_reserva">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Consultar / Anular tus Reservas
                    </a>

                    <b class="arrow"></b>
                </li>

            </ul>
        </li>
    
    <li class="">
        <a href="/titulos_grados/mis_titulos">
            <i class="menu-icon fa fa-caret-right"></i>
            <span class="menu-text"> Proceso Titulación </span>
        </a>
        <b class="arrow"></b>
    </li>


    <li class="">
        <a href="/certificados_2/ingresar_solicitud">
            <i class="menu-icon fa fa-file-text-o  "></i>
            <span class="menu-text"> Certificados On-line </span>
        </a>
        <b class="arrow"></b>
    </li>
    <!--
    <li class="">
        <a href="/calendario_academico">
            <i class="menu-icon fa fa-calendar"></i>
            <span class="menu-text"> Calendario</span>
        </a>
        <b class="arrow"></b>
    </li>
    -->
    <li class="">
        <a href="https://pagos.utem.cl/cupon_matricula/19360858" target="_blank">
            <i class="menu-icon fa fa-credit-card "></i>
            <span class="menu-text"> Pago en Línea </span>
        </a>
        <b class="arrow"></b>      
    </li>

    <li class="">
        <a href="/cupon/index">
            <i class="menu-icon fa fa-credit-card "></i>
            <span class="menu-text"> Generar Cupón </span>
        </a>
        <b class="arrow"></b>      
    </li>

    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-cutlery"></i>
            <span class="menu-text"> Alimentación UTEM</span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <b class="arrow"></b>
        <ul class="submenu">
            <li class="">
                <a href="/casino/menu">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Menú del día
                </a>
                <b class="arrow"></b>
            </li>

                            <li class="">
                    <a href="/casino">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Generar Cupón
                    </a>
                    <b class="arrow"></b>
                </li>
<!--                <li class="">
                    <a href="/bienestar_estudiantil/encuesta">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Encuesta de satisfacción
                    </a>
                    <b class="arrow"></b>
                </li>-->
                        <li class="">
                <a href="/bienestar_estudiantil/postulacion">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Postulación a la beca
                </a>
                <b class="arrow"></b>
            </li>
        </ul>
    </li>

    <li class="">
        <a href="#" class="dropdown-toggle">
            <!--                                               <a data-toggle="dropdown" href="#" class="dropdown-toggle">-->
            <i class="menu-icon fa fa-globe"></i>
            <span class="menu-text"> Accesos Directos </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="">
                <a href="https://www.utem.cl" target="_blank">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Página UTEM
                </a>
                <b class="arrow"></b>
            </li>
            <li class="">
                <a href="http://postulacion.utem.cl/" target="_blank">
                    <i class="menu-icon fa fa-caret-right"></i>
                    DirDoc
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="http://reko.utem.cl/portal/" target="_blank">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Reko
                </a>

                <b class="arrow"></b>
            </li>
            <li class="">
                <a href="http://biblioteca.utem.cl" target="_blank">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Catálogo Biblioteca
                </a>
                <b class="arrow"></b>
            </li>
            <li class="">
                <a href="http://bienestarestudiantil.blogutem.cl" target="_blank">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Bienestar Estudiantil
                </a>
                <b class="arrow"></b>
            </li>
            <li class="">
                <a href="http://validacion.utem.cl" target="_blank">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Validación Certificados 
                </a>
                <b class="arrow"></b>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="/contacto">
            <i class="menu-icon fa fa-send"></i>
            <span class="menu-text"> Contáctanos</span>
        </a>
        <b class="arrow"></b>
    </li>
</ul><!-- /.nav-list -->

<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
</div>

<script type="text/javascript">
    try {
        ace.settings.check('sidebar', 'collapsed')
    } catch (e) {
    }
</script>
            </div>

            <div class="main-content">
                <div class="main-content-inner">


                    <div class="breadcrumbs" id="breadcrumbs">
                        <script type="text/javascript">
                            try {
                                ace.settings.check('breadcrumbs', 'fixed')
                            } catch (e) {
                            }
                        </script>

                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="#">Inicio</a>
                            </li>

                            <li class="active"></li>
                        </ul><!-- /.breadcrumb -->

                        <!--<div class="nav-search" id="nav-search">
                            <form class="form-search">
                                <span class="input-icon">
                                    <input type="text" placeholder="Buscar ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                                </span>
                            </form>

                        </div>-->
                    </div><!-- /.main-content -->
                    <div class="page-content">
                        <script src="/js/formulario.js"></script>
<script src="/js/jquery.carousel.js"></script>
    </body>

</html>
