<html>
<table>
    <?php
        foreach($schedules as $schedule){
            echo "<tr>";
            echo "<td>$schedule->movie_name</td>";
            echo "<tr>";
        }

    ?>
</table>

</html>