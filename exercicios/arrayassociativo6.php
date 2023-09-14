<?php 

$hb20 = ['nome' => 'hb20', 'fipe' => '30.000','cor' => 'preta',];
$factor150 = ['nome' => 'factor', 'valor' => '17.000', 'cor' => 'preta'];


print_r($hb20);
echo "<br>";
print_r($factor150);


echo "<br>";
echo "<strong>$hb20[nome] <br></strong>";
echo $hb20['fipe'];

echo "<br>";
echo "<br>";
echo "$factor150[nome]";
echo "<br>";
echo "$factor150[valor]";
?>