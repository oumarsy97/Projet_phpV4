<?php 

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 'loginController';
include layouts.'/layout.php';
if ($page == 'loginController') {
    include controllers . '/loginController.php';
}else
if(1){
    $data = $_REQUEST;
 $page = $data['page'];

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
    //index("");
    include layouts.'/footer.php';
   }else{
    include views . '/404.php';
   }