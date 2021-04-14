<!-- --------------------------------------------------
    Partie Pagination Navigation
-------------------------------------------------- -->

<!-- DEBUG -->
<?php
# print_r('RN : ' . $results_number . ' - ');
# print_r('RP : ' . $results_pages);
?>

<nav aria-label="Page navigation example" class="my-4">
    <ul class="pagination justify-content-center">
        <li class="page-item <?= ($results_page == 1 ? 'disabled' : ''); ?>">
            <a class="page-link" href="./<?= $pages_url[$page_actual]; ?>?page=<?= $results_page - 1; ?>">Précédent</a>
        </li>
        <li class="page-item active"><a class="page-link" href="#"><?= $results_page . ' / ' . $results_pages; ?></a></li>
        <li class="page-item <?= ($results_page == $results_pages ? 'disabled' : ''); ?>">
            <a class="page-link" href="./<?= $pages_url[$page_actual]; ?>?page=<?= $results_page + 1; ?>">Suivant</a>
        </li>
    </ul>
</nav>