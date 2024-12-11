<?php
session_start();
include "dbFunctions.php"; 

$queryHotels = "SELECT * FROM hotels";
$resultHotels = mysqli_query($link, $queryHotels) or die(mysqli_error($link));

while ($row = mysqli_fetch_array($resultHotels)) {
    $arrHotels[] = $row;
}
?>

<!--"SELECT h.hotelId,h.hotelName,h.hotelAddress,h.pictue,h.contactNo,
            h.description,u.userId,u.username,u.name FROM hotels h, users u
            WHERE u.userId=";-->

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
        
        <title>Hotels</title>
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
        
        <?php if(isset($_SESSION['userId'])) {?>
                <a class="nav-link" style="text-align: right" href="profile.php">Welcome, <?php echo $_SESSION['name'] ?></a>
        <?php } ?>
        <h1 style="text-align: center;">List of Hotels</h1>
        
        <div class="row" style="text-align: center;">
        <?php for ($i = 0; $i < count($arrHotels); $i++) {
                $id = $arrHotels[$i]['hotelId'];
                $name = $arrHotels[$i]['hotelName'];
                $address = $arrHotels[$i]['hotelAddress'];
                $image = $arrHotels[$i]['picture'];
                $contact = $arrHotels[$i]['contactNo'];
                $description = $arrHotels[$i]['description'];
        ?>

                <div class="card" style="width:370px; margin: 5px">
                    <img class="card-img-top" style="height: 230px" src="images/<?php echo $image; ?>" alt="<?php echo $name ?>">
                    <div class="card-body">
                      <h4 class="card-title"><?php echo $name ?></h4>
                      <p class="card-text"><?php echo $address ?></p>
                      <a href="hotelInfo.php?id=<?php echo $id; ?>">
                          <br>
                          See More</a>
                    </div>
                </div>
            <?php }
                ?>            
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>