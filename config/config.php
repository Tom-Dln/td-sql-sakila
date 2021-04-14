<!-- --------------------------------------------------
    Fichier de Configuration
-------------------------------------------------- -->

<?php

// Informations Connexion BDD

define('BDD_NAME', 'sakila');
define('BDD_USER', 'root');
define('BDD_PWD', '');
define('BDD_HOST', 'localhost');

// Informations de Nommage

$page_name_header = 'SKL - ';

$pages_title = [
    'Accueil',
    'Films',
    'Acteurs',
    'Magasins',
    'Finances',
    'Catégories',
    'x',
];

$pages_nav = [
    'Accueil',
    'Films',
    'Acteurs',
    'Magasins',
    'Finances',
    'Catégories',
    'x'
];

$pages_url = [
    'index.php',
    'movies.php',
    'actors.php',
    'shops.php',
    'finances.php',
    'categories.php',
    'byactors.php'
];


?>