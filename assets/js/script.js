document.addEventListener('DOMContentLoaded', function (event) {
  const showNavbar = (toggleId, navId, bodyId, headerId) => {
    const toggle = document.getElementById(toggleId),
      nav = document.getElementById(navId),
      bodypd = document.getElementById(bodyId),
      headerpd = document.getElementById(headerId);

    // Validate that all variables exist
    if (toggle && nav && bodypd && headerpd) {
      toggle.addEventListener('click', () => {
        // show navbar
        nav.classList.toggle('show');
        // change icon
        toggle.classList.toggle('bx-x');
        // add padding to body
        bodypd.classList.toggle('body-pd');
        // add padding to header
        headerpd.classList.toggle('body-pd');
      });
    }
  };

  showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header');

  /*===== LINK ACTIVE =====*/
  const linkColor = document.querySelectorAll('.nav_link');

  function colorLink() {
    if (linkColor) {
      linkColor.forEach((l) => l.classList.remove('active'));
      this.classList.add('active');
    }
  }
  linkColor.forEach((l) => l.addEventListener('click', colorLink));

  // Your code to run since DOM is loaded and ready
});

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById('myBtn');

// Get the <span> element that closes the modal
var addspan = document.getElementById('add-modal-close');



// When the user clicks on the button, open the modal
btn.onclick = function () {
  modal.style.display = 'block';
};




// When the user clicks on <span> (x), close the modal
addspan.onclick = function () {
  modal.style.display = 'none';
};



// When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// }
