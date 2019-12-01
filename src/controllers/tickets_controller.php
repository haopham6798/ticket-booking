<?php
    require_once('controllers/base_controller.php');
    require_once('models/ticket.php');
    require_once('models/movie.php');
    require_once('models/seat.php');
    require_once('models/customer.php');

    class TicketsController  extends BaseController {
        function __construct() {
            $this->folder = 'tickets';
        }
        public function index() {
            $seat = Seat::all();
            //$data = array("seats"=>$result);
            if(isset($_SESSION['username'])){
                $movie_id = $_GET['movie_id'];
                $result = Movie::searchById($movie_id);
                $date = $_GET['date'];
                $time = $_GET['time'];
                //$movie_name = array('movies'=>$result);
                $movie_name = $result->movie_name;
                $this->render('index',array('movie_name'=>$movie_name, 'date' => $date, 'time' =>$time,'seat'=>$seat));
            }else{
                // header("Location: index.php?controller=customers&action=renderLogin");   

            }

        }
        public function book(){
            if(isset($_SESSION['username'])){
                $result = Movie::searchByName($_POST['movie_name']);
                $customer = Customer::findByName($_POST['customer_name']);
                //print_r($customer);
                $ticket = Ticket::book($_POST['ticket_cost'], $_POST['ticket_date'],
                            $_POST['seat_id'],$result[0]->movie_id,$customer->id);
                echo "<a href='index.php'>Dat ve Thanh cong</a>";
            }else{
                //alert("Hello\nHow are you?");
                echo "chua dang nhap"; 
            }
        }

    }
?>