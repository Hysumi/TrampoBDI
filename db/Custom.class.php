<?php
require_once "DB.class.php";

class Custom extends DB
{
  public function customQuery($sql)
  {
      $q = $this->conexao->query($sql);
      if(@$q !=null)
        return $q->fetch;
      else return array("Erro de Sintaxe!");
  }
}
?>
