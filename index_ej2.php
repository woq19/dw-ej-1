<?php
function prom($n1, $n2, $n3) {
    $prom = ($n1+$n2+$n3) / 3;
    return $prom;
}

if (isset($_POST['promedio'])) {
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $res = prom ($nota1,$nota2,$nota3);
    echo 'el promedio es'. $res;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="nota1" placeholder="nota 1">
        <label for="nota1"> primera nota </label>
        <input type="number" name="nota2" placeholder="nota 2">
        <label for="nota2"> segunda nota </label>
        <input type="number" name="nota3" placeholder="nota 3">
        <label for="nota3"> tercer nota </label>
        <button type="submit" name="promedio">promedio</button>
    </form>
</body>
</html>