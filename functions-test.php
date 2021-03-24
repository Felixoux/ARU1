<?php 
function repondre_oui_non ($phrase) {
    while(true) {
        $reponse = readline($phrase . ' ( o = oui - n = non ): ');
        if ($reponse === "o") {
            return true;
        } elseif ($reponse === "n") {
            return false;
        }
    }
}   

$resultat = repondre_oui_non('voulez vous continuer ? ');
//si user tape o => true 
// si user tape n => false 
var_dump($resultat);