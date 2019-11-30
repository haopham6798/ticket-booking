<?php
    class Kind {
        public $kind_id;
        public $kind_name;

        public function __construct($id, $name) {
            $this->kind_id =$id;
            $this->kind_name = $name;
        }

        static function all() {
            $kinds = [];
            $db = DB::getInstance();
            $req = $db->query("Select * From kind");
            
            foreach ($req->fetchAll() as $item){
                $kinds[] = new Kind($item['kind_id'], $item['kind_name']);
            }
            
            return $kinds;
        }

    }

?>