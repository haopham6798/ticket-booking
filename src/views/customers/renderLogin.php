<html>
    <head></head>
    <body>
    <br>
    <div>
        <form action="index.php?controller=customers&action=login" method="POST">
            <div class="form-group row">
                <label for="customer_email" class="col-md-4 col-form-label text-md-right">Email</label>
                    <div class="col-md-6">
                        <input type="text" id="customer_email" class="form-control" name="email" required autofocus>
                    </div>
            </div>

            <div class="form-group row">
                <label for="customer_password" class="col-md-4 col-form-label text-md-right">Password</label>
                <div class="col-md-6">
                    <input type="password" id="customer_password" class="form-control" name="password" required>
                </div>
            </div>
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Login
                </button>
            </div>                           
        </form>
    </div>

    <div>
        <div class="d-flex justify-content-center links">
            Don't have an account? 
            <button id="btn-model-register" type="button" class="btn btn-light" >
            <a href="index.php?controller=customers&action=renderRegister">Register</a>
            </button>
        </div>
    </div>
    </body>
    <!-- <p>action="http://localhost:8080/index.php?controller=customers&action=login"</p> -->
</html>