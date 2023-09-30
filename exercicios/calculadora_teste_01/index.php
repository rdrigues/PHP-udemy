<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php 
$num1 = $_GET['num1'] ?? 0;
$num2 = $_GET['num2'] ?? 0;
$opcao = $_GET['opcao'];

switch ($opcao) {
    case "somar":
        $resultado = $num1 + $num2;
        break;

      case "sub":
         $resultado = $num1 - $num2;
       break; 

       case "multi":
        $resultado = $num1 * $num2;
        break;

        case "div":
            $resultado = $num1 / $num2;
            break;   
}
?>

<body>
    <h1>Minha calculadora</h1>
    <form id="form" action="<?php $_SERVER['PHP_SELF']?>" method="get">
    <label for="">Numero 1</label>
    <input type="number"  name="num1" id="" value="<?php echo $num1 ?>" required>
    <br>
    <label for="">Numero 2</label>
    <input type="number" name="num2" id="" value="<?php echo $num2 ?>" required>
    <br>
    <input class="botao" type="submit" value="enviar">
    
    <select name="opcao">
        <option selected value="">Escolha </option>
        <option value="somar">somar</option>
        <option value="sub">Subtração</option>
        <option value="multi">Multiplicação</option>
        <option value="div">Divisao</option>
    </select>
    
    <p>O resultado é <?php echo $resultado; ?> </p>
    </form>
</body>
</html>