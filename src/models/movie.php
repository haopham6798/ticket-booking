<?php
    class Movie {
        public $movie_id;
        public $movie_name;
        public $movie_length;
        public $movie_kind;
        public $movie_trailer;
        public $movie_picture;

        function __construct($id, $name, $length, $kind, $trailer, $picture){
            $this->movie_id = $id;
            $this->movie_name= $name;
            $this->movie_length = $length;
            $this->movie_kind = $kind;
            $this->movie_trailer = $trailer;
            $this->movie_picture= $picture;
        }
        static function all()
        {
            $movies = [];
            $db = DB::getInstance();
            $req = $db->query('SELECT * FROM movie');
            //print_r($req->fetchAll());
            foreach ($req->fetchAll() as $item){
                $movies[] = new Movie($item['movie_id'], $item['movie_name'],
                $item['movie_length'], $item['movie_kind'], $item['movie_trailer'],$item['movie_picture']);
            }
            return $movies;
        }
        static function find($id)
        {
            $db = DB::getInstance();
            $req = $db->prepare('SELECT * FROM movie WHERE movie_id = :id');
            $req->execute(array('id' => $id));

            $item = $req->fetch();
            if (isset($item['movie_id'])) {
                return new Movie($item['movie_id'], $item['movie_name'],
                    $item['movie_length'], $item['movie_kind'], $item['movie_trailer'],$item['movie_picture']);
            }
            return null;
            //echo "loi r";
        }
       
        
    }
?>