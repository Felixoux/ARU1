// //Spoiler System ==> les amis aru1
// const spoiler = document.querySelector("#les_amis main .container div .see-more");
// const spoilerText = document.querySelector("#les_amis main .container .spoiler-text")
// spoiler.addEventListener('click', function ()  {
//     spoilerText.classList.toggle("hidden");
//     spoiler.classList.toggle("change-text");
//     spoiler.innerHTML = (spoiler.classList.contains("change-text") ? "Retour a l'intro" : "Lire la suite");
// // spoiler.classList.contains("change-text") ? spoiler.innerHTML = "retour à l'intro" :   spoiler.innerHTML =  "Lire la suite"
// }) 


// Spoiler index system  
var buttons = document.querySelectorAll('#index main .spoiler');

var createSpoiler = function(button) {
    button.addEventListener('click', function () {
        this.previousElementSibling.classList.toggle('hidden');
        this.classList.toggle('change-text');
        this.innerHTML = (this.classList.contains("change-text") ? "Voir moins" : "Afficher les contacts" );
    })
}

for(var i = 0; i < buttons.length; i++) {
    createSpoiler(buttons[i]);
}

