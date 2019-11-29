<?php
    class Customer {
        public $id;
        public $name;
        public $gender;
        public $bd;
        public $email;
        public $password;

        public function __construct($id, $name, $gender, $bd, $email, $password) {
            $this->id= $id;
            $this->name= $name;
            $this->gender = $gender;
            $this->bd = $bd;
            $this->email = $email;
            $this->password = $password;
        }
        public function create($c_name, $c_gender, $c_bd, $c_email, $c_password) {
            
            $db = DB::getInstance();
            $req =$db->prepare("INSERT INTO customer ( customer_name, customer_gender, customer_bd, customer_email, customer_password) 
                                VALUES (:c_name, :c_gender, :c_bd, :c_email, :c_password)");
            $req->execute(array( 'c_name'=>$c_name, 'c_gender'=>$c_gender, 'c_bd'=>$c_bd, 'c_email'=>$c_email,'c_password'=>$c_password));
            //echo $req;
        }
        public function find($email){
            $db = DB::getInstance();
            $req = $db->prepare("SELECT * FROM customer WHERE customer_email = :email");
            $req->execute(array('email'=>$email));
            //echo $req;
            $item = $req->fetch();
            if(isset($item['customer_email'])){
                $customer = new Customer($item['customer_id'],$item['customer_name'], 
                                $item['customer_gender'], $item['customer_bd'],
                                $item['customer_email'], $item['customer_password']);
                return $customer;
            }
            return null;
        }
      
    }

?>