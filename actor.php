<!-- --------------------------------------------------
    Page Acteur
-------------------------------------------------- -->

<?php
// Information de la Page
$page_actual = 2;
// Récupération Header
require_once __DIR__ . '/inc/header.php';
// BDD - Id Films des Acteurs
$results = get_actor_films($_GET['id']);
// BDD - Acteur
$actor = get_actor($_GET['id']);



?>

<!-- ##### Début du Contenu -->

<div class="container">
    <div class="row">
        <div class="col-12">

        </div>
    </div>
</div>



<!-- Partie Résultats -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-5"><?= 'Films de ' . $actor[0]['first_name'] . ' ' . $actor[0]['last_name'] . ' :'; ?></h1>
        </div>
    </div>
    <!-- Entête Résultats -->
    <div class="row">
        <div class="col-4">
            <p>Nom et Année de diffusion</p>
        </div>
        <div class="col-6">
            <p>Description</p>
        </div>
        <div class="col-1">
            <p class="text-center">Durée</p>
        </div>
        <div class="col-1">
            <p class="text-center">Classe</p>
        </div>
    </div>
    <hr>
    <!-- Affichage Résultats -->
    <?php
    foreach ($results as $key) {
        $movie = get_movie($key['film_id']);
    ?>
        <div class="row">
            <div class="col-4">
                <h4 class="font-weight-bold"><?= ucwords(strtolower($movie[0]['title'])); ?></h4>
                <p class="mb-0"><?= $movie[0]['release_year']; ?></p>
            </div>
            <div class="col-6">
                <p class="text-justify"><?= $movie[0]['description'] . '.'; ?></p>
            </div>
            <div class="col-1">
                <p class="text-center"><?= to_hours($movie[0]['length']); ?></p>
            </div>
            <div class="col-1">
                <p class="text-center"><?= $movie[0]['rating']; ?></p>
            </div>
        </div>
        <hr>
    <?php
    }
    ?>
</div>

<!-- DEBUG -->
<pre>
<?php
# print_r($_GET['id']);
# print_r($actor);
# print_r($results);
?>
</pre>

<!-- ##### Fin du Contenu -->

<!-- Récupération Footer -->
<?php require_once __DIR__ . '/inc/footer.php'; ?>