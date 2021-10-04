<?php

    require '../../order_tracking/graficas/modelo_grafico.php';

    $MG = new modelo_grafico();
    $consulta = $MG -> traerDatosGraficosBar();
    echo json_encode($consulta);

?>