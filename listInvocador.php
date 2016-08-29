<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      require_once "db/Invocador.class.php";
      $invocador = new Invocador();
      $invs = $invocador->getAll();
      foreach($invs as $inv){
	     echo "{$inv->nickname}, Nv. {$inv->nivel}<br>";
      }
    ?>
  </body>
</html>
