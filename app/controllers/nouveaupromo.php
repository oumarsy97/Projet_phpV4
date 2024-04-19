<?php
include config . '/validator.php';
$promotion = loadFile(promotion);
$errdate1 = '';
$errdate2 = '';
$errdate = '';
$errlibelle = '';
$labelle =isset($_SESSION['libelle']) ? $_SESSION['libelle'] : '';
//dd($_POST);
if (isset($_REQUEST['btnpro'])){
    $erreur = 0;
    if($_POST['libelle'] == ''){
        $erreur = 1;
        $errlibelle = 'Ce champ est obligatoire';
    }else $_SESSION['libelle'] = $_POST['libelle'];
    if($_POST['date1'] == ''){
        $erreur = 1;
        $errdate1 = 'Ce champ est obligatoire';
    }else $_SESSION['date1'] = $_POST['date1'];
    if($_POST['date2'] == ''){
        $erreur = 1;
        $errdate2 = 'Ce champ est obligatoire';
    }else $_SESSION['date2'] = $_POST['date2'];
    // if($erreur == 1){
    //     include views . '/nouveaupromo.view.php';
    //     die();
    // }
    //dd(validateEntreDate($_POST['date1'], $_POST['date2']) );

    if($erreur == 0 && validateEntreDate($_POST['date1'], $_POST['date2']) == false){
        $_SESSION['libelle'] = $_POST['libelle'];
        $_SESSION['date1'] = $_POST['date1'];
        $_SESSION['date2'] = $_POST['date2'];
        $erreur = 1;
        $errdate = 'diffoerence entre les deux dates doit suppérieur au moins 4 mois';
    }

}
if(isset($_POST['btnref']) ){
    $labelle = $_POST['libelle'];
    foreach ($promotion as $promo) {
        if($promo['libelle'] == $labelle){

            $_SESSION['id_promo'] = $promo['id'];
            break;
        }
    }
   // dd($labelle);
    
//     $newpromo = [
    //         'libelle' => $_POST['libelle'],
//         'date' => $_POST['date'],
//     ];
//     ajouterPromotion($newpromo, promotion);
//     unset($_SESSION['libelle']);
//     unset($_SESSION['date']);
include controllers . '/ajouterreferentielle.php';
die();
 }
 
 


 include views . '/nouveaupromo.view.php';