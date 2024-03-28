<?php
include "settings.php";
// Function to sanitize input data
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to validate job reference number
function validateJobReferenceNumber($jobRefNumber) {
    return preg_match("/^[a-zA-Z0-9]{5}$/", $jobRefNumber);
}

// Function to validate name
function validateName($name) {
    return preg_match("/^[a-zA-Z]{1,20}$/", $name);
}

// Function to validate date of birth
function validateDateOfBirth($dob) {
    $dobTimestamp = strtotime(str_replace('/', '-', $dob));
    $currentTimestamp = time();
    $minDobTimestamp = strtotime('-80 years', $currentTimestamp);
    $maxDobTimestamp = strtotime('-15 years', $currentTimestamp);
    return ($dobTimestamp !== false && $dobTimestamp >= $minDobTimestamp && $dobTimestamp <= $maxDobTimestamp);
}

// Function to validate email address
function validateEmailAddress($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to validate phone number
function validatePhoneNumber($phone) {
    return preg_match("/^[\d\s]{8,12}$/", $phone);
}

// Function to validate other skills if checkbox selected
function validateOtherSkills($skills, $isChecked) {
    return !$isChecked || !empty($skills);
}

// Function to validate postcode against state
function isValidPostcode($postcode, $state) {
    // Implement logic to validate postcode against state
    return true; // For now, assuming all postcodes are valid
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

// Validate and sanitize form data here
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jobRefNumber = sanitizeInput($_POST['JobReferenceNumber']);
    $firstName = sanitizeInput($_POST['FirstName']);
    $lastName = sanitizeInput($_POST['LastName']);
    $dob = sanitizeInput($_POST['DoB']);
    $gender = sanitizeInput($_POST['Gender']);
    $streetAddress = sanitizeInput($_POST['StreetAddress']);
    $suburbTown = sanitizeInput($_POST['SuburbTown']);
    $state = sanitizeInput($_POST['State']);
    $postcode = sanitizeInput($_POST['Postcode']);
    $email = sanitizeInput($_POST['EmailAddress']);
    $phone = sanitizeInput($_POST['PhoneNumber']);
    $otherSkills = isset($_POST['OtherSkills']) ? sanitizeInput($_POST['OtherSkills']) : '';

    if (!validateJobReferenceNumber($jobRefNumber)) {
        die("Error: Job reference number must be exactly 5 alphanumeric characters.");
    }
    if (!validateName($firstName)) {
        die("Error: First name must be max 20 alphabetical characters.");
    }
    if (!validateName($lastName)) {
        die("Error: Last name must be max 20 alphabetical characters.");
    }
    if (!validateDateOfBirth($dob)) {
        die("Error: Date of birth must be between 15 and 80 years ago.");
    }
    if (!in_array($gender, array("Male", "Female", "Others"))) {
        die("Error: Gender is required.");
    }
    if (strlen($streetAddress) > 40) {
        die("Error: Street address must be max 40 characters.");
    }
    if (strlen($suburbTown) > 40) {
        die("Error: Suburb/town must be max 40 characters.");
    }
    if (!in_array($state, array("VIC", "NSW", "QLD", "NT", "WA", "SA", "TAS", "ACT"))) {
        die("Error: State is required and must be one of VIC, NSW, QLD, NT, WA, SA, TAS, ACT.");
    }
    if (!preg_match("/^\d{4}$/", $postcode) || !isValidPostcode($postcode, $state)) {
        die("Error: Postcode is required and must be exactly 4 digits matching the selected state.");
    }
    if (!validateEmailAddress($email)) {
        die("Error: Email address is required and must be in a valid format.");
    }
    if (!validatePhoneNumber($phone)) {
        die("Error: Phone number must be 8 to 12 digits or spaces.");
    }
    if (!validateOtherSkills($otherSkills, isset($_POST['OtherSkills']))) {
        die("Error: Other skills field cannot be empty if checkbox selected.");
    }

    // All data is validated, proceed with adding the record to the database
    if (addEOIRecord($jobRefNumber, $firstName, $lastName, $dob, $gender, $streetAddress, $suburbTown, $state, $postcode, $email, $phone, $otherSkills)) {
        echo "EOI record added successfully!";
    } else {
        echo "Error: Failed to add EOI record.";
    }

    $host = "feenix-mariadb.swin.edu.au";
    $user = "s104814302";
    $password = "260905";
    $database = "s104814302_db";
    
    $conn = mysqli_connect($host, $user, $password, $database);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // Check if the 'eoi' table exists, if not, create it
    $tableExistsQuery = "SHOW TABLES LIKE 'eoi'";
    $tableExistsResult = mysqli_query($conn, $tableExistsQuery);
    
    if (mysqli_num_rows($tableExistsResult) == 0) {
        // Table doesn't exist, create it
        $createTableQuery = "CREATE TABLE eoi (
            EOInumber INT AUTO_INCREMENT PRIMARY KEY,
            JobReferenceNumber VARCHAR(5),
            FirstName VARCHAR(20),
            LastName VARCHAR(20),
            DoB DATE,
            NID VARCHAR(12),
            Gender ENUM('Male', 'Female', 'Others'),
            PhoneNumber VARCHAR(15),
            Email VARCHAR(255),
            StreetAddress VARCHAR(255),
            SuburbTown VARCHAR(255),
            Postcode VARCHAR(10),
            State VARCHAR(20),
            Education VARCHAR(50),
            CollegeUniversity TEXT,
            Courses TEXT,
            CertificatesGrades TEXT,
            School TEXT,
            Subjects TEXT,
            ExpWorkingCompanies ENUM('Yes', 'No'),
            PastExperience TEXT,
            References TEXT,
            YearsExperience VARCHAR(50),
            DegreeForSA TEXT,
            CertificationForSA TEXT,
            VirtualTechnologyFamiliarity ENUM('1', '2', '3', '4', '5'),
            SkillQuestionForSA TEXT,
            DegreeForSS TEXT,
            CertificationForSS TEXT,
            RegulatoryComplianceFamiliarity ENUM('1', '2', '3', '4', '5'),
            SkillQuestionForSS TEXT,
            DegreeForPD TEXT,
            ProjectForPD TEXT,
            DesignDevelopToolsFamiliarity ENUM('1', '2', '3', '4', '5'),
            Language TEXT,
            OtherLanguages TEXT,
            SkillQuestionsForPD TEXT,
            Status ENUM('New', 'Current', 'Final') DEFAULT 'New'
        )";
    
        if (mysqli_query($conn, $createTableQuery)) {
            echo "Table 'eoi' created successfully.";
        } else {
            echo "Error creating table: " . mysqli_error($conn);
        }
    }
    
    // Insert data into the 'eoi' table
    $insertQuery = "INSERT INTO eoi (JobReferenceNumber, FirstName, LastName, DoB, NID, Gender, PhoneNumber, Email, StreetAddress, SuburbTown, Postcode, State, Education, CollegeUniversity, Courses, CertificatesGrades, School, Subjects, ExpWorkingCompanies, PastExperience, References, YearsExperience, DegreeForSA, CertificationForSA, VirtualTechnologyFamiliarity, SkillQuestionForSA, DegreeForSS, CertificationForSS, RegulatoryComplianceFamiliarity, SkillQuestionForSS, DegreeForPD, ProjectForPD, DesignDevelopToolsFamiliarity, Language, OtherLanguages, SkillQuestionsForPD) 
    VALUES ('$jobRefNumber', '$firstName', '$lastName', '$dob', '$nid', '$gender', '$phoneNumber', '$email', '$streetAddress', '$suburbTown', '$postcode', '$state', '$education', '$collegeUniversity', '$courses', '$certificatesGrades', '$school', '$subjects', '$expWorkingCompanies', '$pastExperience', '$references', '$yearsExperience', '$degreeForSA', '$certificationForSA', '$virtualTechFamiliarity', '$skillQuestionForSA', '$degreeForSS', '$certificationForSS', '$regulatoryComplianceFamiliarity', '$skillQuestionForSS', '$degreeForPD', '$projectForPD', '$designDevelopToolsFamiliarity', '$languages', '$otherLanguages', '$skillQuestionsForPD')";
    
    if (mysqli_query($conn, $insertQuery)) {
        $eoiNumber = mysqli_insert_id($conn);
        echo "Expression of Interest submitted successfully. Your EOInumber is: $eoiNumber";
    } else {
        echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}
?>
