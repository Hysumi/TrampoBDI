<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      Remover um Monstro: <br><br>
      Nome do Monstro: <input type="text" name="Monstro_Nome"><br>

      <input type="submit"> <br>
      <a href="index.php">Voltar para página inicial.</a><br>
     <?php
     require_once "db/Monstro.class.php";
     $monstro = new Monstro();
      if(@$_POST['Monstro_Nome'] != ""){
        $monstro->delete($_POST['Monstro_Nome']);
      ?>
    <h5>Monstro removido com sucesso!</h5>
    <?php
     }
    ?>
    </form>
  </body>
</html>
