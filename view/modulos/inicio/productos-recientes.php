<?php
$productos=ProductoController::get_productos_fecha();

?>
<!--=====================================
PRODUCTOS RECIENTES
======================================-->

<!-- PRODUCT LIST -->
<div class="box box-primary">

    <!-- box-header -->
    <div class="box-header with-border">

        <h3 class="box-title">Productos agregados recientemente</h3>

        <div class="box-tools pull-right">

            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>

        </div>

    </div>
    <!-- box-header -->

    <!-- box-body -->
    <div class="box-body">

        <!-- products-list -->
        <ul class="products-list product-list-in-box">
            <?php
                for($i=0; $i<4; $i++) {
                    if($productos[$i]["portada"] !="") {
                        ?>
                        <li class="item">
                            <div class="product-img">
                                <img src="<?php echo $productos[$i]["portada"]; ?>" alt="Product Image">
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-title">
                                    <?php echo $productos[$i]["titulo"]; ?>
                                    <span class="label label-warning pull-right">
                                        <?php
                                        if($productos[$i]["precio"] == 0) {
                                            echo "Gratis";
                                            }else{
                                            echo "$".$productos[$i]["precio"]." MXN";
                                        }
                                        ?>

                                    </span></a>
                                <span class="product-description">

                                <?php echo $productos[$i]["titulo"]; ?>
	                            </span>
                            </div>
                        </li>
                        <?php
                    }else{

                        ?>
                        <li class="item">
                            <div class="product-img">
                                <img src="view/dist/img/default-50x50.gif" alt="Product Image">
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-title">
                                    <?php echo $productos[$i]["titulo"]; ?>
                                    <span class="label label-warning pull-right">$<?php

                                        if($productos[$i]["precio"] == 0) {
                                            echo "Gratis";
                                        }else{
                                            echo "$".$productos[$i]["precio"]." MXN";
                                        }
                                         ?> MXN</span></a>
                                <span class="product-description">

                                <?php echo

                                $productos[$i]["titulo"]; ?>
	              </span>
                            </div>
                        </li>
                    <?php
                    }
                }
            ?>

        </ul>
        <!-- products-list -->

    </div>
    <!-- box-body -->

    <!-- box-footer -->
    <div class="box-footer text-center">

        <a href="productos" class="uppercase">Ver todos los productos</a>

    </div>
    <!-- box-footer -->

</div>
<!-- PRODUCT LIST -->