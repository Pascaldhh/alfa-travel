const mobileMenu = document.querySelector('.mobile-menu');
const body = document.querySelector('body');
const mainMenu = document.querySelector('.navbalk');
let menuOpen = true;
mobileMenu.addEventListener("click", () => {
    if(!menuOpen)
    {
        mainMenu.classList.remove("open");
        body.classList.remove('noscroll');
        menuOpen = true;
    } else {
        mainMenu.classList.add("open");
        body.classList.add('noscroll');
        menuOpen = false;
    }
});


