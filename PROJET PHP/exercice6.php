<?php
$villes = [
    "Paris" => 18,
    "Londres" => 15,
    "Madrid" => 25,
    "Rome" => 22,
    "Berlin" => 20,
];

$villeMax = array_keys($villes, max($villes))[0];
$tempMax = max($villes);

echo "La ville avec la température la plus élevée est $villeMax avec $tempMax°C.";
?>
