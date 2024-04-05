<?php 
    include_once("settings.php");
    session_start();


    function sanitizeInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $conn = @mysqli_connect($host, $user, $password, $database);
    
    if (!$conn) {
        die("Connection failed". mysqli_connect_error());
    }
    else {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Sanitize user input
            $email = ($_POST['LoginEmail']);
            $password = ($_POST['LoginPassword']);
        
            // Retrieve user data from database
            $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE email = ? AND password = ?");
            mysqli_stmt_bind_param($stmt, "ss", $email, $password);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
        
            if (mysqli_num_rows($result) == 1) {
                // User found, verify password
                $user = mysqli_fetch_assoc($result);
                if ($password === $user['password']) {
                    // Password is correct, set session variables
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['position'] = $user['position'];
                    
                    // Redirect to manage page based on user's position
                    if ($user['position'] == 1) {
                        header("Location: manage.php");
                        exit();
                    } else {
                        header("Location: index.php");
                        exit();
                    }
                } else {
                    // Incorrect password
                    $err_message = "Incorrect email or password. Please check the fields again.";
                }
            } else {
                // User not found
                $err_message = "User not found.";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOCXI</title>

    <!-- <link rel="stylesheet" href="./styles/index.css" class="css"> -->
    <link rel="stylesheet" href="styles/login.css" class="css">

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
            <div class="logo">
                <img src="./images/logo.png" alt=""> 
            </div>
            <form method="post" action="login.php" id="form">
                <div class="sign-in-box">
                    <div class="text-box">
                        <input type="text" name="LoginEmail" required id="email">
                        <span></span>
                        <label>Email</label>
                    </div>
                    <div class="text-box">
                        <input type="password" name="LoginPassword" required id="password">
                        <span></span>
                        <label>Password</label>
                    </div>
                    <p class="pass">Forgot Password?</p>
                </div>
                <div class="button-row">
                    <!-- <button class="login" type="button" id="login">Sign in</button> -->
                    <input type="submit" name="login" id="login" value="Sign in">
                    <p class="member">Not a member?
                        <a href="#">Signup here</a>
                    </p>
                </div>
                <?php 
                    if (isset($err_message)) {
                        echo "<p class='alert'>$err_message</p>";
                    }
                ?>
            </form>

        </div> 
    </div>




 
</body>
</html>
