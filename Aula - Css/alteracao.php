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
 $nome = $_GET['nome'];
 $curso = $_GET['curso'];



 $sql = "UPDATE aluno  SET  nome = '{$nome}' , curso =  '{$curso}' WHERE idAluno= '{$id}'" ;


$result = mysqli_query($conexao,$sql);


if($result){

  header("location:listar-categorias.php");
       die();
}
