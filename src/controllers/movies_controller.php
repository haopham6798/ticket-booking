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
            $kindArr = implode("," , $_POST['movie_kind']);
            //echo $kindArr;
            if( isset($_FILES['movie_picture'])){
                $picture = file_get_contents($_FILES['movie_picture']['tmp_name']);
                $picture = addslashes($picture);
            }
            $movie = Movie::create($_POST['movie_name'], $_POST['movie_length'],$kindArr, $_POST['movie_trailer'], $picture);
            //header("Location: index.php?controller=movies");
            echo "<a href='index.php'>Continue</a>";
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