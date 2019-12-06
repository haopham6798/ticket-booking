
<?php
  $total = count($movies);
  $limit = 6;
  $total_page = ceil($total/$limit);
  // echo $total_page;
  if (isset($_GET['page'])) {
    $start = ($_GET['page']-1)*$limit;
  }
  else {
    $start = 0;
  }
  $movies = array_slice($movies, $start, $limit);
?>

<table class="table">
  

    <?php
    $index = 0;
    if(count($movies) > 0) {
        foreach($movies as $movie) {
        if ($index == 0) echo "<tr>";
    ?>
      <td>
      
      
        <div class="card rounded border-info" style="width: 16rem; height: 20rem">
              <!-- 320x317 -->
          <a href="index.php?controller=movies&action=info&movie_id=<?php echo $movie->movie_id?>">
          <img  style="width: 100%; height: 15rem"class="card-img-top" src="data:image/*;base64,<?php echo base64_encode( $movie->movie_picture ); ?>" /></a>

          <div class="card-body">
            <p class="card-text"><?php echo $movie->movie_name; ?></p>
            

          </div>

        </div>
      </td>
    
    <?php
        if ($index == 3) echo "</tr>";
        // echo $index;
        $index = ($index+1)%3;
      }
    }
    else {
      echo "Can not found!!";
      echo "<br>";
    }


    ?>
  


</table>
<nav aria-label="..." class="align-self-center">
  <ul class="pagination justify-content-center">
    <li class="page-item <?php if ($start+1 == 1) echo "d-none"; else echo "" ;?>">
      <a class="page-link" href="index.php?controller=movies&page=<?php echo ceil(($start)/$limit) ; ?>">Previous</a>
    </li>

    <li class="page-item <?php if ($start+1 == 1) echo "d-none"; else echo "" ;?>">
      <a class="page-link" href="index.php?controller=movies&page=<?php echo ceil(($start)/$limit) ; ?>">
      <?php echo ceil(($start)/$limit) ; ?></a></li>
      

    <li class="page-item active">
      <span class="page-link">
      <?php echo ceil(($start)/$limit) + 1; ?>
        <span class="sr-only">(current)</span>
      </span>
    </li>


    <li class="page-item"><a class="page-link <?php if (ceil(($start)/$limit)+1 == $total_page) echo "d-none"; else echo "" ;?>" 
    href="index.php?controller=movies&page=<?php echo ceil(($start)/$limit) + 2; ?>">
    <?php echo ceil(($start)/$limit)+2; ?></a></li>


    <li class="page-item <?php if (ceil(($start)/$limit)+1 == $total_page) echo "d-none"; else echo "" ;?>">
      <a class="page-link" href="index.php?controller=movies&page=<?php echo ceil(($start)/$limit) + 2; ?>">Next</a>
    </li>
  </ul>
</nav>
