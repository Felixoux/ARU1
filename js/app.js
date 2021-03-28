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


