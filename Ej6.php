<?php
    $num=$_REQUEST['num'];
    function esPrimo($numero){
        $divisores=0;
        for($i=1;$i<=$numero;$i++){
            if($numero%$i==0){
                $divisores++;
            }
        }
        if($divisores>2){
            $esPrimo=false;
            echo "El numero introducido no es primo";
        }
        else{
            $esPrimo=true;
            echo "El numero introducido es primo";
        }
    }
    esPrimo($num);
?>