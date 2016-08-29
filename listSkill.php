<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      require_once "db/Skills.class.php";
      $skill = new Skills();
      $sk = $skill->getAll();
      foreach($sk as $ski){
	     echo "Nome: {$ski->Skill_Nome}. Elemento: {$ski->Skill_Elemento}. Tempo de Recarga: {$ski->Tempo_de_Recarga}. Dano: {$ski->Dano}<br>";
      }
    ?>
  </body>
</html>
