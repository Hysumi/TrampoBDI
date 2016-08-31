<?php
require_once "db/DB.class.php";

class Custom extends DB
{
  public function customQuery($sql)
  {
    return $this->conexao->query($sql);
  }
}

?>
