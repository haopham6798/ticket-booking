<?php
    // include_once('./model/game/kind.php');
    // $k = new Kind();

    // $kind = $k->getAll();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Home</a>

  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <div class="dropdown">
            <a class="btn btn-light dropdown-toggle"  role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Kind
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#" value="">Action</a>
                <a class="dropdown-item" href="#" value="">Another action</a>
                <a class="dropdown-item" href="#" value="">Something else here</a>
            </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Schedule</a>
      </li>
      <li>
        <a class="nav-link" href="index.php?controller=movies&action=add">Add</a>
      </li>
    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    

    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#login-modal">
        Login
    </button>

    <!-- Modal Login-->
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal-label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="login-modal-label">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="index.php?controller=customers&action=login" method="POST">
                        <div class="form-group row">
                            <label for="email_address" class="col-md-4 col-form-label text-md-right">User name</label>
                            <div class="col-md-6">
                                <input type="text" id="email_address" class="form-control" name="user-name" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                            <div class="col-md-6">
                                <input type="password" id="password" class="form-control" name="password" required>
                            </div>
                        </div>

                        

                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>
                        </div>
                        
                    </form>
                </div>

                <div class="modal-footer">
                    <div class="d-flex justify-content-center links">
                        Don't have an account? 
                        <button id="btn-model-register" type="button" class="btn btn-light" data-toggle="modal" data-target="#register-modal">
                            Register
                        </button>
                    </div>
                    
            
                </div>

            </div>
        </div>
    </div>


    <!-- Modal Register-->
    <div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="register-modal-label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="register-modal-label">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="index.php?controller=customers&action=register" method="POST">
                        <div class="form-group row">
                            <label for="email_address" class="col-md-4 col-form-label text-md-right">User name</label>
                            <div class="col-md-6">
                                <input type="text" id="email_address" class="form-control" name="user-name" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                            <div class="col-md-6">
                                <input type="password" id="password" class="form-control" name="password" required>
                            </div>
                        </div>

                    
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>