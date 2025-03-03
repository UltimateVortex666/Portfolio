<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate Showcase</title>
    <link rel="stylesheet" href="certi.css">
    <style>
        /* Navbar Styles */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 15px 20px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            padding: 10px 20px;
            transition: 0.3s;
        }
        .navbar a:hover {
            background-color: #555;
            border-radius: 5px;
        }
        .container {
            padding-top: 60px; /* To prevent content from being hidden under the fixed navbar */
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <a href="index.html">Home</a>
    </nav>

    <div class="container">
        <section class="certificate-section">
            <h2>My Certificates</h2>
            <div class="carousel">
                <button class="nav-btn left" id="prevBtn">&#10094;</button>
                <div class="carousel-container">
                    <div class="carousel-track">
                        <div class="certificate"><img src="certi.png" alt="Certificate 1"></div>
                        <div class="certificate"><img src="certi1.png" alt="Certificate 2"></div>
                        <div class="certificate"><img src="certi2.png" alt="Certificate 3"></div>
                        <div class="certificate"><img src="certi4.png" alt="Certificate 4"></div>
                        <div class="certificate"><img src="certi5.png" alt="Certificate 5"></div>
                        <div class="certificate"><img src="certi6.png" alt="Certificate 6"></div>
                    </div>
                </div>
                <button class="nav-btn right" id="nextBtn">&#10095;</button>
            </div>
        </section>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const track = document.querySelector(".carousel-track");
            const prevBtn = document.getElementById("prevBtn");
            const nextBtn = document.getElementById("nextBtn");
            const certificates = document.querySelectorAll(".certificate");

            let index = 0;
            const totalCertificates = certificates.length;

            function updateCarousel() {
                const certWidth = certificates[0].clientWidth;
                track.style.transform = `translateX(${-index * certWidth}px)`;
            }

            function nextSlide() {
                index = (index + 1) % totalCertificates; // Loop back to start
                updateCarousel();
            }

            function prevSlide() {
                index = (index - 1 + totalCertificates) % totalCertificates; // Loop back to end
                updateCarousel();
            }

            nextBtn.addEventListener("click", nextSlide);
            prevBtn.addEventListener("click", prevSlide);

            window.addEventListener("resize", updateCarousel);
            updateCarousel();

            // Auto-scroll every 3 seconds
            setInterval(nextSlide, 3000);
        });
    </script>


</body>
</html>
