


// spoiler system index 
// var buttons = document.querySelectorAll('#index main .spoiler')

// var createSpoiler = function(button) {
//     button.addEventListener('click', function () {
//         button.previousElementSibling.classList.toggle('hidden');
//         button.classList.toggle('change-text');
//         button.innerHTML = (button.classList.contains("change-text") ? "Voir moins" : "Afficher les contacts" );
//     })
// }

// for (var i = 0; i < buttons.length; i++) {
//     createSpoiler(buttons[i])
// }

// var spoiler = document.querySelector("#les_amis main .see-more")

// var createSpoilerparagraph = function(button) {
//     button.addEventListener('click', function() {
//         button.previousElementSibling.classList.toggle('hidden');
//         button.classList.toggle('change-text');
//         button.innerHTML = (button.classList.contains("change-text") ? "Retour à l'intro" :"Lire la suite" );
//     })
// }

// createSpoilerparagraph(spoiler)





// Navbar 
var dropDowns = document.querySelectorAll("#accueil #navbar li.dropdown")
for (var i = 0; i < dropDowns.length; i++) {
    var dropDown = dropDowns[i]
    var navBarMouseOver = function() {
        this.lastElementChild.classList.add("active")
    }
    var navBarMouseOut = function() {
        this.lastElementChild.classList.remove("active")
    }
    dropDown.addEventListener('mouseover', navBarMouseOver)
    dropDown.addEventListener('mouseout', navBarMouseOut)
}


