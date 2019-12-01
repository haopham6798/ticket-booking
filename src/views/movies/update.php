
<div class="body">
    <form class="form-horizontal" action="index.php?controller=movies&action=update&movie_id=<?php echo $movie->movie_id?>" method="POST" enctype="multipart/form-data" >
        <table class="table">
            <tr>
                <td>
                    <div class="file-field input-img">
                        <div class="z-depth-1-half mb-4 d-flex justify-content-center">
                            <img style="width: 20rem; height: 25rem" id="img" src="./assets/images/empty.jpg" class="img-fluid img"
                                alt="example placeholder">
                        </div>

                        <div class="input-group mb-3">
                            <div class="custom-file input-picture">
                                <input type="file" class="custom-file-input" id="img_input" name="movie_picture" 
                                    aria-describedby="movie_picture" accept="image/*">
                                <label class="custom-file-label" for="img_input">Choose picture</label>
                            </div>
                        </div>
                    </div>
                    
                </td>
                
                <td class="mb-8">
                    <div class="form-group" >
                        <textarea class="form-control" id="movie_name" name="movie_name" required><?php echo $movie->movie_name ?></textarea>
                    </div>
                   
                    <table class="table">

                    
                        <tr>
                            <td>
                                <label for="movie_length" class="col-sm-2 control-label">Lenght</label>
                            </td>

                            <td>
                                <input type="number" class="form-control" name="movie_length" id="movie_lenght" value=<?php echo $movie->movie_length ?> required>
                            </td>
                        </tr>
                    </table>
                    <hr>
                    <div class="form-group" >    
                        <?php

                        if(count($kinds) > 0) {
                            //$kind_movie = explode(',',$movie_kind);
                        // print_r($kind->fetch_assoc());
                            foreach($kinds as $kind) {
                            
                        ?>

                        <!-- gia tri kind_id dc chon se luu vao mang movie_kind -->
                        <span>
                            <label><?php echo $kind->kind_name."  "?> 
                                <input class="game-kind" type="checkbox" name='movie_kind[]' value='<?php echo $kind->kind_name?>'>
                                <span class="checkmark"></span>
                            </label>   
                        </span>

                                
                        <?php
                            }
                        }
                        else {
                            echo  "<div class='item'>There is no kind, please add some kind!!!</div>";


                        }
                        ?>
                    </div>
                    <table class="table">                
                        <tr>
                            <td>
                                <label for="movie_trailer" class="col-sm-6 control-label">Trailer</label>
                            </td>
                            <td>
                            <!-- https://www.youtube.com/embed/zpOULjyy-n8?rel=0 -->
                                <input class="form-control" type="text" id="movie-trailer" name="movie_trailer" value=<?php echo $movie->movie_trailer?>>
                                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#trailer-modal">
                                    Show trailer
                                </button>
                            </td>
                        </tr>
                        
                    </table>                  
                    <!-- Kind -->

                    <div class="float-right">
                        
                        <button type="submit" class="btn btn-primary offset-md-4" >Submit</button>
                
                    </div>
                
                </td>
                
            </tr>
          
        </table>
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
                    <iframe id="trailer" class="embed-responsive-item" src="" allowfullscreen></iframe>
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

        
    </form>
</div>




