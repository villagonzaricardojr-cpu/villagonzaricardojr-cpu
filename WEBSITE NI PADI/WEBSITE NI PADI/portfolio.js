
if (localStorage.getItem("isLoggedIn") !== "true") {
    alert("You must log in first!");
    window.location.href = "index.html";
}


document.getElementById("logoutBtn").addEventListener("click", function() {
    alert("Logout successfully!");
    localStorage.removeItem("isLoggedIn");
    window.location.href = "index.html";
});


const menuIcon = document.getElementById("menu-icon");
const navbar = document.querySelector(".navbar");

menuIcon.addEventListener("click", () => {
    navbar.classList.toggle("active");
    menuIcon.classList.toggle("bx-x");
});

const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll(".navbar a");

window.addEventListener("scroll", () => {
    let scrollPos = window.scrollY + 150;

    sections.forEach(sec => {
        if (scrollPos >= sec.offsetTop && scrollPos < sec.offsetTop + sec.offsetHeight) {
            navLinks.forEach(link => link.classList.remove("active"));
            const activeLink = document.querySelector(`.navbar a[href="#${sec.id}"]`);
            if (activeLink) activeLink.classList.add("active");
        }
    });


    const revealElements = document.querySelectorAll(".reveal");
    revealElements.forEach(el => {
        const rect = el.getBoundingClientRect();
        if (rect.top < window.innerHeight - 100) {
            el.classList.add("show");
        }
    });
});

function validateForm() {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const message = document.getElementById("message").value.trim();

    if (!name || !email || !message) {
        alert("Please fill in all fields.");
        return false;
    }

    const emailCheck = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!emailCheck.test(email)) {
        alert("Enter a valid email address.");
        return false;
    }

    alert("Message sent successfully!");
    return true;
}
