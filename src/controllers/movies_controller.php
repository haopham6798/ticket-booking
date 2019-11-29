<?php
    require_once('controllers/base_controller.php');
    require_once('models/movie.php');
    class MoviesController extends BaseController {
        function __construct() {
            $this->folder = "movies";
        }

        public function index() {
            $movies = Movie::all();
            $data = array('movies' => $movies);
            $this->render('index', $data);
        }

        public function info()
        {
        //   $movie = Movie::find($_GET['id']);
        //   $data = array('movie' => $movie);
          $this->render('info');
        }

        public function add() {
            $this->render('add');
        }
    }
?>