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
          $movie = Movie::searchById($_GET['movie_id']);
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
            if(isset($_FILES['movie_picture'])){
                $picture = file_get_contents($_FILES['movie_picture']['tmp_name']);
                $picture = addslashes($picture);
            }
            $movie = Movie::create($_POST['movie_name'], $_POST['movie_length'], $kindArr, $_POST['movie_trailer'], $picture);
            //header("Location: index.php?controller=movies");
            echo "<a href='index.php'>Continue</a>";
        }

        public function searchByName(){
            echo $_POST['movie_name'];
            $movies = Movie::searchByName($_POST['movie_name']);
            $data = array('movies' => $movies);
            if($data){
                $this->render('index', $data);
                //print_r($data);
            }else{
                echo "ERROR";
            }
        }
        
        public function searchByID(){
            echo $_POST['movie_name'];
            $movies = Movie::searchByID($_POST['movie_id']);
            $data = array('movies' => $movies);
            if($data){
                $this->render('index', $data);
                //print_r($data);
            }else{
                echo "ERROR";
            }
        }

        public function searchByKind(){
            //echo $_POST['movie_kind'];
           // $movies = Movie::searchByName($_POST['movie_kind']);
            $movies = Movie::searchByKind($_GET['movie_kind']);
            $data = array('movies' => $movies);
            if($data){
                $this->render('index', $data);
                //print_r($data);
            }else{
                echo "ERROR";
            }
        }

    }
?>