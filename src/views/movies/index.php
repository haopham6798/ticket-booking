<html>
<head>
  <title>Movie</title>
</head>
<body>
  <h1>Select your movie</h1>
  <?php
    echo '<ul>';
    foreach ($movies as $movie) {
      echo '<li>
        <a href="index.php?controller=movies&action=info&id='. $movie->movie_id. '">' . $movie->movie_name . '</a>
        <a href="index.php?controller=schedules&action=info&id='. $movie->movie_id. '">' . "Book Now". '</a>
      </li>';
      
    }
    echo '</ul>';
  ?>
</body>
</html> 