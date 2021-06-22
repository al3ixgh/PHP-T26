<?php
    $objeto=$_REQUEST['objeto'];
    
    switch ($objeto){
        case 'circulo':
            echo '<form action="circulo.php">
            <p>Introduce el radio</p>
            <input type="number" name="radio"><br>
            <input type="submit" value="enviar">
            </form>';
            break;
        case 'triangulo':
            echo '<form action="triangulo.php">
            <p>Introduce la base</p>
            <input type="number" name="base"><br>
            <p>Introduce la altura</p>
            <input type="number" name="altura"><br>
            <input type="submit" value="enviar">
            </form>';
            break;
        case 'cuadrado':
            echo '<form action="cuadrado.php">
            <p>Introduce el lado</p>
            <input type="number" name="lado"><br>
            <input type="submit" value="enviar">
            </form>';
            break;
    }

?>

