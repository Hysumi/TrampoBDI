<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      require_once "db/Item.class.php";
      $item = new Item();
      $its = $item->getAll();
      foreach($its as $it){
	     echo "Nome: {$it->Item_Nome}. Tipo: {$it->Item_Tipo}<br>";
      }
    ?>
  </body>
</html>
