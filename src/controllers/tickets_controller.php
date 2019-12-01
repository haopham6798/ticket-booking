<?php
    require_once('controllers/base_controller.php');
    require_once('models/ticket.php');
    require_once('models/movie.php');

    class TicketsController  extends BaseController {
        function __construct() {
            $this->folder = 'tickets';
        }
        public function index() {
            $result = Ticket::all();
            $data = array("seats"=>$result);
            if(isset($_SESSION['username'])){
<<<<<<< HEAD
                $this->render('index',$data);
=======
                
                $movie_id = $_GET['movie_id'];
                $result = Movie::searchById($movie_id);
                $date = $_GET['date'];
                $time = $_GET['time'];
                
                //$movie_name = array('movies'=>$result);
                $movie_name = $result->movie_name;
                $this->render('index',array('movie_name'=>$movie_name, 'date' => $date, 'time' =>$time));
>>>>>>> 443914ec3b046bf15dabe2cca89499f97ec193ca
            }else{
                // header("Location: index.php?controller=customers&action=renderLogin");   

            }

        }
        public function book(){
            if(isset($_SESSION['username'])){
                echo $_SESSION['username'];
                $ticket = Ticket::book($_POST['ticket_cost'], $_POST['ticket_date'],
                            $_POST['customer_customer_id'],$_POST['schedule_schedule_id']);
                echo "$ticket";
            }else{
                //alert("Hello\nHow are you?");
                echo "chua dang nhap"; 
            }
        }

    }
?>