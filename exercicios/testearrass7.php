<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="get">
    <label for="">Idade</label>
    <input type="number" name="idade" id="">
    <input type="submit" value="Enviar">
</form>
<?php 
$pessoa1 = [
    'nome' => 'Diogo',
    'idade' => '20',
    'peso' => '76kg',
    'altura' => '1.78',
    'cor' => 'branca',
    'signo' => 'virgem',
];
$nome = $pessoa1['nome'];
$idade = $_GET['idade'];

if ($idade >= 18) {
    echo "$nome é maior de idade";
}
if ($idade < 18) {
    echo "$nome nao é maior de idade";
}
?>
</body>
</html>