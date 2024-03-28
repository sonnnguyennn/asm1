<?php include("settings.php"); ?>
<?php 
    include("include.php");
    showHeader();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage EOIs</title>
</head>
<body>
    <h1>Manage EOIs</h1>

    <form action="manage.php" method="get">
        <label for="job_reference">Job Reference Number:</label>
        <input type="text" name="job_reference" id="job_reference">
        <input type="submit" name="list_by_job_reference" value="List EOIs for Job Reference">
    </form>

    <form action="manage.php" method="get">
        <label for="applicant_name">Applicant Name:</label>
        <input type="text" name="applicant_name" id="applicant_name">
        <input type="submit" name="list_by_applicant_name" value="List EOIs for Applicant">
    </form>

    <?php

    // Establish database connection
    $conn = new mysqli($host, $user, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // List all EOIs
    $sql = "SELECT * FROM eoi";
    
    if(isset($_GET['list_by_job_reference'])) {
        // List all EOIs for a particular position (given a job reference number)
        $job_reference = $_GET['job_reference'];
        $sql = "SELECT * FROM eoi WHERE job_reference = '$job_reference'";
    } elseif(isset($_GET['list_by_applicant_name'])) {
        // List all EOIs for a particular applicant given their first name, last name, or both
        $applicant_name = $_GET['applicant_name'];
        $sql = "SELECT * FROM eoi WHERE first_name LIKE '%$applicant_name%' OR last_name LIKE '%$applicant_name%'";
    }

    // Execute the query
    $result = $conn->query($sql);

    // Display the results
    if ($result->num_rows > 0) {
        echo "<h2>EOIs</h2>";
        echo "<table border='1'>";
        echo "<tr><th>EOInumber</th><th>Job Reference</th><th>First Name</th><th>Last Name</th><th>Status</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['EOInumber']."</td>";
            echo "<td>".$row['job_reference']."</td>";
            echo "<td>".$row['first_name']."</td>";
            echo "<td>".$row['last_name']."</td>";
            echo "<td>".$row['status']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No EOIs found.";
    }

    // Close the database connection
    $conn->close();
    ?>

</body>
</html>
