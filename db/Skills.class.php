<?php
  require_once "DB.class.php";
  require_once "models/SkillModel.class.php";

  class Skills extends DB{

    public function getAll()
    {
      $sql = 'SELECT Skill_Nome, Skill_Elemento, Tempo_de_Recarga, Dano FROM skill_monstro';
      $query = $this->conexao->query($sql);
	    $result = $query->fetchAll(PDO::FETCH_ASSOC);
      $habilidades = [];
      foreach($result as $inv){
        array_push($habilidades, new SkillModel($inv["Skill_Nome"],$inv["Skill_Elemento"],$inv["Tempo_de_Recarga"], $inv["Dano"]));
      }
      return $habilidades;
    }

    public function get($nome)
    {
      $sql = 'SELECT Skill_Nome, Skill_Elemento, Tempo_de_Recarga, Dano FROM skill_monstro WHERE Skill_Nome = ".$nome."';
      $query = $this->conexao->query($sql);
      $result = $query->fetch(PDO::FETCH_ASSOC);
      $habilidades = [];
      foreach($result as $inv){
        array_push($habilidades, new SkillModel($inv["Skill_Nome"],$inv["Skill_Elemento"],$inv["Tempo_de_Recarga"], $inv["Dano"]));
      }
      return $habilidades;
    }

    public function insert($Invocador)
    {

    }
  }
?>
