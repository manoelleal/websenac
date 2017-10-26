<?php

require_once ("conexao.php");

$id = $_GET['idAluno'];

$sql = "DELETE FROM aluno WHERE idAluno=$id";

$resultado = mysqli_query($conexao, $sql);

if($resultado){
  header("Location:listar-categorias.php?sucesso=Deletado+com+Sucesso!");
  die();

}
?>
