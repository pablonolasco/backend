<?php
//obtiene todos los productos
$productos=ProductoController::get_productos();
//obtiene la suma de todos los productos
$total_productos=ProductoController::get_sum_total_productos();
//Arreglo de colores
$colores=array("red","green","yellow","aqua","purple");

?>
<!--=====================================
PRODUCTOS MÁS VENDIDOS
======================================-->

<!-- box -->
<div class="box box-default">

    <!-- box-header -->
    <div class="box-header with-border">

        <h3 class="box-title">Productos más vendidos</h3>

        <div class="box-tools pull-right">

            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>

        </div>

    </div>
    <!-- box-header -->

    <!-- box-body -->
    <div class="box-body">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-md-8">

                <div class="chart-responsive">

                    <canvas id="pieChart" height="150"></canvas>

                </div>

            </div>
            <!-- col -->

            <!-- col -->
            <div class="col-md-4">

                <ul class="chart-legend clearfix">
                    <?php
                    for ($i=0; $i<5; $i++){
                        ?>
                        <li><i class="fa fa-circle-o text-<?php echo $colores[$i];?>"></i><?php echo $productos[$i]['titulo']; ?>
                        </li>
                        <?php
                    }
                    ?>
                </ul>

            </div>
            <!-- col -->

        </div>
        <!-- row -->

    </div>
    <!-- /.box-body -->

    <!-- box-footer -->
    <div class="box-footer no-padding">

        <!-- nav-pills -->
        <ul class="nav nav-pills nav-stacked">
            <?php
            //Ciclo para imprimir los productos mas vendidos
            for ($i=0; $i<5; $i++) {

                ?>
                <li>
                    <a href="#"><?php echo $productos[$i]['titulo']?>
                        <span class="pull-right text-<?php echo $colores[$i];?>">
                      <?php
                        //Imprime el porcentaje de los 5 productos mas vendidos
                      echo ceil( $productos[$i]['ventas']*100/$total_productos['total_ventas']);
                      ?>%
                        </span></a>
                </li>
                <?php
            }
            ?>
        </ul>
        <!-- nav-pills -->

    </div>
    <!-- /.footer -->

</div>
<!-- box -->

<script>

    // -------------
    // - PIE CHART -
    // -------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d');
    var pieChart       = new Chart(pieChartCanvas);

    var PieData        = [
        <?php
       for ($i=0; $i<4; $i++) {
        // Ciclo para imprimir la grafica de dona
        ?>
        {
            value    : <?php echo $productos[$i]['ventas'];?>,
            color    : '<?php echo $colores[$i];?>',
            highlight: '<?php echo $colores[$i];?>',
            label    : '<?php echo $productos[$i]['titulo'];?>'
        },
       <?php  }?>
        {
            value    : <?php echo $productos[$i]['ventas'];?>,
            color    : '<?php echo $colores[$i];?>',
            highlight: '<?php echo $colores[$i];?>',
            label    : '<?php echo $productos[$i]['titulo'];?>'
        }
    ];
    var pieOptions     = {
        // Boolean - Whether we should show a stroke on each segment
        segmentShowStroke    : true,
        // String - The colour of each segment stroke
        segmentStrokeColor   : '#fff',
        // Number - The width of each segment stroke
        segmentStrokeWidth   : 1,
        // Number - The percentage of the chart that we cut out of the middle
        percentageInnerCutout: 50, // This is 0 for Pie charts
        // Number - Amount of animation steps
        animationSteps       : 100,
        // String - Animation easing effect
        animationEasing      : 'easeOutBounce',
        // Boolean - Whether we animate the rotation of the Doughnut
        animateRotate        : true,
        // Boolean - Whether we animate scaling the Doughnut from the centre
        animateScale         : false,
        // Boolean - whether to make the chart responsive to window resizing
        responsive           : true,
        // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
        maintainAspectRatio  : false,
        // String - A legend template
        legendTemplate       : '<ul class=\'<%=name.toLowerCase()%>-legend\'><% for (var i=0; i<segments.length; i++){%><li><span style=\'background-color:<%=segments[i].fillColor%>\'></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>',
        // String - A tooltip template
        tooltipTemplate      : '<%=value %> <%=label%> vendidos'
    };
    // Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions);
    // -----------------
    // - END PIE CHART -
    // -----------------


</script>
