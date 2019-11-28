<html>
    <head>
    </head>
    <body>
        <form action="index.php?controller=customers&action=register" method="POST">
        <label for="name">Full Name: </label> 
        <input type="text" name="name" id="name" value="Hoang Hao"><br>

        <label for="gender">Gender</label> 
        <input type="checkbox" name="gender" id="gender" value="1"><br>

        <label for="bd">Birthday</label> 
        <input type="text" name="bd" id="bd" value='1992-07-09'><br>

        <label for="email">Email</label> 
        <input type="text" name="email" id="email"><br>
        <label for="password">Password</label>
        <input type="password" name="password" id ="password" value="1234"><br>
        <input type="submit" value="submit" name="submit-btn">
        <?php
                if (isset($_POST['submit-btn'])){
                     echo 'Tên đăng nhập là: ' . $_POST['email'];
                    echo '<br/>';
                    echo 'Mật khẩu là: ' . $_POST['password'];
                    echo 'Ten là: ' . $_POST['name'];
                    echo 'Gioi tinh là: ' . $_POST['gender'];
                    echo 'Nam sinh là: ' . $_POST['bd'];
                }
        ?>
        </form>
    </body>
</html>