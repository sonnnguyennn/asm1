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
            <div class="logo">
                <img src="./images/logo.png" alt=""> 
            </div>
            <form method="" id="form">
                <div class="sign-in-box">
                    <div class="text-box">
                        <input type="text" name="email" required id="email">
                        <span></span>
                        <label for="email">Email</label>
                    </div>
                    <div class="text-box">
                        <input type="password" name="password"required id="password">
                        <span></span>
                        <label for="password">Password</label>
                    </div>
                    <p class="pass">Forgot Password?</p>
                </div>
                <div class="button-row">
                    <button class="login" type="button" id="login">Sign in</button>
                    <a href="./sign-up.html">Signup here</a>
                </div>
            </form>
        </div> 
    </div>




 
</body>
</html>
 <!-- #region -->
<!-- <?php 
    require_once("settings.php");

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
            $email = sanitise_input($_POST['Email']);
            $password = sanitise_input($_POST['Password']);
            $retypepassword = sanitise_input($_POST['RetypePassword']);
        }

        if (empty($email) || empty($password) || empty($retypepassword)) {
            die('Please fill in the information to register.');
        }
        else {
            if ($retypepassword != $password) {
                die("Error: Retype password must match password.");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                die("Error: Email address is required and must be in a valid format.");
            }
            else {
                $registerQuery = "SHOW TABLES LIKE 'users'";
                $registerResult = mysqli_query($conn, $registerQuery);
                if (mysqli_num_rows($registerResult) == 0) {
                    $createTableQuery = "CREATE TABLE users (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        email VARCHAR(255) UNIQUE NOT NULL,
                        pass VARCHAR(255) NOT NULL,
                        -- position VARCHAR(50) NOT NULL
                    );";

                    if (mysqli_query($conn, $createTableQuery)) {
                        $insertQuery = "INSERT INTO users (email, pass) VALUES ('$email', '$password');";
                        $result = mysqli_query($conn, $insertQuery);
                        if ($result) {
                            echo '<span>Go to <a href="index.php">Login</a> page</span>';
                        } else {
                            echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
                        }
                    } 
                    else {
                        echo "Error creating table: " . mysqli_error($conn);
                    }
                } 
                else {
                    $insertQuery = "INSERT INTO users (email, pass) VALUES ('$email', '$password');";
                    $result = mysqli_query($conn, $insertQuery);
                    if ($result) {
                        echo '<span>Go to <a href="index.php">Login</a> page</span>';
                    } else {
                        echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
                    }
                }
            }
        }
    }
?> -->