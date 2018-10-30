<?php
$ventas=VentaController::get_total_ventas();
$visitas=VisitaController::get_total_visitas();
$usuarios=UsuarioController::get_total_usuarios();
$total_usuario=count($usuarios);
$productos=ProductoController::get_total_productos();
$total_productos=count($productos);


?>
<!--=====================================
CAJAS SUPERIORES
======================================-->

<!-- col -->
<div class="col-lg-3 col-xs-6">

    <!-- small box -->
    <div class="small-box bg-aqua">

        <!-- inner -->
        <div class="inner">

            <h3>$<?php echo number_format($ventas['total_venta']);?> MXN</h3>
            <p>Ventas</p>

        </div>
        <!-- inner -->

        <!-- icon -->
        <div class="icon">

            <i class="ion ion-bag"></i>

        </div>
        <!-- icon -->

        <a href="reporte" class="small-box-footer">Más Info <i class="fa fa-arrow-circle-right"></i></a>

    </div>
    <!-- small-box -->

</div>
<!-- col -->

<!--===========================================================================-->

<!-- col -->
<div class="col-lg-3 col-xs-6">

    <!-- small box -->
    <div class="small-box bg-green">

        <!-- inner -->
        <div class="inner">

            <h3><?php echo number_format($visitas['total_visita']);?></h3>

            <p>Visitas</p>

        </div>
        <!-- inner -->

        <!-- icon -->
        <div class="icon">

            <i class="ion ion-stats-bars"></i>

        </div>
        <!-- icon -->

        <a href="reporte" class="small-box-footer">Más Info <i class="fa fa-arrow-circle-right"></i></a>

    </div>
    <!-- small box -->

</div>
<!-- col -->

<!--===========================================================================-->

<!-- col -->
<div class="col-lg-3 col-xs-6">

    <!-- small box -->
    <div class="small-box bg-yellow">

        <!-- inner -->
        <div class="inner">

            <h3><?php echo number_format($total_usuario); ?></h3>

            <p>Usuarios</p>

        </div>
        <!-- inner -->

        <!-- icon -->
        <div class="icon">

            <i class="ion ion-person-add"></i>

        </div>
        <!-- icon -->

        <a href="usuarios" class="small-box-footer">Más Info <i class="fa fa-arrow-circle-right"></i></a>

    </div>
    <!-- small box -->

</div>
<!-- col -->

<!--===========================================================================-->

<!-- col -->
<div class="col-lg-3 col-xs-6">

    <!-- small box -->
    <div class="small-box bg-red">

        <!-- inner -->
        <div class="inner">

            <h3><?php echo  number_format($total_productos);?></h3>

            <p>Productos</p>

        </div>
        <!-- inner -->

        <!-- icon -->
        <div class="icon">

            <i class="ion ion-pie-graph"></i>

        </div>
        <!-- icon -->
        <a href="productos" class="small-box-footer">Más Info <i class="fa fa-arrow-circle-right"></i></a>

    </div>
    <!-- small box -->

</div>
<!-- col -->
