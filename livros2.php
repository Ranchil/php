<?php require_once 'cabecalho.php'; ?>
<section class="conteudo">
	<?php
	$Titulo=$_GET['Titulo'];
	$author=$_GET['author'];
	$Titulo2=$_GET['Titulo2'];
	$author2=$_GET['author2'];
	$numero=$_GET['numero'];
	$numero2=$_GET['author2'];
	if($numero>$numero2){
     echo "<p>O Livro do $author,chamado $Titulo é o maior!</p>";
}else{
	echo "<p>O Livro do $author2,chamado $Titulo2 é o maior!</p>";

     echo "<a href='livros.php' class='link'>Voltar</a>";
}
?>
</section>
</body>
</html>