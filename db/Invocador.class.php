<?php
  require_once "DB.class.php";
  require_once "models/InvocadorModel.class.php";

  class Invocador extends DB{

    public function getAll()
    {
      $sql = 'SELECT Nickname, Invocador_Nivel FROM invocador';
      $query = $this->conexao->query($sql);
	    $result = $query->fetchAll(PDO::FETCH_ASSOC);
      $invocadores = [];
      foreach($result as $inv){
        array_push($invocadores, new InvocadorModel($inv["Nickname"], $inv["Invocador_Nivel"]));
      }
      return $invocadores;
    }

    public function get($nick)
    {
      $sql = 'SELECT Nickname, Invocador_Nivel FROM invocador WHERE Nickname = "'.$nick.'"';
      $query = $this->conexao->query($sql);
      $result = $query->fetch(PDO::FETCH_ASSOC);
      var_dump($result);
      if($result){
        return (new InvocadorModel($result["Nickname"], $result["Invocador_Nivel"]));
      }
      return null;
    }

    public function insert($Invocador)
    {

    }
  }
?>
