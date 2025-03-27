<?php require_once 'cabecalho.php'; ?>
<section class="conteudo">
	<?php
	$nome=$_GET['nome'];
	if(strtolower($nome)=="senac"){
     echo "<p>$nome é isso ai legal!</p>";
}else{
     echo "<p>$nome não e o senac zé ruela!</p>";
}
     echo "<a href='senac.php' class='link'>Voltar</a>";
?>
</section>
</body>
</html>