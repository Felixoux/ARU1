// Spoiler System ==> les amis aru1
const spoiler = document.querySelector("#les_amis main .container div .see-more");
const spoilerText = document.querySelector("#les_amis main .container .spoiler-text")
spoiler.addEventListener('click', () =>  {
    spoilerText.classList.toggle("hidden");
    spoiler.classList.toggle("change-text");
    spoiler.innerHTML = (spoiler.classList.contains("change-text") ? "Retour a l'intro" : "Lire la suite");
// spoiler.classList.contains("change-text") ? spoiler.innerHTML = "retour à l'intro" :   spoiler.innerHTML =  "Lire la suite"
}) 

// ===============================================================
var background = document.getElementById('page404');
var container = document.querySelector('#page404 main .container');
        

window.onmousemove = function(e) {
            var x = e.clientX/7,
                y = e.clientY/7;
                background.style.backgroundPositionX = x + 'px';
                background.style.backgroundPositionY = y + 'px';
        }