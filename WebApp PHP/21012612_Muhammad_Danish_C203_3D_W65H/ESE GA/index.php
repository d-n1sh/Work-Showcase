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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="styling.css"/>
        
        
            
       
        
    </head>
    <body data-spy="scroll" data-target=".header" data-offset="50">
               
        <header class="header">
            <a>
                <div style="background: linear-gradient(to top, rgba(255, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0) 100%);" class="header__logo" href="#home"><img src="https://www.cristianoronaldo.com/assets/logos/cr7.svg" alt="Cristiano Ronaldo Logo"></div>
            </a>
                <nav class="header__nav">
                    <a class="header__nav-item--active" href="#home">Home</a>
                    <a class="header__nav-item" href="#aboutme">About Me</a>
                    <a class="header__nav-item" href="#experience">Experience</a>
                    <a class="header__nav-item" href="#achievements">Achievements</a>
                    <a class="header__nav-item">Contact</a>
                </nav>
        </header>
        <main id="main">
<!--            <section class="carousel" id="cr7">
                <div class="slider--brands embla is-draggable">
                    <div class="embla__container slider__wrapper" style="transform: translate3d(0px, 0px, 0px);">
                        <a href="#career-highlights" class="panel panel--brands panel--brands--highlight" style="opacity: 1;">
                            <div class="panel__text" style="transform: none;">
                                <p class="t-weight-bold t-size-ml t-kern-xs t-condensed t-uppercase" style="transform: none;">CAREER <span class="t-weight-light">Highlights</span></p>
                                <p class="t-size-sm t-line-ls mt-1" style="transform: none;">Cristiano Ronaldo's highlights and achievements.</p>
                                <p class="panel__link t-uppercase t-size-xxs t-kern-xs mt-2" style="transform: none;">View Highlights<img src="/assets/icons/arrow.svg" class="panel__link-arrow"></p>
                            </div>
                            <div class="panel__video"><video loop="" autoplay="" playsinline=""><source src="/files/highlights/CR7_WebsiteHighlights-Carrousel-2023-Vertical.mp4">Your browser does not support the video tag.</video></div>
                        </a>
                        <a href="/brands/" class="panel panel--brands panel--brands--dim" style="opacity: 1;">
                            <div class="panel__text" style="transform: none;">
                                <p class="t-weight-bold t-size-ml t-kern-xs t-condensed t-uppercase" style="transform: none;">URSU <span class="t-weight-light">Water</span></p>
                                <p class="t-size-sm t-line-ls mt-1" style="transform: none;">URSU is much more than water... It is an inspiration do drink health and a lifestyle.</p>
                                <p class="panel__link t-uppercase t-size-xxs t-kern-xs mt-2" style="transform: none;">View more<img src="/assets/icons/arrow.svg" class="panel__link-arrow"></p>
                            </div>
                            <div class="panel__image"><img alt="URSU" src="/assets/images/brand_ursu.jpg?t=2067825244" style="opacity: 1;"></div>
                        </a>
                        <a target="_blank" rel="noreferrer noopener" href="https://www.cr7-eyewear.com" class="panel panel--brands panel--brands--dim" style="opacity: 1;">
                            <div class="panel__text" style="transform: none;">
                                <p class="t-weight-bold t-size-ml t-kern-xs t-condensed t-uppercase" style="transform: none;">CR7 <span class="t-weight-light">Eyewear</span></p>
                                <p class="t-size-sm t-line-ls mt-1" style="transform: none;">A contemporary collection able to masterfully match any type of look: classic colors for everyday style alternate with more eye-catching tones or a style that does not go unnoticed.</p>
                                <p class="panel__link t-uppercase t-size-xxs t-kern-xs mt-2" style="transform: none;">Shop Now<img src="/assets/icons/arrow.svg" class="panel__link-arrow"></p>
                            </div>
                            <div class="panel__image"><img alt="CR7" src="/assets/images/brand_eyewear.jpg?t=832236" style="opacity: 1;"></div>
                        </a>
                        <a class="panel panel--brands panel--brands--dim" style="opacity: 1;">
                            <div class="panel__text" style="transform: none;">
                                <p class="t-weight-bold t-size-ml t-kern-xs t-condensed t-uppercase" style="transform: none;">CR7 <span class="t-weight-light">Underwear</span></p>
                                <p class="t-size-sm t-line-ls mt-1" style="transform: none;">Working with quality materials and many years of experience of producing underwear, the CR7 collections delivers a perfect and unique fit.</p>
                            </div>
                            <div class="panel__image"><img alt="CR7" src="/assets/images/brand_underwear.jpg?t=812974" style="opacity: 1;"></div>
                        </a>
                        <a target="_blank" rel="noreferrer noopener" href="https://www.cr7fragrances.store" class="panel panel--brands panel--brands--dim" style="opacity: 1;">
                            <div class="panel__text" style="transform: none;">
                                <p class="t-weight-bold t-size-ml t-kern-xs t-condensed t-uppercase" style="transform: none;">CR7 <span class="t-weight-light">Fragrances</span></p>
                                <p class="t-size-sm t-line-ls mt-1" style="transform: none;">Discover the brand new casual evening fragrance inspired by Cristiano Ronaldo's fearless and determined spirit.</p>
                                <p class="panel__link t-uppercase t-size-xxs t-kern-xs mt-2" style="transform: none;">Shop Now<img src="/assets/icons/arrow.svg" class="panel__link-arrow"></p>
                            </div>
                            <div class="panel__image"><img alt="CR7" src="/assets/images/brand_fragrances.jpg?t=3103296480" style="opacity: 1;"></div>
                        </a>
                        <a target="_blank" rel="noreferrer noopener" href="https://www.cr7footwear.com" class="panel panel--brands panel--brands--dim" style="opacity: 1;">
                            <div class="panel__text" style="transform: none;">
                                <p class="t-weight-bold t-size-ml t-kern-xs t-condensed t-uppercase" style="transform: none;">CR7 <span class="t-weight-light">Footwear</span></p>
                                <p class="t-size-sm t-line-ls mt-1" style="transform: none;">A new footwear line that further enriches the whole collection and interprets the style of the most demanding and eccentric man.</p>
                                <p class="panel__link t-uppercase t-size-xxs t-kern-xs mt-2" style="transform: none;">Shop Now<img src="/assets/icons/arrow.svg" class="panel__link-arrow"></p>
                            </div>
                            <div class="panel__image"><img alt="CR7" src="/assets/images/brand_footwear.jpg?t=892735" style="opacity: 1;"></div>
                        </a>
                    </div>
                </div>
                <div class="scroll-indicator"><div class="scroll-indicator__line" style="transform: scaleY(0) translateZ(0px); opacity: 0;"></div></div>
            </section>-->
            
