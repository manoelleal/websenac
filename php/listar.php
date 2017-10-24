<?php


define("SERVIDOR", "localhost");
define("USUARIO", "root");
define("SENHA", "");
define("BANCO", "loja_programador_web_db");

$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO);
if (!$conexao) {
echo "Erro ao tentar conectar: ";
die();
}

$listaDeCategorias = array();
$categoriasNoBanco = mysqli_query($conexao, "select * from tipos order by nome");
while ($categoria = mysqli_fetch_object($categoriasNoBanco)) {
	array_push($listaDeCategorias, $categoria);
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listar</title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
    <h3 class="alert alert-info">Itens cadastradas no sistema</h3>


		<?php if(isset($_GET['sucesso']) && $_GET['sucesso'] == "ok") : ?>
			<div class="alert alert-warning alert-dismissible" role="alert">

				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				Atualizado Com Sucesso !!

			</div>
		<?php endif; ?>

		<?php if(isset($_GET['excluido']) && $_GET['excluido'] == "ok") : ?>
			<div class="alert alert-warning alert-dismissible" role="alert">	

				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				Deletado Com Sucesso !!
			</div>
		<?php endif; ?>


		<table class="table table-striped">
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Descrição</th>
				<th>Estado</th>
				<th>Ações</th>
			</tr>
			<?php
			if ($listaDeCategorias) {
				foreach ($listaDeCategorias as $cat) {
					echo "<tr>";
					echo "<td>{$cat->id}</td>";
					echo "<td>{$cat->nome}</td>";
					echo "<td>{$cat->descricao}</td>";
					echo "<td>{$cat->estado}</td>";
					echo "<td>
									<a href='editar.php?tipo_id={$cat->id}' class='btn btn-info btn-xs'>Editar</a>
									<a href='apagar.php?tipo_id={$cat->id}' class='btn btn-danger btn-xs'>Excluir</a>
								</td>";
					echo "</tr>";
				}
			}
			?>
		</table>


    </div>

  </body>
</html>
