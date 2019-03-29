<?php

class homeController
{
  public function index(){
    require 'models/db.php';
    $db1 = new db('localhost', 'root', '', 'gastenboek');
    $result = $db1->getAllData("berichten");
    //var_dump($result);


    //$result = array(array(1,1,"jef@telenet.be","jef","mijn bericht"),array(2,2,"piet@telenet.be","piet","Dit is het dan"),array(3,3,"fre@telenet.be","fre","Jo de mannen"));

    include_once 'views/home/index.php';

  }

}
