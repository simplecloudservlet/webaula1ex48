
<!-- TODO1: Importar dados XML para uma tabela do banco de dados com PHP -->
<!-- TODO2: Listar cidades do banco de dados -->
<!-- TODO3: Pesquisar cidades do banco de dados -->


<!DOCTYPE html>
<html lang="bzs">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Projeto</title>

	<link rel="shortcut icon" href="favicon/favicon.ico" /> <!-- favicon.ico-->
	<link rel="stylesheet" type="text/css" href="css/estilos.css" />

	<!-- A ordem aqui eh importante: primeiro deve vir o 'jquery.js', depois scripts.js, porque este último utiliza 'jquery.js'-->
	<script src="js/jquery-3.7.1.js"></script>
	<script src="js/decimal.js"></script>
	<script src="js/scripts.js"></script>

</head>

<body>

	<!-- TODO1 -->
	<div id="todo1">
		<?php 
			//Encerra a execucao do carregamento da pagina caso o arquivo contenha erros.
			//Nao usou 'require_once' porque outras páginas podem invocar o conteudo de 'db_sqlite.php' novamente.
			require("db_mysql.php");   
		?>
	</div>


</body>

</html>