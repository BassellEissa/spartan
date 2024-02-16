
/* var mybutton = document.getElementById("myBtn");
var mybutton = document.getElementById("myBtn1"); */
var username = document.getElementById("uname");
var password = document.getElementById("psw");

/* window.onscroll = function() {scrollFunction();}; */


function myFunction() {
  var x = document.getElementById("card");
  var table = document.getElementById("reservation_history");
  x.style.display='none';
  table.style.display='block';
  change_psw_form.style.display="none";

}
function myFunction2() {
  var x = document.getElementById("card");
  var table = document.getElementById("reservation_history");
  x.style.display='block';
  table.style.display='none';
  change_psw_form.style.display="none";

}
function myFunction3() {
  var x = document.getElementById("card");
  var table = document.getElementById("reservation_history");
  x.style.display='none';
  table.style.display='none';
  change_psw_form.style.display="block";

}


/* function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
} */
  
function getData(){
  alert("test");
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}