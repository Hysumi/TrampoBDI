<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      Remover uma loja: <br><br>
      Nome do(a) vendedor(a): <input type="text" name="vendedor"><br>

      <input type="submit"> <br>
      <a href="index.php">Voltar para página inicial.</a><br>
     <?php
     require_once "db/Loja.class.php";
     $loja = new Loja();
      if(@$_POST['vendedor'] != ""){
        $loja->delete($_POST['vendedor']);
      ?>
    <h5>Loja removida com sucesso!</h5>
    <?php
     }
    ?>
    </form>
  </body>
</html>
