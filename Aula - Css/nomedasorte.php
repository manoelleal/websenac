<?php
	require_once 'conexao.php';
	//busca linhas da tabela tipos
	$sql = "SELECT * FROM aluno ORDER BY RAND() LIMIT 1,1";
	$resultado = mysqli_query($conexao, $sql);
  $busca = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>RESULTADO DA RIFA </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="rifa.css">
</head>
<body>
	<header class="container">
		<div class="row">

			<h3>Listar Resultado da Rifa Senac 2017</h3>
			<hr>


	</header> <!-- end header -->

	<section class="container">
		<div class="row">
<?php
			$nome = $busca['nome'];
      $curso = $busca['curso'];
      echo " O nome sorteado foi  " .$nome;
     echo "<br />";
      echo " do curso   " .$curso;
?>


			</div>  <!-- end row -->
		</section> <!-- end section -->

		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>
