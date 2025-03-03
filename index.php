<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ankan Dutta - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        body {
    font-family: 'Poppins', sans-serif;
}

        /* 🌟 Glassmorphism Effect */
.glass-effect {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
}

/* ✨ Navbar Enhancements */
.navbar {
    position: fixed;
    top: 0;
    
    font: 14px / 28px D-DIN-Bold, Arial, Verdana, sans-serif;
    font-weight: 400;
    font-weight: 500;
    font-style: normal;
    color: #fff;
    text-transform: uppercase;
    -webkit-transition: color .25sease;
    transition: color .25sease;
    width: 100%;
    background: rgba(0, 0, 0, 0.6);
    padding: 15px 0;
    z-index: 1000;
    transition: background 0.3s;
}

.navbar a {
    color: white;
    text-decoration: none;
    padding: 10px 20px;
    transition: color 0.3s ease-in-out;
}

.navbar a:hover, .navbar a.active {
    color: #ffcc00;
    border-bottom: 3px solid #ffcc00;
}


/* 🔹 Elegant Button Styles */
.button {
    background: linear-gradient(45deg, #ff5e62, #ff9966);
    padding: 12px 24px;
    color: white;
    border-radius: 8px;
    border: none;
    font-size: 18px;
    cursor: pointer;
    transition: transform 0.2s, background 0.3s;
}

.button:hover {
    transform: scale(1.1);
    background: linear-gradient(45deg, #ff9966, #ff5e62);
}

/* 🖋️ About Section with Typing Effect */
.typing-text {
    overflow: hidden;
    white-space: nowrap;
    font-size: 24px;
    font-weight: bold;
    color: white;
    border-right: 2px solid white;
    animation: typing 3s steps(40, end), blink 0.8s infinite;
}

@keyframes typing {
    from {
        width: 0;
    }
    to {
        width: 100%;
    }
}

@keyframes blink {
    50% {
        border-color: transparent;
    }
}

/* 📜 Scroll Animation */
.fade-in {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

.fade-in.show {
    opacity: 1;
    transform: translateY(0);
}

/* 🔄 Projects Carousel Enhancements */
.project-card {
    background: rgba(255, 255, 255, 0.15);
    color: white;
    text-align: center;
    padding: 20px;
    border-radius: 15px;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s;
}

.project-card:hover {
    transform: scale(1.1);
    box-shadow: 0 10px 30px rgba(255, 255, 255, 0.2);
}

/* 🏆 Emblem Styles for School & College */
.education-section img {
    width: 60px;
    height: 60px;
    margin-right: 15px;
}
body {
    background: url('img.png') no-repeat center center fixed;
    background-size: cover;
    color: white;
    font-family: 'Poppins', sans-serif;
    text-align: center;
    position: relative;
}

body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: inherit;
    filter: blur(4px); /* Adjust blur intensity */
    z-index: -1;
}


.stars {
    width: 100%;
    height: 100%;
    background: transparent;
    position: fixed;
    top: 0;
    left: 0;
    z-index: -1;
    pointer-events: none;
}

.stars::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: radial-gradient(white 1px, transparent 1px);
    background-size: 10px 10px; /* Increases space between stars */
    opacity: 0.5;
    animation: twinkle 4s infinite alternate;
    background-position: fixed; /* Makes stars surround entire page */
}

@keyframes twinkle {
    0% {
        opacity: 0.4;
    }
    100% {
        opacity: 0.8;
    }
}


        .hero {
            background: url('https://www.spacex.com/static/images/fh_performance.webp') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            animation: fadeIn 2s ease-in-out;
        }
        .hero h1 {
            font-size: 4rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            animation: bounceInDown 2s;
        }
        .navbar {
            background-color: rgba(0, 0, 0, 0.9) !important;
            backdrop-filter: blur(10px);
        }
        .section {
            padding: 100px 0;
            text-align: center;
            animation: fadeInUp 2s;
        }
        .btn-custom {
            background-color: white;
            color: black;
            padding: 12px 24px;
            border-radius: 50px;
            font-weight: bold;
            text-decoration: none;
            transition: all 0.4s ease;
        }
        .btn-custom:hover {
            background-color: #f0f0f0;
            transform: scale(1.1);
        }
        .glow-text {
            text-shadow: 0px 0px 15px rgba(255, 255, 255, 0.8);
        }
        .projects-nav {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            overflow-x: auto;
        }
        .projects-nav a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            padding: 10px 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            transition: 0.3s;
        }
        .projects-nav a:hover {
            background: white;
            color: black;
        }
        .education-pathway {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }
        .education-step {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            margin: 10px;
            border-radius: 10px;
            width: 60%;
            text-align: center;
        }
        .skills {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .skills-container {
    padding: 20px;
}

.skills-title {
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 20px;
}

.skills-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.skill-card {
    background: #1e1e1e;
    padding: 20px;
    border-radius: 15px;
    width: 140px;
    height: 140px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.skill-card:hover {
    transform: scale(1.1);
    box-shadow: 0 4px 10px rgba(255, 255, 255, 0.2);
}

.skill-card img {
    width: 50px;
    height: 50px;
    margin-bottom: 10px;
}

.skill-card p {
    font-size: 1rem;
    font-weight: 600;
}
        .skill-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 15px;
            border-radius: 10px;
            width: 150px;
            text-align: center;
        }
        .contact-form {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
        }
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }
        .social-icons a {
            color: white;
            font-size: 24px;
            transition: 0.3s;
        }
        .social-icons a:hover {
            color: cyan;
        }
  
