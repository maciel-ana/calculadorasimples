<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
</head>
<body>
    <form action="" method="post">
        Primeiro Numero: <br><input name="num1" type="text">
        <br>
        Segundo Numero: <br><input name="num2" type="text">
        <br> <br> <br> 
        <input type="submit" name="operacao" value="Soma">
        <input type="submit" name="operacao" value="Subtração">
        <input type="submit" name="operacao" value="Multiplicação">
        <input type="submit" name="operacao" value="Divisão">
</form>
<?php
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $op = $_POST['operacao'];
    if (!empty($op)){
        if ($op == 'Soma')
        $c = $a + $b;
        else if ($op == 'Subtração')
        $c = $a - $b;
        else if ($op == 'Multiplicação')
        $c = $a * $b;
        else if ($op == 'Divisão')
        $c = $a / $b;
        $resto = $a % $b;
        echo "<br>";
        echo "O resultado é: $c";
        echo "<br>";
        echo "o resto da divisão é: $resto";
    }

?>
</body>
</html>