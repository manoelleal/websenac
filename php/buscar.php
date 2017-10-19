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
$categoriasNoBanco = mysqli_query($conexao, "select * from categorias order by nome");
while ($categoria = mysqli_fetch_object($categoriasNoBanco)) {
	array_push($listaDeCategorias, $categoria);
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h3 class="alert alert-info">Buscar Categorias</h3>


		<table class="table">
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
									<a href='#'>Editar</a> |
									<a href='apagar.php'>Excluir</a>
								</td>";
					echo "</tr>";
				}
			}
			?>
		</table>


    </div>
  </body>
</html>
