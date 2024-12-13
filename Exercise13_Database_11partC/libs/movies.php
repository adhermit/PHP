<?php
function getMovies(PDO $pdo): array
{
    $query = $pdo->prepare("SELECT * FROM movie");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function getMoviesByIndex(PDO $pdo, int $id): array | bool
{
    if (isset($pdo) && isset($id)) {
        $query = $pdo->prepare(
            "SELECT movie.*, director.first_name AS director_name 
             FROM movie 
             INNER JOIN director ON movie.director_id = director.id 
             WHERE movie.id = :id"
        );
        $query->bindValue(":id", $id, PDO::PARAM_INT);
        $query->execute();
        $movie = $query->fetch(PDO::FETCH_ASSOC);
        return $movie ?: false;
    }
}
