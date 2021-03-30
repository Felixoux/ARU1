var tabs = document.querySelectorAll(".tabs a")
for(var i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener('click', function(e) {

        var div = this.parentNode.parentNode.parentNode
        var li = this.parentNode

        if(li.classList.contains('active')) {
            return false
        }
        // on retire la class active a l'onglet actif
        div.querySelector(".tabs .active").classList.remove("active")
        // J'ajoute la class active a l'onglet actif
        li.classList.add("active")
        // on retire la class active sur le contenu actif
        div.querySelector(".tab-content.active").classList.remove("active")
        // on ajoute la class active sur le contenu correspondant au click
        div.querySelector(this.getAttribute("href")).classList.add('active')
    })
}
