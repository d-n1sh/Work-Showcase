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
                            <a class="dropdown_item" href="vr.php">Virtual Reality</a>
                            <a class="dropdown_item" href="app.php">App & Website Development</a>
                            <a class="dropdown_item" href="design.php">Design</a>
                        </div>
                    </div>
                    <a class="header__nav-item" href="achievements.php">Achievements</a>
                    <a class="header__nav-item" href="index.php#contact">Contact</a>
                </nav>
        </header>
        
        <div id="home" class="container-fluid">
            <div class="row">
                <div class="column ws">
                    <a href="experience.php">
                        <div class="shade">
                            <div class=fill>
                                <div class="image-container">
                                    <img src="https://visualflood.com/wp-content/uploads/2021/01/stunning-3d-portraits-and-illustrations-made-out-of-layered-paper-cuts-by-ale-rambar-3.jpg" style="width:100%">
                                    <div class="shade-overlay">
                                        <div class="hidden-text" style="transform: none;">
                                            <p class="t-weight-bold t-size-ml t-kern-xs t-condensed t-uppercase" style="transform: none;">
                                                WORK & SKILLS
                                            </p>
                                                
                                            <p class="t-size-sm t-line-ls mt-1" style="transform: none;">
                                                Experiences and Skills that I acquired thus far
                                            </p>
                                            <p class="panel__link t-uppercase t-size-xxs t-kern-xs mt-2" style="transform: none;">
                                                View More
                                                <img src="https://www.cristianoronaldo.com/assets/icons/arrow.svg" class="panel__link-arrow">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="column int">
                    <div class="shade">
                        <div class=fill>
                            <a href="interest.php">
                                <div class="image-container">
                                    <img src="https://visualflood.com/wp-content/uploads/2021/01/stunning-3d-portraits-and-illustrations-made-out-of-layered-paper-cuts-by-ale-rambar-3.jpg" style="width:100%">
                                    <div class="shade-overlay">
                                        <div class="hidden-text" style="transform: none;">
                                            <p class="t-weight-bold t-size-ml t-kern-xs t-condensed t-uppercase" style="transform: none;">
                                                INTERESTS
                                            </p>
                                                
                                            <p class="t-size-sm t-line-ls mt-1" style="transform: none;">
                                                Things that I did to relax myself during my freetime
                                            </p>
                                            <p class="panel__link t-uppercase t-size-xxs t-kern-xs mt-2" style="transform: none;">
                                                View More
                                                <img src="https://www.cristianoronaldo.com/assets/icons/arrow.svg" class="panel__link-arrow">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="column achv">
                    <div class="shade">
                        <div class=fill>
                            <a href="achievements.php">
                                <div class="image-container">
                                    <img src="https://visualflood.com/wp-content/uploads/2021/01/stunning-3d-portraits-and-illustrations-made-out-of-layered-paper-cuts-by-ale-rambar-3.jpg" style="width:100%">
                                    <div class="shade-overlay">
                                        <div class="hidden-text" style="transform: none;">
                                            <p class="t-weight-bold t-size-ml t-kern-xs t-condensed t-uppercase" style="transform: none;">
                                                AWARDS
                                            </p>
                                                
                                            <p class="t-size-sm t-line-ls mt-1" style="transform: none;">
                                                My achievements that made me who I am today
                                            </p>
                                            <p class="panel__link t-uppercase t-size-xxs t-kern-xs mt-2" style="transform: none;">
                                                View More
                                                <img src="https://www.cristianoronaldo.com/assets/icons/arrow.svg" class="panel__link-arrow">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </body>
</html>