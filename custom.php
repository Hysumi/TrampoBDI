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
       $cust = $custom->customQuery($_GET['buscaCustom']);
       print_r($cust);
      }
    ?>

    <form method="get">
      Busca Customizada: <br><br>
      <textarea name="buscaCustom" cols = 60 rows = 20></textarea> <br>
      <input type="submit">
    </form>
  </body>
</html>
