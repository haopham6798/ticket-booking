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
                            $_SESSION['id'] = $data['customer']->id;
                            echo $_SESSION['username'];
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
            $check_email = Customer::find($_POST['customer_email']);
            if($check_email){
                echo "<a href='index.php?controller=customers&action=renderRegister'>Email has been registerd</a>";
            }else{
                
                $result = Customer::create($_POST['customer_name'], $_POST['customer_gender'], 
                $_POST['customer_bd'], $_POST['customer_email'],$_POST['customer_password']);
                echo "<a href='index.php?controller=movies'>Ban da dang ky thanh cong</a>";
            }
           
            //print_r($result);
           
        }
       
    }
?>