<?php

/**
 * Test de var_dumper()
 */

// Chargement de l'autoloader de Composer
require_once 'vendor/autoload.php';

$data = [
    "nom" => "Martin",
    "prenom" => "Pierre",
    "adresse" => [
        "rue" => "1 avenue de l'Europe",
        "Ville" => "Le Coudray",
        "Code postal" => "28630"
    ]
];

dump($data);
