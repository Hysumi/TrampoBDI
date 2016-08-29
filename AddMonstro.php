<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
  	 require_once "db/Monstro.class.php";
  	 $monstro = new Monstro();
      if(@$_POST['Monstro_Nome'] != "" && @$_POST['Monstro_Nivel'] != "" && @$_POST['Monstro_Elemento'] != "" && @$_POST['Monstro_Tipo'] != ""){
        $monstro->insert(new MonstroModel($_POST['Monstro_Nome'], $_POST['Monstro_Nivel'], $_POST['Monstro_Elemento'], $_POST['Monstro_Tipo']));
      ?>
    <h1>Operação Executada</h1>
    <?php
  	 }
    ?>
    <form method="post">
      Adicionando um Monstro: <br><br>
      Nome do Monstro: <input type="text" name="Monstro_Nome"><br>
      Nivel:  <input type="number" value="1" name="Monstro_Nivel"><br>
      Elemento:  <input type="text" name="Monstro_Elemento"><br>
      Tipo:  <input type="text" name="Monstro_Tipo"><br>

      <input type="submit">
    </form>
  </body>
</html>
