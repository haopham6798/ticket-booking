<?php
    require_once('controllers/base_controller.php');
    require_once('models/schedule.php');
    require_once('models/cinema.php');
    require_once('models/movie.php');
    

    class SchedulesController  extends BaseController {
        function __construct() {
            $this->folder = 'schedules';
        }

        public function index() {
            $schedules = Schedule::all();
            $movies = Movie::all();
            $data = array('schedules' => $schedules, 'movie' => $movies);
            if($data){
                // echo "co data";
                // print_r($data);
            }else{
                // echo "k co data";
            }
            $this->render('index', $data);
        }

        
        public function renderForm() {
            $cinema = Cinema::all();
            $movie = Movie::all();
            $data = array('cinema' => $cinema, 'movie'=>$movie);
            $this->render('renderForm', $data);
        }

        public function create(){
            $result = Schedule::create($_POST['schedule_id'], $_POST['schedule_time_start'], 
                                        $_POST['cinema_id'], $_POST['movie_id']);
            print_r($result);
            
        }
        public function find(){
            $result = Schedule::find($_GET['movie_id']);
            $data = array('schedules' =>$result);
            $this->render('find', $data);
        }
        public function getDate(){
            $result = Schedule::getDate($_GET['date']);
            $data = array('schedules'=>$result);
            $this->render('find', $data);
        }
      
    }
?>