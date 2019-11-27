<?php
    require_once('controllers/base_controller.php');
    require_once('models/ticket.php');

    class TicketsController  extends BaseController {
        function __construct() {
            $this->folder = 'tickets';
        }
        public function index() {
            //tao form con film va lich
            $this->render('index');
        }
        public function book(){
            $ticket = Ticket::book($_POST['ticket_cost'], $_POST['ticket_date'],
                        $_POST['customer_customer_id'],$_POST['schedule_schedule_id'], $_POST['seat_id']);
            echo "$ticket";
        }
    }
?>