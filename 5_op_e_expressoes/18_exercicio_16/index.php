<form action="<?php $_SERVER['PHP_SELF'] ?> " method="get">

    <label for="num1">Valor 1</label>
    <input type="number" name="num1" id="">

    <label for="num2">Valor 2</label>
    <input type="number" name="num2" id="">

    <input type="submit" value="Testar">
</form>

<?php
    $num1 = $_GET['num1'] ?? 0;
    $num2 = $_GET['num2'] ?? 0;


if($num1 == $num2){
    echo "Os valores $num1 e $num2 são iguais<br>";
}

if($num1 === $num2){
    echo "Os valores $num1 e $num2 são identicos<br>";
}

if($num1 != $num2){
    echo "Os valores $num1 e $num2 são diferentes<br>";
}

if($num1 !== $num2){
    echo "Os valores $num1 e $num2 não sao identicos<br>";
}

?>