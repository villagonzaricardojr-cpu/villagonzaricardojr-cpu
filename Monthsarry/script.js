function goToLovePage() {
    window.location.href = "love.html";
}

function goBack() {
    window.location.href = "index.html";
}
// Navigation
function goBack() {
    window.location.href = "index.html";
}

// Floating hearts animation
const heartsContainer = document.getElementById("hearts-container");
const heartEmojis = ["💖", "💕", "💗", "💘", "❤️", "💞", "❣️"];

function createHeart() {
    const heart = document.createElement("div");
    heart.classList.add("heart");
    heart.innerText = heartEmojis[Math.floor(Math.random() * heartEmojis.length)];

    heart.style.left = Math.random() * 100 + "vw";
    heart.style.fontSize = Math.random() * 25 + 15 + "px";
    heart.style.animationDuration = Math.random() * 4 + 4 + "s";
    heart.style.opacity = Math.random() * 0.5 + 0.5;
    heart.style.color = `hsl(${Math.random() * 50 + 330}, 90%, 70%)`;

    heartsContainer.appendChild(heart);

    setTimeout(() => {
        heart.remove();
    }, 8000);
}

// Create hearts every 300ms
setInterval(createHeart, 300);
