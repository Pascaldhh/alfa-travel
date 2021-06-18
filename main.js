const mobileMenu = document.querySelector('.mobile-menu');
const body = document.querySelector('body');
const mainMenu = document.querySelector('.navbalk');
let menuOpen = true;
mobileMenu.addEventListener("click", () => {
    if(!menuOpen)
    {
        mainMenu.classList.remove("open");
        body.style.overflow = 'scroll';
        menuOpen = true;
    } else {
        mainMenu.classList.add("open");
        body.style.overflow = 'hidden';
        menuOpen = false;
    }
});
