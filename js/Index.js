const hamburger_navbar = document.querySelector(".hamburger_navbar");
const navLinks = document.querySelector(".nav-links_navbar");
const links = document.querySelectorAll(".nav-links_navbar li");

hamburger_navbar.addEventListener('click', ()=>{
   //Links
    document.body.style.overflow = hidden;
    document.body.style.overflow = "hidden";
    navLinks.classList.toggle("open");
    links.forEach(link => {
        link.classList.toggle("fade");
    });

    //Animation
    hamburger_navbar.classList.toggle("toggle");
});