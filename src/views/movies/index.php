

<table class="table">
  

    <?php
    $index = 0;
    if(count($movies) > 0) {
        foreach($movies as $movie) {
        if ($index == 3) echo "<tr>";
    ?>
      <td>
      
      
        <div class="card" style="width: 16rem; height: 20rem">
              <!-- 320x317 -->
          <a href="index.php?controller=movies&action=info&movie_id=<?php echo $movie->movie_id?>">
          <img  class="card-img-top" src="data:image/*;base64,<?php echo base64_encode( $movie->movie_picture ); ?>" /></a>

          <div class="card-body">
            <p class="card-text"><?php echo $movie->movie_name; ?></p>
            

          </div>

        </div>
      </td>
    
    <?php
        if ($index == 3) echo "</tr>";
        // echo $index;
        $index = ($index+1)%4;
      }
    }
    else {
      echo "Can not found!!";
      echo "<br>";
    }


    ?>   
    </table>
  
