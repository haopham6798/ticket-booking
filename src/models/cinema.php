<?php
    class Cinema {
        public $ci_id;
        public $ci_num;

        public function __construct($id, $num,$vertical, $horizontal) {
            $this->cinema_id =$id;
            $this->cinema_number = $num;
            $this->cinema_vertical = $vertical;
            $this->cinema_horizontal =$horizontal;
        }

        public function all() {
            $cinemas= [];
            $db = DB::getInstance();
            $req = $db->query("Select * From cinema");
            foreach ($req->fetchAll() as $item){
                $cinemas[] = new Cinema($item['cinema_id'], $item['cinema_number'],$item['cinema_vertical'],$item['cinema_horizontal']);
            }
            return $cinemas;
        }

    }

?>