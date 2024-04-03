<?php
require_once("settings.php");


// Function to sanitize input data
function sanitizeInput($data) {
    if (is_array($data)) {
        $sanitized_input = array();
        foreach ($data as $value) {
            $sanitized_input[] = trim($value);
        }
        return $sanitized_input;
    }
    else {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
    }
    return $data;
}

// Function to validate date of birth
function calculateAge($dob) {
    $dobTimestamp = strtotime(str_replace('/', '-', $dob));
    $currentTimestamp = time();
    $ageInSeconds = $currentTimestamp - $dobTimestamp;
    $ageInYears = floor($ageInSeconds / (60 * 60 * 24 * 365));
    return $ageInYears;
}
// Function to add an EOI record to the table
function addEOIRecord($conn, $jobRefNumber, $firstName, $lastName, $dob, $gender, $streetAddress, $suburbTown, $state, $postcode, $email, $phone, $otherSkills) {
    // Implement database insertion logic here
    // Example:
    $query = "INSERT INTO eoi (JobReferenceNumber, FirstName, LastName, DoB, Gender, StreetAddress, SuburbTown, StateOfAus, Postcode, Email,PhoneNumber, SkillQuestion) VALUES ('$jobRefNumber', '$firstName', '$lastName', '$dob', '$gender', '$streetAddress', '$suburbTown', '$state', '$postcode', '$email', $phone, '$otherSkills')";
    // Execute the query and handle errors accordingly
    // $eoiquery = "SELECT EOInumber FROM eoi WHERE FirstName = '$firstName' AND LastName = '$lastName';";
    $result = mysqli_query($conn, $query);
    // $eoiresult = mysqli_query($conn, $eoiquery);
    $eoiresult = mysqli_fetch_array($result);
    if ($result) {
        if ($eoiresult) {
            echo '<div class="alert"> Expression of Interest submitted successfully. Your EOInumber is: '. $eoiresult['EOInumber'] .'</div><br>';
            echo '<a href="index.php">Go back to Homepage</a>';
        }
        else {
            echo 'Error: Failed to load your EOI number.';
        }
    } else {
        echo ' Error: Failed to add EOI record. ';
    }
    // Return true if insertion is successful, false otherwise
    return true; // Placeholder return value
}


$conn = @mysqli_connect($host, $user, $password, $database);


