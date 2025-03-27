<?php require_once 'cabecalho.php'; ?>
<section class="conteudo">
<?php
	$quantidade=$_GET['quantidade'];
	$valor=$_GET['valor'];
	$total=$quantidade * $valor;
	echo "<p> $quantidade unidades,a R$ $valor cada, ficam total R$ $total</p>";
	echo "<a href='compra.php' class='link'>Reset</a>";
?>	
</section>
</body>
</html>