  <?php
include models. '/utilisateursModel.php';

//liste
if(isset($_REQUEST['id_referentiel'])){
  $id_referentiel = $_REQUEST['id_referentiel'];
  $_SESSION['id_referentiel'] = $id_referentiel;
  unset($_SESSION['search']);
  unset($_SESSION['donnee']);
  //dd($id_referentiel);
}
 isset($_SESSION['id_referentiel']) ? $id_referentiel = $_SESSION['id_referentiel'] :  $id_referentiel = $referentiels[0]['id'];
$users = listeApprenants($id_referentiel);
$nbr = count($users);
$donnee = $users;
isset($_SESSION['donnee']) ? $donnee = $_SESSION['donnee'] : $_SESSION['donnee'] = $donnee;

//recherche
if(isset($_POST['search'])&& $_POST['search'] != ''){
  $search = $_POST['search'];
    $users = seachUser($users, $search);
    $_SESSION['search'] = $search;
    $_SESSION['donnee'] = $users;
  }
  
  $currentPage = 1;
  //pagination
  if(isset($_POST['currentpage']) && $_POST['currentpage'] != ''){
    $currentPage = $_POST['currentpage'];
  }
  $donnee = $_SESSION['donnee'];
  $nbr1 = count($donnee);

$itemsPerPage = 4;
$totalPages = ceil($nbr1 / $itemsPerPage);
$users = paginateTable($_SESSION['donnee'], $itemsPerPage, $currentPage);


include views . '/utilisateurs.view.php';
