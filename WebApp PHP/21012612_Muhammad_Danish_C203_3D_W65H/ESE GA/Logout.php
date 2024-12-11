<?php
session_start();

// php file that contains the common database connection code
include "dbFunctions.php";

if (isset($_SESSION['username'])) {
    session_destroy();
    $message = "<p>You have logged out.<br/><br/>
        <a href='Login.php'>Go back to login page</a></p>";
}
else {
    session_destroy();
    $message = "<p>You are not logged in.<br/><br/>
            <a href='Login.php'>Click here to login</a></p>";
}

?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>Logout</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        
    </head>
    <body>
        
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            
            <div class="container-fluid">
              <a class="navbar-brand" href="javascript:void(0)">Hotel Review</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="hotelList.php">Hotels</a>
                  </li>
                </ul>
                  
                <form class="d-flex">
                    <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="Register.php">Login/Register</a>
                  </li>
                </ul>
                  <input class="form-control me-2" type="text" placeholder="Search">
                  <button class="btn btn-primary" type="button">Search</button>
                </form>
              </div>
            </div>
            
        </nav>
        
        <?php
        echo $message;
        ?>
    </body>
</html>