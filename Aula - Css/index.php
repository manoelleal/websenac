

<!DOCTYPE html>
<html>

<title>:: Rifa senac -2017 - Senac-Pb ::</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h5 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url('/w3images/onepage_restaurant.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>
 <meta http-equiv="refresh" content="6;URL=index.php">
<body>

<div class="bgimg w3-display-container w3-text-white">
  <div class="w3-display-middle w3-jumbo">
    <p>Senac</p>
  </div>
  <div class="w3-display-topleft w3-container w3-xlarge">
    <p><button onclick="document.getElementById('menu').style.display='block'" class="w3-button w3-black">Inicar Rifa Senac -2017</button></p>
    <p><button onclick="document.getElementById('contact').style.display='block'" class="w3-button w3-black">Adicionar Alunos</button></p>
  </div>
  <div class="w3-display-bottomleft w3-container">

  </div>
</div>

<!-- Menu Modal -->
<div id="menu" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('menu').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Resultado Rifa Senac 2017 </h1>
    </div>


    <div class="w3-container w3-black">
      <?php
      	require_once 'conexao.php';
      	//busca linhas da tabela tipos
      	$sql = "SELECT * FROM aluno ORDER BY RAND() LIMIT 1,1";
      	$resultado = mysqli_query($conexao, $sql);
        $busca = mysqli_fetch_array($resultado);
        $nome = $busca['nome'];
        $curso = $busca['curso'];
        echo " O nome sorteado foi  " .$nome;
        echo "<br />";
        echo " do curso   " .$curso;
        echo "<br />";  echo "<br />";
        echo "PARABENS " .$nome. " COMPAREÇA AO LAB DE INFORMATICA PARA PEGA SEU BRINDE";
      ?>
    </div>
  </div>
</div>




<!-- Contact Modal -->
<div id="contact" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black">
      <span onclick="document.getElementById('contact').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Cadastra Aluno para Rifa Senac-2017</h1>
    </div>
    <div class="w3-container">
      <form action="" method="post">
        <p><input class="w3-input w3-padding-16 w3-border" type="text"  name="nome" required="required" placeholder="Nome"></p>

        <p><input class="w3-input w3-padding-16 w3-border" type="text"  name="curso" required="required" placeholder="Curso"></p>
        <p><input class="w3-button" name="enviar" type="submit" value="Cadastrar"></p>
      </form>


    </div>
  </div>
</div>
<?php

require_once ("conexao.php");

  if (isset($_POST['enviar'])) {
    $nome = $_POST['nome'];
    $curso = $_POST['curso'];

    $sql = "INSERT INTO aluno (nome, curso) VALUES ('{$nome}','{$curso}')";

    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
header("Location:listar-categorias.php");  /* <===== STRING*/
}else {
echo("Descrição do Erro: " . mysqli_error($conexao));
die();
}

  }


?>
</body>
</html>
