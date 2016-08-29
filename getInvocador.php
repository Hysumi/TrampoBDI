<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
  	 if(@$_GET['nickname'] != ''){
    	 require_once "db/Invocador.class.php";
    	 $invocador = new Invocador();
       $inv = $invocador->get($_GET['nickname']);
       if($inv == null){
    ?>
        <h1>Sem resultados para: <?php echo $_GET['nickname'];?></h1>
        <?php
          }else{
        ?>
            Nickname: <?php echo $inv->nickname; ?><br>
            Nivel: <?php echo $inv->nivel;?><br>
            <?php
    	    }
      }
            ?>
      <form method="get">
        Buscar um Invocador: <br><br>
        Nickname: <input type="text" name="nickname"><br>

        <input type="submit">
      </form>
  </body>
</html>
