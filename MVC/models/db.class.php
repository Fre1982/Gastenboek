<?php

class db
{
  protected $host, $username, $password, $dbname;

  private $conn;
  public $numOfRows;

  public function __construct($host = 'localhost', $username ='root', $password ='', $dbname ='gastenboek')
  {
    $this->host =$host;
    $this->username =$username;
    $this->password =$password;
    $this->dbname = $dbname;


    try {
    $this->conn = new PDO("mysql:host=".$this->host.";dbname=". $this->dbname, $this->username, $this->password);
    // set the PDO error mode to exception
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

  }
  public function getAllData($table){
    $stmt = $this->conn->prepare("SELECT * FROM ".$table);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    $this->numOfRows = sizeof($result);
    return $result;

  public function updateDataById($table, $id, $email, $naam, $bericht){
      $sql = "UPDATE ".$table." SET email = '".$email."', naam = '".$naam."', bericht = '"$bericht"' WHERE id=".$id;
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
    }

  public function deleteDataById($table=null, $id=null){
      $stmt = $this->conn->prepare("DELETE FROM ".$table." WHERE id=".$id);
      $stmt->execute();
    }
}
