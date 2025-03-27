<?php require_once 'cabecalho.php';?>
<form action="compra2.php" method="GET">
	<h1>Cálcular Valores</h1>
	<p>Digite a quantidade:</p>
	<p><input type="number" name="quantidade" min="1" max="1000" required></p>
	<p>Digite o Valor:</p>
	<p><input type="number" name="valor" setp="0.01" min="1" max="1000.00" required></p>
	<p><input type="submit" name="botao" value="Calcular"></p>
</form>
</body>
</html>