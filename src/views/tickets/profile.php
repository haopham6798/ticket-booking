<table class="table">
        <tr>
            <th>  Cost </th>
            <th>  Date  </th>
            <th>  Seat  </th>
            <th>  Movie</th>
        </tr>
        <?php

            foreach($tickets as $key=>$ticket) {
        ?>
        <tr>

            <td> <?php  echo $ticket->cost ?> </td>
            <td>  <?php  echo $ticket->date ?>  </td>
            <td>  <?php  echo $ticket->seat_id ?>  </td>
            <td>  <?php  echo $movie_name[$key] ?> </td>
        </tr>

        <?php

            }
        
        ?>

    </table>