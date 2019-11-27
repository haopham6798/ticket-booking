<?php
    class Schedule {
        public $schedule_id;
        public $schedule_time_start;
        public $schedule_time_end;
        public $cinema_id;
        public $movie_name;

        function __construct($id, $time_start, $time_end, $cinema_id, $movie_name){
            $this->schedule_id = $id;
            $this->schedule_time_start = $time_start;
            $this->schedule_time_end = $time_end;
            $this->cinema_id = $cinema_id;
            $this->movie_name = $movie_name;
        }
        public static function all() {
            $schedules = [];
            $db = DB::getInstance();
            $req = $db->query('select * from schedule inner join movie on schedule.movie_movie_id = movie.movie_id 
            inner join cinema on cinema.cinema_id = schedule.cinema_cinema_id;');
            foreach($req->fetchAll() as $item){
                $schedules[] = new Schedule($item['schedule_id'], $item['schedule_time_start'],
                            $item['schedule_time_end'], $item['cinema_cinema_id'], $item['movie_name']);
            }
            return $schedules;
        }
       
    }
?>