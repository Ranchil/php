<?php require_once 'cabecalho.php'; ?>
<section class="conteudo">
	<?php
	$numero=$_GET['numero'];
	if($numero%2==0){
     echo "<p>$numero é Par!</p>";
}else{
     echo "<p>$numero é Ímpar!</p>";
}
     echo "<a href='parouimpar.php' class='link'>Reset</a>";
?>
</section>
</body>
</html>