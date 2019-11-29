
<div class="body">
    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" >
        <table class="table">
            <tr>
                <td>
                    <div class="file-field input-img">
                        <div class="z-depth-1-half mb-4 d-flex justify-content-center">
                            <img width="460" height="215" id="img" src="./assets/images/empty.jpg" class="img-fluid img"
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
                    <!-- <div class="input-img">
                        <div class="img"><img width="460" height="215" id="img" src="./assets/images/empty.jpg" alt="Your image"><br></div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-mdb-color btn-rounded float-left">
                                <span>Choose file</span>
                                <input type="file" id="img_input" name="game_img" value="" accept="image/*"><br>
                            </div>
                        </div>
                    </div> -->
                </td>
                
                <td class="mb-8">
                    <div class="form-group" >
                        <input type="text" class="form-control" id="movie_name" placeholder="Movie Name" required>
                    </div>
                    <table class="table">
                        <tr>
                            <td>
                                <label for="movie_name" class="col-sm-2 control-label">Lenght</label>
                            </td>

                            <td>
                                <input type="number" class="form-control" id="movie_lenght" placeholder="Movie lenght" required>
                            </td>
                        </tr>

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
                        
                    </table>                  
                    <!-- Kind -->
                    <div class="float-right">
                        
                        <button type="submit" class="btn btn-primary offset-md-4" >Submit</button>
                
                    </div>
                
                </td>


                
            </tr>
          
        </table>
    

        
    </form>
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
                    <iframe id="trailer" class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                </div>
                
            </div>
        </div>
        <div class="modal-footer">
        <div class="file-field input-img">
            <div class="input-group mb-3">    
                <div class="custom-file input-picture">
                    <input type="file" class="custom-file-input" id="trailer_input" name="movie_picture" 
                        aria-describedby="movie_trailer" accept="video/*">
                    <label class="custom-file-label" for="trailer_input">Choose clip</label>
                    
                </div>
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div>
            
        </div>
    
      </div>
    </div>
  </div>
</div>