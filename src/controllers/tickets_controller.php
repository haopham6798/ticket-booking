<?php
    require_once('controllers/base_controller.php');
    require_once('models/ticket.php');

    class TicketsController  extends BaseController {
        function __construct() {
            $this->folder = 'tickets';
        }
        public function index() {
            //tao form con film va lich
            if(isset($_SESSION['username'])){
                $this->render('index');
            }else{
                //header("Location: index.php?controller=customers&action=renderLogin");
                echo "loi";
            }
        }
        public function book(){
            if(isset($_SESSION['username'])){
                echo $_SESSION['username'];
                $ticket = Ticket::book($_POST['ticket_cost'], $_POST['ticket_date'],
                            $_POST['customer_customer_id'],$_POST['schedule_schedule_id'], $_POST['seat_id']);
                echo "$ticket";
            }else{
                //alert("Hello\nHow are you?");
                echo "chua dang nhap"; 
            }
        }
        public function delete(){ 
            $result = Ticket::delete( $_GET['ticket_id']);
            if($result){
                print_r($result);
            }
            header("Location: index.php?controller=tickets");
        }
    }
?>