<?php
session_start();
include "dbFunctions.php"; 

$theID = $_GET['id'];

$query = "SELECT * FROM reviews r, hotels h WHERE r.hotelId=h.hotelId AND h.hotelId=$theID";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

while ($row = mysqli_fetch_array($result)) {
    $arrContent[] = $row;
}
?>

<?php

$query2 = "SELECT * FROM hotels WHERE hotelId = $theID";
$result2 = mysqli_query($link, $query2) or die (mysqli_error($link));
$row2 = mysqli_fetch_array($result2);
if(!empty($row2)){
            $id = $row2['hotelId'];
            $hotelname = $row2['hotelName'];
            $hoteladdress = $row2['hotelAddress'];
            $hotelnumber = $row2['contactNo'];
            $hoteldescription = $row2['description'];
            $image = $row2['picture'];
}

while ($row2 = mysqli_fetch_array($result2)) {
    $arrContent2[] = $row2;
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
        <title>hotelReview</title>
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
                    <a class="nav-link" href="Logout.php">Logout</a>
                  </li>
                </ul>
                  <input class="form-control me-2" type="text" placeholder="Search">
                  <button class="btn btn-primary" type="button">Search</button>
                </form>
              </div>
            </div>
            
        </nav>
        
        <?php if(!empty($theID)) { ?>
        <h1 style="text-align: center">Hotel Reviews for <?php echo $hotelname ?></h1>
        
        <a href="reviewAdd.php?id=<?php echo $theID?>" style="text-align: center; padding-left: 700px">Add new Review</a>
        
        <table border="1" cellpadding="5" cellspacing="0" style="margin-right: auto; margin-left: auto; text-align: center; ">
                
                <tr>
                    <th>Review</th>
                    <th>Rating</th>
                    <th>Date Posted</th>
                    <th>User Id</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                for ($i = 0; $i < count($arrContent); $i++) {
                    $reviewid = $arrContent[$i]['reviewId'];
                    $rating = $arrContent[$i]['rating'];
                    $dateposted = $arrContent[$i]['datePosted'];
                    $userid = $arrContent[$i]['userId'];
                    $review = $arrContent[$i]['review'];
                ?>
                    <tr>
                        <td><?php echo $review ?></td>
                        <td><?php echo $rating ?></td>
                        <td><?php echo $dateposted ?></td>
                        <td><?php echo $userid ?></td>
                        <td><a href="editReview.php?reviewId=<?php echo $reviewid; ?>">Edit</a></td>
                        <td><a href="deleteReview.php?reviewId=<?php echo $reviewid; ?>">Delete </a></td>
                    </tr>
               <?php
                    
                }
                ?>   
            </table>
        <?php } ?>
    </body>
</html>
