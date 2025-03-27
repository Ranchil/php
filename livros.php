<?php require_once 'cabecalho.php'; ?>
<form action="livros2.php" method="GET">
	<h1>Digite um Livro</h1>
	<p>Digite o Nome do livro:</p>
	<p><input type="text" name="Titulo"  size="50" maxlength="100" pattern="[a-zA-ZçÇãÃéÉêÊ\s]{3,100}" required></p>
	<p>Digite outra obra:</p>
	<p><input type="text" name="Titulo2"  size="50" maxlength="100" pattern="[a-zA-ZçÇãÃéÉêÊ\s]{3,100}" required></p>
	<p>Digite os nomes dos autores:</p>
	<p><input type="text" name="author"  size="50" maxlength="100" pattern="[a-zA-ZçÇãÃéÉêÊ\s]{3,100}" required></p>
	<p><input type="text" name="author2"  size="50" maxlength="100" pattern="[a-zA-ZçÇãÃéÉêÊ\s]{3,100}" required></p>
	<p>Informe o Número de páginas:</p>
	<p><input type="number" name="numero" required></p>
	<p><input type="number" name="numero2" required></p>
	<p><input type="submit" name="botao" value="Verificar"></p>
</form>
</body>
</html>