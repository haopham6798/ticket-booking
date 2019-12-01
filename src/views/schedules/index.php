<div class="container">
    <?php
        
        foreach($schedules as $schedule) {
            
        }
        $days = array_unique($days);
        $sche_movies = array_unique($sche_movies);
        print_r($sche_movies);
        $uses = [];

        foreach($days as $day) {
            // print_r($day);
            $mov = [];
            foreach ($sche_movies as $sche_movie) {
                $time = [];
                foreach($sches as $sche) {
                    if ($day == $sche[0]) {
                        $time[] = $sche[1];
                    }
                }
            }
            
            $uses[] = array($day => $time);
        }

        // print_r($uses[0]);

        foreach($schedules as $schedule) {
    ?>
        <a href="index.php?controller=schedules&date=<?php echo explode(" ", $schedule->schedule_time_start)[0]; ?>">

            <button id="btn-schedule" type="button" class="btn btn-outline-secondary" value=<?php echo explode(" ", $schedule->schedule_time_start)[0]; ?>>
                <?php  echo explode(" ", $schedule->schedule_time_start)[0]; ?>
            </button>
        </a>
    <?php
        }
    ?>

    <hr>
    <br><br>

    <?php
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
        
    }
    ?>
    
</div>

