<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
  	 if(@$_GET['Skill_Nome'] != ''){
    	 require_once "db/Skills.class.php";
    	 $skill = new Skills();
       $sk = $skill->get($_GET['Skill_Nome']);
       if($sk == null){
    ?>
        <h1>Sem resultados para: <?php echo $_GET['Skill_Nome'];?></h1>
        <?php
          }else{
        ?>
            Nome da Habilidade: <?php echo $sk->Skill_Nome; ?><br>
            Elemento: <?php echo $sk->Skill_Elemento; ?><br>
            Tempo de Recarga: <?php echo $sk->Tempo_de_Recarga;?><br>
            Dano: <?php echo $sk->Dano;?><br>
            <?php
    	    }
      }
            ?>
      <form method="get">
        Buscar uma Habilidade: <br><br>
        Nome da habilidade: <input type="text" name="Skill_Nome"><br>

        <input type="submit">
      </form>
  </body>
</html>
