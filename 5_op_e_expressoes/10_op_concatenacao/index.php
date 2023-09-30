<?php

    $a = "testando";
    $b = "concatenação";
    echo $a . " a " . $b;
    echo "<br>";
    $carro = ['nome' => 'ferarri', 'vel_max' => '300','valor' => '1.000.000',];

    print_r($carro);
    echo "<br>";
    echo "O carro " . $carro["nome"] . " é um veiculo fenomenal que chega em ate " . $carro["vel_max"] . "km/h, podendo custar até " . $carro["valor"] . "$";



?>