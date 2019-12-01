<?php
    class Seat {
        public $seat_id;
        public $seat_vertical;
        public $seat_horizontal;
        public $seat_status;
        public $cinema_id;
        public $cinema_number;
        public $cinema_vertical;
        public $cinema_horizontal;


        public function __construct($seat_id, $seat_vertical, $seat_horizontal,$seat_status,
                                    $cinema_id, $cinema_number, $cinema_vertical, $cinema_horizontal){
            $this->seat_id =$seat_id;
            $this->seat_vertical =$seat_vertical;
            $this->seat_horizontal =$seat_horizontal;
            $this->seat_status =$seat_status;
            $this->cinema_id =$cinema_id;
            $this->cinema_number =$cinema_number;
            $this->cinema_vertical =$cinema_vertical;
            $this->cinema_horizontal =$cinema_horizontal;
            
        }

        public function all() {
            $seats =[];
            $db = DB::getInstance();
            $req = $db->query("SELECT * FROM seat as s inner join cinema as c
                                ON s.cinema_cinema_id = c.cinema_id");
            foreach($req->fetchAll() as $item){
                $seats = new Seat($item['seat_id'],$item['seat_vertical'],$item['seat_horizontal'],$item['seat_status'],
                $item['cinema_id'], $item['cinema_number'], $item['cinema_vertical'], $item['cinema_horizontal']);
            }
            return $seats;

        }
    }
?>