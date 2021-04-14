<!-- Pagination -->

<?php
if (isset($_GET['page'])) {
    $results_page = $_GET['page'];
} else {
    $results_page = 1;
}
?>

<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item <?= ($results_page == 1 ? 'disabled' : ''); ?>">
            <a class="page-link" href="./movies.php?page=<?= $results_page - 1; ?>">Précédent</a>
        </li>
        <li class="page-item"><a class="page-link" href="#"><?= $results_page . ' / ' . $results_pages; ?></a></li>
        <li class="page-item <?= ($results_page == $results_pages ? 'disabled' : ''); ?>">
            <a class="page-link" href="./movies.php?page=<?= $results_page + 1; ?>">Suivant</a>
        </li>
    </ul>
</nav>