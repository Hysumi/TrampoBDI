<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
     require_once "db/Invocador.class.php";
     $invocador = new Invocador();
      if(@$_POST['nickname'] != ""){
        $invocador->delete($_POST['nickname']);
      ?>
    <h1>Invocador Deletado</h1>
    <?php
     }
    ?>
    <form method="post">
      Remover um Invocador: <br><br>
      Nickname: <input type="text" name="nickname"><br>

      <input type="submit">
    </form>
  </body>
</html>
