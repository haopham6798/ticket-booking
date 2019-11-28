<?php
    echo "Lich chieu phim";
    if(isset($_SESSION['username'])){
        echo "session : ".$_SESSION['username'];
    }else{
        echo "khong co session";
    }
    echo "<table>";
    foreach($schedules as $schedule){
        echo "$schedule->movie_name";
    }

?>