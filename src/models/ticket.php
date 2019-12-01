<?php
    class Ticket {
        public $cost;
        public $date;
        public $seat_id;
        public $movie_id;
        public $customer_id;
        
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
            echo $ticket_;
            $req = $db->prepare("INSERT INTO ticket (ticket_cost, ticket_date, seat_seat_id, movie_movie_id, customer_customer_id) 
                                VALUES (:ticket_cost, :ticket_date, :seat_id,:movie_id, :customer_id)");
            $req->execute(array('ticket_cost' =>$ticket_cost, 'ticket_date'=> $ticket_date,
                                'seat_id' => $seat_id,'movie_id'=>$movie_id,'customer_id' => $customer_id ));
                              
        }
        public function profile($customer_id){
            $tickets = [];
            $db=DB::getInstance();
            $req = $db->prepare("SELECT * FROM customer as c inner join ticket as t
                                ON c.customer_id = t.customer_customer_id
                                WHERE c.customer_id=:customer_id");
            $req->execute(array('customer_id' =>$customer_id));
            foreach ($req->fetchAll() as $item){
                $tickets[] = new Ticket($item['ticket_cost'], $item['ticket_date'],
                $item['seat_seat_id'],$item['movie_movie_id'], $item['customer_customer_id']);
            }
            return $tickets;
        }
        
    }
?>