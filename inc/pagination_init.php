<!-- --------------------------------------------------
    Partie Pagination Initiation
-------------------------------------------------- -->

<?php
$results_limit = 15;
if (isset($_GET['page'])) {
    $results_page = $_GET['page'];
} else {
    $results_page = 1;
}
$results_number = count($results);
$results_pages = ceil($results_number / $results_limit);
?>