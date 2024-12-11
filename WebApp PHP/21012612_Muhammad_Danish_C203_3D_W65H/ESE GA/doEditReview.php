<?php
session_start();
include "dbFunctions.php";

$newReview = $_POST['comments'];
$newRating = $_POST['ratings'];

$query = "UPDATE reviews SET review = '$newReview', rating = '$newRating'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

$queryReviews = "SELECT * FROM reviews r, users u WHERE r.userId=u.userId";
$resultReviews = mysqli_query($link, $queryReviews) or die(mysqli_error($link));

$rowReviews = mysqli_fetch_array($resultReviews);

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
        
        <?php if(isset($_SESSION['userId'])) {?>
                <a class="nav-link" style="text-align: right" href="profile.php">Welcome, <?php echo $_SESSION['name'] ?></a>
        <?php } ?>
        
        <form style="margin: auto;
              margin-top: 10px;
              width: 500px;
              height: auto;
              line-height: 24px;
              background-color: whitesmoke;
              padding-left: 18px">
            <h1 style="text-align: center">Review Edited</h1>
            <b><label>Comments:</label></b>
            <br/>
              <?php echo $newReview ?>
            <br/><br/>
            
            <b><label>Ratings:</label></b>                           
              <?php echo $newRating ?>"
            <br/>
            <input type="hidden" name="id" value="<?php echo $rowReviews['reviewId'] ?>"/>
            <br/>
            <input type="submit" value="Update Item"/>
        </form>
                
    </body>
</html>
