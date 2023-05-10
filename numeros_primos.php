<?php
$contador = 0;
$num = 2; 

while ($contador < 10) {
    $ePrimo = true;
    
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $ePrimo = false;
            break;
        }
    }
    
    if ($ePrimo) {
        echo $num . " ";
        $contador++;
    }
    
    $num++; 
}