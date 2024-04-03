<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOCXI</title>

    <!-- <link rel="stylesheet" href="./styles/index.css" class="css"> -->
    <link rel="stylesheet" href="./styles/login.css" class="css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
  

    <!-- create login page for NOCXI -->
    <div class="container">
        <div class="sign-in">
            <h2>Sign In</h2> 
            <form method="" id="form">
                <div class="sign-in-box">
                    <div class="text-box">
                        <input type="text" name="email" required id="email">
                        <span></span>
                        <label>Email</label>
                    </div>
                    <div class="text-box">
                        <input type="password" name="password"required id="password">
                        <span></span>
                        <label>Password</label>
                    </div>
                    <p class="pass">Forgot Password?</p>
                </div>
                <div class="button-row">
                    <button class="login" type="button" id="login">Sign in</button>
                    <p class="member">Not a member? <a href="./sign-up.html">Signup here</a></p>
                </div>
            </form>
        </div> 
    </div>




 
</body>
</html>

<!-- <?php 
    require_once("settings.php");
    
    $conn = @mysqli_connect($host, $user, $pass, $database);
    
    if (!$conn) {
        die("Connection failed". mysqli_connect_error());
    }
    else {
        
    }
?> -->