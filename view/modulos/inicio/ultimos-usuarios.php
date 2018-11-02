<?php
$usuarios=UsuarioController::get_usuarios();
//url frontend
$url=RutaModel::obtenerRuta();

?>
<!--=====================================
ÚLTIMOS USUARIOS
======================================-->

<!-- USERS LIST -->
<div class="box box-danger">

    <!-- box-header -->
    <div class="box-header with-border">

        <h3 class="box-title">Últimos usuarios registrados</h3>

        <div class="box-tools pull-right">

            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>

        </div>

    </div>
    <!-- /.box-header -->

    <!-- box-body -->
    <div class="box-body no-padding">

        <!-- users-list -->
        <ul class="users-list clearfix">
            <?php
            $total_registros=count($usuarios);
            //Si es falso, negamos el valor
            if(!$total_registros>8){
               $total_registros=8;

            }
                for($i=0; $i<$total_registros; $i++) {
                //verifica si la foto no viene vacia
                if($usuarios[$i]['foto'] !="") {

                    //directo = desdes la pagina
                    //diferente= redes sociales
                    //si el modo es diferente de directo
                    if ($usuarios[$i]['modo'] != 'directo') {
                        ?>
                        <li>
                            <img src="<?php echo $usuarios[$i]['foto']; ?>" style="width: 70%;" alt="User Image">
                            <a class="users-list-name" href="#"><?php echo $usuarios[$i]['nombre']; ?></a>
                            <span class="users-list-date"><?php echo $usuarios[$i]['fecha'];?></span>
                        </li>
                        <?php
                    } else {
                        ?>

                        <li>
                            <img src="<?php echo $url . $usuarios[$i]['foto']; ?>" style="width: 70%;" alt="User Image">
                            <a class="users-list-name" href="#"><?php echo $usuarios[$i]['nombre']; ?></a>
                            <span class="users-list-date"><?php echo $usuarios[$i]['fecha'];?></span>
                        </li>
                        <?php
                    }
                }else{
                    //muestra imagen por defecto
                    ?>
                    <li>
                        <img src="view/img/usuarios/default/anonymous.png" style="width: 70%;" alt="User Image">
                        <a class="users-list-name" href="#"><?php echo $usuarios[$i]['nombre']; ?></a>
                        <span class="users-list-date"><?php echo $usuarios[$i]['fecha'];?></span>
                    </li>
                    <?php
                }
            }
            ?>


        </ul>
        <!-- /.users-list -->

    </div>
    <!-- /.box-body -->

    <!-- box-footer -->
    <div class="box-footer text-center">

        <a href="usuarios" class="uppercase">Ver todos los usuarios</a>

    </div>
    <!-- /.box-footer -->

</div>
<!-- USERS LIST -->