<!-- This file is used for connecting to MySQL database on the feenix-mariadb database server -->
<?php 
    // Tìm ở trong phpMyAdmin rồi điền vào. (ChatGPT)
	$host = "localhost"; //Ex: ictstu-db1.cc.swin.edu.au
	$user = "root"; //Ex: s104971728@%.swin.edu.au
	$pass  = ""; //Ex: "gwagawg" or ""
	$database  = "s123456789_db"; //Ex: database name like s104971728_db
    $db_conn = ""; //No connect yet
    // $db_conn = new mysqli($host, $user, $pass, $database);

    try {
        $db_conn = mysqli_connect($host, $user, $pass, $database);        
    }
    catch (mysqli_sql_exception) {
        echo "Could not connect.";
    }

    if ($db_conn) {
        echo "You're connect.";
    }
?>