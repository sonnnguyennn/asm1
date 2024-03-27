<?php
    function showHeader() {
        echo'    
        <header class="header">
            <div class="logo">
                <img src="./images/logo.png" alt="nocxi-logo">
            </div>
            <ul class="main-menu">
                <li class="drop"><a href="index.php">Home</a></li>
                <li class="drop"><a href="#">Pages</a>
                    <ul class="pages-drop">
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </li>
                <li class="drop"><a href="jobs.php">Jobs</a>
                    <ul class="services-drop">
                        <li><a href="#">Server Administrator</a></li>
                        <li><a href="#">Security Specialist</a></li>
                        <li><a href="#">Product Development</a></li>
                    </ul>
                </li>
                <li class="drop"><a href="about.php">About us</a></li>
                <li class="drop"><a href="enhancements.php">Enhancements</a></li>
                <li class="hiring">
                    <a href="jobs.php">We are Hiring!</a>
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
        </header>';
    }

    function showFooter() {
        echo '    
        <footer class="footer">
            <img class="footer-bg" src="./images/footer.jpg" alt="footer-img1">
            <img class="footer-bg2" src="./images/footer.jpg" alt="footer-img2">
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
        </section>';
    }
?>