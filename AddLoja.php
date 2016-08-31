<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      Adicionando uma Loja: <br><br>
      Nome da Cidade: <input type="text" name="Cidade"><br>
      Nome do Vendedor: <input type="text" name="Vendedor"><br>
      Nome da Loja:  <input type="text" name="Loja_Nome"><br>

      <input type="submit"> <br>
      <a href="index.php">Voltar para página inicial.</a><br>

      <?php
       require_once "db/Loja.class.php";
       $loja = new Loja();
        if(@$_POST['Cidade'] != "" && @$_POST['Vendedor'] != "" && @$_POST['Loja_Nome'] != ""){
          $loja->insert(new LojaModel($_POST['Cidade'], $_POST['Vendedor'], $_POST['Loja_Nome']));
        ?>
      <h5>Loja adicionada com sucesso!</h5>
      <?php
       }
      ?>
    </form>
  </body>
</html>
