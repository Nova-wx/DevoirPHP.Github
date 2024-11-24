<?php
$etudiants = [
    "Alice" => ["Maths" => 15, "Physique" => 14, "Anglais" => 16],
    "Bob" => ["Maths" => 10, "Physique" => 12, "Anglais" => 13],
];

foreach ($etudiants as $nom => $notes) {
    $moyenne = array_sum($notes) / count($notes);
    echo "Moyenne de $nom : " . number_format($moyenne, 2) . "<br>";
}
?>
