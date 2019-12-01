<div class="container">
    <table class="table">
        <tr>
            <th>  Schedule ID </th>
            <th>  Time Start  </th>
            <th>  Cinema</th>
            <th>  movie </th>
        </tr>
        <?php
            foreach($schedules as $schedule) {
        ?>
        <tr>

            <td> <?php  echo $schedule->schedule_id ?> </td>
            <td>  <?php  echo $schedule->schedule_time_start ?>  </td>
            <td>  <?php  echo $schedule->cinema_id ?> </td>
            <td>  <?php  echo $schedule->movie_name ?> </td>
            <td> 
                <a href="index.php?controller=schedules&action=delete&schedule_id=<?php  echo $schedule->schedule_id ?>"><button
                    class="btn btn-secondary">Delele</button></a>
                <a href="index.php?controller=schedules&action=update&schedule_id=<?php  echo $schedule->schedule_id ?>"><button
                    class="btn btn-secondary">Update</button></a>
            </td>
        </tr>

        <?php
            }
        
        ?>

    </table>
    
</div>

