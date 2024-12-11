<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <title>Login</title>
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
                    <a class="nav-link" href="Register.php">Login/Register</a>
                  </li>
                </ul>
                  <input class="form-control me-2" type="text" placeholder="Search">
                  <button class="btn btn-primary" type="button">Search</button>
                </form>
              </div>
            </div>
            
        </nav>
        
        
        <form name="frmContant" method="post" action="doLogin.php" action="hotelList.php" style="margin:auto;
                margin-top:10px;
                width:500px;
                height:auto;
                font-family: Times New Roman, Georgia, serif;
                font-size: 12px; 
                line-height: 24px;
                font-weight: bold;
                color:darkblue;
                padding:10px;
                background-color: whitesmoke;
                ">
            <h1 style=' text-align: center'>Login</h1>
            Username: <input id="idName" type="text" name="username" placeholder="Enter username" style="width:480px;
                margin: auto;
                display:block;
                border: 1px solid gray;
                height: 25px;"/>
            <br/>
            Password: <input id="idEmail" type="password" name="password" placeholder="Enter password" style="width:480px;
                display:block;
                border: 1px solid gray;
                height: 25px;"/>
            <br/>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check" name="remember" style="margin-top: 6px;">
                <label class="form-check-label" style="color:black;">Remember me</label>
            </div>
            <br/>
            <input type="submit" value="Login" style="width:50px;
                background-color: black;
                color: white;
                margin: auto;
                display:block;
                height:30px;"/>
            <br/>
        </form>
        
        <form style="text-align: center; width: auto">
            <p> Not a member yet? <a href="Register.php" style="color: blue; text-decoration: underline;">Register</a> now!</p>
        </form>
        
    </body>
</html>