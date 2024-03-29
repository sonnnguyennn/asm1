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

    <link rel="stylesheet" href="./styles/jobs.css" class="css">
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
            <li class="drop"><a href="index.html">Home</a></li>
            <li class="drop"><a href="#">Pages</a>
                <ul class="pages-drop">
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </li>
            <li class="drop"><a href="./jobs.html">Jobs</a>
                <ul class="services-drop">
                    <li><a href="#">Server Administrator</a></li>
                    <li><a href="#">Security Specialist</a></li>
                    <li><a href="#">Product Development</a></li>
                </ul>
            </li>
            <li class="drop"><a href="./about.html">About us</a></li>
            <li class="drop"><a href="./enhancements.html">Enhancements</a></li>
            <li class="hiring">
                <a href="./jobs.html">We are Hiring!</a>
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
    <section class="hero-content">
        <div class="hero-wrap"></div>
        <div class="hero-items">
            <h1>Your new journey start now!</h1>
            <p>Embark on your career journey with us and discover a world of opportunities tailored just for you.</p>
            <a href="./apply.html" class="hero-button">
                <p>Register now</p>
            </a>
        </div>
    </section>
    <section class="jobs">
        <div class="jobs-title">
            <h2>Position descriptions</h2>
        </div>
        <div class="jobs-container">
            <div class="job-item">
                <div class="job-item-inner">
                    <div class="job-front">
                        <div class="item-img">
                            <img src="./images/server-admin.jpg" alt="">
                        </div>
                        <div class="item-content">
                            <h3>Server Administrator (SA101)</h3>
                            <p class="job-des">
                                <span>A Server Administrator</span> is responsible for the installation, maintenance, and optimization of servers in an organization. 
                                This role involves managing server infrastructure and ensuring optimal performance and security. 
                            </p>
                            <button class="turn-back">
                                Hover to see more!
                            </button>
                        </div>
                    </div>
                    <div class="job-back">
                        <div class="back-wrap">
                            <div class="requirements require-slide-1">
                                <span>Requirements:</span>
                                <ol> 
                                    <li> Bachelor's degree in Computer Science, Information Technology, or a related field.</li>
                                    <li>Proven experience in server administration.</li>
                                    <li>Relevant certifications (e.g., Microsoft Certified: Windows Server, CompTIA Server+).</li>
                                    <li>Continuous learning and staying updated on server technologies.</li>
                                    <li>Strong understanding of security best practices.</li>
                                </ol>
                            </div>
                            <div class="back-container">
                                <span>Hard Skills:</span>
                                <ul>
                                    <li>Proficiency in server operating systems (e.g., Windows Server, Linux).</li>
                                    <li>Knowledge of virtualization technologies (e.g., VMware, Hyper-V).</li>
                                    <li>Experience with server hardware and networking.</li>
                                    <li>Troubleshooting and problem-solving skills.</li>
                                    <li>Scripting and automation capabilities.</li>
                                </ul>
                                <span>Soft Skills:</span> 
                                <ul>
                                    <li>Effective communication and collaboration.</li>
                                    <li>Detail-oriented with a focus on accuracy.</li>
                                    <li>Time management and prioritization.</li>
                                    <li>Adaptability to changing technological landscapes.</li>
                                    <li>Customer service orientation.</li>
                                </ul>
                                <button class="see-more">
                                    <span>Hover to see the requirements!</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="job-item">
                <div class="job-item-inner">
                    <div class="job-front">
                        <div class="item-img">
                            <img src="./images/security-specialist.jpg" alt="">
                        </div>
                        <div class="item-content">
                            <h3>Security Specialist (SS201)</h3>
                            <p class="job-des">
                                <span>A Security Specialist</span> safeguards organizational systems and data through security measures, threat monitoring, and incident response. 
                                Responsibilities include assessing vulnerabilities and ensuring compliance.                         
                            </p>
                            <button class="turn-back">
                                Hover to see more!
                            </button>
                        </div>
                    </div>
                    <div class="job-back">
                        <div class="back-wrap">
                            <div class="requirements require-slide-2">
                                <span>Requirements:</span> 
                                <ol>
                                    <li>Bachelor's degree in Cybersecurity, Information Technology, or a related field.</li>
                                    <li>Proven experience in cybersecurity roles.</li>
                                    <li>Relevant certifications and training.</li>
                                    <li>Knowledge of current security trends and threats.</li>
                                    <li>Ethical mindset and commitment to maintaining confidentiality.</li>
                                </ol>
                            </div>
                            <div class="back-container">
                                <span>Hard Skills:</span>
                                <ul>
                                    <li>Proficiency in cybersecurity tools and technologies.</li>
                                    <li>Knowledge of network and system security principles.</li>
                                    <li>Incident response and forensic analysis skills.</li>
                                    <li>Understanding of regulatory compliance (e.g., GDPR, HIPAA).</li>
                                    <li>Security certifications (e.g., Certified Information Systems Security Professional - CISSP).</li>
                                </ul>
                                <span>Soft Skills:</span>
                                <ul>
                                    <li>Analytical and critical thinking.</li>
                                    <li>Strong communication and collaboration.</li>
                                    <li>Attention to detail and problem-solving.</li>
                                    <li>Ability to work under pressure.</li>
                                    <li>Continuous learning and adaptability.</li>
                                </ul>
                                <button class="see-more">
                                    <span>Hover to see the requirements!</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="job-item">
                <div class="job-item-inner">
                    <div class="job-front">
                        <div class="item-img">
                            <img src="./images/product-development.jpg" alt="">
                        </div>
                        <div class="item-content">
                            <h3>Product Development (PD303)</h3>
                            <p class="job-des">
                                <span>A Product Developer</span> designs, develops, and enhances products, involving market research, prototyping, collaboration with cross-functional teams, 
                                and ensuring alignment with customer needs.
                            </p>
                            <button class="turn-back">
                                Hover to see more!
                            </button>
                        </div>
                    </div>
                    <div class="job-back">
                        <div class="back-wrap">
                            <div class="requirements require-slide-3">
                                <span>Requirements:</span> 
                                <ol>
                                    <li>Bachelor's degree in Product Design, Engineering, or a related field.</li>
                                    <li>Proven experience in product development.</li>
                                    <li>Strong portfolio showcasing successful product launches.</li>
                                    <li>Proficiency in relevant software and tools.</li>
                                    <li>Continuous learning and staying updated on industry trends.</li>
                                </ol>
                            </div>
                            <div class="back-container">
                                <span>Hard Skills:</span>
                                <ul>
                                    <li>Proficiency in product design and development tools.</li>
                                    <li>Technical expertise related to the product domain.</li>
                                    <li>Project management skills for timely delivery.</li>
                                    <li>Familiarity with prototyping and testing methodologies.</li>
                                    <li>Data analysis and market research capabilities.</li>
                                </ul>
                                <span>Soft Skills:</span>
                                <ul> 
                                    <li>Creative thinking and problem-solving.</li>
                                    <li>Effective communication and teamwork.</li>
                                    <li>Adaptability to changing project requirements.</li>
                                    <li>Attention to detail and quality assurance.</li>
                                    <li>Customer-centric mindset.</li>
                                </ul>
                                <button class="see-more">
                                    <span>Hover to see the requirements!</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="apply.php" target="_blank">
            <div class="jobs-button">
                <p>Apply now</p>
            </div>
        </a>
    </section>
    <!-- <footer class="footer">
        <img class="footer-bg" src="./images/footer.jpg" alt="footer-img1">
        <img class="footer-bg2" src="./images/footer.jpg" alt="footer-img2">
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