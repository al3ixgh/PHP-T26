<?php
    $num=$_REQUEST['num'];
    $aux=$num;
    $resto=0;
    $binario=array("$num");
    while($aux>2){
        $resto=$aux%2;
        array_push($binario,'$resto');
    }
    echo $binario;

?>