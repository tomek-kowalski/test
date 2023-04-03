var btn = document.getElementsByClassName("icon");

for (var i = 0; i< btn.length; i++) {
    btn[i].addEventListener("click",myFunction);
}

function myFunction() {
    var x = document.getElementById("nav");


    if (x.style.display === "block" || x.style.display === "flex") {
      x.style.display = "none";
    } else {
      x.style.display = "block"; 
    }

  }

  window.addEventListener('resize', () => {
    var x = document.getElementById("nav");
    if(innerWidth >= 992) {

      if(x.style.display === "block" || x.style.display === "none" ) {
        x.style.display = "flex";
      }
    }

    if(innerWidth <= 991) {

      if(x.style.display === "flex") {
        x.style.display = "none";
      }
    }
  });

//STICKY NAVBAR

window.onscroll = function() {mySticky()};

var navbar = document.getElementById('nav--mobile');

var sticky = navbar.offsetTop;


  function mySticky() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky")
    } else {
      navbar.classList.remove("sticky");
    }
  }




