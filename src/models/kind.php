<?php
    class Kind {
        public $kind_id;
        public $kind_name;
        public $movie_id;
        public $movie_name;
        public $movie_length;
        public $movie_trailer;
        public $movie_picture;

        public function __construct($kind_id, $kind_name, $movie_id, $movie_name, $movie_length, $movie_trailer, $movie_picture){
            $this->kind_id= $kind_id;
            $this->kind_name = $kind_name;
            $this->movie_id= $movie_id;
            $this->movie_name=$movie_name;
            $this->movie_length= $movie_length;
            $this->movie_trailer=$movie_trailer;
            $this->movie_picture =$movie_picture;
        }
        public function find($id){
            $kinds = [];
            $db = DB::getInstance();
            $req = $db->prepare("SELECT * FROM kind as k inner join movie_has_kind as mk 
                                on k.kind_id = mk.kind_id
                                inner join movie as m on m.movie_id =mk.movie_id
                                where k.kind_id = :id");
            $req->execute(array("id"=>$id));
            foreach ($req->fetchAll() as $item){
                $kinds[] = new Kind($item['kind_id'], $item['kind_name'],$item['movie_id'],
                $item['movie_length'], $item['movie_kind'], $item['movie_trailer'],$item['movie_picture']);
            }
            return kinds;
        }
    }
?>