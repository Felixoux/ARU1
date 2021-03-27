
// var frequence = function(phrase) {
//     var mots = phrase.toLowerCase().split(" ")
//     var compteur = {}
//     for (var i = 0; i < mots.length; i++) {
//         var mot = mots[i]
//         if (compteur[mot] === undefined) {
//             compteur[mot] = 1
//         } else {
//             compteur[mot]++
//         }
//     }
//     return compteur
// }
// // moyenne exercice javascript
// var eleve1 = {
//     nom: 'jean',
//     notes:[15, 16, 17]
// }

// var eleve2 = {
//     nom: 'marc',
//     notes:[11, 9, 20]
// }

// var moyenne = function(notes) {
//     var somme = 0
//     for (var i = 0; i < notes.length; i++) {
//         somme = somme + notes[i]
//     }
//     return somme / notes.length
// }


// var estMeilleur = function(a, b) {
//     return moyenne(a.notes) < moyenne(b.notes)
// }

// console.log(estMeilleur(eleve1, eleve2))



// spoiler system index 
var buttons = document.querySelectorAll('#index main .spoiler')

var createSpoiler = function(button) {
    button.addEventListener('click', function () {
        button.previousElementSibling.classList.toggle('hidden');
        button.classList.toggle('change-text');
        button.innerHTML = (button.classList.contains("change-text") ? "Voir moins" : "Afficher les contacts" );
    })
}

for (var i = 0; i < buttons.length; i++) {
    createSpoiler(buttons[i])
}


