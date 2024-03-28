

<?php
$host = "feenix-mariadb.swin.edu.au"; // Change to your host name
$user = "s104814302"; // Change to your database username
$pass = "260905"; // Change to your database password if any, otherwise leave it empty
$database = "s104814302_db"; // Change to your database name

$db_conn = mysqli_connect($host, $user, $pass, $database);

if (!$db_conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully.";

// Define a function to insert a new record into the 'eoi' table
function insertRecord($conn, $jobRefNumber, $firstName, $lastName, $streetAddress, $suburbTown, $state, $postcode, $emailAddress, $phoneNumber, $skill1, $skill2, $skill3, $otherSkills) {
    $status = 'New'; // Default status for new records

    $sql = "INSERT INTO eoi (JobReferenceNumber, FirstName, LastName, StreetAddress, SuburbTown, State, Postcode, EmailAddress, PhoneNumber, Skill1, Skill2, Skill3, OtherSkills, Status) VALUES ('$jobRefNumber', '$firstName', '$lastName', '$streetAddress', '$suburbTown', '$state', '$postcode', '$emailAddress', '$phoneNumber', '$skill1', '$skill2', '$skill3', '$otherSkills', '$status')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Example usage:
// insertRecord($db_conn, '123ABC', 'John', 'Doe', '123 Main St', 'Anytown', 'CA', '12345', 'john@example.com', '555-1234', 'Programming', 'Database Management', 'Problem Solving', 'Other skills description');

mysqli_close($db_conn);
?>
