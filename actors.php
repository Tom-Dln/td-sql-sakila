<!-- --------------------------------------------------
    Page Acteurs
-------------------------------------------------- -->

<?php
// Information de la Page
$page_actual = 2;
// Récupération Header
require_once __DIR__ . '/inc/header.php';
// BDD - Films
$results = get_actors();
// Récupération Logique Pagination
require_once __DIR__ . '/inc/pagination_init.php';
?>

<!-- ##### Début du Contenu -->

<!-- Partie Résultats -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-5">Liste des Acteurs :</h1>
        </div>
    </div>
    <!-- Entête Résultats -->
    <div class="row">
        <div class="col-5">
            <p>Prénom</p>
        </div>
        <div class="col-5">
            <p>Nom</p>
        </div>
        <div class="col-2">
            <p class="text-center"></p>
        </div>
    </div>
    <hr>
    <!-- Affichage Résultats -->
    <?php
    for ($i = $results_limit * ($results_page - 1); $i < $results_limit * ($results_page - 1) + $results_limit; $i++) {
        if ($i < $results_number) {
    ?>
            <div class="row">
                <div class="col-5">
                    <h4><?= $results[$i]['first_name']; ?></h4>
                </div>
                <div class="col-5">
                    <h4><?= $results[$i]['last_name']; ?></h4>
                </div>
                <div class="col-2">
                    <a class="btn btn-primary w-100" href="./actor.php?id=<?= $results[$i]['actor_id']; ?>" role="button">Voir la Fiche</a>
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