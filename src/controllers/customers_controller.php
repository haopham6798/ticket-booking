<?php
    require_once('controllers/base_controller.php');
    require_once('models/customer.php');

    class CustomersController extends BaseController {
        public function __construct() {
            $this->folder = 'customers';
        }
        // public function index() {
        //     $this->render('index');
        // }
        public function renderLogin() {
            echo "Hello";
            $this->render('renderLogin');
        }

        public function login() {
           $result = Customer::find($_POST['email']);
           $customer = array('customers' => $result);
           //echo $customer->password;
           // echo "login";
        }
       
    }
?>