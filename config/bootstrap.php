<?php

use Dotenv\Dotenv;
    //Chargement de l'autoloader de composer
    require_once __DIR__ . "/../vendor/autoload.php";

    //Chargement des variables d'environement

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();