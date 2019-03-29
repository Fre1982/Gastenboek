<?php



class messageController {

  public function addMessageToDb() {
    if(isset($_POST['naam']) && $_POST['naam'] !== "" &&
      isset($_POST['email']) && $_POST['email'] !== "" &&
      isset($_POST['bericht']) && $_POST['bericht'] !== ""){

      $table = 'berichten';
      $naam = $_POST['naam'];
      $email = $_POST['email'];
      $bericht = $_POST['bericht'];

      $gastenboek = new gastenboek;
      $gastenboek->addData($table, $naam, $email, $bericht);
      header (Location: '../index.php')
    }else{header ('Location: '.$_SERVER['HTTP REFERER']);
  }
}
