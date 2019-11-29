<div class="container">
    <?php
<<<<<<< HEAD
        
        foreach($schedules as $schedule){
            ///echo "<td><a href='index.php?controller=tickets&schedule_id=" .$schedule->schedule_id. 
            //  "&customer_id".$_SESSION['customer_id'].">Book</a></td>";
            echo $schedule->schedule_time_start;                                           
=======
    
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
>>>>>>> c2bfc82d298051d74d235067e004186f953c779f
        }
        $days = $times[0];
        $time_start = $times[1];
        echo $days[2];

    ?>
</div>