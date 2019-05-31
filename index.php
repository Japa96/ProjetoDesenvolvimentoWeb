<?php include 'conectaBanco.php';
  session_cache_expire(90);
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Aula PHP</title>
</head>
<body>


  <?php
  



  if(isset($_POST['btnClientes'])){
      include('menu.php');
      include('cadastroCliente.php');

    }elseif(isset($_POST['btnProdutos'])){
      include('menu.php');
      include ('tabelaProdutos.php');

    }elseif(isset($_POST['btnPedidos'])){
      include('menu.php');
      include ('pedidos.php');

    }elseif(isset($_POST['validaLogin'])){
      include ('login.php');

    }elseif (isset($_POST['adicionar'])  || isset($_POST['editaCliente'])  ) {
      include ('menu.php');
      include('clientes.php');

    }elseif (isset($_POST['adicionarPedido'])) {
      include ('acaoPedido.php');
      

    }elseif (isset($_POST['adicionarProduto']) || isset($_POST['editaProduto'])) {
      include ('menu.php');
      include('produtos.php');

    }elseif(isset($_POST['cadastrarCliente' ])){
       include ('insertCliente.php');

    }elseif(isset($_POST['deletaCliente'])){
       include ('deletarCliente.php');

    }else if (isset($_POST['editarCliente'])) {
      include('editarCliente.php');

    }else if (isset($_POST['cadastrarProduto'])) {
      include('insertProduto.php');

    }elseif(isset($_POST['deletaProduto'])){
      include ('deleteProduto.php');

   }elseif(isset($_POST['editarProduto'])){
    include ('editarProduto.php');

   }elseif (isset($_POST['deletaPedido'])) {
     include ('acaoPedido.php');   
  
  }
    else{
      include('telalogin.php');
    }
  ?>


  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script type="text/javascript">

    function calculaPreco() {

        var quant = parseInt(document.getElementById('quantidade').value, 10);
        var valor = parseInt(document.getElementById('preco').value, 10);

        var soma = quant * valor; 
        console.log(soma);

        $("#total").val(soma);
        document.getElementById('total').innerHTML = parseFloat(soma);

      }
        var count = new Number();
        var count = 60*30;

      function start() {
        if((count - 1) >= 0){
          count= count -1;
          tempo.innerText=count;
          setTimeout('start();',1000);
        }
      }

function duplicarCampos(){
        var clone = document.getElementById('origem').cloneNode(true);
        var destino = document.getElementById('destino');
        destino.appendChild (clone);
        
        var camposClonados = clone.getElementsByTagName('input');
        
        for(i=0; i<camposClonados.length;i++){
          camposClonados[i].value = '';
        }
      }
      function removerCampos(id){
        var node1 = document.getElementById('destino');
        node1.removeChild(node1.childNodes[0]);
      }

    $(document).ready(function(){
        $("select[name='cliente']").change(function(){
          var itemSelecionado = $('#cliente').val();
          console.log($('#cliente').val());
          $.getJSON('function.php', {
            cliente: itemSelecionado
          },function(json) {
            $("#endereco").val(json.endereco);
            $("#numero").val(json.numero);
            $("#telefone").val(json.telefone);
            $("#codigoCliente").val(json.id_cliente);
            $("#cep").val(json.cep);
            $("#bairro").val(json.bairro);
            $("#cidade").val(json.cidade);
            $("#obs").val(json.observacao);
          });
        });
      });

      $(document).ready(function(){
        $("select[name='produtos']").change(function(){
          var itemSelecionado = $('#produtos').val();
          $.getJSON('function.php', {
            produtos: itemSelecionado
          },function(json) {
            $("#codigoProduto").val(json.codigoProduto);
            $("#preco").val(json.preco);
          });
        });
      });

  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <script src="https://yandex.st/highlightjs/7.3/highlight.min.js"></script>
  <script src="https://code.jquery.com/jquery-latest.min.js"></script>

  <script src="js/jquery.mask.min.js"></script>

  <script src="js/examples.js"></script>
</body>
</html>