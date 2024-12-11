<?php
session_start();
include "dbFunctions.php"; 

$userID = $_SESSION['userId'];
$theID = $_GET['reviewId'];

$queryReviews = "SELECT * FROM reviews r, users u WHERE r.userId=u.userId AND r.reviewId=$theID";
$resultReviews = mysqli_query($link, $queryReviews) or die(mysqli_error($link));
while ($rowReviews = mysqli_fetch_array($resultReviews)) {
    $arrH[] = $rowReviews;
}

$query = "SELECT * FROM reviews WHERE reviewId=$theID";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
while ($row = mysqli_fetch_array($result)) {
    $arrReviews[] = $row;
}

$queryUsers = "SELECT * FROM users WHERE userId=$userID";
$resultUsers = mysqli_query($link, $queryUsers) or die(mysqli_error($link));

$rowUsers = mysqli_fetch_array($resultUsers);
if(!empty($rowUsers)){
    $username = $rowUsers['username'];
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
        <title>Edit</title>
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
              padding-left: 18px" action="doEditReview.php">
            <h1 style="text-align: center">Edit Review</h1>
            <label>Username:</label>
            <br/>
            <input style=" width: 465px;" disabled="" class="" value="<?php echo $username?>"/>
            <br/><br/>
            
            <label>Comments:</label>
            <br/>
            <textarea rows="5" cols="60" 
              name="comments"><?php echo $arrReviews['review'] ?>
            </textarea> 
            <br/><br/>
            
            <label>Ratings:</label>
                    
                        <select id="idRat" name="ratings">
                            <?php
                            for ($i = 0; $i < count($arrReviews); $i++) {
                                ?>
                                <option value="<?php echo $arrReviews[$i]['reviewId'] ?>">
                                    <?php echo $arrReviews[$i]['rating'] ?>
                                </option>
                            <?php } ?>
                        </select>            
            <br/>
            <input type="hidden" name="id" value="<?php echo $reviewid ?>"/>
            <br/>
            <input type="submit" value="Update Item"/>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
