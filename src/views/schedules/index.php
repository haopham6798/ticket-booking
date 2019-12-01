<html>
<table>
    <?php
        foreach($schedules as $schedule){
            echo "<tr>";
            echo "<td>$schedule->movie_name</td>";
            echo "<td>$schedule->schedule_time_start</td>";
            echo "<tr>";
        }

    ?>
</table>

</html>