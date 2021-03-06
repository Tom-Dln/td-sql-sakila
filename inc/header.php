<!-- --------------------------------------------------
    Partie Header
-------------------------------------------------- -->

<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../functions.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_name_header . $pages_title[$page_actual]; ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon-dev.ico">
</head>

<body>
    <!-- Navigation Principale -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                Bootstrap
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <?php
                    $i = 0;
                    foreach ($pages_nav as $page) {
                        if ($i == $page_actual) {
                    ?>
                            <a class="nav-link pl-3 active" href="<?= $pages_url[$i]; ?>"><?= $page; ?></a>
                        <?php
                        } else {
                        ?>
                            <a class="nav-link pl-3" href="<?= $pages_url[$i]; ?>"><?= $page; ?></a>
                    <?php
                        }
                        $i++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </nav>
    <div class="bg-info text-white text-center py-1">
        Actuellement en Construction
    </div>

    <!-- Contenu Principal -->
    <main class="bg-main">
        <div class="container">
            <div class="row">
                <div class="col-12 my-5 pt-4 pb-3 bg-light rounded-lg shadow">