if (!$conn) {
    die("Connection failed " . mysqli_connect_error());
}
else { 
    // Validate and sanitize form data here
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jobRefNumber = sanitizeInput($_POST['JobReferenceNumber']);
        $firstName = sanitizeInput($_POST['FirstName']);
        $lastName = sanitizeInput($_POST['LastName']);
        $dob = sanitizeInput($_POST['DoB']);
        $nationid = sanitizeInput($_POST['NID']);
        $streetAddress = sanitizeInput($_POST['StreetAddress']);
        $suburbTown = sanitizeInput($_POST['SuburbTown']);
        $state = sanitizeInput($_POST['State']);
        $postcode = sanitizeInput($_POST['Postcode']);
        $email = sanitizeInput($_POST['Email']);
        $phone = sanitizeInput($_POST['PhoneNumb']);
        $education = sanitizeInput($_POST['Education']);
        $coluni = sanitizeInput($_POST['CollegeUniversity']);
        $courses = sanitizeInput($_POST['Courses']);
        $degree = sanitizeInput($_POST['Degrees']);
        $school = sanitizeInput($_POST['School']);
        $subjects = sanitizeInput($_POST['Subjects']);
        $certs = sanitizeInput($_POST['Certificates']);
        $otherSkills = sanitizeInput($_POST['OtherSkills']);
        $formComplete = true;
        $errMsg = '';

        if (empty($jobRefNumber) && empty($firstName) && empty($lastName) && empty($dob) && empty($nationid) && empty($gender) && empty($streetAddress) && empty($suburbTown) && empty($state) && empty($postcode) && empty($email) && empty($phone) && empty($languages) && empty($education) && empty($otherSkills)) {
            echo "Please fill out all the required fields in order to submit.";
        }
        else {
            if (!preg_match("/^[a-zA-Z0-9]{5}$/", $jobRefNumber)) {
                $errMsg .= "Error: Job reference number must be exactly 5 alphanumeric characters.<br>";
            }
            else if (!(($jobRefNumber == 'SA101') || ($jobRefNumber == 'SS201') || ($jobRefNumber == 'PD303'))){
                $errMsg .= "Job Reference Number must match the ones in jobs page.<br>";
            }
            if (!preg_match("/^[a-zA-Z]{1,20}$/", $firstName)) {
                $errMsg .= "Error: First name must be max 20 alphabetical characters.<br>";
            }
            if (!preg_match("/^[a-zA-Z]{1,20}$/", $lastName)) {
                $errMsg .= "Error: Last name must be max 20 alphabetical characters.<br>";
            }
            if ($dob == "") {
                $errMsg .= "Error: Date of birth must not be empty.<br>";
            }
            elseif (calculateAge($dob) < 15 || calculateAge($dob) > 80) {
                $errMsg .= "Age must be between 15 and 80 years old.<br>";
            }
            if (!preg_match("/^[A-Z0-9]{12}$/", $nationid)) {
                $errMsg .= "Error: National ID must be 12 digits.<br>";
            }
            if (isset($_POST["Gender"])) {
                $gender = sanitizeInput($_POST['Gender']);
            }
            else {
                $errMsg .= ("Error: Gender is required.<br>");
            }
            if (strlen($streetAddress) > 40) {
                $errMsg .= "Error: Street address must be max 40 characters.<br>";
            }
            if (strlen($suburbTown) > 40) {
                $errMsg .= "Error: Suburb/town must be max 40 characters.<br>";
            }
            if ((!in_array($state, array("VIC", "NSW", "QLD", "NT", "WA", "SA", "TAS", "ACT"))) || ($state == "")) {
                $errMsg .= "Error: State is required and must be one of VIC, NSW, QLD, NT, WA, SA, TAS, ACT.<br>";
            }
            if (!preg_match("/^\d{4}$/", $postcode)) {
                $errMsg .= "Error: Postcode is required and must be exactly 4 digits.<br>";
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errMsg .= "Error: Email address is required and must be in a valid format.<br>";
            }
            if (!preg_match("/^[\d\s]{8,12}$/", $phone)) {
                $errMsg .= "Error: Phone number must be 8 to 12 digits or spaces.<br>";
            }
            if ($education == "") {
                $errMsg .= "Error: Education level is required.";
            }
            if (isset($_POST["Experience"])) {
                $experience = sanitizeInput($_POST["Experience"]);
            }
            else {
                $errMsg .= ("Error: Experience working is required to understand about applicant.<br>");
            }
            if (isset($_POST["Language"])) {
                $languages = $_POST['Language'];
                $skillLanguages = implode(',', $languages);
            }
            else {
                $errMsg .= "Error: Language skills field cannot be empty.<br>";
            }
            if ($otherSkills == "") {
                $errMsg .= "Error: Jobs-related skills field cannot be empty.<br>";
            }

            if ($errMsg != "") {
                echo "<p>$errMsg</p><br>";
                $formComplete = false;
            }
            else {
                // Check if the 'eoi' table exists, if not, create it
                $tableExistsQuery = "SHOW TABLES LIKE 'eoi'";
                $tableExistsResult = mysqli_query($conn, $tableExistsQuery);
                // Table doesn't exist, create it
                if (mysqli_num_rows($tableExistsResult) == 0) {
                    $createTableQuery = "CREATE TABLE eoi (
                        EOInumber INT AUTO_INCREMENT PRIMARY KEY,
                        JobReferenceNumber VARCHAR(5) NOT NULL,
                        FirstName VARCHAR(20) NOT NULL,
                        LastName VARCHAR(20) NOT NULL,
                        DoB DATE NOT NULL,
                        NID VARCHAR(12) NOT NULL UNIQUE,
                        Gender ENUM('Male', 'Female', 'Others') NOT NULL,
                        PhoneNumber VARCHAR(12) NOT NULL UNIQUE,
                        Email VARCHAR(255) NOT NULL UNIQUE,
                        StreetAddress VARCHAR(255) NOT NULL,
                        SuburbTown VARCHAR(255) NOT NULL,
                        Postcode VARCHAR(10) NOT NULL,
                        StateOfAUS ENUM('VIC', 'NSW', 'QLD', 'NT', 'WA', 'SA', 'TAS', 'ACT') NOT NULL,
                        Education VARCHAR(50) NOT NULL,
                        ColUni TEXT,
                        Courses TEXT,
                        Degree TEXT,
                        School TEXT,
                        Subjects TEXT,
                        Certs TEXT,
                        ExpWorking ENUM('Yes', 'No') NOT NULL,
                        Languages VARCHAR(255) NOT NULL,
                        SkillQuestion TEXT NOT NULL,
                        AppStatus ENUM('New', 'Current', 'Final') DEFAULT 'New'
                    );";
                    if (mysqli_query($conn, $createTableQuery)) {
                        echo "Table 'eoi' created successfully. <br>";
                        // Insert data into the 'eoi' table 
                        $insertQuery = "INSERT INTO eoi (JobReferenceNumber, FirstName, LastName, DoB, NID, Gender, StreetAddress, SuburbTown, StateOfAUS, Postcode, Email, PhoneNumber, Education, ColUni, Courses, Degree, School, Subjects, Certs, ExpWorking, Languages, SkillQuestion) 
                        VALUES ('$jobRefNumber', '$firstName', '$lastName', '$dob', '$nationid', '$gender', '$streetAddress', '$suburbTown', '$state', '$postcode', '$email', '$phone', '$education', '$coluni', '$courses', '$degree' ,'$school', '$subjects' , '$certs', '$experience','$skillLanguages', '$otherSkills')";
                        $result = mysqli_query($conn, $insertQuery);
                        if ($result) {
                            $eoiNumber = mysqli_insert_id($conn);
                            echo "Expression of Interest submitted successfully. Your EOI number is: $eoiNumber <br>";
                            echo '<a href="index.php">Go back to Homepage</a>';
                            $formComplete = true;
                        } else {
                            echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
                        }
                    } 
                    else {
                        echo "Error inserting row " . mysqli_error($conn);
                    }
                } 
                else {
                    // Insert data into the 'eoi' table 
                    $insertQuery = "INSERT INTO eoi (JobReferenceNumber, FirstName, LastName, DoB, NID, Gender, StreetAddress, SuburbTown, StateOfAUS, Postcode, Email, PhoneNumber, Education, ColUni, Courses, Degree, School, Subjects, Certs, ExpWorking, Languages, SkillQuestion) 
                    VALUES ('$jobRefNumber', '$firstName', '$lastName', '$dob', '$nationid', '$gender', '$streetAddress', '$suburbTown', '$state', '$postcode', '$email', '$phone', '$education', '$coluni', '$courses', '$degree' ,'$school', '$subjects' , '$certs', '$experience','$skillLanguages', '$otherSkills')";
                    $result = mysqli_query($conn, $insertQuery);
                    if ($result) {
                        $eoiNumber = mysqli_insert_id($conn);
                        echo "Expression of Interest submitted successfully. Your EOI number is: $eoiNumber <br>";
                        echo '<a href="index.php">Go back to Homepage</a>';
                        $formComplete = true;
                    } else {
                        echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
                    }
                }
            }
            return $formComplete;
        }
    } 
    else {
        header("Location: apply.php") ;
    }
    mysqli_close($conn);
}
?>
