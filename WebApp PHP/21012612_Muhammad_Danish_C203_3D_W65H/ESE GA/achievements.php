<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        
        <title>Experience</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="styling.css?v=<?php echo time(); ?>"/>
        
        
            
       
        
    </head>
    <body data-spy="scroll" data-target=".header" data-offset="50">
               
        <header class="header">
            <a href="index.php">
                <div style="background: linear-gradient(to top, rgba(255, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0) 10%);" class="header__logo"><img src="images/Name.png" style="width: 50%;" alt="Danish Logo"></div>
            </a>
                <nav class="header__nav">
                    <a class="header__nav-item" href="index.php#home">Home</a>
                    <a class="header__nav-item" href="index.php#aboutme">About Me</a>
                    <div class="dropdown">
                        <a class="header__nav-item">Experience</a>
                        <div class="dropdown-content">
                            <a class="dropdown_item" href="vr.php">Virtual Reality</a><br><br>
                            <a class="dropdown_item" href="app.php">App & Website Development</a><br><br>
                            <a class="dropdown_item" href="design.php">Design</a>
                        </div>
                    </div>
                    <a class="header__nav-item--active" href="achievements.php">Achievements</a>
                    <a class="header__nav-item" href="index.php#contact">Contact</a>
                </nav>
        </header>
        
        <div class="footer">
            <h6 class="font--condensed"> © Danish Aziz, All Rights Reserved</h6>
        </div>

    </body>
</html>