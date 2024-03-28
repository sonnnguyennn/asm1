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
    <!-- <header class="header">
        <div class="logo">
            <img src="./images/logo.png" alt="nocxi-logo">
        </div>
        <ul class="main-menu">
            <li class="drop"><a href="index.php">Home</a></li>
            <li class="drop"><a href="#">Pages</a>
                <ul class="pages-drop">
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </li>
            <li class="drop"><a href="jobs.php">Jobs</a>
                <ul class="services-drop">
                    <li><a href="#">Server Administrator</a></li>
                    <li><a href="#">Security Specialist</a></li>
                    <li><a href="#">Product Development</a></li>
                </ul>
            </li>
            <li class="drop"><a href="about.php">About us</a></li>
            <li class="drop"><a href="enhancements.php">Enhancements</a></li>
            <li class="hiring">
                <a href="jobs.php">We are Hiring!</a>
            </li>
        </ul>
        <div class="icon-control">
            <div class="log-in">
                <span class="fa-solid fa-lock"></span>
                <p>Log in</p>
            </div>
            <button class="start">Get started</button>
            <div class="iconsearch-ctr">
                <div class="wrap"></div>
                <div class="search-box">
                    <label for="search-input">
                        <input type="text" id="search-input" placeholder=" Search here..">
                        <span>Start searching</span>
                    </label>
                    <div class="icon">
                        <img src="https://img.icons8.com/fluency-systems-regular/48/000000/search--v1.png" alt="search-icon-small">
                    </div>
                </div>
                <img class="search" src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/64/000000/external-search-logistic-delivery-kiranshastry-solid-kiranshastry.png" alt="search-icon-big">
            </div>
        </div>
    </header> -->
    <!-- <section class="hero-content">
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
    </section> -->
    
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
                <form method="post" action="http://mercury.swin.edu.au/it000000/formtest.php">
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

                    <br><hr>

                    <!-- Employ Desire -->
                    <section>
                        <h2 class="form-sections">Section D - Employment Desired</h2>
                        <fieldset id="sec4">
                            <legend>Employment</legend>
                            <div>
                                <label for="reference-number">Job reference number:<em>(*)</em></label>&nbsp;
                                <input type="text" name="Job Reference Number" id="reference-number" pattern="[A-Za-z0-9]{5}" required>
                            </div>
                            <div>
                                <label for="year-experience">Years of experience for the selected position<em>(*)</em></label>&nbsp;
                                <select name="Years of experience" id="year-experience" required>
                                    <option value="" selected="selected">Please select</option>
                                    <option value="None">0</option>
                                    <option value="Intern">Internships</option>
                                    <option value="1-5 years">1-5 years</option>
                                    <option value="5-10 years">5-10 years</option>
                                    <option value="10-15 years">10-15 years</option>
                                    <option value=">15 years">>15 years</option>
                                </select> 
                            </div>
                            <div>
                                <h2>For Server Administrator - SA101:</h2>
                                <br>
                                <label for="server-requirement-1">
                                    Do you have any degree in Computer Science, Information Technology, or related field?<br>
                                    List them down below. 
                                </label>
                                <textarea name="Degree for S.A." id="server-requirement-1" cols="30" rows="5"></textarea>
                                <br><br>
                                <label for="server-requirement-2">
                                    Do you have any certifications relevant to the field (e.g., Microsoft Certified: Windows Server, CompTIA Server+)? <br>
                                    List them down below.
                                </label>
                                <textarea name="Certification for S.A." id="server-requirement-2" cols="30" rows="5"></textarea>
                                <br><br>
                                <span id="server-requirement-3">
                                    How familiar are you with virtualization technologies (e.g., VMware, Hyper-V) on the scale of 1-5 ?<em>(*)</em>
                                </span><br>
                                <input type="radio" name="Virtual Technology familiarity" id="server-requirement-3-1" value="1" checked required>
                                <label for="server-requirement-3-1">1</label>
                                <input type="radio" name="Virtual Technology familiarity" id="server-requirement-3-2" value="2">
                                <label for="server-requirement-3-2">2</label>
                                <input type="radio" name="Virtual Technology familiarity" id="server-requirement-3-3" value="3">
                                <label for="server-requirement-3-3">3</label>
                                <input type="radio" name="Virtual Technology familiarity" id="server-requirement-3-4" value="4">
                                <label for="server-requirement-3-4">4</label>
                                <input type="radio" name="Virtual Technology familiarity" id="server-requirement-3-5" value="5">
                                <label for="server-requirement-3-5">5</label>
                                <br><br>
                                <label for="server-requirement-4">
                                    Explain your approach to ensuring the security of servers hosting websites. What specific measures do you implement to protect against potential threats and vulnerabilities?
                                </label>
                                <textarea name="Skill question for S.A." id="server-requirement-4" cols="30" rows="5"></textarea>
                            </div>
                            <div>
                                <h2>For Security Specialist - SS201:</h2>
                                <br>
                                <label for="security-requirement-1">
                                    Do you have any degree in Cybersecurity, Information Technology, or a related field ? <br>
                                    List them down below. 
                                </label>
                                <br>
                                <textarea name="Degree for S.S." id="security-requirement-1" cols="30" rows="5"></textarea>
                                <br><br>
                                <label for="security-requirement-2">
                                    Do you have any certifications in security field (e.g., Certified Information Systems Security Professional - CISSP)? <br>
                                    List them down below.
                                </label>
                                <br>
                                <textarea name="Certification for S.S." id="security-requirement-2" cols="30" rows="5"></textarea>
                                <br><br>
                                <span id="security-requirement-3">
                                    How familiar are you with security regulatory compliance (e.g., GDPR, HIPAA) on the scale of 1-5 ?<em>(*)</em>
                                </span><br>
                                <input type="radio" name="Regulatory Compliance familiarity" id="security-requirement-3-1" value="1" checked required>
                                <label for="security-requirement-3-1">1</label>
                                <input type="radio" name="Regulatory Compliance familiarity" id="security-requirement-3-2" value="2">
                                <label for="security-requirement-3-2">2</label>
                                <input type="radio" name="Regulatory Compliance familiarity" id="security-requirement-3-3" value="3">
                                <label for="security-requirement-3-3">3</label>
                                <input type="radio" name="Regulatory Compliance familiarity" id="security-requirement-3-4" value="4">
                                <label for="security-requirement-3-4">4</label>
                                <input type="radio" name="Regulatory Compliance familiarity" id="security-requirement-3-5" value="5">
                                <label for="security-requirement-3-5">5</label>
                                <br><br>
                                <label for="security-requirement-4">
                                    Communication and collaboration are crucial in cybersecurity. 
                                    Describe an instance where you worked closely with cross-functional 
                                    teams to enhance the security posture of a web project. 
                                    How did you effectively communicate security concerns and solutions to non-technical stakeholders?
                                </label>
                                <textarea name="Skill question for S.S." id="security-requirement-4" cols="30" rows="5"></textarea>
                            </div>
                            <div>
                                <h2>For Product Development - PD303:</h2>
                                <br>
                                <label for="product-requirement-1">
                                    Do you have any degree in Product Design, Engineering, or a related field ? <br>
                                    List them down below.
                                </label>
                                <br>
                                <textarea name="Degree for P.D." id="product-requirement-1" cols="30" rows="5"></textarea> <br>
                                <br>
                                <label for="product-requirement-2">
                                    Do you have any past projects creating products (websites, applications, etc.) ? <br>
                                    List them down below.
                                </label>
                                <br>
                                <textarea name="Project for P.D." id="product-requirement-2" cols="30" rows="7"></textarea>
                                <br><br>
                                <span id="product-requirement-3">
                                    How familiar are you with product design and development tools on the scale of 1-5 ?<em>(*)</em>
                                </span>
                                <br>
                                <input type="radio" name="Design and Develop tools familiarity" id="product-requirement-3-1" value="1" checked required>
                                <label for="product-requirement-3-1">1</label>
                                <input type="radio" name="Design and Develop tools familiarity" id="product-requirement-3-2" value="2">
                                <label for="product-requirement-3-2">2</label>
                                <input type="radio" name="Design and Develop tools familiarity" id="product-requirement-3-3" value="3">
                                <label for="product-requirement-3-3">3</label>
                                <input type="radio" name="Design and Develop tools familiarity" id="product-requirement-3-4" value="4">
                                <label for="product-requirement-3-4">4</label>
                                <input type="radio" name="Design and Develop tools familiarity" id="product-requirement-3-5" value="5">
                                <label for="product-requirement-3-5">5</label>
                                <br><br>
                                <span class="product-requirement-4">Expert in:</span>&nbsp;
                                <input type="checkbox" name="Language[]" id="html" value="HTML" checked>
                                <label for="html">HTML</label>
                                <input type="checkbox" name="Language[]" id="css" value="CSS">
                                <label for="css">CSS</label>
                                <input type="checkbox" name="Language[]" id="javasc" value="JavaScript">
                                <label for="javasc">JavaScript</label>
                                <input type="checkbox" name="Language[]" id="php" value="PHP">
                                <label for="php">PHP</label>
                                <input type="checkbox" name="Language[]" id="python" value="Python">     
                                <label for="python">Python</label>
                                <input type="checkbox" name="Language[]" id="others" value="Others">
                                <label for="others">Others skills..</label>
                                <br><br>
                                <label for="checkbox-others">If select others, please note them down below:</label><br>
                                <textarea name="Other language(s)" id="checkbox-others" cols="50" rows="5" placeholder=" Write here."></textarea>
                                <br><br>
                                <label for="product-requirement-5">
                                    How do you incorporate user-centered design principles into the product 
                                    development process for websites? Share an example of how you ensured 
                                    the end product met user needs and expectations.
                                </label>
                                <textarea name="Skill questions for P.D." id="product-requirement-5" cols="30" rows="5"></textarea>
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
        

    <!-- <footer class="footer">
        <img class="footer-bg" src="./images/footer.jpg" alt="footer">
        <img class="footer-bg2" src="./images/footer.jpg" alt="footer">
        <div class="about-col">
            <img src="./images/logo-(white).png" alt="nocxi-logo">
            <p>Subsrcibe for our upcoming latest articles and news resources</p>
            <label for="footer-email">Write your email below to get notify!</label>
            <input type="email" id="footer-email" placeholder=" Email address">
        </div>
        <div class="links-col">
            <h2>Links</h2>
            <ul>
                <li>About us</li>
                <li>Meet our team</li>
                <li>News & media</li>
                <li>Our projects</li>
                <li>Contacts</li>
            </ul>
        </div>
        <div class="contact-col">
            <h2>Contacts</h2>
            <ul>
                <li>
                    <span class="fa-solid fa-phone"></span>
                    <span>+84 0123456789</span>
                </li>
                <li>
                    <span class="fa-solid fa-envelope"></span>
                    <span>admin@nocxi.com</span>
                </li>
                <li>
                    <span class="fa-solid fa-location-pin"></span>
                    <span>458 Minh Khai </span>
                </li>
            </ul>
        </div>
        <div class="icon-col">
            <span class="fa-brands fa-facebook"></span>
            <span class="fa-brands fa-instagram"></span>
            <span class="fa-brands fa-x-twitter"></span>
            <span class="fa-brands fa-pinterest"></span>
        </div>
        <div class="aside-wrap">
            <aside>Since its establishment in 2010, NOCXI has given employment and income to over 800 people.</aside>
        </div>
    </footer>
    <section class="ref">
        <h2>Link to reference:</h2>
        <a href="https://pixydrops.com/notechhtml/main-html/index.html" target="_blank">Website Visual Reference</a>
        <a href="https://www.w3schools.com/" target="_blank">W3Schools</a>
        <a href="https://icons8.com/icons" target="_blank">Icon8</a>
        <a href="https://fontawesome.com/icons" target="_blank">Font Awesome</a>
        <a href="https://pixydrops.com/" target="_blank">Pixydrops</a>
    </section> -->
<?php 
    showFooter();
?>
</body>
</html>