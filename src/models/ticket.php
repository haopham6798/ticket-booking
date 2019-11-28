<?php
    class Ticket {
        public $cost;
        public $date;
        public $customer_email;
        public $schedule_id;
        public function __construct($cost, $date, $customer_email,$schedule_id ){
            $this->cost =$cost;
            $this->date =$date;
            $this->customer_email =$customer_email;
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
        public function find($email){

        }
    }
?>