<?php
    require_once('controllers/base_controller.php');
    require_once('models/ticket.php');
    require_once('models/movie.php');

    class TicketsController  extends BaseController {
        function __construct() {
            $this->folder = 'tickets';
        }
        public function index() {
            //tao form con film va lich
            if(isset($_SESSION['username'])){
                
                $movie_id = $_GET['movie'];
                $result = Movie::searchById($movie_id);
                $date = $_GET['date'];
                $time = $_GET['time'];
                $movie_name = array('movies'=>$result)->movie_name;
                $this->render('index',array('movie_name'=>$movie_name, 'date' => $date, 'time' =>$time));
            }else{
                // header("Location: index.php?controller=customers&action=renderLogin");   
            }

        }
        public function book(){
            if(isset($_SESSION['username'])){
                $ticket = Ticket::book($_POST['ticket_cost'], $_POST['ticket_date'],
                            $_POST['customer_customer_id'],$_POST['schedule_schedule_id'], $_POST['seat_id']);
                echo "$ticket";
            }else{
                header("Location: index.php?controller=customers&action=renderLogin");
            }
        }
        public function delete(){ 
            
        }
    }
?>