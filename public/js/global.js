/**
 * Adds a global click event listener to the entire window. It detects clicks anywhere
 * on the page and performs a check to close dropdown menus if the user clicks outside
 * of the dropdown button.
 */
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) { // Checks if not a dropdown button.
    var dropdowns = document.getElementsByClassName("dropdown-content"); // Finds all elements with "dropdown-content".
    for (var i = 0; i < dropdowns.length; i++) { // Loops through the found elements.
      var openDropdown = dropdowns[i]; // [i] refers to the current dropdown in the loop.
      if (openDropdown.classList.contains('show')) { // Checks if current dropdown has the class "show".
        openDropdown.classList.remove('show'); // If the dropdown has "show", remove it and close CSS display from "block to "none".
      }
    }
  }
};