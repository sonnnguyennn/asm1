<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOCXI</title>

    <link rel="stylesheet" href="./styles/phpenhancements.css" class="css">
    <link rel="stylesheet" href="./styles/style.css" class="css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <?php 
        include_once("header.inc");
    ?>
    <section class="hero-content">
        <div class="hero-items">
            <ul class="hero-navi">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    /
                </li>
                <li>
                    <a href="enhancements.php">Enhancements</a>
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
                <h1>@login</h1>
                <h2>Description</h2>
                <p>
                A "login" on a website is the process through which a user gains access to their personalized account or 
                profile on that site. It's a fundamental part of the user experience for any website that requires users
                to have individual accounts, such as social media platforms, online stores, email services, banking websites.
                </p>
                <h2>Explanation</h2>
                <ol>
                    <li>
                        <strong>Purpose:</strong> Use for the user&admin to manage and control the applicants input.
                         In other words, this function to authenticate the privilege for the user and admin(manager)
                         .It only gain access to 'Manage' if the right admin account login.  <br>
                        <br>
                        
                    </li>
                    <li>
                        <strong>Steps:</strong> <br>
                        <strong>- Accessing the Admin Login Page:</strong> 
                        <br> We have 2 section for account and password here then user have to fill in all of this
                        <br>
                        <br>
                        For example: <br>
                        input type="password" name="LoginPassword" required id="password"><br>
                        input type="text" name="LoginEmail" required id="email"><br>


                        <strong>- Checking data:</strong><br>
                        PHP system will check the data of table if it match the input from user so it will authenticate
                        for the admin to login. <br>
                        

                    </li>
                    <li>
                        <strong>- Privilege:</strong> <br>
                        The user will be able to access new section in Navbar which called "Manange" . In this section, 
                        user can access and see the applied form , edit , add , delete , search for form.

                    </li>
                </ol>
               
                <h2>Implementation</h2>
                <ul>
                    <li>
                        <a href="./login.php" target="_blank">Login page</a>
                    </li>
                   
                </ul>
            </div>
            <div class="enhancement-2">
                <h1>@logout</h1>
                <h2>Description</h2>
                <p>
                A "logout" on a website is the process through which a user erase all access to their personalized account or 
                profile on that site. It's a fundamental part of the login, for the flexibility and the the convienient of user
                </p>
                <h2>Explanation</h2>
                <ol>
                    <li>
                        <strong>Purpose:</strong> Use for the user&admin to shutdown there privilege and out of the form,
                        for safety reason.  <br>
                        <br>
                        
                    </li>
                    <li>
                        <strong>Steps:</strong> <br>
                        <strong>- Accessing the Admin Logout:</strong> 
                        <br> We have 2 section for logout are login back or back to web page, as soon as the user see this page so 
                        they already logged out. <br>
                        p>You have been logged out./p <br>
                        class="home" href="index.php">Go back to Home <br>
                        class="login" href="login.php">Login <br>
                        section.destroy() <br>

                    </li>
                    <li>
                        <strong>- Privilege:</strong> <br>
                        The user will no longer be able to access section in  "Manange" . And 
                        user cannot access it anymore.

                    </li>
                </ol>
              
                <h2>Implementation</h2>
                <ul>
                    <li>
                        <a href="./logout.php" target="_blank">Logout page</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </section>
    <?php 
        include_once("footer.inc");
    ?>
</body>
</html>