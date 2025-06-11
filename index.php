<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>My Portfolio</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="about.css">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="works.css">
  <link rel="stylesheet" href="skills.css">
  <link rel="stylesheet" href="resume.css">
  <link rel="stylesheet" href="contact.css">
</head>
<body>
  <!-- Nav bar -->
  <nav>
    <h1>My Portfolio</h1>
    <ul>
      <li><a href="#homepage">Homepage</a></li>
      <li><a href="#aboutme">About Me</a></li>
      <li><a href="#works">My Works</a></li>
      <li><a href="#skills">My Skills</a></li>
      <li><a href="#resume">My Resume</a></li>
      <li><a href="#contact">Contact Me</a></li>
    </ul>
  </nav>

  <!-- Body -->
  <div class="body">

    <!-- Homepage -->
    <section id="homepage" class="homepage">
    <div class="homepage-container">
        <h1>Hello, I'm Remuel Franciss</h1>
        <h3>IT Professional & Web Developer</h3>
        <p>I build secure, responsive, and user-focused web applications with modern technologies.</p>
        <a href="#aboutme" class="btn">Learn More About Me</a>
    </div>
    </section>

    <!-- About Me -->
    <section id="aboutme" class="aboutme">
    <div class="aboutme-container">
        <h2>About Me</h2>
        <p>
        Hello! I'm Remuel Franciss, a passionate IT professional born and raised in Unisan, Quezon. I spent most of my life in this peaceful town, where I discovered my love for technology and innovation.
        </p>
        <p>
        After graduating from college, I took a leap of faith and moved to Manila to pursue greater opportunities in the tech industry. My journey is driven by a deep desire to create meaningful digital solutions and continuously grow as a developer.
        </p>
        <p>
        Outside of coding, I enjoy exploring design, mentoring peers, and staying up-to-date with the latest tech trends. I believe in lifelong learning and strive to make a positive impact through my work.
        </p>
    </div>
    </section>

   <!-- My works -->
    <div id="notif" class="notification hidden">This project is currently unavailable.</div>
    <section id="works" class="works">
    <div class="works-container">
        <h2 class="section-title">My Projects</h2>
        <p class="section-subtitle">
        A showcase of real-world applications I've built to solve problems and push my technical boundaries.
        </p>

        <div class="project-grid">
        <div class="project-card">
            <div class="project-header">
            <h3>Portfolio Website</h3>
            </div>
            <p>A sleek personal site built with HTML, CSS, and JavaScript to highlight my professional journey and skills.</p>
            <a href="#" class="project-btn" onclick="showUnavailableNotif()">View Project</a>
        </div>

        <div class="project-card">
            <div class="project-header">
            <h3>Tire Inventory System</h3>
            </div>
            <p>A secure PHP & MySQL-based POS system for managing tire stocks, tracking sales via QR codes, and generating reports.</p>
            <a href="#" class="project-btn" onclick="showUnavailableNotif()">View Project</a>
        </div>

        <div class="project-card">
            <div class="project-header">
            <h3>SK Youth Tracker</h3>
            </div>
            <p>A database system built for the Sangguniang Kabataan of Unisan to organize youth demographics and barangay data.</p>
            <a href="#" class="project-btn" onclick="showUnavailableNotif()">View Project</a>
        </div>

        <div class="project-card">
            <div class="project-header">
            <h3>Basketball Varsity Training Management</h3>
            </div>
            <p>A system for managing training sessions, attendance, and performance tracking for basketball varsity players.</p>
        <a href="#" class="project-btn" onclick="showUnavailableNotif()">View Project</a>
        </div>

        <div class="project-card">
            <div class="project-header">
            <h3>Grade 2 Learning Management Portal</h3>
            </div>
            <p>A fun and interactive educational portal for Grade 2 students featuring animated lessons and playful UI.</p>
            <a href="#" class="project-btn" onclick="showUnavailableNotif()">View Project</a>
        </div>
        </div>
    </div>
    </section>


    <!-- My Skills -->
    <section id="skills" class="skills">
    <div class="skills-container">
        <h2 class="section-title">My Skills</h2>
        <p class="section-subtitle">
        A combination of technical expertise and problem-solving abilities gained through hands-on experience and continuous learning.
        </p>

        <div class="skills-grid">
        <div class="skill-card">
            <h3>HTML / CSS / JavaScript</h3>
            <p>Crafting responsive, accessible, and engaging front-end interfaces for modern web apps.</p>
        </div>
        <div class="skill-card">
            <h3>PHP & MySQL</h3>
            <p>Developing secure and efficient backend systems with dynamic data handling and CRUD operations.</p>
        </div>
        <div class="skill-card">
            <h3>UI/UX Design</h3>
            <p>Designing intuitive user experiences using Figma and modern design principles.</p>
        </div>
        <div class="skill-card">
            <h3>Version Control</h3>
            <p>Using Git & GitHub to manage codebase changes and collaborate on projects smoothly.</p>
        </div>
        </div>
    </div>
    </section>

    <!-- My Resume -->
    <section id="resume" class="resume">
    <div class="resume-container">
        <h2 class="section-title">My Resume</h2>
        <p class="section-subtitle">
        A snapshot of my qualifications, work experience, and education.
        </p>

        <div class="resume-grid">
        <div class="resume-left">
            <div class="resume-block">
            <h3><i class="fas fa-briefcase"></i> Work Experience</h3>
            <ul>
                <li><strong>System Admin</strong> – Trade Blvd <br><span>February 24 – Present</span></li>
                <li><strong>Customer Service Representative</strong> – Afni <br><span>February 3 – February 20, 2025</span></li>
                <li><strong>Freelance Web Developer</strong> – Remote <br><span>2023 – 2025</span></li>
            </ul>
            </div>

            <div class="resume-block">
            <h3><i class="fas fa-graduation-cap"></i> Education</h3>
            <ul>
                <li><strong>BS in Information Technology</strong> <br>Polytechnic University of the Philippines<br><span>Graduated: 2024</span></li>
            </ul>
            </div>
        </div>

        <div class="resume-right">
            <div class="resume-block">
            <h3><i class="fas fa-user"></i> Professional Summary</h3>
            <p>
                A driven IT graduate passionate about front-end and back-end web development. Skilled in HTML, CSS, JavaScript, PHP, and MySQL. Experienced in deploying systems, managing databases, and designing intuitive user interfaces.
            </p>
            </div>

            <div class="resume-block download-area">
            <a href="Remuel Francsiss Legaspi Ormasa.pdf" target="_blank" class="resume-btn">
                <i class="fas fa-download"></i> Download PDF
            </a>
            </div>
        </div>
        </div>
    </div>
    </section>

    <!-- My Contacts -->
    <section id="contact" class="contact">
    <div class="contact-container">
        <h2 class="section-title">Contact Me</h2>
        <p class="section-subtitle">Let's connect! I'm open to opportunities, collaborations, or just a good chat.</p>

        <div class="contact-grid">
        <div class="contact-info">
            <p><i class="fas fa-map-marker-alt"></i> Unisan, Quezon Philippines</p>
            <p><i class="fas fa-envelope"></i> r.franciss2001@gmail.com</p>
            <p><i class="fas fa-phone"></i> +63 939 206 4678</p>
            <p><i class="fas fa-globe"></i> www.remuelportfolio.com</p>
        </div>

        <form class="contact-form">
            <input type="text" name="name" placeholder="Your Name" required />
            <input type="email" name="email" placeholder="Your Email" required />
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
        </div>
    </div>
    </section>

  </div>
<script>
  function showUnavailableNotif() {
    const notif = document.getElementById("notif");
    notif.classList.remove("hidden");
    notif.classList.add("show");

    setTimeout(() => {
      notif.classList.remove("show");
      notif.classList.add("hidden");
    }, 3000); // hides after 3 seconds
  }
</script>

</body>
</html>
