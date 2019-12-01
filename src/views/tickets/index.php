
<form>
    <div class="form-group">
        <label for="user">Customer</label>
        <textarea type="text" class="form-control" id="user" aria-describedby="Customer" placeholder="Customer"> <?php echo $_SESSION['username']?> </textarea>
    </div>
    <div class="form-group">
        <label for="user">Movie Name</label>
        <input type="text" class="form-control" id="user" aria-describedby="Movie Name" 
          readonly='readonly' placeholder="Customer" value= <?php echo $movie_name?>>
    </div>
    <div class="form-group">
        <label for="date">Date</label>
        <input type="datetime-local" class="form-control" id="date" placeholder="Date" value=<?php echo $date."T".$time ?> readonly="readonly">
    </div>
  
    <div class="dropdown">
    <label for="vertical">Cost  </label> <br>
        <button class="btn btn-secondary dropdown-toggle" type="button" id="cost" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Cost
        </button>
        <div class="dropdown-menu" aria-labelledby="cost">
            <a class="dropdown-item" value=95 >95</a>
            <a class="dropdown-item" value=75 >75</a>
            <a class="dropdown-item" value=60 >60</a>
        </div>
    </div>
    <br>
    <div class="form-group">
        <label for="choose-seat"> Seat </label>
        <br>
        <input id="choose-seat" type="text" value='' readonly='readonly'>
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
            Choose Seat
        </button>
    </div>
    
    

    
    
    <br>
    <button type="submit" class="btn btn-secondary">Submit</button>
</form>


<!-- Modal for seat -->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Seat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table" >

            <?php

                for ($i = 1; $i <= 10; $i++) {
                    echo "<tr>";
                    for ($j = 1; $j <= 10; $j++) {
            ?>

                    <td>
                            <button type="button" class="btn btn-secondary" onclick="get_seat(this)" value=<?php echo $i."-".$j ?>>
                            <?php echo $i."-".$j ?>
                        </button>
                     
                    </td>

            <?php
                    }
                    echo "</tr>"; 
                }

            ?>
    </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
// let nut = document.getElement
    function get_seat(el) {

    
    let chooseSeat = document.getElementById('choose-seat');
    console.log(el);
    chooseSeat.value = el.value;
    }

</script>