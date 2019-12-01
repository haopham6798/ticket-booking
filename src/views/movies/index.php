

<div class="home-page">
    <br>
  <div class="container">
    <?php
        //$index = 1;
    if(count($movies) > 0) {
        foreach($movies as $movie) {
        
    ?>
    
    <span class="card" style="width: 20rem; height: 25rem">
          <!-- 320x317 -->
      <a href="index.php?controller=movies&action=info&movie_id=<?php echo $movie->movie_id?>">
      <img  class="card-img-top" src="data:image/*;base64,<?php echo base64_encode( $movie->movie_picture ); ?>" /></a>

      <div class="card-body">
        <p class="card-text"><?php echo $movie->movie_name; ?>.</p>
      </div>
    </span>
    
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