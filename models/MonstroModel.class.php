<?php
  class MonstroModel {
    public $Monstro_Nome;
    public $Monstro_Nivel;
    public $Monstro_Elemento;
    public $Monstro_Tipo;
    public function __construct($monstro_nome, $monstro_nivel, $monstro_elemento, $monstro_tipo){
      $this->Monstro_Nome = $monstro_nome;
      $this->Monstro_Nivel = $monstro_nivel;
      $this->Monstro_Elemento = $monstro_elemento;
      $this->Monstro_Tipo = $monstro_tipo;
    }
  }

?>
