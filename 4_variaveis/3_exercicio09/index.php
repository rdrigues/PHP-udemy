<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
    <label for="num1">Numero 1</label>
    <input type="number" name="num1" id="">

    <label for="num2">Numero 2</label>
    <input type="number" name="num2" id="">
    <input type="submit" value="Somar">
</form>
</body>
</html>

<?php 
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$soma = $num1 + $num2;
echo $soma;

?>