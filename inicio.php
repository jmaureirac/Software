
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>..:: MI UTEM ::..</title>
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
                            Mi Utem
                        </small>
                    </a>
                </div>

                <div class="navbar-buttons navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">
                                                                                                <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">

                                <img class='nav-user-photo' src="/foto.jpg" />
                                <span class="user-info">
                                    <small>Hola, </small>
                                    JES&Uacute;S
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
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1>Inicio
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Bienvenido
                    </small>
                </h1>
            </div>
        </div><!-- /.page-header -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="itemdiv commentdiv col-sm-8 col-sm-offset-2">
                <div class="user">
                    <img alt="Rector" src="/avatars/rector.jpg">
                </div>

                <div class="body">
                    <div class="name">
                        <a href="#">Rector Sr. Luis Pinto Faverio</a>
                    </div>
                    <div class="text" id="mensaje">
                        <em> <i class="ace-icon fa fa-quote-left"></i>
                            Estimados/as Estudiantes,<br /><br />
                            Bienvenidos al Portal "Mi UTEM", desarrollado por los técnicos y profesionales del Sistema de Servicios Informáticos de nuestra Universidad. Estoy seguro que este será un espacio de gran utilidad para ustedes. <br /><br />
                            Aquí, en un solo lugar, encontrarán información muy relevante para su vida estudiantil: horarios de clases, asignaturas inscritas y avance de malla. También podrán obtener certificados de alumno/a regular o agendar horas para recibir atención médica y/o dental en nuestro Servicio de Salud Estudiantil. Y si se encuentran en vías de titulación, podrán además monitorear todo el proceso administrativo de esta importante etapa de su carrera.
                            <br /><br />
                            Atentamente, <br /><br />
                            Luis Pinto Faverio
                            Rector UTEM

                            <i class="ace-icon fa fa-quote-right"></i> </em>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="space-20"></div>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 infobox-container">
            <div class="space-20"></div>
                <div class="infobox infobox-green">
                    <div class="infobox-icon">
                        <i class="ace-icon fa fa-list-ul"></i>
                    </div>

                    <div class="infobox-data">
                        <span class="infobox-text">Mis Notas</span>

                        <div class="infobox-content">
                            <span class="bigger-110"></span>
                            <a href="/academia/mis_notas">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Revisa aquí
                            </a>
                        </div>
                    </div>

                </div>
                <div class="infobox infobox-blue">
                    <div class="infobox-icon">
                        <i class="ace-icon fa fa-medkit"></i>
                    </div>
                    <div class="infobox-data">
                        <span class="infobox-text">Reserva Hora</span>

                        <div class="infobox-content">
                            <span class="bigger-110"></span>
                            <a href="/sesaes/reserva_hora">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Revisa aquí
                            </a>
                        </div>
                    </div>
                </div>
            
            <div class="infobox infobox-pink">
                <div class="infobox-icon">
                    <i class="ace-icon fa fa-send"></i>
                </div>
                <div class="infobox-data">
                    <span class="infobox-text">Sugerencias</span>

                    <div class="infobox-content">
                        <span class="bigger-110"></span>
                        <a href="/contacto">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Revisa aquí
                        </a>
                    </div>
                </div>
            </div>
            <div class="infobox infobox-red">
                <div class="infobox-icon">
                    <i class="ace-icon fa fa-file-text-o"></i>
                </div>
                <div class="infobox-data">
                    <span class="infobox-text">Solicita Certificado</span>

                    <div class="infobox-content">
                        <span class="bigger-110"></span>
                        <a href="/certificados_2/ingresar_solicitud">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Revisa aquí
                        </a>
                    </div>
                </div>
            </div>
            <div class="infobox infobox-orange2">
                <div class="infobox-icon">
                    <i class="ace-icon fa fa-credit-card"></i>
                </div>
                <div class="infobox-data">
                    <span class="infobox-text">Paga en Línea</span>

                    <div class="infobox-content">
                        <span class="bigger-110"></span>
                        <a href="https://pagos.utem.cl/cupon_matricula/19360858">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Revisa aquí
                        </a>
                    </div>
                </div>
            </div>
            <div class="infobox infobox-blue2">
                <div class="infobox-icon">
                    <i class="ace-icon fa fa-graduation-cap"></i>
                </div>
                <div class="infobox-data">
                    <span class="infobox-text">Proceso Título</span>

                    <div class="infobox-content">
                        <span class="bigger-110"></span>
                        <a href="/titulos_grados/mis_titulos">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Revisa aquí
                        </a>
                    </div>
                </div>
            </div>
            <div class="space-6"></div>

        </div>
    </div>

    <div class="space-20"></div>

    <div class="row">
        <div class="col-xs-12 center">
            <!-- Mensaje sabias que ...  -->

                <ul id="demo" >               
                                                                    <li>
                            <div>
                                <h3>Activaci&oacute;n correo UTEM</h3>
                                <p>Para activar tu correo tienes que ingresar a<a href="http://gmail.com"> http://gmail.com</a> y colocar tu correo UTEM. <strong> La clave de tu correo es tu RUT sin puntos, sin guión y sin dígito verificador</strong>, en el caso de tener un RUT menor a 10 millones, se debe anteponer el 0. </p>
                                                                    <p><a href="https://mi.utem.cl/download/Manual_activacion_correo.pdf">Más información</a></p>
                                
                                <div style="float: right;">

                                    <a href="https://twitter.com/intent/tweet?button&url=http%3A%2F%2Fmi.utem.cl&text=Para activar tu correo tienes que ingresar a&lt;a href=&quot;http://gmail.com&quot;&gt; http://gmail.com&" data-lang="es" data-size="large" data-related="MiUtem" data-url="http://mi.utem.cl" role="button" class="btn btn-xs btn-info asd" type="button"  value="10" title="Compartelo en Twitter">
                                        <i class="ace-icon fa fa-twitter bigger-110" ></i>
                                        twitter
                                    </a>
                                </div>
                            </div>
                        </li>
                                                                    <li>
                            <div>
                                <h3>Revisa tu situaci&oacute;n arancelaria</h3>
                                <p>Recuerda revisar tu situación arancelaria antes del proceso de solicitud de ramos </p>
                                                                    <p><a href="/perfil/mi_situacion_arancelaria">Más información</a></p>
                                
                                <div style="float: right;">

                                    <a href="https://twitter.com/intent/tweet?button&url=http%3A%2F%2Fmi.utem.cl&text=Recuerda revisar tu situaci&oacute;n arancelaria antes del proceso de solicitud de ramos" data-lang="es" data-size="large" data-related="MiUtem" data-url="http://mi.utem.cl" role="button" class="btn btn-xs btn-info asd" type="button"  value="2" title="Compartelo en Twitter">
                                        <i class="ace-icon fa fa-twitter bigger-110" ></i>
                                        twitter
                                    </a>
                                </div>
                            </div>
                        </li>
                                    </ul>
        </div>
    </div>

    <div class="row">
        <div class="space-20"></div>
        <div class="col-xs-12">
            <div class="iconos sociales">
                <ul id="iconos">
                    <!--  <li class="google"><a rel="author" title="Google+" href="https://plus.google.com/páginaGoogle">Google</a></li>-->
                    <li class="facebook"><a title="Facebook Utem"href="https://www.facebook.com/utem.cl">Facebook</a></li>
                    <li class="twitter"><a title="Twitter Utem" href="https://twitter.com/utem">Twitter</a></li>
                </ul>
            </div>
        </div>
    </div>


        </div>