<!--            <div class="slider-wrapper">
                    <div class="slider">
                            <div id="slide-1" class="slide" style="background-image: url(https://images.unsplash.com/photo-1466853817435-05b43fe45b39?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2198&q=80);"></div>

                            <div id="slide-2" class="slide" style="background-image: url(https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2370&q=80);"></div>

                            <div id="slide-3" class="slide" style="background-image: url(https://images.unsplash.com/photo-1434725039720-aaad6dd32dfe?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2842&q=80);"></div>
                    </div>

                    <div class="dots">
                            <a href="#slide-1"></a>
                            <a href="#slide-2"></a>
                            <a href="#slide-3"></a>
                    </div>
            </div>

            <small class="caption">Use the arrow keys to navigate</small>-->
            
                <video width="800" autoplay>
                    <source src="images/mov_bbb.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
<br>
                <div id="home" class="container-fluid">
                    <div class="row">
                        <div class="column ws">
                            <div class="shade">
                                <div class=fill>
                                    <a href="#achievements">
                                    <img src="https://visualflood.com/wp-content/uploads/2021/01/stunning-3d-portraits-and-illustrations-made-out-of-layered-paper-cuts-by-ale-rambar-3.jpg" style="width:100%">
                                    <footer>
                                        <h4>Work & Skills</h4>
                                        <p>Lorem ipsum dolor..</p>
                                    </footer>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column int">
                            <div class=fill>
                                <img src="https://visualflood.com/wp-content/uploads/2021/01/stunning-3d-portraits-and-illustrations-made-out-of-layered-paper-cuts-by-ale-rambar-3.jpg" style="width:100%">
                                <footer>
                                <h4>Interests</h4>
                                <p>Lorem ipsum dolor..</p>
                                </footer>
                            </div>
                        </div>
                        <div class="column achv">
                            <div class=fill>
                                <img src="https://visualflood.com/wp-content/uploads/2021/01/stunning-3d-portraits-and-illustrations-made-out-of-layered-paper-cuts-by-ale-rambar-3.jpg" style="width:100%">
                                <footer>
                                <h4>Awards</h4>
                                <p>Lorem ipsum dolor..</p>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>

<br><br><br><br><br><br><br><br><br><br><br>

                <div id="aboutme" class="container-fluid">
                    <h1>About Me</h1>
                    <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
                    <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
                </div>
                <div id="experience" class="container-fluid">
                    <h1>Experience</h1>
                    <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
                    <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
                </div>
                <div id="achievements" class="container-fluid">
                    <h1>Achievements</h1>
                    <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
                    <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
                </div>
                <div id="section42" class="container-fluid">
                    <h1>Section 4 Submenu 2</h1>
                    <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
                    <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
                </div>

        </main> 
        
    </body>
</html>