<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      Adicionando uma Habilidade: <br><br>
      Nome da Habilidade: <input type="text" name="Skill_Nome"><br>
      Elemento: <input type="text" name="Skill_Elemento"><br>
      Tempo de Recarga:   <input type="number" value="1" name="Tempo_de_Recarga"><br>
      Dano:  <input type="number" value="1" name="Dano"><br>

      <input type="submit"><br>
      <a href="index.php">Voltar para página inicial.</a><br>

      <?php
    	 require_once "db/Skills.class.php";
    	 $skill = new Skills();
        if(@$_POST['Skill_Nome'] != "" && @$_POST['Skill_Elemento'] != "" && @$_POST['Tempo_de_Recarga'] != "" && @$_POST['Dano'] != ""){
          $skill->insert(new SkillModel($_POST['Skill_Nome'], $_POST['Skill_Elemento'], $_POST['Tempo_de_Recarga'], $_POST['Dano']));
        ?>
      <h5>Habilidade adicionada com sucesso!</h5>
      <?php
    	 }
      ?>
    </form>
  </body>
</html>
