<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tienda Online | Panel de Control</title>

    <link rel="icon" href="view/img/plantilla/icono.png">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!--=====================================
    PLUGINS DE CSS
    ======================================-->
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

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="view/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">

    <!-- bootstrap slider -->
    <link rel="stylesheet" href="view/plugins/bootstrap-slider/slider.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="view/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="view/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

    <!-- bootstrap tags input -->
    <link rel="stylesheet" href="view/plugins/tags/bootstrap-tagsinput.css">

    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="view/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

    <!-- Dropzone -->
    <link rel="stylesheet" href="view/plugins/dropzone/dropzone.css">

    <!--=====================================
    CSS PERSONALIZADO
    ======================================-->

    <link rel="stylesheet" href="view/css/plantilla.css">

    <link rel="stylesheet" href="view/css/slide.css">


    <!--=====================================
    PLUGINS DE JAVASCRIPT
    ======================================-->

    <!-- jQuery 3 -->
    <script src="view/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- jQuery UI 1.11.4 -->
    <script src="view/bower_components/jquery-ui/jquery-ui.min.js"></script>

    <!-- Bootstrap 3.3.7 -->
    <script src="view/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- AdminLTE App -->
    <script src="view/dist/js/adminlte.min.js"></script>

    <!-- iCheck http://icheck.fronteed.com/-->
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

    <!-- SweetAlert 2 https://sweetalert2.github.io/-->
    <script src="view/plugins/sweetalert2/sweetalert2.all.js"></script>

    <!-- bootstrap color picker https://farbelous.github.io/bootstrap-colorpicker/v2/-->
    <script src="view/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>

    <!-- Bootstrap slider http://seiyria.com/bootstrap-slider/-->
    <script src="view/plugins/bootstrap-slider/bootstrap-slider.js"></script>

    <!-- DataTables https://datatables.net/-->
    <script src="view/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="view/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="view/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
    <script src="view/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>

    <!-- bootstrap tags input https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/-->
    <script src="view/plugins/tags/bootstrap-tagsinput.min.js"></script>

    <!-- bootstrap datetimepicker http://bootstrap-datepicker.readthedocs.io-->
    <script src="view/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

    <!-- Dropzone http://www.dropzonejs.com/-->
    <script src="view/plugins/dropzone/dropzone.js"></script>


</head>

<body class="hold-transition sidebar-collapse skin-blue sidebar-mini login-page">

<?php


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
           $ruta == "reporte" ||
           $ruta == "comercio" ||
           $ruta == "slide" ||
           $ruta == "categorias" ||
           $ruta == "subcategorias" ||
           $ruta == "productos" ||
           $ruta == "ventas" ||
           $ruta == "usuarios" ||
           $ruta == "mensajes" ||
           $ruta == "perfil-usuario" ||
           $ruta == "perfiles" ||
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

<!--=====================================
JS PERSONALIZADO
======================================-->
<script src="view/js/template.js"></script>
<script src="view/js/gestorComercio.js"></script>
<script src="view/js/gestorSlide.js"></script>
<script src="view/js/gestorCategorias.js"></script>

</body>
</html>