<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>aprendedo php</h1>

<?php
// incremento

$number = 10;

echo ++$number . "<br>"; // pre incremento
echo $number++ . " pos incremento" . "<br>" ; // pos incremento
echo $number . " so vai adiciona aqui pois chamei novamente". "<br>";

// decremento

echo --$number . " decremento mesma regra <br>";

$result = 50 == "50";
var_dump($result). "<br>";
echo "<br>";
// ternario

$n1 = 100;
$n2 = 20;

$resultado = $n1 > $n2;

echo ($resultado) ? 'e verdadeiro' : 'e falso';
echo '<br>';
if ($result) {
    echo "e verdadeiro";
} else {
    echo 'e falso';
}

echo '<br>';

if ($result) {
    echo 'e verdadeiro';
    // return; // o codigo para aqui e nao vai roda o codigo a baixo
} 

echo '<br>';
// array
$names = [ 'janderson','endryo','alves', 
"numeros" => [10,11,12],
];

echo $names[1];
echo '<br>';
echo var_dump($names['numeros']);
echo '<br>';
print_r($names);
echo '<br>';
// looping for com array 

$array = ['jj','ee','aa','vv'];

for($i = 0; $i < count($array); $i++) {
    echo $array[$i]. "<br>";
}

// while com array
$a = 0; 
while($a < count($array)) {
    echo $array[$a].'<br>';
    $a++;
}

// do while com array
$i = 0;
do {
    echo $array[$i] . "<br>";
    $i++;
} while ($i < count($array));

// foreach com array

foreach ($names['numeros'] as $key => $n) {
    echo $key." " . $n . "<br>";
}


?>

</body>
</html>

