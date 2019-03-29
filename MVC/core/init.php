<?php

function my_autoloader($class_name){
  require_once("controllers/$class_name.php");
}
function my_autoloader2($class_name){
  require_once("models/$class_name.php");
}

spl_autoload_register('my_autoloader');
spl_autoload_register('my_autoloader2');
