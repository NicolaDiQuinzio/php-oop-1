<?php

class Movie {
    public $title;
    public $director;
    public $year;
    public $genres;

    public function __construct($title, $director, $year, $genres) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->genres = $genres;
    }

    public function getInfo() {
        $genreList = implode(", ", $this->genres);

        return "Title: " . $this->title . "<br>" .
               "Director: " . $this->director . "<br>" .
               "Year: " . $this->year . "<br>" .
               "Genres: " . $genreList . "<br>";
    }
}

$movie1 = new Movie("The Shawshank Redemption", "Frank Darabont", 1994, ["Drama"]);
$movie2 = new Movie("Inception", "Christopher Nolan", 2010, ["Action", "Sci-Fi"]);
 $movies = [$movie1, $movie2,];
?>




<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach ($movies as $movie): ?>
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $movie->title; ?></h5>
                            <p class="card-text">
                                <strong>Director:</strong> <?php echo $movie->director; ?><br>
                                <strong>Year:</strong> <?php echo $movie->year; ?><br>
                                <strong>Genres:</strong> <?php echo implode(", ", $movie->genres); ?><br>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
