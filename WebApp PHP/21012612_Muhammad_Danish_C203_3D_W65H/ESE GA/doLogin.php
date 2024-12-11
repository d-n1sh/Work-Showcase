<?php


session_start();

include "dbFunctions.php";

$loginname = $_POST['username'];
$loginpassword = $_POST['password'];

$msg = "";
$query = "SELECT * FROM users WHERE username = '$loginname'
        AND password = SHA1('$loginpassword')";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

if (mysqli_num_rows($result) == 1) {
    
    $row = mysqli_fetch_array($result);
    $_SESSION['userId'] = $row['userId'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['address'] = $row['address'];
    $_SESSION['email'] = $row['email'];
    
    
    header("location: hotelList.php");
    
    
    $msg = "<p>Login successfully.<p>";
    $msg .= "<p><i>Welcome, <a href='profile.php'>" . $_SESSION['name'] . "</a>!</p>";
    }
else {
    $msg = "<p>Login is not successful, please try again!</p>";
    $msg .= "<p><a href='Login.php'>Return to login page</a><p>";
}
mysqli_close($link);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <title>doLogin</title>
        <meta charset="UTF-8">
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
                        <?php if (mysqli_num_rows($result) == 1) { ?>
                            <a class="nav-link" href="Logout.php">Logout</a>
                        <?php
                        } else { ?>
                            <a class="nav-link" href="Login.php">Login/Register</a>
                        <?php
                        }
                        ?>
                  </li>
                </ul>
                  <input class="form-control me-2" type="text" placeholder="Search">
                  <button class="btn btn-primary" type="button">Search</button>
                </form>
              </div>
            </div>
            
        </nav>
        
        <?php
//        if(isset($_POST['remember'])){
//            $_POST['username'] == $username;
//        }
        echo $msg;
        ?>
        
    </body>
</html>
