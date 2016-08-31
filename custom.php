<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="get">
      <br>Busca Customizada: <br><br>
      <textarea name="buscaCustom" cols = 60 rows = 20></textarea> <br>
      <input type="submit"><br>
      <a href="index.php">Voltar para página inicial.</a><br>
    </form>
    
    <?php
  	 if(@$_GET['buscaCustom'] != ''){
    	 require_once "db/Custom.class.php";
    	 $custom = new Custom();
       $rows = $custom->customQuery($_GET['buscaCustom']);
       echo "<h5>Resultado da busca customizada:</h5>";
       foreach($rows as $row){
         print_r($row);
         echo "<br>";
       }
      }
    ?>

  </body>
</html>
