<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      Remover um Item: <br><br>
      Nome do Item: <input type="text" name="Item_Nome"><br>

      <input type="submit"> <br>
      <a href="index.php">Voltar para página inicial.</a><br>
     <?php
     require_once "db/Item.class.php";
     $item = new Item();
      if(@$_POST['Item_Nome'] != ""){
        $item->delete($_POST['Item_Nome']);
      ?>
    <h5>Item removido com sucesso!</h5>
    <?php
     }
    ?>
    </form>
  </body>
</html>
