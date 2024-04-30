// search-box open close js code
let navbar = document.querySelector(".navbar");
//let searchBox = document.querySelector(".search-box .bx-search");
// let searchBoxCancel = document.querySelector(".search-box .fa-times");

/*searchBox.addEventListener("click", ()=>{
  navbar.classList.toggle("showInput");
  if(navbar.classList.contains("showInput")){
    searchBox.classList.replace("bx-search" ,"fa-times");
  }else {
    searchBox.classList.replace("fa-times" ,"bx-search");
  }
});*/

// sidebar open close js code
let navLinks = document.querySelector(".nav-links");
let menuOpenBtn = document.querySelector(".navbar .fa-bars");
let menuCloseBtn = document.querySelector(".nav-links .fa-times");
menuOpenBtn.onclick = function() {
navLinks.style.left = "0";
}
menuCloseBtn.onclick = function() {
navLinks.style.left = "-100%";
}


// sidebar submenu open close js code
/*let htmlcssArrow = document.querySelector(".htmlcss-arrow");
htmlcssArrow.onclick = function() {
 navLinks.classList.toggle("show1");
}*/
// Select all elements with the class ".htmlcss-arrow"
let htmlcssArrows = document.querySelectorAll(".htmlcss-arrow");

// Iterate over each ".htmlcss-arrow" element
htmlcssArrows.forEach(function(htmlcssArrow) {
    // Attach click event listener to each ".htmlcss-arrow" element
    htmlcssArrow.addEventListener("click", function() {
      // Find the closest parent ".more" element
      let parentMore = this.closest(".mainmenu");
      // Toggle the "show2" class on the sibling ".more-sub-menu" element
      let subMenu = parentMore.querySelector(".htmlCss-sub-menu");
      subMenu.classList.toggle("show1");
    });
});
/*let moreArrow = document.querySelector(".more-arrow");
moreArrow.onclick = function() {
 navLinks.classList.toggle("show2");
}*/
// Select all elements with the class ".more-arrow"
let moreArrows = document.querySelectorAll(".more-arrow");

// Iterate over each ".more-arrow" element
moreArrows.forEach(function(moreArrow) {
    // Attach click event listener to each ".more-arrow" element
    moreArrow.addEventListener("click", function() {
        // Find the closest parent ".more" element
        let parentMore = this.closest(".more");
        // Toggle the "show2" class on the sibling ".more-sub-menu" element
        let subMenu = parentMore.querySelector(".more-sub-menu");
        subMenu.classList.toggle("show2");
    });
});
// let jsArrow = document.querySelector(".js-arrow");
// jsArrow.onclick = function() {
//  navLinks.classList.toggle("show3");
// }



window.addEventListener("scroll", function(){
  let y = Math.round(1 + (window.scrollY || window.pageYOffset) / 150);
  
  if(y==1) {
    document.getElementById('navMenu').classList.remove('bt-card');
  } else {
    document.getElementById('navMenu').classList.add('bt-card');
  }
});

let mybutton = document.getElementById("myBtn");
let kb_content = document.getElementById("kb_content");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
  kb_content.scrollTop = 0;
}

window.addEventListener('DOMContentLoaded', (event) => {
  const bodyHeight = document.body.clientHeight;
  const windowHeight = window.innerHeight;
  const footer = document.querySelector('footer');
  if (bodyHeight < windowHeight) {
      footer.style.position = 'absolute';
  } else {
      footer.style.position = 'relative';
  }
});