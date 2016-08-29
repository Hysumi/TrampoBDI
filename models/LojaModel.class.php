<?php
  class LojaModel {
    public $Cidade;
    public $Vendedor;
    public $Loja_Nome;
    public function __construct($cidade, $vendedor, $loja){
      $this->Cidade = $cidade;
      $this->Vendedor = $vendedor;
      $this->Loja_Nome = $loja;
    }
  }

?>
