<?php

function referentiels_Exist($libelle,$refs){
    
    foreach($refs as $referentiel){
        if($referentiel['libelle'] == $libelle){
            return true;
        }
    }
    return false;
}
$referentiels = loadFile(listereferentiels);
