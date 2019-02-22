window.onscroll = function() { eurscva_sticky() };

var navbar = document.getElementById("navhead");
var sticky = navbar.offsetTop;

function eurscva_sticky() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("site-sticky")
  } else {
    navbar.classList.remove("site-sticky");
  }
}
