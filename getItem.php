<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <form method="get">
        Buscar um Item: <br><br>
        Nome do Item: <input type="text" name="Item_Nome"><br>

        <input type="submit"> <br>
        <a href="index.php">Voltar para página inicial.</a><br>
        <?php
      	 if(@$_GET['Item_Nome'] != ''){
        	 require_once "db/Item.class.php";
        	 $item = new Item();
           $it = $item->get($_GET['Item_Nome']);
           if($it == null){
        ?>
            <h5>Sem resultados para: <?php echo $_GET['Item_Nome'];?></h5>
            <?php
              }else{
            ?>
                Nome do Item: <?php echo $it->Item_Nome; ?><br>
                Tipo do Item: <?php echo $it->Item_Tipo;?><br>
                <?php
        	    }
          }
        ?>
      </form>
  </body>
</html>
