<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
  	 if(@$_GET['buscaCustom'] != ''){
    	 require_once "Custom.class.php";
    	 $custom = new Custom();
       $rows = $custom->customQuery($_GET['buscaCustom']);
       echo "<h1>Resultados:</h1>";
       foreach($rows as $row){
         print_r($row);
         echo "<br>";
       }
      }
    ?>

    <form method="get">
      <br>Busca Customizada: <br><br>
      <textarea name="buscaCustom" cols = 60 rows = 20></textarea> <br>
      <input type="submit">
    </form>
  </body>
</html>
