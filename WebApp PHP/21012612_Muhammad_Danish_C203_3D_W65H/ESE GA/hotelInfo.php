<?php
session_start();
include "dbFunctions.php";

$theID = $_GET['id'];

$query = "SELECT * FROM hotels WHERE hotelId = $theID";
$result = mysqli_query($link, $query) or die (mysqli_error($link));
$row = mysqli_fetch_array($result);
if(!empty($row)){
            $id = $row['hotelId'];
            $hotelname = $row['hotelName'];
            $hoteladdress = $row['hotelAddress'];
            $hotelnumber = $row['contactNo'];
            $hoteldescription = $row['description'];
            $image = $row['picture'];
}

while ($row = mysqli_fetch_array($result)) {
    $arrContent[] = $row;
}

?>

<?php

$queryUsers = "SELECT * FROM users";
$resultUsers = mysqli_query($link, $queryUsers) or die(mysqli_error($link));

while ($rowUsers = mysqli_fetch_array($resultUsers)) {
    $arrUsers[] = $rowUsers;
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <title>hotelInfo</title>
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
        
        <?php if(!empty($theID)) { ?>
        
        <?php if(isset($_SESSION['userId'])) {?>
                <a class="nav-link" style="text-align: right" href="profile.php">Welcome, <?php echo $_SESSION['name'] ?></a>
        <?php } ?>
                
        <div class="column" style="text-align: center">
            <h1>Hotel Information<h1>
        
            <div class="card" style="border-top: auto; text-align: center; ">
                <h3><?php echo $hotelname ?></h3>
                <h6>
                <b>Address: </b><?php echo $hoteladdress ?>
                <br>
                <b>Date Sold:</b>
                <?php echo $hotelnumber ?>
                <br>
                <b>Quality:</b><p style=" text-align: center; width: 1000px; padding-left: 510px ">
                <?php echo $hoteldescription ?></p>
                <br>
                <img src="Images/<?php echo $image ?>" width="600px"/>
                <br/>
                <form method="POST" style="padding-top: 10px">
                    <?php if (isset($_SESSION['userId'])) {?>
                            <a type="submit" value="See Review" class="btn btn-dark"
                            href="hotelReview.php?id=<?php echo $theID ?>">See Review</a>
                    <?php }
                          else {?>
                            <a type="submit" value="See Review" class="btn btn-dark"
                            href="Login.php">See Review</a>
                    <?php } ?>
                </form>
                <h6>
            </div>
        
        </div>

        <?php } ?>
    </body>
</html>