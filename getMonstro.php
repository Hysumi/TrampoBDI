<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <form method="get">
        Buscar um Monstro: <br><br>
        Nome do Monstro: <input type="text" name="Monstro_Nome"><br>

        <input type="submit"> <br>
        <a href="index.php">Voltar para página inicial.</a><br>

      </form>
      <?php
    	 if(@$_GET['Monstro_Nome'] != ''){
      	 require_once "db/Monstro.class.php";
      	 $monstro = new Monstro();
         $ms = $monstro->get($_GET['Monstro_Nome']);
         if($ms == null){
      ?>
          <h5>Sem resultados para: <?php echo $_GET['Monstro_Nome'];?></h5>
          <?php
            }else{
          ?>
              Nome do Monstro: <?php echo $ms->Monstro_Nome; ?><br>
              Nivel: <?php echo $ms->Monstro_Nivel; ?><br>
              Elemento: <?php echo $ms->Monstro_Elemento;?><br>
              Tipo: <?php echo $ms->Monstro_Tipo;?><br>
              <?php
      	    }
        }
              ?>
      
  </body>
</html>
