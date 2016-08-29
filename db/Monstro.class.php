<?php
  require_once "DB.class.php";
  require_once "models/MonstroModel.class.php";

  class Monstro extends DB{

    public function getAll()
    {
      $sql = 'SELECT Monstro_Nome, Monstro_Nivel, Monstro_Elemento, Monstro_Tipo FROM monstro';
      $query = $this->conexao->query($sql);
	    $result = $query->fetchAll(PDO::FETCH_ASSOC);
      $monstros = [];
      foreach($result as $inv){
        array_push($monstros, new MonstroModel($inv["Monstro_Nome"], $inv["Monstro_Nivel"],$inv["Monstro_Elemento"],$inv["Monstro_Tipo"]));
      }
      return $monstros;
    }

    public function get($id)
    {

    }

    public function insert($Invocador)
    {

    }
  }
?>
