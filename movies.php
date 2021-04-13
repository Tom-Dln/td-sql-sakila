<?php
$page_actual = 1;
require_once __DIR__ . '/inc/header.php';
?>

<!-- Début du Contenu -->

<br>
<br>
<br>
<br>

<pre>
    <?php 
    $result = get_movies();
    print_r($result);
    ?>
</pre>

<!-- Fin du Contenu -->

<?php require_once __DIR__ . '/inc/footer.php'; ?>