.project-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.project-card {
    background: #1e1e1e;
    border-radius: 15px;
    padding: 20px;
    min-width: 200px;
    max-width: 250px;
    height: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    transition: transform 0.3s ease;
}

.project-card a {
    color: #007bff;
    font-size: 14px;
    text-decoration: none;
    white-space: normal;
    word-wrap: break-word;
}

.projects-carousel {
    display: flex;
    overflow-x: auto;
    scroll-behavior: smooth;
    width: 80%;
    padding: 10px;
    gap: 20px;
    
    /* Hide scrollbar */
    scrollbar-width: none; /* Firefox */
    -ms-overflow-style: none; /* IE & Edge */
}

.projects-carousel::-webkit-scrollbar {
    display: none; /* Chrome, Safari */
}


.project-card:hover {
    transform: scale(1.1);
    background: white;
    color: black;
}

.nav-btn {
    background: white;
    color: black;
    border: none;
    padding: 10px;
    cursor: pointer;
    font-size: 24px;
    position: absolute;
    z-index: 10;
    transition: opacity 0.3s ease-in-out;
    opacity: 0; /* Hidden by default */
}

.left {
    left: 0;
}

.right {
    right: 0;
}

.project-container:hover .nav-btn {
    opacity: 1; /* Appear on hover */
}

.nav-btn:hover {
    background: gray;
}

