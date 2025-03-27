<?php require_once 'cabecalho.php'; ?>
<section class="conteudo">
 <?php
	//$nascimento=$_GET['nascimento'];	
	//$idade=date('Y')-$nascimento;
 	$dianasci=$_GET['dianasci'];
 	$dianasci=new Datetime($dianasci);
 	$hoje=date('Y-M-d');
 	$hoje=new Datetime($hoje);
 	$idade=$hoje->diff($dianasci)->y;
	echo "<p>Você tem $idade anos</p>";
	echo "<a href='idade.php' class='link'>Reset</a>";
?>
</section>
</body>
</html>