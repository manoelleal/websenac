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

 $id = $_GET['id'];
 $nome = $_GET['nome'];
 $descricao = $_GET['descricao'];
$estado = $_GET['estado'];


 $sql = "UPDATE tipos  SET  nome = '{$nome}' , descricao =  '{$descricao}' , estado =  '{$estado}' WHERE id= '{$id}'" ;


$result = mysqli_query($conexao,$sql);


if($result){

  header("location:listar.php?sucesso=ok");
       die();
}
