<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      Adicionando um Monstro: <br><br>
      Nome do Monstro: <input type="text" name="Monstro_Nome"><br>
      Nivel:  <input type="number" value="1" name="Monstro_Nivel"><br>
      Elemento:  <input type="text" name="Monstro_Elemento"><br>
      Tipo:  <input type="text" name="Monstro_Tipo"><br>

      <input type="submit"><br>
      <a href="index.php">Voltar para página inicial.</a><br>

      <?php
    	 require_once "db/Monstro.class.php";
    	 $monstro = new Monstro();
        if(@$_POST['Monstro_Nome'] != "" && @$_POST['Monstro_Nivel'] != "" && @$_POST['Monstro_Elemento'] != "" && @$_POST['Monstro_Tipo'] != ""){
          $monstro->insert(new MonstroModel($_POST['Monstro_Nome'], $_POST['Monstro_Nivel'], $_POST['Monstro_Elemento'], $_POST['Monstro_Tipo']));
        ?>
      <h5>Monstro adicionado com sucesso!</h5>
      <?php
    	 }
      ?>
    </form>
  </body>
</html>
