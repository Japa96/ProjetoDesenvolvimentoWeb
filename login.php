<?php

if (isset($_SESSION['logado'])) { //verifica se a sessão já não estava aberta e destrói a sessão

$_SESSION = array();
session_unset();
session_destroy();

}

		if ($_POST['usuario'] == 'luis' && $_POST['senha'] == 'japa') {
			$_SESSION['logado'] = true;
			include('menu.php');
			
			}else{

			include('logoff.php');
			}

			?>

			<div class="jumbotron jumbotron-fluid py-3">
    <footer class="footer-copyright text-center py-3">
      
      <?php echo "Visualizações=".$_SESSION['views']; ?>
    </footer>
  </div>

//É muito divertido