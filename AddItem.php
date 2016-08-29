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
      if(@$_POST['Item_Nome'] != "" && @$_POST['Item_Tipo'] != ""){
        $item->insert(new ItemModel($_POST['Item_Nome'], $_POST['Item_Tipo']));
      ?>
    <h1>Operação Executada</h1>
    <?php
  	 }
    ?>
    <form method="post">
      Adicionando um Item: <br><br>
      Nome do Item: <input type="text" name="Item_Nome"><br>
      Tipo do Item: <input type="text" name="Item_Tipo"><br>

      <input type="submit">
    </form>
  </body>
</html>
