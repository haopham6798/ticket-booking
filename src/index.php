<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tickettttt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css"> -->
</head>
<body>
    <h1>Enjoy your film!!!!!!</h1>
    <div><button><a href="logout.php">Logout</a></button>
    </div>
    <?php
        require_once('connection.php');
     
        //echo $_SESSION['username'];
        //if (isset($_SESSION['username']) && $_SESSION['username']){
            if (isset($_GET['controller'])) {
                $controller = $_GET['controller'];
            if (isset($_GET['action'])) {
                $action = $_GET['action'];
            } else {
                $action = 'index';
            }
            }else{
                $controller = 'pages';
                $action = 'home';
            }
            // echo 'Bạn đã đăng nhập với tên là '.$_SESSION['username']."<br/>";
            // //echo 'Click vào đây để <a href="logout.php">Logout</a>';
            // $controller = 'schedules';
            // $action = 'index';
            
        // }
        // else{
        //     echo 'Bạn chưa đăng nhập';
        //     $controller = 'customers';
        //     $action = 'renderLogin';
        // }
        require_once('routes.php');
    ?>
</body>
</html>