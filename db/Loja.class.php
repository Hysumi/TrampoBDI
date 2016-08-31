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

    public function get($vendedor)
    {
      $sql = 'SELECT Cidade, Vendedor, Loja_Nome FROM loja WHERE Vendedor = "'.$vendedor.'"';
      $query = $this->conexao->query($sql);
      $result = $query->fetch(PDO::FETCH_ASSOC);
      if($result){
        return (new LojaModel($result["Cidade"], $result["Vendedor"], $result["Loja_Nome"]));
      }
      return null;
    }

    public function insert($loja)
    {
      $sql = 'INSERT INTO Loja (Cidade, Vendedor, Loja_Nome) VALUES (?, ?, ?)';
      $query = $this->conexao->prepare($sql);
      $query->execute(array($loja->Cidade, $loja->Vendedor, $loja->Loja_Nome));
      $result = $query->fetch(PDO::FETCH_ASSOC);
      //var_dump($result);
      return null;
    }

    public function delete($vendedor)
    {
      $sql = 'DELETE FROM loja WHERE vendedor = "'.$vendedor.'"';
      $query = $this->conexao->query($sql);
    }
  }
?>
