<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      require_once "db/Loja.class.php";
      $loja = new Loja();
      $store = $loja->getAll();
      foreach($store as $st){
	     echo "Cidade: {$st->Cidade}. Vendedor: {$st->Vendedor}. Nome da Loja: {$st->Loja_Nome}<br>";
      }
    ?>
  </body>
</html>
