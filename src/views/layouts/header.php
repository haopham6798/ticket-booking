<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href=index.php>Home</a>
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item ">
          <div class="dropdown">
              <a class="btn btn-light dropdown-toggle"  role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Kind
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <?php 
                    require_once('models/kind.php');
                    $kinds = Kind::all();
                    // $kinds = array('kinds'=>$kinds);
                    // print_r($kinds->kind_id);
                    foreach($kinds as $kind) {
                      // print_r();
                      ?>
                      <a class="dropdown-item" href="index.php?controller=movies&kind_name=<?php echo $kind->kind_name; ?>"><?php echo $kind->kind_name; ?></a>
                      <?php
                    }
                  ?>
              </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?controller=schedules">Schedule</a>
        </li>
        <li>
          <a class="nav-link" href="index.php?controller=movies&action=add">Add</a>
        </li>
        <li>
          <?php
           if(isset($_SESSION['username'])){
            echo "<a class='nav-link' href='index.php?controller=tickets&action=profile&customer_id=".$_SESSION['customer_id']."'>Profile</a>";
           }
          ?>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" action="index.php?controller=movies&action=searchByName" method="post">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="movie_name">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <?php
        if(isset($_SESSION['username'])){
      ?>
      <div class="dropdown">
              <a class="btn btn-light dropdown-toggle"  role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo $_SESSION['username']; ?>
              </a>
              <div class="dropdown-menu btn btn-light" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="logout.php">Log Out</a>
              </div>
          </div>
      <?php
      // echo "<button type='button' class='btn btn-light' >
      //         <a href='logout.php'>Log Out</a>
      //         </button>";

      }else{
          echo "<button type='button' class='btn btn-light' >
                  <a href='index.php?controller=customers&action=renderLogin'>Login</a>
                  </button>";
      }
      ?>
  </nav>