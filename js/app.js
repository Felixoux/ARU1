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
// var buttons = document.querySelectorAll('#index main .spoiler');

// var createSpoiler = function(button) {
//     button.addEventListener('click', function () {
//         this.previousElementSibling.classList.toggle('hidden');
//         this.classList.toggle('change-text');
//         this.innerHTML = (this.classList.contains("change-text") ? "Voir moins" : "Afficher les contacts" );
//     })
// }

// for(var i = 0; i < buttons.length; i++) {
//     createSpoiler(buttons[i]);
// }


// ========================================================

var frequence = function(phrase) {
    var mots = phrase.toLowerCase().split(" ")
    var compteur = {}
    for (var i = 0; i < mots.length; i++) {
        var mot = mots[i]
        if (compteur[mot] === undefined) {
            compteur[mot] = 1
        } else {
            compteur[mot]++
        }
    }
    return compteur
}
// moyenne exercice javascript
var eleve1 = {
    nom: 'jean',
    notes:[15, 16, 17]
}

var eleve2 = {
    nom: 'marc',
    notes:[11, 9, 20]
}

var moyenne = function(notes) {
    var somme = 0
    for (var i = 0; i < notes.length; i++) {
        somme = somme + notes[i]
    }
    return somme / notes.length
}


var estMeilleur = function(a, b) {
    return moyenne(a.notes) < moyenne(b.notes)
}

console.log(estMeilleur(eleve1, eleve2))

// renvoyer true si eleve1 a une meileur moyenne que eleve2
// Creer fonction moyenne 


