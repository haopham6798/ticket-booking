<?php
    echo "Lich chieu phim";

    echo "<table>";
    foreach($schedules as $schedule){
        echo "$schedule->movie_name";
    }

?>