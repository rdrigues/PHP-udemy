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

    if($num1 === $num2){
        echo "Esses dois valores tem tanto o tipo quanto o valor igual.";
    }

    if($num1 != $num2){
        echo "Esses dois valores tem o valor diferente um do outro.";
    }
    
?>