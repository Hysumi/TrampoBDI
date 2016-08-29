<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      require_once "db/Monstro.class.php";
      $monstro = new Monstro();
      $ms = $monstro->getAll();
      foreach($ms as $mon){
	     echo "Nome: {$mon->Monstro_Nome}. Nivel: {$mon->Monstro_Nivel}. Elemento: {$mon->Monstro_Elemento}. Tipo: {$mon->Monstro_Tipo}<br>";
      }
    ?>
  </body>
</html>
