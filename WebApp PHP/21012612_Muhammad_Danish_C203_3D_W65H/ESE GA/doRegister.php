<?php

//include "dbFunctions.php";
//        
//        $query = "SELECT * FROM users";
//        $result = mysqli_query($link, $query) or die (mysqli_error($link));
//        $row = mysqli_fetch_array($result);
//        if(!empty($row)){
//            $username = $row['username'];
//            $password = $row['password'];
//            $name = $row['name'];
//            $address = $row['address'];
//            $email = $row['email'];
//        }

include "dbFunctions.php";

$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];

$msg = "";

$query = "INSERT INTO users(username, password, name, address, email)
        VALUES('$username', SHA1('$password'), '$name', '$address', '$email')";


$result = mysqli_query($link, $query);

if ($result) {
    $msg .= "<b>Account Registered Successfully!<br/></b>";
    $msg .= "Username: " . $username . "<br/>";
    $msg .= "Password: " . $password . "<br/>";
    $msg .= "Name: " . $name . "<br/>";
    $msg .= "Address: " . $address . "<br/>";
    $msg .= "Email: " . $email . "<br/><br/>";
} else {
    $msg = "Account Registered Unsuccessfully!</br>
            <a href='Register.php'>Try again!</a>";
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
        <meta charset="UTF-8">
        <title>doRegister</title>
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
                        <a class="nav-link" href="Login.php">Login/Register</a>
                  </li>
                </ul>
                  <input class="form-control me-2" type="text" placeholder="Search">
                  <button class="btn btn-primary" type="button">Search</button>
                </form>
              </div>
            </div>
            
        </nav>
        
        <?php
        echo $msg;
        ?>
        
    </body>
</html>