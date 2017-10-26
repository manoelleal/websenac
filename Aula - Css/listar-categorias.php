<?php
	require_once 'conexao.php';
	//busca linhas da tabela tipos
	$sql = "SELECT * FROM aluno ORDER BY nome DESC";
	$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listar Categorias</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="rifa.css">
</head>
<body>
	<header class="container">
		<div class="row">

			<h3>Listar Alunos Cadsatrados para Rifa Senac 2017</h3>
			<hr>

			<?php if(isset($_GET['sucesso'])): ?>
				<div class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="close"
					data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<?php echo $_GET['sucesso']; ?>
				</div>
			<?php endif; ?>

			<a href="index.php" class="btn btn-success botao-new">+ Adicionar um novo(a) Aluno</a>
			<a href="index.php" class="btn btn-success botao-new">+ Retorna a Pagina inicial</a>
			<br />	<br />
		</div> <!-- end row -->
	</header> <!-- end header -->

	<section class="container">
		<div class="row">

			<table class="table table-striped">
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Curso</th>
					<th>Ações</th>

				</tr>

				<?php
				// começo do loop while
				while ($categoria = mysqli_fetch_object($resultado)) { ?>
					<tr>
						<td><?php echo $categoria->idAluno ?></td>
						<td><?php echo $categoria->nome ?></td>
						<td><?php echo $categoria->curso ?></td>


						<td>
							<div class="btn-group">
								<a href='editar.php?idAluno=<?php echo $categoria->idAluno ?>'
									class='btn btn-info btn-xs'>
									Editar
								</a>
								<a href='deletar.php?idAluno=<?php echo $categoria->idAluno ?>'
										class='btn btn-danger btn-xs'>
										Excluir
								</a>
							</div>
						</td>
					</tr>
				<?php } // fim do loop while ?>
				</table>
			</div>  <!-- end row -->
		</section> <!-- end section -->

		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>
