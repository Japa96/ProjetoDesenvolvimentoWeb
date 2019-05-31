<?php 
//  define('DB_HOSTNAME','localhost'); // database host name
// 	define('DB_USERNAME', 'admin');     // database user name
// 	define('DB_PASSWORD', '1025341'); // database password
// 	define('DB_NAME', 'db_abc_bolinhas'); // database name

// 	$dsn = 'mysql:host='.DB_HOSTNAME.';dbname='.DB_NAME; $options = array( PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', );
// 	$pdo = new PDO($dsn, DB_USERNAME, DB_PASSWORD, $options);
 


try {
$pdo = new PDO('mysql:host=localhost;dbname=db_abc_bolinhas', 'admin...', '1025341', []);
} catch (PDOException $e) {
echo '<br><br><br>Erro ao conectar com o MySQL!!!<br><br>' . $e->getMessage();
exit();
}

 ?>