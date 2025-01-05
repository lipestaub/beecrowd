<?php
$first_point = explode(" ", readline());
$second_point = explode(" ", readline());

$distance = number_format(sqrt(pow($second_point[0] - $first_point[0], 2) + pow($second_point[1] - $first_point[1], 2)), 4, '.', '');

echo "$distance\n";