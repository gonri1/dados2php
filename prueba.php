<?php

$numeroDados = 5;

$arrayj1 = []; //almacenamos las jugadas de jugador 1, tirada 1
$arrayj2 = []; //almacenamos las jugadas de jugador 1, tirada 1

$i=0;
$j=0;

//tiradas jugador 1


while ($numeroDados > 0) {

    //tiradas

    $numeroDados--;
    $i++;

    $numero1 = random_int(1, 6);
    $arrayj1[$i]=$numero1;
}


//tiradas jugador 2


$numeroDados = 5;

while ($numeroDados > 0) {

    $numeroDados--;
    $j++;

    //tirada 1

    $numero3 = random_int(1, 6);
    $arrayj2[$j]=$numero3;

}

print_r($arrayj1);
echo "<pre>";
print_r($arrayj2);
echo "<pre>";