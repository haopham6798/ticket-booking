
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
                        <input type="radio" id ="genderMale" class="form-check-input" name="customer_gender" value="1">
                        <label class="form-check-label" for="genderFemale">Female</label>
                        <input type="radio" id ="genderFemale" class="form-check-input" name="customer_gender" value="0">
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
                    <input type="password" id="customer_password" class="form-control" name="customer_password" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="confirm_password" class="col-md-4 col-form-label text-md-right">Re-enter Password</label>
                <div class="col-md-6">
                    <input type="password" id="confirm_password" class="form-control" name="confirm_password" required>
                    <span id="message"></span>
                </div>
            </div>

                    
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary" >
                    Register
                </button>
                <span id="warning"></span>
            </div>
        </form>

        <script>
        $(document).ready(function(){
            $('#confirm_password').on('keyup', function () {
            if ($('#customer_password').val() == $('#confirm_password').val()) {
                $('#message').html('Matching').css('color', 'green');
                $('#warning').remove();
            } else 
                $('#message').html('Not Matching').css('color', 'red');
            });
            
            $("form").submit(function(e){
                if ($('#customer_password').val() != $('#confirm_password').val()){
                    e.preventDefault();
                    $('#warning').html('Not Matching').addClass("alert alert-danger");
                }
            });
        });
           
        </script>

    </body>
</html>