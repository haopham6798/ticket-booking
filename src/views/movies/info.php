<?php
    // echo "<ul>";
    // echo "<li>Name: $movie->movie_name</li>";
    // echo "<li>Length: $movie->movie_length</li>";
    // echo "<li>Kind: $movie->movie_kind</li>";
    // echo "</ul>"
    // echo "hrllo";
?>

<div class="info container">
    <!-- 320x317 -->
    <table class=table>
        <tr>
            <td>
                <img style="width: 20rem; height: 25rem" class="card-img-top" src="data:image/*;base64,<?php echo base64_encode( $movie->movie_picture ); ?>" />
            </td>

            <td>
                <h1> 
                    <?php echo $movie->movie_name?>
                </h1>

                <table class="table">
                    <tr>
                        <td>
                            <h2> Lenght </h2>
                            
                        </td>
                        <td>
                            <h2> <?php echo $movie->movie_length ?></h2>
                        </td>
                    </tr>
                </table>

                <table class="table">                
                    <tr>
                        <td>
                            <label for="movie_trailer" class="col-sm-6 control-label">Trailer</label>
                        </td>
                        <td>
                            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#trailer-modal">
                                Show trailer
                            </button>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <button class="btn btn-light"> <a href="index.php?controller=schedules&action=find&movie_id=<?php echo $movie->movie_id; ?>">
                                Booking
                            </a> </button>
                        </td>
                    </tr>

                </table> 

            </td>
            
            
        </tr>

    </table>

</div>

<div class="modal fade" id="trailer-modal" tabindex="-1" role="dialog" aria-labelledby="trailer-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="trailer-modal">Trailer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>

        <div class="modal-body">
            <div class="z-depth-1-half mb-4 d-flex justify-content-center">
                <div class="embed-responsive embed-responsive-16by9">
                </div>
                
            </div>
        </div>

        <div class="modal-footer">
        <div class="file-field input-img">
            <div class="input-group mb-3">    

                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div>
            
        </div>
    
      </div>
    </div>
  </div>
</div>