<?php
  require_once "DB.class.php";
  require_once "../models/InvocadorModel.class.php";
  class Invocador extends DB{

    public function getAll()
    {
      $sql = 'SELECT Nickname, Invocador_Nivel FROM invocador';
      $query = $this->conexao->query($sql);
	    $result = $query->fetchAll(PDO::FETCH_ASSOC);
      var_dump($result);
      return $result;
    }

    public function get($id)
    {

    }

    public function insert($Invocador)
    {

    }
  }
?>