@import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap');
.spacex-logo {
    font-family: 'Orbitron', sans-serif; /* Sleek, futuristic font */
    font-size: 28px;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: white;
    text-decoration: none; /* Ensures no underline */
    display: inline-block;
    position: relative;
}
.social-icons img {
    width: 30px;  
    height: 30px;  
    display: inline-block;
    vertical-align: middle;
}
.social-icons a {
    display: inline-block;
    margin: 5px;
}




    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top animate__animated animate__fadeInDown">
        <div class="container">
            <div class="stars"></div>
            <a class="navbar-brand spacex-logo" href="#">ANKAN DUTTA</a>

            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">ABOUT</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">PROJECTS</a></li>
                    <li class="nav-item"><a class="nav-link" href="#education">EDUCATION</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">SKILLS</a></li>
                    <li class="nav-item"><a class="nav-link" href="certi.html">Certification</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <header class="hero">
        <div>
            <h1 class="glow-text">ANKAN DUTTA</h1>
            <p class="animate__animated animate__fadeInUp">Innovator | Developer | Tech Enthusiast</p>
            <a href="#projects" class="btn-custom animate__animated animate__pulse animate__infinite">Explore Work</a>
        </div>
    </header>
    <section id="about" class="section">
        <div class="container">
            <h2>About Me</h2>
            <p class="lead">
                Passionate about technology and innovation, I am a dedicated developer with a strong foundation in **Java, C++, and Web Technologies**.  
                From building dynamic web applications to crafting efficient algorithms, I thrive on solving real-world problems through **code and creativity**.
            </p>
            <p>
                With a keen interest in **software development, distributed systems, and database management**, I love experimenting with new tools and frameworks to stay ahead in the evolving tech landscape.  
                Whether it's designing a **scalable application, optimizing system performance, or developing intuitive UI/UX**, I am always up for a challenge.
            </p>
            <p>
                Let's connect and build something amazing together!
            </p>
        </div>
    </section>    
    
    <section id="projects" class="section">
        <div class="container">
            <h2>Projects</h2>
            <div class="project-container">
                <button class="nav-btn left">&#10094;</button>
                <div class="projects-carousel">
                    <div class="project-card"><a href="https://github.com/UltimateVortex666/MAVA">MAVA(Movie Recommendation System)</div></a>
                    <div class="project-card"><a href='https://github.com/UltimateVortex666/Cryptoverse'>Cryptoverse App</div></a>
                    <div class="project-card"><a href='https://github.com/UltimateVortex666/Healtcare'>Healtcare Analysis</a></div>
                    <div class="project-card"><a href='https://github.com/UltimateVortex666/Object-detection'>Object Detection</a></div>
                    <div class="project-card"><a href='https://github.com/UltimateVortex666/B.EATS'>B.EATS A Take-away System</a></div>
                    <div class="project-card"><a href='https://github.com/UltimateVortex666/Crime-Rates-Prediction'>Crime Rate Analysis</a></div>
                    <div class="project-card"><a href='https://github.com/UltimateVortex666/Qrify'>Qrify Event Attendance System</a></div>
                    <div class="project-card"><a href='https://github.com/UltimateVortex666/Deepfake-Video-Classification'>DeepFake Video Classification</a></div>
                </div>
                <button class="nav-btn right">&#10095;</button>
            </div>
        </div>
    </section>
    
   <script>
    function scrollLeft() {
        document.querySelector('.projects-carousel').scrollBy({ left: -220, behavior: 'smooth' });
    }

    function scrollRight() {
        document.querySelector('.projects-carousel').scrollBy({ left: 220, behavior: 'smooth' });
    }

    document.querySelector('.left').addEventListener('click', scrollLeft);
    document.querySelector('.right').addEventListener('click', scrollRight);

    // Automatic scrolling every 2 seconds
    setInterval(() => {
        scrollRight();
    }, 2000);
