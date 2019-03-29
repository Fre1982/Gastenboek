<?php
require_once 'core/init.php';

$conn = new db('localhost', 'root', '', 'gastenboek');
$result = $conn->getAllData('boeken');
/** mag weg, wordt vervangen door bovenstaande constuctor
*require_once 'controllers/home.php';
*require_once 'controllers/contact.php';
*require_once 'controllers/error.php';


*Dispatching the world
*/

if(isset($_GET['page']) && $_GET['page'] !== ""){
  if($_GET['page'] == 'contact'){
    $contactController = new contactController();
    $contactController->index();
  }else{
    $errorController = new errorController();
    $errorController->index();
  }
}else{
  $homeController = new homeController();
  $homeController->index();

}
