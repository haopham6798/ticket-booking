<?php
    require_once('controllers/base_controller.php');
    require_once('models/movie.php');
    require_once('models/kind.php');
    class MoviesController extends BaseController {
        function __construct() {
            $this->folder = "movies";
        }

        public function index() {
            $movies = Movie::all();
            $kinds = Kind::all();
            $data = array('movies' => $movies, 'kinds' => $kinds);
            $this->render('index', $data);
        }

        public function info()
        {
          $movie = Movie::find($_GET['movie_id']);
          $data = array('movie' => $movie);
          
          $this->render('info', $data);
        }

        public function add() {
            $kinds = Kind::all();
            $data = array('kinds' => $kinds);
            $this->render('add', $data);
        }

        public function create() {
            if(isset($_POST['trailer']) && isset($_POST['picture'])){
                $trailer = file_get_contents($_FILES['trailer']['tmp_name']);
                $trailer = addslashes($trailer);
                $picture = file_get_contents($_FILES['picture']['tmp_name']);
                $picture = addslashes($picture);
            }elseif(isset($_POST['trailer'])){
                $trailer = file_get_contents($_FILES['trailer']['tmp_name']);
                $trailer = addslashes($trailer);
            }elseif( isset($_POST['picture'])){
                $picture = file_get_contents($_FILES['picture']['tmp_name']);
                $picture = addslashes($picture);
            }
            $movie = Movie::create($_POST['movie_id'], $_POST['movie_name'], $_POST['movie_length'], $_POST['trailer'], $_POST['picture']);
            header("Location: index.php?controller=movies");
        }

        public function search(){
            $movie = Movie::search($_GET['name']);
            $data = array('movies' => $movies);
            $this->render('index', $data);
        }
        public function update() {
            
        }
    }
?>