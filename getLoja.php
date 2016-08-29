<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
  	 if(@$_GET['Vendedor'] != ''){
    	 require_once "db/Loja.class.php";
    	 $loja = new Loja();
       $store = $loja->get($_GET['Vendedor']);
       if($store == null){
    ?>
        <h1>Sem resultados para: <?php echo $_GET['Vendedor'];?></h1>
        <?php
          }else{
        ?>
            Cidade: <?php echo $store->Cidade; ?><br>
            Vendedor: <?php echo $store->Vendedor;?><br>
            Nome da Loja: <?php echo $store->Loja_Nome;?><br>
            <?php
    	    }
      }
            ?>
      <form method="get">
        Buscar uma Loja: <br><br>
        Nome do Vendedor: <input type="text" name="Vendedor"><br>

        <input type="submit">
      </form>
  </body>
</html>
