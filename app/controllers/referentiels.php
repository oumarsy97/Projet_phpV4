<?php
include  models . '/referentielsModel.php';
$referentiels = referentielsPromotionActive();
//dd($referentiels);
//dd($_POST);

$libelle = '';
$description = '';
$nameErrDes = '';
$nameErrLibelle = '';
if(isset($_POST['newreferentiel']) && $_POST['newreferentiel'] !=''){
    $libelle = $_POST['libelle'];
    $description = $_POST['description'];
    $status = 'active';
    $id_promotion = $_SESSION['id_promotion'];
   
    
    $err=0;
    if(empty($libelle) ){
        $nameErrLibelle = 'Ce champ libelle est obligatoire';
        $err=1;
    }else $_SESSION['libelle'] = $libelle;

    if(empty($description)){
        $nameErrDes = 'Ce champ description est obligatoire';
        $err=1;
    }else $_SESSION['description'] = $description;


    if($err!=1){
    $etat = 0;
    $etatlist = 0;
    $referentiels = loadFile(referentiels);
    foreach($referentiels as $referentiel){
        if($referentiel['libelle'] == $libelle){
            $etat = 1;
            break;
        }
    }


    if($etat == 1){
        echo '<script type="text/javascript">alert("Ce referentiel existe déja");</script>';
    } else {




    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $image_name = $libelle . '.' . pathinfo($image_name, PATHINFO_EXTENSION);
        $image_path = imgs . $image_name;
        move_uploaded_file($image_tmp, $image_path);
    }
    $refs= loadFile(referentiels);
    $newref = [
        'id' => count($refs) + 1,
        'libelle' => $libelle,
        'status' => $status,
        'id_promotion' => $id_promotion,
        'image_path' => isset($image_path) ? $image_name : 'classe.jpg'
    ];
    if(isset($_POST['toggle']) && $_POST['toggle'] == 'on'){

    ajouterReferentiel($newref, referentiels);
    unset($_SESSION['libelle']);
    unset($_SESSION['description']);
}
 
$lesref = loadFile(listereferentiels);
 foreach($lesref as $referentiel){
    if($referentiel['libelle'] == $libelle){
        $etatlist = 1;
        break;
    }
}

if($etatlist != 1){
    $ref = [
        'libelle' => $libelle,
        'status' => $status,
    ];
    ajouterReferentiel($ref, listereferentiels);
    unset($_SESSION['libelle']);
    unset($_SESSION['description']);
    $libelle = '';
    $description = '';
    $nameErrDes = '';
    $nameErrLibelle = '';
   
    
}

    $referentiels = referentielsActives();
    
}
}

}

include  views . '/referentiels.view.php';