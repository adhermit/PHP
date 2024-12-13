<?php require_once "header.php";
require_once "libs/movies.php";
require_once "libs/pdo.php";

$movies = getMovies($pdo);
foreach ($movies as $movie) { ?>
    <ul>
        <li> <?= $movie['title']; ?></li>
        <a href="movie.php?id=<?= $movie["id"] ?>"><button>Read more</button></a>
    </ul>
<?php } ?>

<?php include_once "footer.php"; ?>