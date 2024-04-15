<?php
include models . '/dashboardModel.php';
$referentiels = referentielsActives();
include views . '/dashboard.view.php';