<?php
    require_once('controllers/base_controller.php');
    require_once('models/ticket.php');

    class TicketsController  extends BaseController {
        function __construct() {
            $this->folder = 'tickets';
        }
        public function index() {
            $result = Ticket::all();
            $data = array("seats"=>$result);
            if(isset($_SESSION['username'])){
                $this->render('index',$data);
            }else{
                //header("Location: index.php?controller=customers&action=renderLogin");
                echo "loi";
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