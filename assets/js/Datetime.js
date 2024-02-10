// Wait for the DOM to be fully loaded before accessing elements
document.addEventListener("DOMContentLoaded", function () {
  // Get the element by id
  let time = document.getElementById("current-time");

  // Check if the element with id "current-time" exists
  if (time) {
      // Set up an interval to update the time every second
      setInterval(() => {
          let d = new Date();
          time.innerHTML = d.toLocaleString();
      }, 1000);
  } else {
      console.error("Error: Element with id 'current-time' not found");
  }
});
