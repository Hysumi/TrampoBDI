<?php
require_once "db/DB.class.php";

class Custom extends DB
{
  public function customQuery($sql)
  {
    $q = $this->conexao->query($sql);
    return $q->fetchAll(PDO::FETCH_ASSOC);
  }
}

?>
