<?php
    class Ticket {
        public static function book($ticket_cost, $ticket_date, $customer_id, $schedule_id, $seat_id) {
            $schedules = [];
            $db = DB::getInstance();
            $req = $db->prepare("INSERT INTO `ticket` (`ticket_cost`, `ticket_date`, `customer_customer_id`, `schedule_schedule_id`, `seat_seat_id`) 
                                VALUES (:ticket_cost, :ticket_date, :customer_id, :schedule_id, :seat_id)");
            $req->execute(array('ticket_cost' =>$ticket_cost, 'ticket_date'=> $ticket_date,
                                 'customer_id' => $customer_id, 'schedule_id' => $schedule_id,'seat_id' => $seat_id ));
            echo $req ;
        }
    }
?>