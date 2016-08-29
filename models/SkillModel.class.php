<?php
  class SkillModel {
    public $Skill_Nome;
    public $Skill_Elemento;
    public $Tempo_de_Recarga;
    public $Dano;
    public function __construct($skill_nome, $skill_elemento, $tempo_de_recarga, $dano){
      $this->Skill_Nome = $skill_nome;
      $this->Skill_Elemento = $skill_elemento;
      $this->Tempo_de_Recarga = $tempo_de_recarga;
      $this->Dano = $dano;
    }
  }

?>
