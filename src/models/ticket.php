<?php
    class Ticket {
        public $cost;
        public $date;
        public $customer_id;
        public $schedule_id;
        public function __construct($cost, $date, $customer_id,$schedule_id ){
            $this->cost =$cost;
            $this->date =$date;
            $this->customer_id =$customer_id;
            $this->schedule_id =$schedule_id;
        }

        public function book($ticket_cost, $ticket_date,  $schedule_id, $customer_id) {
            $schedules = [];
            $db = DB::getInstance();
            $req = $db->prepare("INSERT INTO ticket (ticket_cost, ticket_date, customer_customer_id, schedule_schedule_id) 
                                VALUES (':ticket_cost', ':ticket_date', :customer_id,':schedule_id')");
            $req->execute(array('ticket_cost' =>$ticket_cost, 'ticket_date'=> $ticket_date,
                                'schedule_id' => $schedule_id,'customer_id' => $customer_id ));
        }
        
        public function delete($ticket_id){
            $db = DB::getInstance();
            $req = $db->prepare("DELETE FROM ticket where ticket_id = :ticket_id");
            $req->execute(array('ticket_id' => $ticket_id));
            return $req;
        }
    }
?>