document.addEventListener("DOMContentLoaded", function () {
  const textElement = document.getElementById("text");
  const textContent = "LDKOM Inventory.";
  const typingSpeed = 150; // Adjust the typing speed (milliseconds)
  const pauseBetweenAnimations = 1000; // Adjust the pause between animations (milliseconds)

  let charIndex = 0;

  function type() {
    textElement.textContent += textContent.charAt(charIndex);
    charIndex++;

    if (charIndex < textContent.length) {
      textElement.style.visibility = "visible"; // Show the text as it types
      setTimeout(type, typingSpeed);
    } else {
      // Animation completed, reset variables
      textElement.style.visibility = "hidden"; // Hide the text before resetting
      setTimeout(resetAnimation, pauseBetweenAnimations);
    }
  }

  function resetAnimation() {
    // Clear text content and reset charIndex
    textElement.textContent = "";
    charIndex = 0;

    // Start the typing animation again
    setTimeout(type, typingSpeed);
  }

  // Start the initial typing animation
  type();
});
