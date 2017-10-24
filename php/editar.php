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
$id = $_GET['tipo_id'];
$sql = "SELECT * FROM  tipos WHERE id = {$id}";
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


    <h3>Cadastro de Usuários</h3>
    <form action="alteracao.php" name="form1" method="get">

      <input type="hidden" name="id" value="<?php echo $tipo->id ?>">

      <label>Nome:</label>
      <input type="text" name="nome" value="<?php echo $tipo->nome ?>">
      <label>Descrição:</label>
      <input type="text" name="descricao" value="<?php echo $tipo->descricao ?>">
      <label>Estado:</label>
      <select name="estado" value="<?php echo $tipo->estado ?>">
        <?php  if($tipo->estado == 1): ?>
        <option value="0"> Desativado</option>
        <option value="1" selected="">Ativado</option>
        <?php  else : ?>
        <option value="0" selected=""> Desativado</option>
        <option value="1" >Ativado</option>
      <?php  endif; ?>

      </select>
      <input type="submit" name="enviar"  value="Alterar">
    </form>

  </div>

</body>
</html>
