<?php
    class Movie {
        public $movie_id;
        public $movie_name;
        public $movie_length;
        public $movie_kind;
        public $movie_trailer;
        public $movie_picture;

        function __construct($id, $name, $length,$kind, $trailer, $picture){
            $this->movie_id = $id;
            $this->movie_name= $name;
            $this->movie_length = $length;
            $this->movie_kind = $kind;
            $this->movie_trailer = $trailer;
            $this->movie_picture= $picture;
        }

        //get all movies
        static function all()
        {
            $movies = [];
            $db = DB::getInstance();
            $req = $db->query('SELECT * FROM movie');
            //print_r($req->fetchAll());
            foreach ($req->fetchAll() as $item){
                $movies[] = new Movie($item['movie_id'], $item['movie_name'],
                $item['movie_length'],$item['movie_kind'], $item['movie_trailer'],$item['movie_picture']);
            }
            return $movies;
        }


        // find info of movie
        static function searchByID($id)
        {
            $db = DB::getInstance();
            $req = $db->prepare('SELECT * FROM movie WHERE movie_id = :id');
            $req->execute(array('id' => $id));

            $item = $req->fetch();
            if (isset($item['movie_id'])) {
                return new Movie($item['movie_id'], $item['movie_name'],
                    $item['movie_length'],$item['movie_kind'], $item['movie_trailer'],$item['movie_picture']);
            }
            return null;
            //echo "loi r";
        }

        //create new movie
        public function create( $name, $length, $kind, $trailer, $picture){
            $db = DB::getInstance();
            $req = $db->prepare("INSERT INTO movie ( movie_name, movie_length,movie_kind, movie_trailer, movie_picture) 
                     VALUES (:m_name, :m_length,:m_kind, :m_trailer, '$picture')");
            $req->execute(array('m_name' => $name, 'm_length'=>$length, 'm_kind'=>$kind,
                                 'm_trailer'=>$trailer ));
        }

        //search movie by name
        public function searchByName($m_name) {
            $result=[];
            $db = DB::getInstance();
            $req = $db->query("SELECT * FROM movie WHERE movie_name LIKE '%$m_name%'");
            //$req->execute(array('m_name' => $m_name));
            foreach ($req->fetchAll() as $item){
                $result[] = new Movie($item['movie_id'], $item['movie_name'],
                $item['movie_length'], $item['movie_kind'], $item['movie_trailer'],$item['movie_picture']);
            }
            return $result;
        }

        public function searchByKind($m_kind) {
            $result=[];
            $db = DB::getInstance();
            $req = $db->query("SELECT movie_id, movie_name, movie_length,movie_kind, movie_trailer, movie_picture 
                FROM kind as k inner join movie_has_kind as mk on k.kind_id = mk.kind_kind_id
                         inner join movie as m on m.movie_id =mk.movie_movie_id
                                        WHERE k.kind_name LIKE '%$m_kind%'");
            //$req->execute(array('m_name' => $m_name));
            foreach ($req->fetchAll() as $item){
                $result[] = new Movie($item['movie_id'], $item['movie_name'],
                $item['movie_length'], $item['movie_kind'], $item['movie_trailer'],$item['movie_picture']);
            }
            return $result;
        }
        
        public function update($movie_id ,$movie_name, $movie_length,$movie_kind, $movie_trailer, $movie_picture) {
            $db = DB::getInstance();
            $req = $db->prepare("UPDATE movie 
                                SET movie_name = :movie_name, movie_length=:movie_length, movie_kind=:movie_kind,
                                movie_trailer = :movie_trailer, movie_picture = '$movie_picture'
                                WHERE movie_id = :movie_id");
            $req->execute(array("movie_id" => $movie_id,"movie_name" => $movie_name, "movie_length" =>$movie_length, 
                                 "movie_kind" =>$movie_kind,"movie_trailer"=>$movie_trailer));
            
        }
        public function delete($movie_id){
            $db = DB::getInstance();
            $req = $db->prepare("DELETE FROM movie WHERE movie_id = :movie_id");
            $req->execute(array('movie_id'=>$movie_id));
        }
       
        
    }
?>