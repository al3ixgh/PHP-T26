<?php
    $min=$_REQUEST['min'];
    $max=$_REQUEST['max'];
    $cantidad=$_REQUEST['cantidad'];

    function generar($min,$max)
    {
        echo random_int($min, $max);
        echo "<br>";
    }
    for($i=0;$i<$cantidad;$i++){
        generar($min,$max);
    }
?>