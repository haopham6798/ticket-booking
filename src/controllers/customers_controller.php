<?php
    require_once('controllers/base_controller.php');
    require_once('models/customer.php');

    class CustomersController extends BaseController {
        public function __construct() {
            $this->folder = 'customers';
        }
        public function index() {
            $this->render('index');
        }
        public function renderLogin() {
            //echo $_SESSION['username'];
            $this->render('renderLogin');
        }

        public function renderRegister() {
            $this->render('renderRegister');
        }

        public function login() {
            if(isset($_POST['email'])){
                $result = Customer::find($_POST['email']);
                //print_r($result);
                if($result){
                    $data = array('customer' => $result);
                    if(isset($_POST['password'])){
                        if($_POST['password'] == $data['customer']->password){
                            //echo "dang nhap thanh cong";
                            $_SESSION['username'] = $data['customer']->name;
                            $_SESSION['customer_id'] = $data['customer']->id;
                            //echo $_SESSION['customer_id'];
                            echo "<a href='index.php?controller=movies'>Success Login! Continue</a>";
                        }else{
                            echo "<a href='index.php?controller=customers&action=renderLogin'>Wrong Password! Login Again</a>";
                        }
                    }
                }
                else{
                    echo "<a href='index.php?controller=customers&action=renderLogin'>Not Found Email! Login Again</a>";
                    }
               
            }
        }


        public function register() {
            if(isset($_POST['customer_email'])){
            $result = Customer::create($_POST['customer_name'], $_POST['customer_gender'], 
                $_POST['customer_bd'], $_POST['customer_email'],$_POST['customer_password']);
            }
            //print_r($result);
            echo "<a href='index.php?controller=customers&action=renderLogin'>Ban da dang ky thanh cong</a>";
        }
       
    }
?>