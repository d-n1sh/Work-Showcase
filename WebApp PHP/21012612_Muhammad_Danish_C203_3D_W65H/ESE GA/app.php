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
                        <a class="header__nav-item--active">Experience</a>
                        <div class="dropdown-content">
                            <a class="dropdown_item" href="vr.php">Virtual Reality</a><br><br>
                            <a class="dropdown_item--active" href="app.php">App & Website Development</a><br><br>
                            <a class="dropdown_item" href="design.php">Design</a>
                        </div>
                    </div>
                    <a class="header__nav-item" href="achievements.php">Achievements</a>
                    <a class="header__nav-item" href="index.php#contact">Contact</a>
                </nav>
        </header>
        
        <div id="home" class="container-fluid">
            <h1 class="weight--bold" style="text-align: center;">App & Website Development</h1><br>
            
            <div class=row>
                <div class="columnmix" style="margin-left: 150px">
                    <h5 class="text--uppercase t-kern-xs" style="font-size: 25px"><b>Title</b></h5>
                    <h1 class="weight--bold" style="font-size: 50px; color: #f38a8a;">VR Escape Room</h1>
                    <br><br><br>
                    <h5 class="text--uppercase t-kern-xs" style="font-size: 25px;"><b>Software</b></h5>
                    <h6 class="t-kern-xs" style="font-size: 20px">Unity</h6>
                    <br><br>
                    <h5 class="text--uppercase t-kern-xs" style="font-size: 25px;"><b>Year Of Project</b></h5>
                    <h6 class="t-kern-xs" style="font-size: 20px">2022</h6>
                </div>
                <div class="columnmix" style="margin-left: 40px">
                <h5 class="text--uppercase t-kern-xs" style="font-size: 25px"><b>About</b></h5>
                    <p class="t-kern-xs">
                    This project was given to me at the start of lesson 1 and was tasked to design and code an escape room with any theme.
                    Using the resources and knowledge I was provided with, I created four different puzzles and implemented them into the 2D world.
                    </p>
                    <br><br>
                    <h5 class="text--uppercase t-kern-xs" style="font-size: 25px;"><b>Objectives</b></h5>
                    <p class="t-kern-xs">
                    After some thinking, I came up with 4 unique puzzles and they are:<br>
                    1. <b>Find</b> the key to unlock the door.<br>
                    2. <b>Solve</b> the color to unlock the door.<br>
                    3. <b>Navigate</b> through the maze.<br>
                    4. <b>Match</b> the sound to end the game.<br>
                    </p>
                    <br><br>
                    <h5 class="text--uppercase t-kern-xs" style="font-size: 25px;"><b>Thoughts</b></h5>
                    <p class="t-kern-xs">
                    If I were given a chance to refine this project, I would definitely give it another shot as I know I can outdo myself with my
                    current skills. However, what matters to me is that I really enjoyed the process while I was coding the escape room and that
                    I have learnt quite a number of things from this project.
                    </p><br>
                </div>
                
            </div>
                <video width="60%" controls>
                    <source src="images/Video_Danish.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video><br>


            <div class="footer">
                <h6 class="font--condensed"> © Danish Aziz, All Rights Reserved</h6>
            </div><br>
        </div>

    </body>
</html>