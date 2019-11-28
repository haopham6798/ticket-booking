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
          $movie = Movie::find($_GET['id']);
          $data = array('movie' => $movie);
          $this->render('info', $data);
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
            $movie = Movie::create($_POST['id'], $_POST['name'], $_POST['length'], $_POST['kind'], $_POST['trailer'], $_POST['picture']);
            header("Location: index.php?controller=movies");
        }

        public function search(){
            $movie = Movie::search($_GET['name']);
            $data = array('movies' => $movies);
            $this->render('index', $data);
        }
    }
?>