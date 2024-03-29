<?php 
    include("./include.php");
?>
<?php 
    showHeader();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOCXI</title>

    <link rel="stylesheet" href="./styles/enhancements.css" class="css">
    <link rel="stylesheet" href="./styles/style.css" class="css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <!-- <header class="header">
        <div class="logo">
            <img src="./images/logo.png" alt="nocxi-logo">
        </div>
        <ul class="main-menu">
            <li class="drop"><a href="index.html">Home</a></li>
            <li class="drop"><a href="#">Pages</a>
                <ul class="pages-drop">
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </li>
            <li class="drop"><a href="./jobs.html">Jobs</a>
                <ul class="services-drop">
                    <li><a href="#">Server Administrator</a></li>
                    <li><a href="#">Security Specialist</a></li>
                    <li><a href="#">Product Development</a></li>
                </ul>
            </li>
            <li class="drop"><a href="./about.html">About us</a></li>
            <li class="drop"><a href="./enhancements.html">Enhancements</a></li>
            <li class="hiring">
                <a href="./jobs.html">We are Hiring!</a>
            </li>
        </ul>
        <div class="icon-control">
            <div class="log-in">
                <span class="fa-solid fa-lock"></span>
                <p>Log in</p>
            </div>
            <button class="start">Get started</button>
            <div class="iconsearch-ctr">
                <div class="wrap"></div>
                <div class="search-box">
                    <label for="search-input">
                        <input type="text" id="search-input" placeholder=" Search here..">
                        <span>Start searching</span>
                    </label>
                    <div class="icon">
                        <img src="https://img.icons8.com/fluency-systems-regular/48/000000/search--v1.png" alt="search-icon-small">
                    </div>
                </div>
                <img class="search" src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/64/000000/external-search-logistic-delivery-kiranshastry-solid-kiranshastry.png" alt="search-icon-big">
            </div>
        </div>
    </header> -->
    <section class="hero-content">
        <div class="hero-items">
            <ul class="hero-navi">
                <li>
                    <a href="/index.html">Home</a>
                </li>
                <li>
                    /
                </li>
                <li>
                    <a href="/enhancements.html">Enhancements</a>
                </li>
            </ul>
            <h2>Enhancements</h2>
        </div>
    </section>
    <section class="enhancements">
        <div class="enhance-title">
            <span>What we used</span>
            <h1>Enhancements</h1>
        </div>
        <div class="enhance-content">
            <div class="enhancement-1">
                <h1>@keyframes</h1>
                <h2>Description</h2>
                <p>
                    @keyframes in CSS is a rule that allows you to create 
                    animations by gradually changing from one set of CSS styles to another. 
                    It specifies the intermediate steps in the animation sequence through a series of percentages. 
                    The animation is defined by using the @keyframes keyword 
                    followed by a unique name for the animation sequence.
                </p>
                <h2>Explanation</h2>
                <ol>
                    <li>
                        <strong>Declaration:</strong> Begin by declaring the @keyframes 
                        rule with a name that identifies the animation sequence. <br>
                        <br>
                        For example: <br>
                        @keyframes slideRight{<br>
                        }
                    </li>
                    <li>
                        <strong>Define Animation Steps:</strong> Inside the @keyframes rule, 
                        define the animation steps using percentages (0% to 100% or from/to). 
                        Each percentage represents a point in time during the animation.
                        Specify the CSS styles at each step, indicating how the element 
                        should look at that particular point in the animation. <br>
                        <br>
                        For example: <br>
                        @keyframes slideRight{<br>
                            0% {
                                transform: translateX(0);
                            }
                            <br>
                            100% {
                                transform: translateX(100px);
                            }
                            <br>
                        }
                    </li>
                    <li>
                        <strong>Implement the Animation:</strong> After creating your custom
                        animation using @keyframes, apply the animation by using the 'animation' 
                        property. Specify the name of the animation, 
                        duration, and any other desired properties. <br>
                        <br>
                        For example: <br>
                        img{ animation: slideRight 1s ease;  }
                    </li>
                </ol>
                <h2>Reference(s)</h2>
                <ul>
                    <li>
                        <a href="https://youtu.be/PjR97QzOrJM?si=NrNl7PlS-SvWGUIz" target="_blank">CSS Animation Tutorial #4 - Keyframes</a>
                    </li>
                    <li>
                        <a href="https://www.w3schools.com/css/css3_animations.asp" target="_blank">CSS Animations by W3Schools</a>                        
                    </li>
                </ul>
                <h2>Implementation</h2>
                <ul>
                    <li>
                        <a href="./index.html" target="_blank">Home's header & hiring</a>
                    </li>
                    <li>
                        <a href="./about.html#more-img" target="_blank">About us's more-img class (load-in)</a>
                    </li>
                </ul>
            </div>
            <div class="enhancement-2">
                <h1>@media</h1>
                <h2>Description</h2>
                <p>
                    @media in CSS is used for creating responsive designs by 
                    applying styles based on specific conditions like screen width 
                    or device type. It enables adapting website layouts for different 
                    devices or screen sizes by defining CSS rules that activate only 
                    when certain conditions are met.
                </p>
                <h2>Explanation</h2>
                <ol>
                    <li>
                        <strong>Add @media Rule:</strong> Insert @media rules in your CSS file, followed by the specific condition. <br>
                        <br>
                        For example: <br>
                        To style for screen with width smaller than 900px <br>
                        @media screen and (max-width: 900px) {<br>
                        }
                    </li>
                    <li>
                        <strong>Define Styles:</strong> Within the curly braces, 
                        specify the CSS styles that should apply when the condition is met. <br>
                        <br>
                        For instance: <br>
                        @media screen and (max-width: 900px) {<br>
                            body {
                                font-size: 15px;
                            }
                            <br>
                            nav li {
                                width: 50%;
                            }
                            <br>
                        }
                    </li>
                    <li>
                        <strong>Apply to HTML:</strong> Ensure that your HTML 
                        file includes the responsive CSS file, and the media queries 
                        will automatically adjust styles based on the specified conditions.
                    </li>
                    <li>
                        <strong>Consider Multiple Breakpoints (Optional):</strong> 
                        For a more comprehensive responsive design, adding multiple 
                        @media queries for different breakpoints allows you to customize 
                        styles for various screen sizes. <br>
                        <br>
                        For example: <br>
                        @media screen and (max-width: 900px) {<br>
                            nav li {
                                width: 50%;
                            }
                            <br>
                        } <br>
                        @media screen and (max-width: 500px) {<br>
                            nav li {
                                width: 100%;
                            }
                            <br>
                        }
                    </li>
                </ol>
                <h2>Reference(s)</h2>
                <ul>
                    <li>
                        <a href="https://www.w3schools.com/css/css_rwd_images.asp" target="_blank">Responsive Web Design - Images by W3Schools</a>
                    </li>
                    <li>
                        <a href="https://www.w3schools.com/cssref/css3_pr_mediaquery.php" target="_blank">CSS @media Rule by W3Schools</a>
                    </li>
                </ul>
                <h2>Implementation</h2>
                <ul>
                    <li>
                        <a href="./apply.html" target="_blank">Apply page</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- <footer class="footer">
        <img class="footer-bg" src="./images/footer.jpg" alt="footer">
        <img class="footer-bg2" src="./images/footer.jpg" alt="footer">
        <div class="about-col">
            <img src="./images/logo-(white).png" alt="nocxi-logo">
            <p>Subsrcibe for our upcoming latest articles and news resources</p>
            <label for="footer-email">Write your email below to get notify!</label>
            <input type="email" id="footer-email" placeholder=" Email address">
        </div>
        <div class="links-col">
            <h2>Links</h2>
            <ul>
                <li>About us</li>
                <li>Meet our team</li>
                <li>News & media</li>
                <li>Our projects</li>
                <li>Contacts</li>
            </ul>
        </div>
        <div class="contact-col">
            <h2>Contacts</h2>
            <ul>
                <li>
                    <span class="fa-solid fa-phone"></span>
                    <span>+84 0123456789</span>
                </li>
                <li>
                    <span class="fa-solid fa-envelope"></span>
                    <span>admin@nocxi.com</span>
                </li>
                <li>
                    <span class="fa-solid fa-location-pin"></span>
                    <span>458 Minh Khai </span>
                </li>
            </ul>
        </div>
        <div class="icon-col">
            <span class="fa-brands fa-facebook"></span>
            <span class="fa-brands fa-instagram"></span>
            <span class="fa-brands fa-x-twitter"></span>
            <span class="fa-brands fa-pinterest"></span>
        </div>
        <div class="aside-wrap">
            <aside>Since its establishment in 2010, NOCXI has given employment and income to over 800 people.</aside>
        </div>
    </footer>
    <section class="ref">
        <h2>Link to reference:</h2>
        <a href="https://pixydrops.com/notechhtml/main-html/index.html" target="_blank">Website Visual Reference</a>
        <a href="https://www.w3schools.com/" target="_blank">W3Schools</a>
        <a href="https://icons8.com/icons" target="_blank">Icon8</a>
        <a href="https://fontawesome.com/icons" target="_blank">Font Awesome</a>
        <a href="https://pixydrops.com/" target="_blank">Pixydrops</a>
    </section> -->
<?php 
    showFooter();
?>
</body>
</html>