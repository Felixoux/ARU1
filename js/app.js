// Deroulement effect navbar
$liParent = document.querySelector('.header-nav li');
$liSlide = document.querySelector('.header-nav .deroulant');

$liParent.addEventListener('mouseover', () => {
    $liSlide.classList.add(".active");
})