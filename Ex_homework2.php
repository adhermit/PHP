<?php
$movies = [
    ["title" => "Spiderman", "year" => "2002"],
    ["title" => "Amazing Spiderman", "year" => "2012"],
    ["title" => "Spiderman homecoming", "year" => "2017"]
]

/*$oldMovie = '{$movies[0]}';
    
    switch ($oldMovie) {
        case $movies[0]:
            echo $movies[0];
            break;
        case $movies[1]:
            echo $movies[1];
            break;
        case $movies[2]:
            echo $movies[2];
            break;
    }*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php
        $oldmovie = $movies[0];
        foreach ($movies as $movie) {
            if ($movie['year'] < $oldmovie['year']) {
                $oldmovie = $movie;
            } ?>
            <li>
                <?= "Movie name: {$movie['title']}, Year: {$movie['year']}"; ?>
            </li>
        <?php } ?>
    </ul>
    <!--
    <?php
    //$oldMovie = '{$movies[0]}';

    //switch ($oldMovie) {
    //case $movies[0]:
    // echo $movies[0];
    //break;
    // case $movies[1]:
    //    echo $movies[1];
    //   break;
    // case $movies[2]:
    //   echo $movies[2];
    //  break;
    //  }
    ?>
    -->
    <p>
        <?= "The oldest movie is {$oldmovie['title']}. Its releasing date is {$oldmovie['year']}." ?>
    </p>
</body>

</html>