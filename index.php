<?php
  require_once "db/Invocador.class.php";
  require_once "db/Item.class.php";
  require_once "db/Loja.class.php";
  require_once "db/Monstro.class.php";
  require_once "db/Skills.class.php";

  $Skills = new Skills();
  echo "Habilidades de Monstro : <br>";
  $skill = new SkillModel("BombaDeGas", "Ar", 10,30);
  var_dump($Skills ->insert($skill));
/*
  $Invocador = new Invocador();
  echo "Invocadores:<br>";
  $inv = new InvocadorModel("Vinho", 14);
  var_dump($Invocador->insert($inv));

  $Item = new Item();
  echo "Items : <br>";
  $it = new ItemModel("Havaiana de Pau", "Equipamento");
  var_dump($Item ->insert($it));

  $Loja = new Loja();
  echo "Vendedores : <br>";
  $store = new LojaModel("La Place", "El Cabron", "Elninho");
  var_dump($Loja ->insert($store));

  $Monstro = new Monstro();
  echo "Monstros : <br>";
  $mons = new MonstroModel("Flango", 7, "Ar", "Invocavel");
  var_dump($Monstro ->insert($mons));

*/
?>
