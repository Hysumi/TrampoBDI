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

    public function get($id)
    {

    }

    public function insert($Invocador)
    {

    }
  }
?>
