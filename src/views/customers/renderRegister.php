<html>
    <head>
    </head>
    <body>
        <form action="index.php?controller=customers&action=register" method="POST">
            <div class="form-group row">
                <label for="fullname" class="col-md-4 col-form-label text-md-right">Full Name</label>
                <div class="col-md-6">
                    <input type="text" id="fullname" class="form-control" name="customer_name" required autofocus>
                </div>
            </div>
            <div class="row">
            <label class="col-md-4 col-form-label text-md-right">Gender</label>
                <div class="col-md-6 form-check-inline">
                        <label class="form-check-label" for="genderMale">Male</label>
                        <input type="checkbox" id ="genderMale" class="form-check-input" name="customer_gender" value="1">
                        <label class="form-check-label" for="genderFemale">Female</label>
                        <input type="checkbox" id ="genderFemale" class="form-check-input" name="customer_gender" value="0">
                </div>
            </div>
            <div class="form-group row">
                <label for="bd" class="col-md-4 col-form-label text-md-right">Birth Date</label>
                <div class="col-md-6">
                    <input type="date" id="bd" class="form-control" name="customer_bd" required autofocus>
                </div>
            </div>

            <div class="form-group row">
                <label for="customer_email" class="col-md-4 col-form-label text-md-right">Email</label>
                <div class="col-md-6">
                    <input type="text" id="customer_email" class="form-control" name="customer_email" required autofocus>
                </div>
            </div>

            <div class="form-group row">
                <label for="customer_password" class="col-md-4 col-form-label text-md-right">Password</label>
                <div class="col-md-6">
                    <input type="customer_password" id="customer_password" class="form-control" name="customer_password" required>
                </div>
            </div>

                    
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Register
                </button>
            </div>
        </form>
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