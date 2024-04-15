    
<?php
   // define ("chemin", "../");
     define ("app", "../app");
     define ("controllers", "../app/controllers");
     define ("models", "../app/models");
     define ("views", "../app/views");
     define ("config", "../app/config");
     define ("layouts", "../layouts");
     define ("routes", "../app/routes");
     define ("data", "../data");
     define ("promotion", "../data/promotion.csv");
     define ("referentiels", "../data/referentiels.csv");
     define ("utilisateurs", "../data/utilisateurs.csv");
     define ("presences", "../data/presences.csv");
     define("listereferentiels", "../data/listreferentiels.csv");

function dd($var) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die;
}

// function openfile($fichier){
//     $tableau = json_decode(file_get_contents($fichier), true);
//     return $tableau;
// }
// function recherche($tableau, $key, $value){
//     $resultat = [];
//     foreach($tableau as $item){
//         if($item[$key] == $value){
//             $resultat[] = $item;
//         }
//     }
//     return $resultat;
// }

function DateInFrench($Date) {
    $Date = explode("-", $Date);
    return $Date[2] . "/" . $Date[1] . "/" . $Date[0];
}

function DateNormale($Date) {
    $Date = explode("/", $Date);
    return $Date[2] . "-" . $Date[1] . "-" . $Date[0];
}