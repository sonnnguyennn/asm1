<!-- 
    Create a web page manage.php that allows a manager to make the following queries of 
    the eoi table and returns a web page with the appropriate results. 
    • List all EOIs. 
    • List all EOIs for a particular position (given a job reference number). 
    • List all EOIs for a particular applicant given their first name, last name or both. 
    • Delete all EOIs with a specified job reference number 
    • Change the Status of an EOI. 
-->
<?php 
    require("settings.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage EOIs</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <?php 
        include("header.php");
    ?>
    <h1 style="margin-top: 100vh">Manage EOIs</h1>

    <form action="manage.php" method="get">
        <label for="list_all">List all the EOIs</label>
        <input type="submit" name="ListAll" id="list_all" value="Search">
        <br>
        <label for="job_reference">Job Reference Number:</label>
        <input type="text" name="job_reference" id="job_reference">
        <input type="submit" name="JobReferenceNumb" value="Search">
        <br>
        <label for="firstName">Applicant's First Name:</label>
        <input type="text" id="firstName" name="FirstName">
        <label for="lastName">Applicant's Last Name:</label>
        <input type="text" id="lastName" name="LastName">
        <input type="submit" name="list_for_specific_applicant" value="Search">
    </form>

    <form action="manage.php" method="post">
        <label for="delete_job_ref">Delete Job:</label>
        <input type="text" name="DeleteJobRef" id="delete_job_ref" placeholder="Job Reference Number">
        <input type="submit" value="Delete EOIs">
    </form>

    <form action="manage.php" method="post">
        <label for="select_an_EOI">Select an EOI to change status</label>
        <input type="text" name="selectEOI" id="select_an_EOI">
        <label for="new_status_EOI">Change an EOI's status</label>
        <select id="new_status_EOI" name="newStatusEOI">
            <option value="">Please select</option>
            <option value="New">New</option>
            <option value="Current">Current</option>
            <option value="Final">Final</option>
        </select>
        <input type="submit" value="Change EOI Status">
    </form>

<?php
    $conn = @mysqli_connect($host, $user, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else {


    $jobRef = "SELECT * FROM eoi WHERE JobReferenceNumber = " . $_GET['job_reference'] ;
    $firstname = "SELECT * FROM eoi WHERE FirstName = " . $_GET['firstName'] ;
    $lastname = "SELECT * FROM eoi WHERE LastName = " . $_GET['lastName'] ;
    $delete = "DELETE FROM eoi WHERE JobReferenceNumber = " . $_POST['delete_job_ref'] ;

    $newStatusEOI = $_POST['newStatusEOI'];
    $selectedEOI = $_POST['selectEOI'];

    // Prevent SQL injection by sanitizing input
    $newStatusEOI = mysqli_real_escape_string($conn, $newStatusEOI);
    $selectedEOI = mysqli_real_escape_string($conn, $selectedEOI);
    $changeStatus = "UPDATE eoi SET AppStatus = '$newStatusEOI' WHERE EOInumber = '$selectedEOI'";





    // Establish database connection
    // $conn = new mysqli($host, $user, $password, $database);

    // Check connection
    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }

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
    // if ($result->num_rows > 0) {
    //     echo "<h2>EOIs</h2>";
    //     echo "<table border='1'>";
    //     echo "<tr><th>EOInumber</th><th>Job Reference</th><th>First Name</th><th>Last Name</th><th>Status</th></tr>";
    //     while($row = $result->fetch_assoc()) {
    //         echo "<tr>";
    //         echo "<td>".$row['EOInumber']."</td>";
    //         echo "<td>".$row['job_reference']."</td>";
    //         echo "<td>".$row['first_name']."</td>";
    //         echo "<td>".$row['last_name']."</td>";
    //         echo "<td>".$row['status']."</td>";
    //         echo "</tr>";
    //     }
    //     echo "</table>";
    // } else {
    //     echo "No EOIs found.";
    // }

    // Close the database connection
        mysqli_close($conn);
    }
?>

    
    <h2>EOIs</h2>
    <table border='1'>
        <tr>
            <th>EOInumber</th>
            <th>Job Reference</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Status</th>
        </tr>

        <?php foreach ($EOIs as $EOI): ?>
        <tr>
            <td><?php $row['EOInumber'] ?></td>
            <td><?php $row['job_reference'] ?></td>
            <td><?php $row['first_name'] ?></td>
            <td><?php $row['last_name'] ?></td>
            <td><?php $row['status'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>


    <?php 
        include("footer.php");
    ?>
</body>
</html>
