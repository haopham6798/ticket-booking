
<div class="container">
    <?php
        $sches = [];
        $days = [];
        $movie_id;

        foreach($schedules as $schedule) {
            $movie_id = $schedule->movie_id;
            $sches[] = explode(" ", $schedule->schedule_time_start);
            $days[] = explode(" ", $schedule->schedule_time_start)[0];
        }
        $days = array_unique($days);
        // print_r($days);
        $uses = [];

        foreach($days as $day) {
            // print_r($day);
            $time = [];
            foreach($sches as $sche) {
                if ($day == $sche[0]) {
                    $time[] = $sche[1];
                }
            }
            $uses[] = array($day => $time);
        }

        // print_r($uses[0]);

        foreach($days as $day) {
    ?>
        <a href="index.php?controller=schedules&action=find&movie_id=<?php 
            echo $movie_id ?>&date=<?php echo  $day; ?>">

            <button id="btn-schedule" type="button" class="btn btn-outline-secondary" value=<?php echo  $day; ?>>
                <?php  echo $day; ?>
            </button>
        </a>
    <?php
        }
    ?>


    <hr>
    <br><br>

    <?php

    if(!empty($uses)){

   
    if (isset($_GET['date']))  {

        $date = $_GET['date'];
        // print_r($date);
        foreach($uses as $use) {
            // print_r($use);
            if (key($use) == $date ) {
                // print("aco");
                // print_r($use);
                foreach ($use[$date] as $time) {
    ?>
    <a href="index.php?controller=tickets&movie_id=<?php 
            echo $schedule->movie_id ?>&date=<?php echo key($use); ?>&time=<?php echo($time)  ?>">
        <button type="button" class="btn btn-secondary" >
            <?php echo($time); ?>
        </button>
    </a>


    <?php
                }
            }
        }
    }
    else  {
        
            // print_r(key($uses[0]));
                       
                $use = $uses[0];
                foreach($use[key($use)] as $time) {
                    // print_r($time);
    ?>

    <a href="index.php?controller=tickets&movie_id=<?php 
            echo $schedule->movie_id ?>&date=<?php echo key($use); ?>&time=<?php echo($time);  ?>">
        <button type="button" class="btn btn-secondary" >
            <?php echo($time); ?>
        </button>
    </a>

    <?php
                }
        }
    }
else {
    echo "there are no schedule for this movie";

}
    ?>
</div>