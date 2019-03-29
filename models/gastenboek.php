<?php
/**
 * Created by PhpStorm.
 * User: Mathias
 * Date: 29/03/2019
 * Time: 20:31
 */

class gastenboek extends db
{
    public $id,$title,$text;

    public function addData($table = null,$naam=null,$email=null, $bericht=null){
        $stmt = $this->conn->prepare("INSERT INTO ".$table." (naam, email, bericht)
        VALUES ('".$naam."','".$email."','".$bericht."')");
        $stmt->execute();
    }
    public function deleteDatabyId($table = null,$id = null){
        $stmt = $this->conn->prepare("DELETE FROM ".$table." WHERE id=".$id);
        $stmt->execute();
    }

    public function updateDatabyId($table = null, $naam=null, $bericht=null, $id = null) {
        $stmt = $this->conn->prepare("UPDATE ".$table." SET naam = '".$naam."', bericht = '".$bericht."' WHERE id= ".$id);
        $stmt->execute();
    }
}
