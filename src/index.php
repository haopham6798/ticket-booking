<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tickettttt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>
<body>
    <h1>Enjoy your film!!!!!!</h1>
    <?php
        require_once('connection.php');

        if (isset($_GET['controller'])) {
            $controller = $_GET['controller'];
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
        } else {
            $action = 'index';
        }
        } else {
            $controller = 'pages';
            $action = 'home';
        }
        require_once('routes.php');
    ?>
</body>
</html>