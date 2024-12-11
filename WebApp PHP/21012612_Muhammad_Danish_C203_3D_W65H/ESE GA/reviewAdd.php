<?php
session_start();
include "dbFunctions.php";

$userID = $_SESSION['userId'];
$theID = $_GET['id'];

$queryHotels = "SELECT * FROM hotels WHERE hotelId=$theID";
$resultHotels = mysqli_query($link, $queryHotels) or die(mysqli_error($link));
$rowHotels = mysqli_fetch_array($resultHotels);

$query = "SELECT * FROM users WHERE userId=$userID";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

$rowUsers = mysqli_fetch_array($result);

$queryr = "SELECT * FROM reviews";
$resultr = mysqli_query($link, $queryr) or die(mysqli_error($link));
while ($row = mysqli_fetch_array($resultr)) {
    $arrReviews[] = $row;
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
              width:500px;
              height:auto;
              line-height: 24px;
              background-color: whitesmoke;
              padding-left: 18px" action="doReviewAdd.php?id=<?php echo $theID ?>">

            <h1 style="text-align: center">Add new review for <?php echo $rowHotels['hotelName'] ?></h1>
            <label>Username:</label>
            <br/>
            <input style=" width: 465px;" disabled="" class="" value="<?php echo $rowUsers['username'] ?>">
            <br/><br/>
            
            <label>Comments:</label>
            <br/>
            <textarea rows="5" cols="60" 
              name="comments"></textarea> 
            <br/><br/>
            
            <label>Ratings:</label>
                    <br/>
                    <select style="width: 463px" id="idRat" name="ratings">
                            <option selected>Select Rating</option>
                            <?php for ($i = 1; $i < 6; $i++) { ?>
                            <option>
                                 <?php echo $i ?>
                            <?php } ?>
                        </option>
                        </select>            
            <br/>
            <div style="padding-top: 10px; margin-left: 180px">
                <input class="btn btn-dark" style="display: " type="submit" value="Add Review"/>
            </div>
        </form>
    </body>
</html>
