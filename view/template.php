<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tienda Online | Panel de Control</title>

    <link rel="icon" href="../view/img/plantilla/icono.png">

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="view/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="view/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="view/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="view/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="view/dist/css/skins/skin-blue.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="view/plugins/iCheck/square/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="view/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="view/bower_components/jvectormap/jquery-jvectormap.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 3 -->
    <script src="view/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="view/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="view/dist/js/adminlte.min.js"></script>
    <!-- iCheck -->
    <script src="view/plugins/iCheck/icheck.min.js"></script>
    <!-- Morris.js charts -->
    <script src="view/bower_components/raphael/raphael.min.js"></script>
    <script src="view/bower_components/morris.js/morris.min.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="view/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- jvectormap -->
    <script src="view/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="view/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- ChartJS -->
    <script src="view/bower_components/Chart.js/Chart.js"></script>

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
            /* jQueryKnob */
            $('.knob').knob();
            /* SideBar Menu */
            $('.sidebar-menu').tree();
        });
    </script>

</head>

<body class="hold-transition skin-blue sidebar-mini login-page">

<?php

session_start();

if(isset($_SESSION["validarSesionBackend"]) && $_SESSION["validarSesionBackend"] === "ok"){
    $url=$_GET['ruta'];
    $ruta=str_replace('view/',"",$url);
    echo '<div class="wrapper">';

    /*=============================================
     CABEZOTE
     =============================================*/

    include "modulos/cabecera.php";

    /*=============================================
     LATERAL
     =============================================*/

    include "modulos/barra_lateral.php";

    /*=============================================
    CONTENIDO
    =============================================*/
    if(isset($_GET["ruta"])){

       if($ruta == "inicio" ||
           $ruta == "comercio" ||
           $ruta == "slide" ||
           $ruta == "categorias" ||
           $ruta == "subcategorias" ||
           $ruta == "productos" ||
           $ruta == "banner" ||
           $ruta == "ventas" ||
           $ruta == "visitas" ||
           $ruta == "usuarios" ||
           $ruta == "mensajes" ||
           $ruta == "perfiles" ||
           $ruta == "perfil" ||
           $ruta == "salir"){


            include "modulos/".$ruta.".php";

        }


    }

    /*=============================================
    FOOTER
    =============================================*/

   include "modulos/footer.php";


    echo '</div>';

}else{

    include "modulos/login.php";

}


?>



</body>
</html>