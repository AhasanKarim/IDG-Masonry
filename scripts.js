// Function to toggle night mode
function toggleNightMode() {
  var element = document.body;
  element.classList.toggle("night-mode");
}

// Initial state
var prevScrollpos = window.pageYOffset;
var navbar = document.getElementById("navbar");
// Use a variable to store the timeout ID
var scrollStopTimeout = null;

window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;

  // Hide navbar when scrolling
  navbar.style.top = "-60px"; // Adjust this value based on your navbar's actual height

  // Clear the previous timeout if there is one
  clearTimeout(scrollStopTimeout);

  // Set a new timeout
  scrollStopTimeout = setTimeout(function() {
    // Show the navbar only if the current scroll position is less than the previous scroll position (scrolling up) or if scrolling has stopped
    if (prevScrollpos >= currentScrollPos) {
      navbar.style.top = "0";
    }
    prevScrollpos = currentScrollPos;
  }, 100); // Adjust the delay as needed
}

// Initially hide the navbar
navbar.style.top = "-60px";