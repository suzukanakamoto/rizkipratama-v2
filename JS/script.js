// HAmburger Menu
document.addEventListener("DOMContentLoaded", () => {
    const hamburger = document.querySelector(".hamburger");
    const nav = document.querySelector("nav");

    hamburger.addEventListener("click", () => {
        // Toggle the 'active' class on the navigation menu
        nav.classList.toggle("active");

        // Change the hamburger icon between "bars" and "times"
        const icon = hamburger.querySelector("i");
        icon.classList.toggle("fa-bars");
        icon.classList.toggle("fa-times");
    });

    // Optional: Close the menu when a link is clicked (for single-page navigation)
    nav.addEventListener("click", (e) => {
        if (e.target.tagName === "A") {
            nav.classList.remove("active");
            const icon = hamburger.querySelector("i");
            icon.classList.remove("fa-times");
            icon.classList.add("fa-bars");
        }
    });
});



// Real-Time Clock Function
function updateClock() {
    const clockElement = document.getElementById("clock");
    const now = new Date();
    
    // Format Hours, Minutes, and Seconds
    const hours = now.getHours().toString().padStart(2, "0");
    const minutes = now.getMinutes().toString().padStart(2, "0");
    const seconds = now.getSeconds().toString().padStart(2, "0");

    // Display the time in HH:MM:SS format
    clockElement.innerHTML = `${hours}:${minutes}:${seconds}`;
}

// Update the clock every second
setInterval(updateClock, 1000);

// Initialize the clock immediately on page load
updateClock();
