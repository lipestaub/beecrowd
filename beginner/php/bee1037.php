<?php
$value = readline();

if ($value >= 0 && $value <= 25) {
    echo "Intervalo [0,25]\n";
}
else if ($value > 25 && $value <= 50) {
    echo "Intervalo (25,50]\n";
}
else if ($value > 50 && $value <= 75) {
    echo "Intervalo (50,75]\n";
}
else if ($value > 75 && $value <= 100) {
    echo "Intervalo (75,100]\n";
}
else {
    echo "Fora de intervalo\n";
}