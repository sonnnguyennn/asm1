<?php
require("settings.php");




// Function to validate job reference number
// function validateJobReferenceNumber($jobRefNumber) {
//     return preg_match("/^[a-zA-Z0-9]{5}$/", $jobRefNumber);
// }

// Function to validate name
// function validateName($name) {
//     return preg_match("/^[a-zA-Z]{1,20}$/", $name);
// }



// Function to validate email address
// function validateEmailAddress($email) {
//     return filter_var($email, FILTER_VALIDATE_EMAIL);
// }

// Function to validate phone number
// function validatePhoneNumber($phone) {
//     return preg_match("/^[\d\s]{8,12}$/", $phone);
// }

// Function to validate other skills if checkbox selected
// function validateLanguageSkills($skills, $isChecked) {
//     return !$isChecked || !empty($skills);
// }

// Function to validate postcode 
// function isValidPostcode($postcode) {
//     // Implement logic to validate postcode 
//     return true; // For now, assuming all postcodes are valid
// }



// Function to sanitize input data
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to validate date of birth
function calculateAge($dob) {
    $dobTimestamp = strtotime(str_replace('/', '-', $dob));
    $currentTimestamp = time();
    // $minDobTimestamp = strtotime('-80 years', $currentTimestamp);
    // $maxDobTimestamp = strtotime('-15 years', $currentTimestamp);
    $ageInSeconds = $currentTimestamp - $dobTimestamp;
    $ageInYears = floor($ageInSeconds / (60 * 60 * 24 * 365));
    return $ageInYears;
    // return ($dobTimestamp !== false && $dobTimestamp >= $minDobTimestamp && $dobTimestamp <= $maxDobTimestamp);
}
// Function to add an EOI record to the table
function addEOIRecord($jobRefNumber, $firstName, $lastName, $dob, $gender, $streetAddress, $suburbTown, $state, $postcode, $email, $phone, $otherSkills) {
    // Implement database insertion logic here
    // Example:
    // $query = "INSERT INTO eoi (JobReferenceNumber, FirstName, LastName, ...) VALUES ('$jobRefNumber', '$firstName', '$lastName', ...)";
    // Execute the query and handle errors accordingly
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
        $jobRefNumber = sanitizeInput($_POST['reference-number']);
        $firstName = sanitizeInput($_POST['FirstName']);
        $lastName = sanitizeInput($_POST['LastName']);
        $dob = sanitizeInput($_POST['DoB']);
        $nationid = sanitizeInput($_POST['NID']);
        $gender = sanitizeInput($_POST['Gender']);
        $streetAddress = sanitizeInput($_POST['StreetAddress']);
        $suburbTown = sanitizeInput($_POST['SuburbTown']);
        $state = sanitizeInput($_POST['State']);
        $postcode = sanitizeInput($_POST['Postcode']);
        $email = sanitizeInput($_POST['Email']);
        $phone = sanitizeInput($_POST['PhoneNumb']);
        $languages = sanitizeInput($_POST['Language[]']);
        $otherlanguage = sanitizeInput($_POST['OtherLanguage']);
        $otherSkills = sanitizeInput($_POST['OtherSkills']);
        $errMsg = "";
        $formComplete = true;

        if (empty($jobRefNumber) || empty($firstName) || empty($lastName) || empty($dob) || empty($nationid) || empty($gender) || empty($streetAddress) || empty($suburbTown) || empty($state) || empty($postcode) || empty($email) || empty($phone) || empty($languages) || empty($otherSkills)) {
            $errMsg = "Please fill out all the required fields in order to submit.";
        }
        else {
            if (!preg_match("/^[a-zA-Z0-9]{5}$/", $jobRefNumber)) {
                $errMsg = "Error: Job reference number must be exactly 5 alphanumeric characters.";
            }
            else if (!($jobRefNumber == 'SA101') || $jobRefNumber == 'SS201' || $jobRefNumber == 'PD303'){
                $errMsg = "Job Reference Number must match the ones in jobs page.";
            }
            if (!preg_match("/^[a-zA-Z]{1,20}$/", $firstname)) {
                $errMsg = "Error: First name must be max 20 alphabetical characters.";
            }
            if (!preg_match("/^[a-zA-Z]{1,20}$/", $lastName)) {
                $errMsg = "Error: Last name must be max 20 alphabetical characters.";
            }
            if (!preg_match("/^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/\d{4}$/",$dob)) {
                $errMsg = "Error: Please filled in your DoB correctly.";
            }
            elseif (calculateAge($dob) < 15 || calculateAge($dob) > 80) {
                $errMsg = "Age must be between 15 and 80 years old.";
            }
            if (!preg_match("/^[A-Z0-9]{12}$/", $nationid)) {
                $errMsg = "Error: National ID must be 12 digits.";
            }
            if (!in_array($gender, array("Male", "Female", "Others"))) {
                $errMsg = "Error: Gender is required.";
            }
            if (strlen($streetAddress) > 40) {
                $errMsg = "Error: Street address must be max 40 characters.";
            }
            if (strlen($suburbTown) > 40) {
                $errMsg = "Error: Suburb/town must be max 40 characters.";
            }
            if ((!in_array($state, array("VIC", "NSW", "QLD", "NT", "WA", "SA", "TAS", "ACT"))) || ($state == "")) {
                $errMsg = "Error: State is required and must be one of VIC, NSW, QLD, NT, WA, SA, TAS, ACT.";
            }
            if (!preg_match("/^\d{4}$/", $postcode)) {
                $errMsg = "Error: Postcode is required and must be exactly 4 digits.";
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errMsg = "Error: Email address is required and must be in a valid format.";
            }
            if (!preg_match("/^[\d\s]{8,12}$/", $phone)) {
                $errMsg = "Error: Phone number must be 8 to 12 digits or spaces.";
            }
            if (empty($_POST["Language"])) {
                $errMsg = "Error: Language skills field cannot be empty.";
            }

            if ($errMsg != "") {
                echo "<p>$errMsg</p><br>";
                $formComplete = false;
            }
            else {

                // Check if the 'eoi' table exists, if not, create it
                $tableExistsQuery = "SELECT * FROM eoi";
                $tableExistsResult = mysqli_query($conn, $tableExistsQuery);

                if (mysqli_num_rows($tableExistsResult) == 0) {
                    // Table doesn't exist, create it
                    $createTableQuery = "CREATE TABLE eoi (
                        EOInumber INT AUTO_INCREMENT PRIMARY KEY,
                        JobReferenceNumber VARCHAR(5) NOT NULL,
                        FirstName VARCHAR(20) NOT NULL,
                        LastName VARCHAR(20) NOT NULL,
                        DoB DATE NOT NULL,
                        NID VARCHAR(12) NOT NULL,
                        Gender ENUM('Male', 'Female', 'Others') NOT NOT NULL,
                        PhoneNumber VARCHAR(12) NOT NOT NULL,
                        Email VARCHAR(255) NOT NOT NULL,
                        StreetAddress VARCHAR(255) NOT NOT NULL,
                        SuburbTown VARCHAR(255) NOT NULL,
                        Postcode VARCHAR(10) NOT NULL,
                        StateOfAUS ENUM('VIC', 'NSW', 'QLD', 'NT', 'WA', 'SA', 'TAS', 'ACT') NOT NULL,
                        Education VARCHAR(50) NOT NULL,
                        CollegeUniversity TEXT,
                        Courses TEXT,
                        CertificatesGrades TEXT,
                        School TEXT,
                        Subjects TEXT,
                        ExpWorkingCompanies ENUM('Yes', 'No') NOT NULL,
                        PastExperience TEXT,
                        JobReferences TEXT,
                        Languages VARCHAR(255),
                        SkillQuestion TEXT,
                        AppStatus ENUM('New', 'Current', 'Final') DEFAULT 'New'
                        -- CONSTRAINT chk_phone_length CHECK (LENGTH(PhoneNumber) BETWEEN 8 AND 12)
                    )";
                    if (mysqli_query($conn, $createTableQuery)) {
                        echo "Table 'eoi' created successfully.";
                    } else {
                        echo "Error creating table: " . mysqli_error($conn);
                    }
                } 
                else if (mysqli_num_rows($tableExistsResult) == 1) {
                    // Insert data into the 'eoi' table
                    //Education, CollegeUniversity, Courses, CertificatesGrades, School, Subjects, ExpWorkingCompanies, PastExperience, JobReferences
                    $insertQuery = "INSERT INTO eoi (JobReferenceNumber, FirstName, LastName, DoB, NID, Gender, StreetAddress, SuburbTown, StateOfAUS, Postcode, Email, PhoneNumber, SkillQuestion) 
                    VALUES ($jobRefNumber, $firstName, $lastName, $dob, $nationid, $gender, $streetAddress, $suburbTown, $state, $postcode, $email, $phone, $otherSkills)";
                    
                    $result = mysqli_query($conn, $insertQuery);
                    if ($result) {
                        $eoiNumber = mysqli_insert_id($conn);
                        echo "Expression of Interest submitted successfully. Your EOInumber is: $eoiNumber";
                    } else {
                        echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
                    }


                    // All data is validated, proceed with adding the record to the database
                    if (addEOIRecord($jobRefNumber, $firstName, $lastName, $dob, $gender, $streetAddress, $suburbTown, $state, $postcode, $email, $phone, $otherSkills)) {
                        echo '<div class="alert"> Expression of Interest submitted successfully. Your EOInumber is: '. $eoiNumber .'</div><br>';
                        echo '<a href="index.php">Go back to Homepage</a>';
                    } else {
                        echo "Error: Failed to add EOI record.";
                    }
                }
            }
        }
        
        
        // Check if a message needs to be displayed
        // $submitMsg = "Expression of Interest submitted successfully. Your EOInumber is: $eoiNumber";
        // if (!empty($submitMsg)) {
        //     echo '<div class="alert">' . $submitMsg . '</div> <br>';
        //     echo '<a href="index.php">Go back to Homepage</a>';
        // }

        // Insert data into the 'eoi' table
        //Education, CollegeUniversity, Courses, CertificatesGrades, School, Subjects, ExpWorkingCompanies, PastExperience, JobReferences
        // $insertQuery = "INSERT INTO eoi (JobReferenceNumber, FirstName, LastName, DoB, NID, Gender, StreetAddress, SuburbTown, StateOfAUS, Postcode, Email, PhoneNumber, SkillQuestion) 
        // VALUES ($jobRefNumber, $firstName, $lastName, $dob, $nationid, $gender, $streetAddress, $suburbTown, $state, $postcode, $email, $phone, $otherSkills)";
        
        // $result = mysqli_query($conn, $insertQuery);
        // if ($result) {
        //     $eoiNumber = mysqli_insert_id($conn);
        //     echo "Expression of Interest submitted successfully. Your EOInumber is: $eoiNumber";
        // } else {
        //     echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
        // }
            
        // Define a function to insert a new record into the 'eoi' table
        // function insertRecord($conn, $jobRefNumber, $firstName, $lastName, $streetAddress, $suburbTown, $state, $postcode, $emailAddress, $phoneNumber, $skill1, $skill2, $skill3, $otherSkills) {
        //     $status = 'New'; // Default status for new records

        //     $sql = "INSERT INTO eoi (JobReferenceNumber, FirstName, LastName, StreetAddress, SuburbTown, State, Postcode, EmailAddress, PhoneNumber, Skill1, Skill2, Skill3, OtherSkills, Status) VALUES ('$jobRefNumber', '$firstName', '$lastName', '$streetAddress', '$suburbTown', '$state', '$postcode', '$emailAddress', '$phoneNumber', '$skill1', '$skill2', '$skill3', '$otherSkills', '$status')";

        //     if (mysqli_query($conn, $sql)) {
        //         echo "New record created successfully.";
        //     } else {
        //         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        //     }
        // }

        // Example usage:
        // insertRecord($conn, '123ABC', 'John', 'Doe', '123 Main St', 'Anytown', 'CA', '12345', 'john@example.com', '555-1234', 'Programming', 'Database Management', 'Problem Solving', 'Other skills description');
    } 
    mysqli_close($conn);
}
?>
