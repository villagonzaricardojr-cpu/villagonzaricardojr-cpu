
let repository = [
    { email: "user1@example.com", password: "pass123", name: "User One" },
    { email: "admin@example.com", password: "admin123", name: "Admin" }
];


const loginForm = document.querySelector(".form-box.login form");
const registerForm = document.querySelector(".form-box.register form");
const forgotForm = document.querySelector(".form-box.forgot form");


function showMessage(form, message, color = "red") {
    let msgDiv = form.querySelector(".message");
    if (!msgDiv) {
        msgDiv = document.createElement("div");
        msgDiv.classList.add("message");
        form.appendChild(msgDiv);
    }
    msgDiv.style.color = color;
    msgDiv.textContent = message;
}


loginForm.addEventListener("submit", function(e) {
    e.preventDefault();
    const email = document.getElementById("loginEmail").value.trim();
    const password = document.getElementById("loginPassword").value.trim();

    const user = repository.find(u => u.email === email && u.password === password);

    if (user) {

        localStorage.setItem("isLoggedIn", "true");
        showMessage(loginForm, `Login successful! Welcome, ${user.name}`, "green");

        setTimeout(() => {
            window.location.href = "portfolio.html";
        }, 1000);
    } else {
        showMessage(loginForm, "Invalid email or password", "red");
    }
});


registerForm.addEventListener("submit", function(e) {
    e.preventDefault();
    const name = registerForm.querySelector("input[type='text']").value.trim();
    const email = registerForm.querySelector("input[type='email']").value.trim();
    const password = registerForm.querySelector("input[type='password']").value.trim();

    if (repository.some(u => u.email === email)) {
        alert("Email already registered!");
        return;
    }

    repository.push({ name, email, password });
    alert("Registration successful! Please login.");


    document.querySelector(".form-box.register").classList.remove("active");
    document.querySelector(".form-box.login").classList.add("active");
});


forgotForm.addEventListener("submit", function(e) {
    e.preventDefault();
    const email = forgotForm.querySelector("input[type='email']").value.trim();
    const user = repository.find(u => u.email === email);

    if (user) {
        alert(`Reset link sent to ${email} (simulated)`);
    } else {
        alert("Email not found in repository");
    }

    document.querySelector(".form-box.forgot").classList.remove("active");
    document.querySelector(".form-box.login").classList.add("active");
});


document.querySelectorAll(".register-link").forEach(link => {
    link.addEventListener("click", () => {
        document.querySelector(".form-box.login").classList.remove("active");
        document.querySelector(".form-box.register").classList.add("active");
    });
});
document.querySelectorAll(".login-link").forEach(link => {
    link.addEventListener("click", () => {
        document.querySelector(".form-box.register").classList.remove("active");
        document.querySelector(".form-box.forgot").classList.remove("active");
        document.querySelector(".form-box.login").classList.add("active");
    });
});
document.querySelectorAll(".forgot-link").forEach(link => {
    link.addEventListener("click", () => {
        document.querySelector(".form-box.login").classList.remove("active");
        document.querySelector(".form-box.forgot").classList.add("active");
    });
});
