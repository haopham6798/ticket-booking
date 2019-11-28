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
            if(isset($_SESSION['username'])){
                $schedules = Schedule::all();
                $data = array('schedules' => $schedules);
                $this->render('index', $data);
            }else{
                header("Location: index.php?controller=customers&action=renderLogin");
            }
        }
        public function renderForm() {
            $cinema = Cinema::all();
            $movie = Movie::all();
            $data = array('cinema' => $cinema, 'movie'=>$movie);
            $this->render('renderForm', $data);
        }
        public function create(){

            
        }
      
    }
?>