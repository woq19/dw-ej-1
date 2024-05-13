<?php

function suma($n1, $n2){
    $resultado = $n1 + $n2;
    return $resultado;
}

if (isset($_POST['sumar'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $res = suma($numero1,$numero2);
    echo 'El resultado de la suma es: '.$res;
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="HTML Masters">
    <title>sumar</title>
</head>
<body>
     <form method="post">
        <input type="number" name="numero1" placeholder="ingrese el primer numero">
        <input type="number" name="numero2" placeholder="ingrese el segundo numero">
        <button type="submit" name="sumar">sumar</button>
     </form>
</body>
</html>



