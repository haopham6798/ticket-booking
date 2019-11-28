<?php
    class Cinema {
        public $ci_id;
        public $ci_num;

        public function __construct($id, $num) {
            $this->ci_id =$id;
            $this->ci_num = $num;
        }

        public function all() {
            $cinemas= [];
            $db = DB::getInstance();
            $req = $db->query("Select * From cinema");
            foreach ($req->fetchAll() as $item){
                $cinemas[] = new Cinema($item['cinema_id'], $item['cinema_number']);
            }
            return $cinemas;
        }

    }

?>