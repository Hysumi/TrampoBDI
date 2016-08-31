<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      Remover um Invocador: <br><br>
      Nickname: <input type="text" name="nickname"><br>

      <input type="submit"> <br>
      <a href="index.php">Voltar para página inicial.</a><br>
     <?php
     require_once "db/Invocador.class.php";
     $invocador = new Invocador();
      if(@$_POST['nickname'] != ""){
        $invocador->delete($_POST['nickname']);
      ?>
    <h5>Invocador removido com sucesso!</h5>
    <?php
     }
    ?>
    </form>
  </body>
</html>
