<?php
  require_once "DB.class.php";
  require_once "models/LojaModel.class.php";

  class Loja extends DB{

    public function getAll()
    {
      $sql = 'SELECT Cidade, Vendedor, Loja_Nome FROM loja';
      $query = $this->conexao->query($sql);
	    $result = $query->fetchAll(PDO::FETCH_ASSOC);
      $vendedores = [];
      foreach($result as $inv){
        array_push($vendedores, new LojaModel($inv["Cidade"], $inv["Vendedor"], $inv["Loja_Nome"]));
      }
      return $vendedores;
    }

    public function get($id)
    {

    }

    public function insert($Invocador)
    {

    }
  }
?>
