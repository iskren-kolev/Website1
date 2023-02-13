
//JS selector with added event listener to open a function
let hamburger_button = document.querySelector('.icon');
hamburger_button.addEventListener('click', open_hamburger_menu);

//to open the hamburger menu
function open_hamburger_menu() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
