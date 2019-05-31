<?php

if (isset($_SESSION['logado'])) { //verifica se a sessão já não estava aberta e destrói a sessão

$_SESSION = array();
session_unset();
session_destroy();

}

		if ($_POST['usuario'] == 'admin' && $_POST['senha'] == 'admin') {
			
			
			$_SESSION['logado'] = true;
			include('menu.php');
			
			}else{

			include('logoff.php');
			}

			?>

			<div class="jumbotron jumbotron-fluid py-3">
    <footer class="footer-copyright text-center py-3">
      
      <?php 
