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
