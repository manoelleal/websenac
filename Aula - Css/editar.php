<?php
define("SERVIDOR", "localhost");
define("USUARIO", "root");
define("SENHA", "");
define("BANCO", "rifa");
$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO);
if (!$conexao) {
  echo "Erro ao tentar conectar: ";
  die();
}
$id = $_GET['idAluno'];
$sql = "SELECT * FROM  aluno WHERE idAluno = {$id}";
$resultado = mysqli_query($conexao, $sql);
$tipo = mysqli_fetch_object($resultado);


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> exemplo 01</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
  crossorigin="anonymous">

</head>
<body>
  <div class="container">


    <h3 class="alert alert-warning">Alterar Dados do Aluno </h3>
    <form action="alteracao.php" name="form1" method="get">

      <div class="form-group">
 <label for="exampleInputEmail1">Login</label>
 <input type="text" class="form-control"name="nome" value="<?php echo $tipo->nome ?>">
     </div>
      <input type="hidden" name="idAluno" value="<?php echo $tipo->idAluno ?>">

      <div class="form-group">
  <label for="exampleInputEmail1">Curso</label>
  <input type="text" class="form-control"name="curso"  value="<?php echo $tipo->curso ?>">
     </div>


      <input type="submit" name="enviar"  value="Alterar" class="btn btn-primary">
    </form>

  </div>

</body>
</html>
