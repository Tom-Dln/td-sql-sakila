<!-- --------------------------------------------------
    Page Films
-------------------------------------------------- -->

<?php
// Information de la Page
$page_actual = 1;
// Récupération Header
require_once __DIR__ . '/inc/header.php';
// BDD - Films
$results = get_movies();
// Récupération Logique Pagination
require_once __DIR__ . '/inc/pagination_init.php';
?>

<!-- ##### Début du Contenu -->

<!-- Partie Résultats -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-5">Liste des Films :</h1>
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
    for ($i = $results_limit * ($results_page - 1); $i < $results_limit * ($results_page - 1) + $results_limit; $i++) {
        if ($i < $results_number) {
    ?>
            <div class="row">
                <div class="col-4">
                    <h4 class="font-weight-bold"><?= ucwords(strtolower($results[$i]['title'])); ?></h4>
                    <p class="mb-0"><?= $results[$i]['release_year']; ?></p>
                </div>
                <div class="col-6">
                    <p class="text-justify"><?= $results[$i]['description'] . '.'; ?></p>
                </div>
                <div class="col-1">
                    <p class="text-center"><?= to_hours($results[$i]['length']); ?></p>
                </div>
                <div class="col-1">
                    <p class="text-center"><?= $results[$i]['rating']; ?></p>
                </div>
            </div>
            <hr>
    <?php
        }
    }
    ?>
</div>

<!-- Partie Pagination -->
<?php require_once __DIR__ . '/inc/pagination_nav.php'; ?>

<!-- DEBUG -->
<!-- <pre>
<?php
# print_r($results);
?>
</pre> -->

<!-- ##### Fin du Contenu -->

<!-- Récupération Footer -->
<?php require_once __DIR__ . '/inc/footer.php'; ?>