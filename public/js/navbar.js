const navbar = document.getElementById("navbar");
const mediaQuery = window.matchMedia("(max-width: 768px)");

function changeNavbarColor() {
    const headerHeight = document.getElementById("#").offsetHeight;

    if (mediaQuery.matches) {
        navbar.style.backgroundColor = "#101820";
    } else {
        if (window.scrollY > headerHeight - 80) {
            navbar.style.backgroundColor = "#101820";
            navbar.style.transition = "background-color 0.5s";
        } else {
            navbar.style.backgroundColor = "";
            navbar.style.transition = "";
        }
    }
}

const mobileMenuToggle = document.getElementById("mobile-menu-toggle");
const mobileNavbar = document.getElementById("mobile-menu");

mobileMenuToggle.addEventListener("click", () => {
    if (mobileNavbar.classList.contains("-translate-y-96")) {
        mobileNavbar.classList.remove("-translate-y-96");
    } else {
        mobileNavbar.classList.add("-translate-y-96");
    }
});

window.addEventListener("DOMContentLoaded", changeNavbarColor);
window.addEventListener("resize", changeNavbarColor);
window.addEventListener("scroll", changeNavbarColor);
