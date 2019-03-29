<?php

/*require_once 'controllers/home.php';
require_once 'controllers/contact.php';
require_once 'controllers/error.php';
*/

// Dispatching the world

if(isset($_GET['action']) && $_GET['action'] !== ""){
  if($_GET['action'] == 'addpage'){
    $addpageController = new addpageController();
    $addpageController->index();
  } else {
    $errorController = new errorController();
    $errorController->index();
  }
} else {
  $homeController = new homeController();
  $homeController->index();

}

 ?>
