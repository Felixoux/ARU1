// Navbar 
var dropDowns = document.querySelectorAll("#navbar li.dropdown")
for (var i = 0; i < dropDowns.length; i++) {
    var dropDown = dropDowns[i]
    var navBarMouseOver = function() {
        if(document.body.clientWidth > 1000) {
            this.lastElementChild.classList.add("active")
        } 
    }
    var navBarMouseOut = function() {
        this.lastElementChild.classList.remove("active")
    }
    dropDown.addEventListener('mouseover', navBarMouseOver)
    dropDown.addEventListener('mouseout', navBarMouseOut)
}
// button navbar 
var headerNav = document.querySelector("#navbar .header-nav")
var headerButton = document.querySelector("#navbar #js-burger")
var headerSide = document.querySelector("#navbar .header-side")
headerButton.addEventListener('click', function(){
    headerNav.classList.toggle("mobile-active")
    headerSide.classList.toggle("mobile-active")
})




