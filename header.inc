<!-- Header -->
<?php session_start(); ?>
<header class="header">
    <div class="logo">
        <img src="./images/logo.png" alt="nocxi-logo">
    </div>
    <ul class="main-menu">
        <li class="drop"><a href="index.php">Home</a></li>
        <li class="drop"><a href="jobs.php">Jobs</a>
            <ul class="services-drop">
                <li><a href="#">Server Administrator</a></li>
                <li><a href="#">Security Specialist</a></li>
                <li><a href="#">Product Development</a></li>
            </ul>
        </li>
        <li class="drop"><a href="about.php">About us</a></li>
        <li class="drop"><a href="enhancements.php">Enhancements</a></li>
        <?php 
            if ((isset($_SESSION['position'])) && ($_SESSION['position'] == 1)) {   
                echo "<li class='drop'><a href='manage.php'>Manage</a></li>";     
            }
        ?>
        <li class="hiring">
            <a href="jobs.php">We are Hiring!</a>
        </li>
    </ul>
    <div class="icon-control">
        <?php 
        if (!isset($_SESSION['position'])) {
            echo 
                "<a class='log-in' href='login.php'>
                    <span class='fa-solid fa-lock'></span>
                    <span>Log in</span>
                </a>";
        }
        else {
            echo 
                "<a class='log-in' href='logout.php'>
                    <span class='fa-solid fa-lock'></span>
                    <span>Log out</span>
                </a>";
        }
        ?>
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
</header>