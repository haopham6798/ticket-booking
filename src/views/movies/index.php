


    <?php
        //$index = 1;
    if(count($movies) > 0) {
        foreach($movies as $movie) {
    ?>

        <span class="card" style="width: 20rem; height: 20rem">
              <!-- 320x317 -->
          <a href="index.php?controller=movies&action=info&movie_id=<?php echo $movie->movie_id?>">
          <img  style="width: 20rem; height: 25rem" class="card-img-top" src="data:image/*;base64,<?php echo base64_encode( $movie->movie_picture ); ?>" /></a>

          <span class="card-body">
            <p class="card-text"><?php echo $movie->movie_name; ?></p>
            <p class="card-text"><?php echo $movie->movie_kind; ?></p>
            <a href="index.php?controller=movies&action=delete&movie_id=<?php echo $movie->movie_id?>"> <button class="btn btn-light"> Delete</button></a>
            <a href="index.php?controller=movies&action=update&movie_id=<?php echo $movie->movie_id?>"> <button class="btn btn-light"> Update</button></a>

          </span>

        </span>
    
    <?php
                
      }
    }
    else {
      echo "Can not found!!";
      echo "<br>";
    }


    ?>   
  
