<?php
  require_once "db/Invocador.class.php";
  require_once "db/Item.class.php";
  require_once "db/Loja.class.php";
  require_once "db/Monstro.class.php";
  require_once "db/Skills.class.php";

  $Invocador = new Invocador();
  echo "Invocadores:<br>";
  var_dump($Invocador->get('DK'));

  $Item = new Item();
  echo "Items : <br>";
  var_dump($Item ->get('Mana Potion'));

  $Loja = new Loja();
  echo "Vendedores : <br>";
  var_dump($Loja ->get('BAMBAM'));

  $Monstro = new Monstro();
  echo "Monstros : <br>";
  var_dump($Monstro ->get('Pikachu'));

  $Skills = new Skills();
  echo "Habilidades de Monstro : <br>";
  var_dump($Skills ->get('ImpactoProfundo'));

?>
