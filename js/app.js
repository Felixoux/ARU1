// Barre de navigation en JS

const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    burger.addEventListener('click',()=>{
    // Toggle nav
    nav.classList.toggle('nav-active');

        //animate links
    navLinks.forEach((link, index) => {
        if(link.style.animation) {
            link.style.animation = ''
        } else {
            link.style.animation = `navLinkFade 0.5s ease forwards ${index / 9 + 0.3}s`;
        }
    });
    // Burger animation
    burger.classList.toggle('toggle');
});

}

navSlide();

// A la une 

const plus = document.querySelector('.card-actu_little1 .show-more-infos, .card-actu_little2 .show-more-infos, .card-actu_little3 .show-more-infos ');
const card = document.querySelector('.card-actu_little1, .card-actu_little2, .card-actu_little3');
plus.addEventListener('click',()=>{
    card.classList.toggle(".opened");
});


