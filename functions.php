<!-- --------------------------------------------------
    Fichier de Fonctions
-------------------------------------------------- -->

<?php

function bdd_connect()
{
    try {
        $options = [
            // Permet à PDO de lever des exceptions en cas d'erreur SQL
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        // data source name
        $dsn = 'mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME . ';charset=utf8';
        // instance de la base de données (pdo)
        $bdd_instance = new PDO($dsn, BDD_USER, BDD_PWD, $options);
        // printf('Connexion Base De Données - Active');
        return $bdd_instance;
    } catch (PDOException $ex) {
        printf('Connexion Base De Données - Erreur code "%s"', $ex->getCode());
        // arrêter l'exécution du script
        // die();
    }
}


function get_movies()
{
    $bdd_instance = bdd_connect();
    $request = <<<EOD
        SELECT
            `film_id`, `title`, `release_year`, `description`, `length`, `rating`
        FROM `film`
EOD;
    // ``,
    $moviesStmt = $bdd_instance->query($request);
    $movies = $moviesStmt->fetchAll(PDO::FETCH_ASSOC);
    return $movies;
    // LIMIT 4 OFFSET 4
    // LIMIT :results_limit OFFSET :results_offset
}


function get_movie($movie_id)
{
    $bdd_instance = bdd_connect();
    $request = <<<EOD
        SELECT
            `film_id`, `title`, `release_year`, `description`, `length`, `rating`
        FROM `film`
        WHERE `film_id` = :movie_id
EOD;
    $movieStmt = $bdd_instance->prepare($request);
    $movieStmt->bindValue(':movie_id', $movie_id);
    $movieStmt->execute();
    $movie = $movieStmt->fetchAll(PDO::FETCH_ASSOC);
    return $movie;
}


function get_actors()
{
    $bdd_instance = bdd_connect();
    $request = <<<EOD
        SELECT
            `actor_id`, `first_name`, `last_name`
        FROM `actor`
        ORDER BY `first_name`
EOD;
    $actorsStmt = $bdd_instance->query($request);
    $actors = $actorsStmt->fetchAll(PDO::FETCH_ASSOC);
    return $actors;
}


function get_actor($actor_id)
{
    $bdd_instance = bdd_connect();
    $request = <<<EOD
        SELECT
            `first_name`, `last_name`
        FROM `actor`
        WHERE `actor_id` = :actor_id
EOD;
    $actorStmt = $bdd_instance->prepare($request);
    $actorStmt->bindValue(':actor_id', $actor_id);
    $actorStmt->execute();
    $actor = $actorStmt->fetchAll(PDO::FETCH_ASSOC);
    return $actor;
}


function get_actor_films($actor_id)
{
    $bdd_instance = bdd_connect();
    $request = <<<EOD
        SELECT
            `film_id`
        FROM `film_actor`
        WHERE `actor_id` = :actor_id
EOD;
    $actor_filmsStmt = $bdd_instance->prepare($request);
    $actor_filmsStmt->bindValue(':actor_id', $actor_id);
    $actor_filmsStmt->execute();
    $actor_films = $actor_filmsStmt->fetchAll(PDO::FETCH_ASSOC);
    return $actor_films;
}


function to_hours($minutes)
{
    $coeff = $minutes / 60;
    $hours = floor($coeff);
    $mins = $minutes - 60 * $hours;
    if ($mins < 10) {
        $mins = '0' . $mins;
    }
    $result = $hours . 'h' . $mins;
    return $result;
}