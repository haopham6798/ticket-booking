<?php
    echo "Lich chieu phim";

    echo "<table>";
    foreach($schedules as $schedule){
        echo "<tr><td>". $schedule->time_start;
    }

?>