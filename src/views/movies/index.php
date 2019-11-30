<!-- <html>
<head>
  <title>Movie</title>
</head>
<body>
  <h1>Select your movie</h1>
   <?php
    // echo '<ul>';
    // foreach ($movies as $movie) {
    //   echo '<li>
    //     <a href="index.php?controller=movies&action=info&id='. $movie->movie_id. '">' . $movie->movie_name . '</a>
    //     <a href="index.php?controller=schedules&action=find&movie_id='. $movie->movie_id. '">' . "Book Now". '</a>
    //   </li>';
      
    // }
    // echo '</ul>'; -->
  ?>
</body>
</html>  -->

<div class="home-page">
    <br>
  <div class="container">
    <?php
        $index = 1;
    if(count($movies) > 0) {
        foreach($movies as $movie) {
        
    ?>
    <div class="card" style="width: 20rem; height: 25rem">
          <!-- 320x317 -->
      <a href="index.php?controller=movies&action=info&movie_id=<?php echo $movie->movie_id?>">
      <img  class="card-img-top" src="data:image/*;base64,<?php echo base64_encode( $movie->movie_picture ); ?>" /></a>

      <div class="card-body">
        <p class="card-text"><?php echo $movie->movie_name; ?>.</p>
      </div>
    </div>
    
    <?php
                
      }
    }
    else {
      echo "Can not found!!";
      echo "<br>";
    }


    ?>   
  
  </div>
</div>