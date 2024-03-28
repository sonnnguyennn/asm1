<?php 
    include("./include.php");
?>
<?php 
    showHeader();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOCXI</title>

    <link rel="stylesheet" href="./styles/apply.css" class="css">
    <link rel="stylesheet" href="./styles/style.css" class="css">
    
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
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        /
                    </li>
                    <li>
                        <a href="apply.html">Apply</a>
                    </li>
                </ul>
                <h2>Application Form</h2>
            </div>
        </section>
        <section class="description">
            <img class="description-img" src="https://img.freepik.com/free-photo/researchers-looking-alternative-energy-souces_23-2149311493.jpg" alt="people working together">
            <div class="description-content">
                <div class="content-header">
                    <div class="content-header-start">
                        <p>Start your journey at NOCXI</p>                    
                    </div>
                    <h2>Join our teams!</h2>
                </div>
                <div class="content-text">
                    Welcome to our dynamic and innovative tech company! 
                    We're hiring cybersecurity experts, security specialists, and server providers. 
                    As leaders in the field, we prioritize safeguarding digital assets. Our tech team fosters innovation and growth. 
                    If you're passionate about cybersecurity and want to shape the future, explore exciting opportunities with us. 
                    Be a key player in the world of digital security!
                </div>
                <div class="content-start">Fill out the form below to apply!</div>
            </div>
        </section>
        <div class="form-background">
            <div class="form-container">
                <form method="post" action="processEOI.php" novalidate="novalidate">
                    <!-- Title -->
                    <h1>Job Application</h1>
                    <div class="helpdesk-des">
                        The Help Desk is located in ATC620. Open 9 A.M. to 5 P.M. Monday to Friday <br>
                        Kindly check your email frequently for the response pertaining to the job application. <br>
                        Please only complete the part according to the job reference number you wrote in the bracket. <br>
                        The <em>(*)</em> marked fields in other jobs can be can be omitted. <br>
                        <em>All (*) marked fields are required.</em>
                    </div>

                    <br><hr>

                    <!-- General Details -->
                    <section id="sec1">
                        <h2 class="form-sections">Section A - Personal Information</h2>
                        <fieldset class="form-general-details">
                            <legend>General</legend>
                            <div id="name">
                                <div>
                                    <label for="form-general-fname">First Name<em>(*)</em></label>&nbsp;
                                    <input type="text" name="First Name" id="form-general-fname" pattern="^[A-Za-z]{1,20}$" title="Please enter only alphabetical characters" required>
                                </div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div>
                                    <label for="form-general-lname">Last Name<em>(*)</em></label>&nbsp;
                                    <input type="text" name="Last Name" id="form-general-lname" pattern="^[A-Za-z]{1,20}$" title="Please enter only alphabetical characters" required>
                                </div>
                            </div>
                            <div id="bday">
                                <label for="form-general-bday">DoB<em>(*)</em></label>&nbsp;
                                <input type="text" name="DoB" id="form-general-bday" pattern="(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/\d{4}" title="Please enter the date according to the placeholder" placeholder="dd/mm/yyyy" required>
                            </div>
                            <div id="id">
                                <label for="form-general-ID">National identification number<em>(*)</em></label>&nbsp;
                                <input type="text" name="NID" id="form-general-ID" pattern="[A-Z0-9]{12}" title="Please enter your national ID" required>
                            </div>
                        </fieldset>
                        <fieldset class="form-gender-detail">
                            <legend>Gender</legend>
                            <div id="gender">Your gender<em>(*)</em>
                                &nbsp;
                                <input type="radio" name="Gender" value="Male" id="form-gender-male" required>
                                <label for="form-gender-male">Male</label>
                                <input type="radio" name="Gender" value="Female" id="form-gender-female" required>
                                <label for="form-gender-female">Female</label>
                                <input type="radio" name="Gender" value="Others" id="form-gender-others" required>
                                <label for="form-gender-others">Others</label>
                            </div>
                        </fieldset>
                        <fieldset class="form-contact-details">
                            <legend>Contact</legend>
                            <div>
                                <label for="form-phonenumb">Phone<em>(*)</em></label>&nbsp;
                                <input type="text" name="Phone number" id="form-phonenumb" pattern="[0-9 ]{8-12}" placeholder=" 012345678901" title="Write according to the placeholder" required>
                            </div>
                            <div>
                                <label for="form-email">Email<em>(*)</em></label>&nbsp;
                                <input type="email" name="Email" id="form-email" placeholder=" abc123@gmail.com" title="Write according to the placeholder" required>
                            </div>
                        </fieldset>
                        <fieldset class="form-address-details">
                            <legend>Address</legend>
                            <div class="street-address">
                                <label for="first-address">Street address<em>(*)</em></label>&nbsp;
                                <input type="text" name="Street Address" id="first-address" maxlength="40" placeholder=" Eg: Street A" title="Write according to the placeholder" required>
                            </div>
                            <div class="suburd-address">
                                <label for="second-address">Suburb/town<em>(*)</em></label>&nbsp;
                                <input type="text" name="Suburb/town" id="second-address" maxlength="40" placeholder=" Eg: Suburb B" title="Write according to the placeholder" required>
                            </div>
                            <div class="postal-address">
                                <label for="third-address">Postcode<em>(*)</em></label>&nbsp;
                                <input type="text" name="Postcode" id="third-address" pattern="[0-9]{4}" placeholder=" Eg: 1234" title="Write according to the placeholder" required>
                            </div>
                            <div class="state-address">
                                <label for="fourth-address">Select State:<em>(*)</em></label>&nbsp;
                                <select id="fourth-address" name="State">
                                    <option value="">Please select</option>
                                    <option value="VIC">VIC</option>
                                    <option value="NSW">NSW</option>
                                    <option value="QLD">QLD</option>
                                    <option value="NT">NT</option>
                                    <option value="WA">WA</option>
                                    <option value="SA">SA</option>
                                    <option value="TAS">TAS</option>
                                    <option value="ACT">ACT</option>
                                </select>
                            </div>
                        </fieldset>                        
                    </section>


                    <br><hr>

                    <!-- Academic Record -->
                    <section id="sec2">
                        <h2 class="form-sections">Section B - Academic Record</h2>
                        <fieldset>
                            <legend>Academic level</legend>
                            <div>
                                <label for="academic-level">Highest level of education<em>(*)</em></label>&nbsp;
                                <select name="Education" id="academic-level" required>
                                    <option value="" selected="selected">Please select</option>
                                    <option value="Primary">Primary</option>
                                    <option value="Secondary">Secondary</option>
                                    <option value="Highschool">Highschool</option>
                                    <option value="Tertiary/Uni">Tertiary/University</option>
                                    <option value="Bachelor">Bachelor's</option>
                                    <option value="Master">Master's</option>
                                    <option value="Doctoral">Ph.D.</option>
                                    <option value="None">Have no experience</option>
                                    <option value="Others">Others (not listed)</option>
                                </select>                                
                            </div>
                            <div>Please list your academic records below, staring from the highest:</div>
                            <table>
                                <tr>
                                    <th colspan="3">Academic Records</th>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="textarea1">College/University</label><br>
                                        <textarea name="College/University" id="textarea1" cols="25" rows="7"></textarea>
                                    </td>
                                    <td>
                                        <label for="textarea2">Course(s)</label><br>
                                        <textarea name="Course(s)" id="textarea2" cols="25" rows="7"></textarea>
                                    </td>
                                    <td>
                                        <label for="textarea3">Certificates & Grades</label><br>
                                        <textarea name="Certificates & Grades" id="textarea3" cols="25" rows="7"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="textarea4">School</label><br>
                                        <textarea name="School" id="textarea4" cols="25" rows="7"></textarea>
                                    </td>
                                    <td>
                                        <label for="textarea5">Subjects</label><br>
                                        <textarea name="Subjects" id="textarea5" cols="25" rows="7"></textarea>
                                    </td>
                                    <td>
                                        <label for="textarea6">Certificates & Grades</label><br>
                                        <textarea name="Certificates & Grades" id="textarea6" cols="25" rows="7"></textarea>
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </section>
                    
                    <br><hr>
                    
                    <!-- References -->
                    <section id="sec3">
                        <h2 class="form-sections">Section C - Working Experience</h2>
                        <fieldset>
                            <legend>Experience</legend>
                            <div>
                                <span>Do you have experience working in companies before ?<em>(*)</em></span>
                                <br>
                                <input type="radio" name="Experience" value="Yes" id="work-experience-yes" required>
                                <label for="work-experience-yes">Yes</label>
                                <input type="radio" name="Experience" value="No" id="work-experience-no" required>
                                <label for="work-experience-no">No</label>
                            </div>
                            <div>
                                <label for="behavior">How was your experience working with the last company ?</label><br>
                                <textarea name="Past experience" id="behavior" cols="40" rows="7" placeholder=" Note the experience down here."></textarea>
                            </div>
                            <div>
                                <label for="references">References list</label><br>
                                <textarea name="References" id="references" cols="40" rows="7" placeholder=" Write the references from your past works here." required></textarea>
                            </div>
                        </fieldset>
                    </section>

                    <!-- Buttons -->
                    <div class="form-actions">
                        <input type="submit" value="Submit">
                        <input type="reset" value="Reset form">                
                    </div>
                </form>                
            </div>
        </div>
                
    </main>
</body>
</html>
<?php 
    showFooter();
?>