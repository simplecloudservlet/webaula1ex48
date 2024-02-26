
<!-- TODO1: MYSQL: Criar uma base de dados no MySQL; PHP: conectar com o banco de dados -->

<!-- TODO2: Criar tabelas T_ESTADOS(id,nome,sigla) e T_CIDADES(id,nome,id_estado). 
             O campo 'id_estado' em 'T_CIDADES' eh chave estrangeira e referencia o campo 'id' da tabela T_ESTADOS. -->

<!-- TODO3: Definir a formatação UTF8 -->

<!-- TODO4: Abrir o arquivo 'estados.txt' -->

<!-- TODO5: Importar dados do arquivo 'estados.txt' para uma tabela do banco de dados com PHP -->

<!-- TODO6: Exibir todos os dados importados na tabela 'T_ESTADOS' -->

<!-- TODO7: Fechar o descritor do arquivo 'estados.txt' -->

<!-- TODO8: Abrir o arquivo 'municipios.csv' -->

<!-- TODO9: Importar o conteúdo do arquivo 'municipios.csv' para a tabela 'T_CIDADES'. 
            Observe que eh necessario uma consulta SQL em 'T_ESTADOS' para obter o 'id_estado' de acordo com a 'sigla' em 'municipios.csv',
			antes de inserir a cidade em 'T_CIDADES'. --> 

<!-- TODO10: Listar cidades do banco de dados -->

<!-- TODO11: Fechar o descritor do arquivo 'municipios.csv' -->

<!-- TODO12: Escluir todas as tabelas -->

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