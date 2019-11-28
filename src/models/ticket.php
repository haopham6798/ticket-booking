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

        public function book($ticket_cost, $ticket_date,  $schedule_id, $customer_email) {
            $schedules = [];
            $db = DB::getInstance();
            $req = $db->prepare("INSERT INTO ticket (ticket_cost, ticket_date, schedule_schedule_id, customer_customer_email) 
                                VALUES (':ticket_cost', ':ticket_date', ':schedule_id', ':customer_email')");
            $req->execute(array('ticket_cost' =>$ticket_cost, 'ticket_date'=> $ticket_date,
                                'schedule_id' => $schedule_id,'customer_email' => $customer_email ));
        }
        public function delete($ticket_id){
            $db = DB::getInstance();
            $req = $db->prepare("DELETE FROM ticket where ticket_id = :ticket_id");
            $req->execute(array('ticket_id' => $ticket_id));
            
        }
    }
?>