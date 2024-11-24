<?php
$employes = [
    ["nom" => "Alice", "poste" => "Développeur", "salaire" => 4000],
    ["nom" => "Bob", "poste" => "Designer", "salaire" => 3500],
    ["nom" => "Charlie", "poste" => "Manager", "salaire" => 5000],
    ["nom" => "David", "poste" => "Analyste", "salaire" => 4500],
    ["nom" => "Emma", "poste" => "Support", "salaire" => 3000],
];

function calculerSalaireMoyen($employes) {
    $total = 0;
    foreach ($employes as $employe) {
        $total += $employe["salaire"];
    }
    $moyenne = $total / count($employes);
    echo "Salaire moyen : " . $moyenne;
}

calculerSalaireMoyen($employes);
?>
