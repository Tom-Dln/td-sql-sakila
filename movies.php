<?php
$page_actual = 1;
require_once __DIR__ . '/inc/header.php';
?>

<!-- ##### Début du Contenu -->

<!-- Affichage des Résultats -->
<div class="container">
    <!-- Entête Résultats -->
    <div class="row">
        <div class="col-4">
            <p class="mb-0">Nom et Année de diffusion</p>
        </div>
        <div class="col-6">
            <p class="text-justify">Description</p>
        </div>
        <div class="col-1">
            <p class="text-center">Durée</p>
        </div>
        <div class="col-1">
            <p class="text-center">Classe</p>
        </div>
    </div>
    <hr>
    <!--PHP & Résultats -->
    <?php
    $results_movies = get_movies();
    foreach ($results_movies as $key) {
    ?>
        <div class="row">
            <div class="col-4">
                <h4 class="font-weight-bold"><?= ucwords(strtolower($key[1])); ?></h4>
                <p class="mb-0"><?= $key[2]; ?></p>
            </div>
            <div class="col-6">
                <p class="text-justify"><?= $key[3] . '.'; ?></p>
            </div>
            <div class="col-1">
                <p class="text-center"><?= to_hours($key[4]); ?></p>
            </div>
            <div class="col-1">
                <p class="text-center"><?= $key[5]; ?></p>
            </div>
        </div>
        <hr>
    <?php
    }
    ?>
</div>

<!-- Pagination des Résutats -->
<?php
$results_number = count($results_movies);
$results_pages = ceil($results_number / 1);

print_r($results_number . ' ');
print_r($results_pages);

require_once __DIR__ . '/inc/pagination.php';
?>





<pre>
<?php
 print_r($results_movies);
?>
</pre>





<!-- ##### Fin du Contenu -->

<?php require_once __DIR__ . '/inc/footer.php'; ?>