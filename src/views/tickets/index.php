<html>
    <body>
        <form method="POST">
        <label for="ticket_cost">Cost</label>
        <input type="text" name="ticket_cost" id="ticket_cost" value="12">
        <label for="ticket_date">Date</label>
        <?php 
        echo "<input type='text' name='ticket_date' id='ticket_date' value= " .date('Y/m/d'). ">";
        ?>
        <label for="customer_id">Customer</label>
        <?php
        echo "<input type='text' name='customer_id' id='customer_id' value=" . $_SESSION['customer_id']. ">";
        
        echo "<label for='schedule_id'>Schedule ID</label>";
        echo "<input type='text' name='schedule_id' value=". $schedule[0]. ">";
        ?>
        </form>
    </body>
</html>