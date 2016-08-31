<?php
require_once "DB.class.php";

class Custom extends DB
{
  public function customQuery($sql)
  {
      $q = $this->conexao->query($sql);
      if(@$q !=null)
        return $q->fetchAll(PDO::FETCH_ASSOC);
      else return array("Erro de Sintaxe!");
  }
}
?>
