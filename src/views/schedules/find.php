<html>
<table>
    <?php
        foreach($schedules as $schedule){
            echo "<td><a href='index.php?controller=tickets&schedule_id=" .$schedule_id. 
                                                        "&customer_id".$_SESSION['customer_id']."></a></td>";
        }

    ?>
</table>

</html>