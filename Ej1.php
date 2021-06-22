<?php
$pass1=$_REQUEST['contraseña1'];
$pass2=$_REQUEST['contraseña2'];
if($pass1!=$pass2){
    echo "Las dos claves ingresadas son distintas";
}else{
    echo "Las dos claves ingresadas son correctas";
}
?>