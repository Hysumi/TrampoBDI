<?php
  require_once "DB.class.php";
  require_once "models/ItemModel.class.php";

  class Item extends DB{

    public function getAll()
    {
      $sql = 'SELECT Item_Nome, Item_Tipo FROM Item';
      $query = $this->conexao->query($sql);
	    $result = $query->fetchAll(PDO::FETCH_ASSOC);
      $items = [];
      foreach($result as $inv){
        array_push($items, new ItemModel($inv["Item_Nome"], $inv["Item_Tipo"]));
      }
      return $items;
    }

    public function get($nome)
    {
      $sql = 'SELECT Item_Nome, Item_Tipo FROM Item WHERE Item_Nome = "'.$nome.'"';
      $query = $this->conexao->query($sql);
      $result = $query->fetch(PDO::FETCH_ASSOC);
      if($result){
        return (new ItemModel($result["Item_Nome"], $result["Item_Tipo"]));
      }
      return null;
    }

    public function insert($item)
    {
      $sql = 'INSERT INTO Item (Item_Nome, Item_Tipo) VALUES (?,?)';
      $query = $this->conexao->prepare($sql);
      $query->execute(array($item->Item_Nome, $item->Item_Tipo));
      $result = $query->fetch(PDO::FETCH_ASSOC);
      //var_dump($result);
      return null;
    }

    public function delete($nome)
    {
      $sql = 'DELETE FROM item WHERE Item_Nome = "'.$nome.'"';
      $query = $this->conexao->query($sql);
    }
  }
?>