<style>

    ul#iconos {
        list-style: none;
        padding: 0 0 0 5px;
        margin: 10px auto;
        width: 180px;
        overflow: hidden;
        font: 0.219em/1 Arial, sans-serif;
    }
    ul#iconos li {
        float: left;
        width: 33px;
        height: 33px;
        margin: 10px 10px 0 0;
    }
    ul#iconos li a {
        display: block;
        width: 31px;
        height: 31px;
        overflow: hidden;
        border: 1px solid #ffffff;
        line-height: 32px;
        text-decoration: none;
        -moz-opacity: .60;
        filter: alpha(opacity=60);
        opacity: .60;
        -webkit-box-shadow: -1px -1px 0px rgba(0, 0, 0, 0.5);
        -moz-box-shadow: -1px -1px 0px rgba(0, 0, 0, 0.5);
        box-shadow: -1px -1px 0px rgba(0, 0, 0, 0.5);
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        border-radius: 5px;
    }
    ul#iconos li a:hover,
    ul#iconos li a:focus,
    ul#iconos li a:active {
        -moz-opacity: 1;
        filter: alpha(opacity=100);
        opacity: 1;
        -webkit-box-shadow: 0 0 0 rgba(0, 0, 0, 0);
        -moz-box-shadow: 0 0 0 rgba(0, 0, 0, 0);
        box-shadow: 0 0 0 rgba(0, 0, 0, 0);
    }
    /* Google */

    .google a {
        position: relative;
        text-transform: lowercase;
        text-indent: 6px;
        letter-spacing: 20px;
        font: 32px/22px Georgia, Times New Roman, Times, serif;
        line-height: 22px !important;
        color: #fff;
        background: #C9B0B0;
        -moz-transition: all 2s;
        -webkit-transition: all 2s;
        -o-transition: all 2s;
        transition: all 2s;
    }
    .google a:before {
        content: &quot;
        +&quot;
        ;
        position: absolute;
        right: 0;
        top: 0;
        width: 11px;
        text-indent: 0;
        text-align: right;
        font-size: 14px;
        color: #fff;
    }
    .google a:hover {
        background: #BA4428;
        -moz-transition: all .5s;
        -webkit-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
    }
    /* Facebook */

    .facebook a {
        position: relative;
        text-transform: lowercase;
        text-indent: 17px;
        letter-spacing: 5px;
        font-weight: bold;
        font-size: 32px;
        line-height: 33px;
        color: #fff;
        background: #C9B0B0;
        -moz-transition: all 2s;
        -webkit-transition: all 2s;
        -o-transition: all 2s;
        transition: all 2s;
    }
    .facebook a:hover {
        background: #3B5998;
        -moz-transition: all .5s;
        -webkit-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
    }
    /* Twitter */

    .twitter a {
        position: relative;
        text-transform: lowercase;
        text-indent: 10px;
        letter-spacing: 240px;
        font: bold normal 30px Tahoma, sans-serif;
        line-height: 28px;
        color: #ffffff;
        background: #C9B0B0;
        -moz-transition: all 2s;
        -webkit-transition: all 2s;
        -o-transition: all 2s;
        transition: all 2s;
    }
    .twitter a:hover {
        color: #76DDF8;
        background: #daf6f7;
        text-shadow: 1px 1px white, -1px -1px white, 2px 2px white, -2px -2px white, 3px 3px white, -3px -3px white;
        -moz-transition: all .5s;
        -webkit-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
    }
    @media (max-height: 940px) {
        #demo {
            width: 700px;
        }
    }
    @media (max-height: 640px) {
        #demo {
            width: 400px;
        }
    }
    @media (max-height: 540px) {
        #demo {
            width: 200px;
        }
    }
    @media (max-height: 440px) {
        #demo {
            width: 100px;
        }
    }
    [data-carousel-name] {
        display: table;
        margin-right: auto;
        margin-left: auto;
    }
    [data-carousel-control="wrapper"] {
        display: table-cell;
        overflow: hidden;
    }
    [data-carousel-control="wrapper"] ul {
        position: relative;
        margin: 0;
        padding: 0;
        list-style: none;
        white-space: nowrap;
    }
    [data-carousel-control="wrapper"] ul li {
        display: inline-block;
        min-width: none;
        /*items are smashed, increase with min width*/

        max-width: none;
        /*items are to wide, limit with max width*/

        min-height: none;
        /*items are to long, limit with min height*/

        padding-top: 5px;
        padding-right: 0px;
        /*items need some room, increase padding right*/

        padding-bottom: 5px;
        padding-left: 0px;
        /*items need some room, increase padding left*/

        vertical-align: top;
        text-align: center;
    }
    [data-carousel-control="wrapper"] ul li .caption {
        white-space: normal;
    }
    [data-carousel-control="wrapper"] ul li div {
        overflow: auto;
        text-align: left;
        white-space: normal;
        margin-left: 15px;
        margin-right: 15px;
    }
    [data-carousel-control="left"],
    [data-carousel-control="right"] {
        display: table-cell;
        font-size: 2.5em;
        vertical-align: middle;
        background-color: #8CC2E6;
        color: rgba(255, 255, 255, 1);
        cursor: pointer;
    }
    .no-touch [data-carousel-control="left"]:hover,
    .no-touch [data-carousel-control="right"]:hover,
    [data-carousel-control="left"]:active,
    [data-carousel-control="right"]:active {
        background-color: rgba(0, 0, 0, 0.5);
        color: rgba(255, 255, 255, 1);
    }
</style>
                    </div><!-- /.row -->
                    <div class="footer">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <span class="bigger-120">
                                    Universidad Tecnológica Metropolitana - SISEI
                                </span>
                            </div>
                        </div>
                    </div>

                    <a href="#" id="btn-scroll-u" class="btn-scroll-up btn btn-sm btn-inverse">
                        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
                    </a>
                </div><!-- /.main-container -->
            </div>
        </div>


        <script type="text/javascript">
            window.jQuery || document.write("<script src='/js/jquery.min.js'>" + "<" + "/script>");
        </script>
        <script type="text/javascript">
            if ('ontouchstart' in document.documentElement)
                document.write("<script src='/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>


        <style>
            @media only screen and (max-height: 540px){
                .ace-nav>li>.dropdown-menu {  margin-top: auto;
                                              z-index: 1042;
                                              position: absolute;
                }
            }
        </style>

    </body>

</html>
