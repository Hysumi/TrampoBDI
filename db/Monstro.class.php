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

    public function get($nome)
    {
      $sql = 'SELECT Monstro_Nome, Monstro_Nivel, Monstro_Elemento, Monstro_Tipo FROM monstro WHERE Monstro_Nome = "'.$nome.'"';
      $query = $this->conexao->query($sql);
      $result = $query->fetch(PDO::FETCH_ASSOC);
      if($result){
        return (new MonstroModel($result["Monstro_Nome"], $result["Monstro_Nivel"], $result["Monstro_Elemento"], $result["Monstro_Tipo"]));
      }
      return null;
    }

    public function insert($monstro)
    {
      $sql = 'INSERT INTO Monstro (Monstro_Nome, Monstro_Nivel, Monstro_Elemento, Monstro_Tipo) VALUES (?,?,?,?)';
      $query = $this->conexao->prepare($sql);
      $query->execute(array($monstro->Monstro_Nome, $monstro->Monstro_Nivel, $monstro->Monstro_Elemento, $monstro->Monstro_Tipo));
      $result = $query->fetch(PDO::FETCH_ASSOC);
      //var_dump($result);
      return null;
    }

    public function delete($nome)
    {
      $sql = 'DELETE FROM monstro WHERE monstro_nome = "'.$nome.'"';
      $query = $this->conexao->query($sql);
    }
  }
?>
