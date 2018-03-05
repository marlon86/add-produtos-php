<?php include("header.php") ?>

			<h1>Formulario de produto</h1>
				<form action="adiciona-produto.php">
					<input type="text" name="nome"><br/>
					<input type="number" name="preco"><br/>
					<input type="submit" name="enviar"><br/>
				</form>
			<button ><a href="index.php">Voltar pagina inicial</a></button>
<?php include("footer.php") ?>