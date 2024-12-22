// Navbar Fixed
window.onscroll = function() {
    const header = document.querySelector('#nav-header');
    const fixNav = header.offsetTop;

    if(window.pageYOffset > fixNav) {
        header.classList.add('navbar-fixed');
    } else {
        header.classList.remove('navbar-fixed');
    }
}

// Hamburger Active
const hamburger  = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');

hamburger.addEventListener('click', function() {
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
})