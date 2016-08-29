<?php
  require_once "db/Invocador.class.php";
  require_once "db/Item.class.php";
  require_once "db/Loja.class.php";
  require_once "db/Monstro.class.php";
  require_once "db/Skills.class.php";

  $Invocador = new Invocador();
  echo "Invocadores:<br>";
  var_dump($Invocador->getAll());

  $Item = new Item();
  echo "Items : <br>";
  var_dump($Item ->getAll());

  $Loja = new Loja();
  echo "Vendedores : <br>";
  var_dump($Loja ->getAll());

  $Monstro = new Monstro();
  echo "Monstros : <br>";
  var_dump($Monstro ->getAll());

  $Skills = new Skills();
  echo "Habilidades de Monstro : <br>";
  var_dump($Skills ->getAll());

?>
