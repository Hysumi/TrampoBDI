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
      if(@$_POST['nickname'] != "" && @$_POST['nivel']){
        $invocador->insert(new InvocadorModel($_POST['nickname'], $_POST['nivel']));
      ?>
    <h1>Invocador Adicionado</h1>
    <?php
  	 }
    ?>
    <form method="post">
      Adicionar um Invocador: <br><br>
      Nickname: <input type="text" name="nickname"><br>
      Nivel: <input type="number" value="1" name="nivel"><br>

      <input type="submit">
    </form>
  </body>
</html>
