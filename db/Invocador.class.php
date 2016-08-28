<?php
  require_once "DB.class.php";
  class Invocador extends DB{
    public function test(){
      $this->connect();
      var_dump($this->conexao);
    }
  }
?>
