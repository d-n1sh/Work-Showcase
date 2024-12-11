<?php
session_start();
include "dbFunctions.php";

$userID = $_SESSION['userId'];
$theID = $_GET['id'];
$review = $_POST['comments'];
$rating = $_POST['ratings'];
$date = date_default_timezone_set("Singapore");
        date("Y-m-d");

$query = "INSERT INTO reviews (hotelId,userId,review,rating,datePosted)
    VALUES ('$theID',$userID,'$review',$rating,$date)";
$status = mysqli_query($link, $query) or die(mysqli_error($link));

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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <title></title>
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
                        <?php if(isset($_SESSION['userId'])) { ?>
                                <a class="nav-link" href="Logout.php">Logout</a>
                        <?php }
                            else { ?>
                                <a class="nav-link" href="Login.php">Login/Register</a>
                        <?php } ?>
                  </li>
                </ul>
                  <input class="form-control me-2" type="text" placeholder="Search">
                  <button class="btn btn-primary" type="button">Search</button>
                </form>
              </div>
            </div>
            
        </nav>
        
        <form method="post" style="margin: auto;
              margin-top:10px;
              width:400px;
              height:auto;
              line-height: 24px;
              background-color: whitesmoke;
              padding-left: 18px">
            <h1 style="text-align: center">Review Added</h1>
            <br/>
            
            <b>Comments:</b>
            <br/>
            <?php echo $review ?>
            <br/>
            <br/>
            <b>Ratings:</b>
            <br/>        
            <?php echo $rating ?>   
            <br/>
            <br/>
            <b>Date:</b>
            <br/>
            <?php
            date_default_timezone_set("Singapore");
            echo date("Y-m-d");
            ?>
        </form>
    </body>
</html>
