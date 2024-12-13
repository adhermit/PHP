<?php require_once "header.php";
require_once "libs/pdo.php";
require_once "libs/movies.php";

if (isset($_GET["id"])) {
    $id = (int)$_GET["id"];
    $movie = getMoviesByIndex($pdo, $id);
}

if (isset($movie) && $movie) { ?>
    <h1><?= $movie["title"] ?></h1>
    <h3><?= $movie["director_id"] ?></h3>
    <h4><?= $movie["release_date"] ?></h4>
    <p><?= $movie["summary"] ?></p>
<?php } else { ?>
    <h1>Movie not found</h1>
<?php }
?>

<?php require_once "footer.php"; ?>