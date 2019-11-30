<div class="container">
    <?php
    
        foreach($schedules as $schedule) {
            $times = explode(" ", $schedule->schedule_time_start);
            // echo $times[0]."    ";
    ?>

            <a href="index.php?controller=schedules&actine=find&date=<?php echo $times[0];?>">
                <button type="button" class="btn btn-outline-secondary">
                <?php echo $times[0]; ?>
                </button>
            </a>

    <?php
            // echo $times[1];
        }
        $days = $times[0];
        $time_start = $times[1];
        echo $days[2];

    ?>
</div>