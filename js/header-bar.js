window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("abajo",window.scrollY>0);
})

// Nuevo código para hacer el menú responsive
const toggleButton = document.querySelector('.toggle-button');
const navLinks = document.querySelector('.nav-links');
const overlay = document.querySelector('.overlay');

toggleButton.addEventListener('click', () => {
    toggleButton.classList.toggle('active');
    navLinks.classList.toggle('active');
    overlay.classList.toggle('active');
});