// Tampilkan alert saat halaman dimuat
window.onload = function() {
    alert("Selamat datang di Website Sederhana!");
};

// Scroll ke bagian saat klik navigasi (smooth scrolling)
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute("href")).scrollIntoView({
            behavior: "smooth"
        });
    });
});

// Highlight menu saat di-hover
document.querySelectorAll("nav ul li a").forEach(link => {
    link.addEventListener("mouseover", () => {
        link.style.color = "#FFD700";
    });
    link.addEventListener("mouseout", () => {
        link.style.color = "#fff";
    });
});
