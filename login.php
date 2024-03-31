<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOCXI</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <?php 
    include_once("header.php");
    ?>

    <!-- create login page for NOCXI -->





    <?php
    include_once("footer.php");
    ?>
</body>
</html>

<?php 
    require_once("settings.php");
    
    $conn = @mysqli_connect($host, $user, $pass, $database);
    
    if (!$conn) {
        die("Connection failed". mysqli_connect_error());
    }
    else {
        
    }
?>