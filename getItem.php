<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
  	 if(@$_GET['Item_Nome'] != ''){
    	 require_once "db/Item.class.php";
    	 $item = new Item();
       $it = $item->get($_GET['Item_Nome']);
       if($it == null){
    ?>
        <h1>Sem resultados para: <?php echo $_GET['Item_Nome'];?></h1>
        <?php
          }else{
        ?>
            Nome do Item: <?php echo $it->Item_Nome; ?><br>
            Tipo do Item: <?php echo $it->Item_Tipo;?><br>
            <?php
    	    }
      }
            ?>
      <form method="get">
        Buscar um Item: <br><br>
        Nome do Item: <input type="text" name="Item_Nome"><br>

        <input type="submit">
      </form>
  </body>
</html>
