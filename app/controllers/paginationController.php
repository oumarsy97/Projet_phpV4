  <?php
 $direction = $_POST['direction'];
   
  // dd( $page);
 

   $currenpage = $_SESSION['currentPage'];
   $totalPages = $_SESSION['totalPages'];
   $currentPage = $_SESSION['currentPage'];
   $presences = $_SESSION['presencesAll'];
   $itemsPerPage = $_SESSION['itemsPerPage'];
   $page = intval($_POST['page']);
 // dd($presences);
   $result = paginateArray($presences,$itemsPerPage,$page);
   $presences = $result['items'];
  // dd($result);
  
          $totalPages = $result['totalPages'];
          $_SESSION['totalPages'] = $totalPages;
          $_SESSION['currentPage'] = $page;
          $_SESSION['presences'] = $presences;
   
    include controllers . '/presenceController.php';