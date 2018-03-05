<?php include("header.php") ?>
<?php 
$nome = $_GET["nome"];
$preco = $_GET["preco"]; 
?>

<p class="alert-sucess">produto <?= $nome ?> adicionado com <?= $preco ?> adicionado com sucesso!</p>
<br/>
			<button ><a href="index.php">Voltar pagina inicial</a></button>
<?php include("footer.php") ?>