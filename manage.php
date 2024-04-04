    <?php 
        require("settings.php");
        include("header.inc");
        if ((isset($_SESSION['position'])) && ($_SESSION['position'] == 1)) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NOCXI</title>
        <link rel="stylesheet" href="./styles/style.css">
        <link rel="stylesheet" href="./styles/manageEOI.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>
    <body>
        <main>
            <section class="hero-content">
                <div class="hero-items">
                    <ul class="hero-navi">
                        <li>
                            <a href="/index.php">Home</a>
                        </li>
                        <li>
                            /
                        </li>
                        <li>
                            <a href="/manage.php">Manage</a>
                        </li>
                    </ul>
                    <h2>Manage</h2>
                </div>
            </section>
            <form action="manage.php" method="post">
                <h1>Manage EOIs</h1>
                <ul class="form-container">
                    <li class="form-col">
                        <label for="list_all">List all the EOIs</label>
                        <input type="submit" name="list_all_EOI" value="Search">
                    </li>
                    <li class="form-col">
                        <label for="job_reference">Job Reference Number:</label>
                        <input type="text" name="job_reference" id="job_reference">
                        <input type="submit" name="list_by_job_reference" value="Search">
                    </li>
                    <li class="form-col">
                        <label for="firstName">Applicant's First Name:</label>
                        <input type="text" id="firstName" name="FirstName">
                        <input type="submit" name="list_by_applicant_name" value="Search">
                    </li>
                    <li class="form-col">
                        <label for="lastName">Applicant's Last Name:</label>
                        <input type="text" id="lastName" name="LastName">
                        <input type="submit" name="list_by_applicant_name" value="Search">
                    </li>
                    <li class="form-col">
                        <label for="delete_job_ref">Delete Job: <br><br> </label>
                        <input type="text" name="DeleteJobRef" id="delete_job_ref" placeholder="Job Reference Number">
                        <input type="submit" name="delete_job_ref" value="Delete">
                    </li>
                    <li class="form-col">
                        <label for="select_an_EOI">Select an EOI to change status</label>
                        <input type="text" name="selectEOI" id="select_an_EOI">
                    </li>
                    <li class="form-col">
                        <label for="new_status_EOI">Change an EOI's status</label>
                        <select id="new_status_EOI" name="newStatusEOI">
                            <option value="">Please select</option>
                            <option value="New">New</option>
                            <option value="Current">Current</option>
                            <option value="Final">Final</option>
                        </select>
                        <input type="submit" name="change_EOI_status" value="Change EOI Status">
                    </li>
                </ul>
            </form>        

            <?php
                $conn = @mysqli_connect($host, $user, $password, $database);

                function sanitize_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }

                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                } else {
                    if ((isset($_SESSION['position'])) && $_SESSION['position'] == 1) {
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            if (isset($_POST["list_all_EOI"])) {
                                // List all EOIs
                                $sql = "SELECT * FROM eoi;";
                            } elseif(isset($_POST['list_by_job_reference'])) {
                                // List all EOIs for a particular position (given a job reference number)
                                $job_reference = sanitize_input($_POST['job_reference']);
                                $sql = "SELECT * FROM eoi WHERE JobReferenceNumber = '$job_reference';";
                            } elseif(isset($_POST['list_by_applicant_name'])) {
                                // List all EOIs for a particular applicant given their first name, last name, or both
                                $firstname = sanitize_input($_POST['FirstName']);
                                $lastname = sanitize_input($_POST['LastName']);
                                $sql = "SELECT * FROM eoi WHERE FirstName LIKE '%$firstname%' OR LastName LIKE '%$lastname%';";
                            } elseif(isset($_POST["delete_job_ref"])) {
                                // Delete EOIs for a particular job reference number
                                $job_reference = sanitize_input($_POST["DeleteJobRef"]);
                                $sql = "DELETE FROM eoi WHERE JobReferenceNumber = '$job_reference';";
                            } elseif(isset($_POST["change_EOI_status"])) {
                                // Change the status of an EOI
                                $newStatusEOI = ($_POST['newStatusEOI']);
                                $selectedEOI = ($_POST['selectEOI']);
                                $sql = "UPDATE eoi SET AppStatus = '$newStatusEOI' WHERE EOInumber = '$selectedEOI'";
                                if ($result = mysqli_query($conn, $sql)) {
                                    echo "Successfully change status of EOI ID:$selectedEOI to $newStatusEOI";
                                }
                            }

                            // Execute the query
                            $result = mysqli_query($conn, $sql);
                            if ($result == false) {
                                echo "Error: " . mysqli_error($conn);
                            } else {
                                if (!is_bool($result)) {
                                    if (mysqli_num_rows($result) > 0) {
                                        echo "<table>";
                                        echo "<caption>EOIs</caption>";
                                        echo "<tr>
                                                <th>EOI ID</th>
                                                <th>Job Reference</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>DoB</th>
                                                <th>National ID</th>
                                                <th>Gender</th>
                                                <th>Phone Number</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                            </tr>";
                                        while($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<td>".$row['EOInumber']."</td>";
                                            echo "<td>".$row['JobReferenceNumber']."</td>";
                                            echo "<td>".$row['FirstName']."</td>";
                                            echo "<td>".$row['LastName']."</td>";
                                            echo "<td>".$row['DoB']."</td>";
                                            echo "<td>".$row['NID']."</td>";
                                            echo "<td>".$row['Gender']."</td>";
                                            echo "<td>".$row['PhoneNumber']."</td>";
                                            echo "<td>".$row['Email']."</td>";
                                            echo "<td>".$row['AppStatus']."</td>";
                                            echo "</tr>";
                                        }
                                        echo "</table>";
                                    } else {
                                        echo "No EOIs found.";
                                    }                    
                                }
                            }
                        }
                    }
                    // else if (isset($_SESSION['position']) === 0) {
                    //     header("Location: index.php");
                    // }  
                    mysqli_close($conn);
                }
            ?>

        </main>

        <?php 
            include("footer.inc");
        ?>
    </body>
    </html>

    <?php
    } 
    else {
        header("Location: index.php");
        exit();
    }
    ?>