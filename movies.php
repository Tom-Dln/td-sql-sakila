<?php
$page_actual = 1;
require_once __DIR__ . '/inc/header.php';
?>

<!-- Début du Contenu -->

<?php $movies = get_movies(); ?>

<div class="container">

    <?php
    $bg_alter = true;
    foreach ($movies as $key) {
    ?>
        <div class="row">
            <div class="col-4">
                <h4 class="font-weight-bold"><?= $key[1]; ?></h4>
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




<pre>
<?php
print_r($movies);
?>
</pre>






<!-- Fin du Contenu -->

<?php require_once __DIR__ . '/inc/footer.php'; ?>