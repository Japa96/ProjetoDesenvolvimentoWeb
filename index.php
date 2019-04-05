<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Aula PHP</title>
  </head>
  <body>


  <?php
    session_cache_expire(15);
    session_start();
    
    if(isset($_POST['clientes'])){
      include('menu.php');
      include('cadastroCliente.php');

    }elseif(isset($_POST['produtos'])){
      include('menu.php');
      include ('produtos.php');

    }elseif(isset($_POST['pedidos'])){
      include('menu.php');
      include ('pedidos.php');

    }elseif(isset($_POST['validaLogin'])){
      include ('login.php');

    }elseif (isset($_POST['adicionar'])) {
      include ('menu.php');
      include('clientes.php');

    }elseif (isset($_POST['adicionarPedido'])) {
      include ('menu.php');
      include('pedidos.php');

    }elseif (isset($_POST['adicionarProduto'])) {
      include ('menu.php');
      include('produtos.php');      
    
    } else{ 
      include('telalogin.php');
    }
  ?>


  <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

     <script src="https://yandex.st/highlightjs/7.3/highlight.min.js"></script>
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>

    <script src="js/jquery.mask.min.js"></script>

    <script src="js/examples.js"></script>
  </body>
</html>