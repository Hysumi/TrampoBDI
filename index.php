<?php
  require_once "db/Invocador.class.php";
  $Invocador = new Invocador();
  echo "Invocadores:<br>";
  var_dump($Invocador->getAll());

?>