</script>

       
    
    
    <section id="education" class="section">
        <div class="container">
            <h2>Education</h2>
            <div class="education-pathway">
                <div class="education-step">
                    <a href='https://www.vitbhopal.ac.in/'><img src="masters-emblem.png" alt="Master's Emblem" width="50"></a>
                    <strong>Masters in Computer Application - 2024-present</strong>
                    <p>Specialized in Software Engineering and AI|ML hands-on experience in distributed systems and databases.</p>
                </div>
                <div class="education-step">
                    <a href='https://www.bennett.edu.in/'><img src="bachelors-emblem.png" alt="Bachelor's Emblem" width="50"></a>
                    <strong>Bachelors in Computer Application - 2021-24</strong>
                    <p>Focused on Machine Learning|Artificial Intelligence and Algorithmic Problem Solving.</p>
                </div>
                <div class="education-step">
                    <a href='https://www.dpsmegacity.in/'><img src="school-emblem.png" alt="School Emblem" width="50"></a>
                    <strong>Class 12th - 2020-21</strong>
                    <p>Excelled in Commerce & Mathematics, building a strong foundation for Computer Science.</p>
                </div>
                <div class="education-step">
                    <a href='https://www.dpsmegacity.in/'><img src="school-emblem.png" alt="School Emblem" width="50"></a>
                    <strong>Class 10th - 2018-19</strong>
                    <p>Excelled in Commerce & Mathematics, building a strong foundation for Computer Science.</p>
                </div>
            </div>
        </div>
    </section>
    
    
    <section id="skills" class="section">
        <div class="skills-container">
            <h2 class="skills-title">Skills</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <img src="java-logo.png" alt="Java">
                    <p>Java</p>
                </div>
                <div class="skill-card">
                    <img src="python-logo.png" alt="Python">
                    <p>Python</p>
                </div>
                <div class="skill-card">
                    <img src="html-logo.png" alt="HTML">
                    <p>HTML</p>
                </div>
                <div class="skill-card">
                    <img src="css-logo.png" alt="CSS">
                    <p>CSS</p>
                </div>
                <div class="skill-card">
                    <img src="js-logo.png" alt="JavaScript">
                    <p>JavaScript</p>
                </div>
                <div class="skill-card">
                    <img src="php-logo.png" alt="PHP">
                    <p>PHP</p>
                </div>
                <div class="skill-card">
                    <img src="MYSQL-logo.png" alt="MySQL">
                    <p>MySQL</p>
                </div>
                <div class="skill-card">
                    <img src="Ai.png" alt="AI/ML">
                    <p>AI | ML</p>
                </div>
                <div class="skill-card">
                    <img src="Cpp-logo.png" alt="CPP">
                    <p>C++</p>
                </div>
            </div>
        </div>
        
    </section>

    <section id="contact" class="section">
        <div class="container">
        <h2>Contact Me</h2>
                    <p>
                        <strong>Email:</strong> 
                        <a href="mailto:duttaankan13@gmail.com" style="text-decoration: none; color: #007bff; font-weight: bold;">
                            ✉️ dattaankan13@gmail.com
                        </a>
                    </p>
                    <p>
                        <strong>Phone:</strong> 
                        <a href="tel:+917439028818" style="text-decoration: none; color: #28a745; font-weight: bold;">
                            📞 +91-74390 28818
                        </a>
                    </p>

                    <form class="contact-form" method="POST" action="contact.php">
                        <input type="text" class="form-control mb-3" name="name" placeholder="Your Name" required>
                        <input type="email" class="form-control mb-3" name="email" placeholder="Your Email" required>
                        <textarea class="form-control mb-3" name="message" placeholder="Your Message" required></textarea>
                        <button class="btn btn-primary w-100" type="submit">Send</button>
                    </form>


            <div class="social-icons">
                <a href="https://www.linkedin.com/in/ankan-dutta-91811a198/" target="_blank"><i class="fab fa-linkedin"><img src="lin.png"></i></a>
                <a href="https://www.github.com/UltimateVortex666" target="_blank"><i class="fab fa-github"><img src="git.png"></i></a>
                <a href="https://www.x.com/AnkanDu58054914" target="_blank"><i class="fab fa-x-twitter"><img src="x.png"></i></a>
            </div>
        </div>
    </section>
    <script>
    // Dynamic Navbar Active Link Highlight Fix
const sections = document.querySelectorAll('section');
const navLinks = document.querySelectorAll('.navbar a');

window.addEventListener('scroll', () => {
    let current = '';
    let lastSection = sections[sections.length - 1]; // Get last section (Contact)

    sections.forEach(section => {
        const sectionTop = section.offsetTop - 60;
        const sectionHeight = section.offsetHeight;

        if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
            current = section.getAttribute('id');
        }
    });

    // If scrolled near the bottom, set last section as active
    if (window.scrollY + window.innerHeight >= document.body.scrollHeight - 10) {
        current = lastSection.getAttribute('id');
    }

    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href').substring(1) === current) {
            link.classList.add('active');
        }
    });
});
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
