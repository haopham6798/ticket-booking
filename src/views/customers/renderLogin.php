<html>
    <head></head>
    <body>
    <br>
    <form action="index.php?controller=customers&action=login" method="POST">
        <label for="email">Email</label> 
        <input type="text" name="email" id="email"><br>
        <label for="password">Password</label>
        <input type="password" name="password" id ="password"><br>
        <input type="submit" value="submit" name="submit-btn">
        <?php
                // Nếu người dùng click vào button Gửi Dữ Liệu
                // Vì button đó tên là form_click nên đó cũng là
                // tên của key nằm trong biến $_POST
                // if (isset($_POST['submit-btn'])){
                //     echo 'Tên đăng nhập là: ' . $_POST['email'];
                //     echo '<br/>';
                //     echo 'Mật khẩu là: ' . $_POST['password'];
                // }
               
           ?>
    </form>
    </body>
    <!-- <p>action="http://localhost:8080/index.php?controller=customers&action=login"</p> -->
</html>