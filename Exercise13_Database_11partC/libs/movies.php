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
        $query = $pdo->prepare("SELECT * FROM movie WHERE id = :id");
        $query->bindValue(":id", $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC) ?: false;
    }
}
