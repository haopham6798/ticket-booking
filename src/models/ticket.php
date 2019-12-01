<?php
    class Ticket {
        public $cost;
        public $date;
        public $customer_id;
        public $seat_id;
        public $movie_id;

        public function __construct($cost, $date, $seat_id,$movie_id, $customer_id) {
            $this->cost =$cost;
            $this->date= $date;
            $this->seat_id = $seat_id;
            $this->movie_id = $movie_id;
            $this->customer_id = $customer_id;
        }

        public function book($ticket_cost, $ticket_date, $seat_id, $movie_id, $customer_id) {
            //$schedules = [];
            $db = DB::getInstance();
            $req = $db->prepare("INSERT INTO ticket (ticket_cost, ticket_date, seat_seat_id, movie_movie_id, customer_customer_id) 
                                VALUES (:ticket_cost, :ticket_date, :seat_id,:movie_id, :customer_id)");
            $req->execute(array('ticket_cost' =>$ticket_cost, 'ticket_date'=> $ticket_date,
                                'seat_id' => $seat_id,'movie_id'=>$movie_id,'customer_id' => $customer_id ));
        }
        
    }
?>