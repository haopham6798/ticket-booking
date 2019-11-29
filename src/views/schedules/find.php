<html>
<table>
    <?php
        
        foreach($schedules as $schedule){
            ///echo "<td><a href='index.php?controller=tickets&schedule_id=" .$schedule->schedule_id. 
            //  "&customer_id".$_SESSION['customer_id'].">Book</a></td>";
            echo $schedule->schedule_time_start;                                           
        }

    ?>
</table>

</html>