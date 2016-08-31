<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      Remover uma Habilidade: <br><br>
      Nome do Habilidade: <input type="text" name="Skill_Nome"><br>

      <input type="submit"> <br>
      <a href="index.php">Voltar para página inicial.</a><br>
     <?php
     require_once "db/Skills.class.php";
     $skill = new Skills();
      if(@$_POST['Skill_Nome'] != ""){
        $skill->delete($_POST['Skill_Nome']);
      ?>
    <h5>Habilidade removido com sucesso!</h5>
    <?php
     }
    ?>
    </form>
  </body>
</html>
