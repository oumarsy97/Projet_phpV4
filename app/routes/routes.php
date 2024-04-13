<?php 

$page = isset($_POST['page']) ? $_POST['page'] : 'loginController';
include layouts.'/layout.php';
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    include controllers . '/loginController.php';
}else
if(key_exists($page, $pages)){
   //dd($page);
   $page!='search'? $_SESSION['page'] = $page: null;
    include layouts.'/menu.php';
    ?>
 <main>
<header>
<?php  
include layouts.'/header.php';

?>
</header>
    <?php
    
    include controllers . '/' . $pages[$page ];
    include layouts.'/footer.php';
   }else{
    include views . '/404.php';
   }