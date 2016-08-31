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
      $sql = 'SELECT Skill_Nome, Skill_Elemento, Tempo_de_Recarga, Dano FROM skill_monstro WHERE Skill_Nome = "'.$nome.'"';
      $query = $this->conexao->query($sql);
      $result = $query->fetch(PDO::FETCH_ASSOC);
      if($result){
        return (new SkillModel($result["Skill_Nome"], $result["Skill_Elemento"], $result["Tempo_de_Recarga"], $result["Dano"]));
      }
      return null;
    }

    public function insert($skill)
    {
      $sql = 'INSERT INTO Skill_Monstro (Skill_Nome, Skill_Elemento, Tempo_de_Recarga, Dano) VALUES (?, ?, ?, ?)';
      $query = $this->conexao->prepare($sql);
      $query->execute(array($skill->Skill_Nome, $skill->Skill_Elemento, $skill->Tempo_de_Recarga, $skill->Dano));
      $result = $query->fetch(PDO::FETCH_ASSOC);
      //var_dump($result);
      return null;
    }

    public function delete($nome)
    {
      $sql = 'DELETE FROM skill_monstro WHERE skill_nome = "'.$nome.'"';
      $query = $this->conexao->query($sql);
    }
  }
?>
