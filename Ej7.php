<?php
    $num=$_REQUEST['num'];
    function calcularFactorial($numero){
        $result=$numero;
        for($i=1;$i<$numero;$i++){
            $result=$result*$i;
        }
        return $result;
    }
    echo "El factorial de $num es: ".calcularFactorial($num);
?>