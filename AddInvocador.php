<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      Adicionar um Invocador: <br><br>
      Nickname: <input type="text" name="nickname"><br>
      Nivel: <input type="number" value="1" name="nivel"><br>
      <input type="submit"> <br>
      <a href="index.php">Voltar para página inicial.</a><br>
      <?php
       require_once "db/Invocador.class.php";
       $invocador = new Invocador();
        if(@$_POST['nickname'] != "" && @$_POST['nivel']){
          $invocador->insert(new InvocadorModel($_POST['nickname'], $_POST['nivel']));
        ?>
      <h5>Invocador adicionado com sucesso!!</h5>
      <?php
       }
      ?>
    </form>
  </body>
</html>
