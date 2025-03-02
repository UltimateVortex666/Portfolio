document.addEventListener("DOMContentLoaded", function () {
    const track = document.querySelector(".carousel-track");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    const certificates = document.querySelectorAll(".certificate");

    let index = 0;
    const totalCertificates = certificates.length;

    // Function to update the carousel position
    function updateCarousel() {
        const certWidth = certificates[0].clientWidth;
        track.style.transform = `translateX(${-index * certWidth}px)`;
    }

    // Move to next certificate
    nextBtn.addEventListener("click", () => {
        if (index < totalCertificates - 1) {
            index++;
        } else {
            index = 0; // Loop back to the first certificate
        }
        updateCarousel();
    });

    // Move to previous certificate
    prevBtn.addEventListener("click", () => {
        if (index > 0) {
            index--;
        } else {
            index = totalCertificates - 1; // Loop back to the last certificate
        }
        updateCarousel();
    });

    // Ensure the carousel updates on window resize
    window.addEventListener("resize", updateCarousel);

    // Initial setup
    updateCarousel();
});
