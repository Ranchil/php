<?php require_once 'cabecalho.php'; ?>
<form action="senac2.php" method="GET">
	<h1>Digite uma instituição de Ensino</h1>
	<p>Digite o Nome da instituição de Ensino:</p>
	<p><input type="text" name="nome"  size="50" maxlength="100" pattern="[a-zA-ZçÇãÃéÉêÊ\s]{3,100}" required></p>
	<p><input type="submit" name="botao" value="Verificar"></p>
</form>
</body>
</html>