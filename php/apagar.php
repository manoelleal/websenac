
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

$sql = "DELETE FROM tipos WHERE id = $id";

  // Executa o comando SQL
  $result = mysqli_query($conexao,$sql);

  // Verifica se o comando foi executado com sucesso
  if($result){

    header("location:listar.php?excluido=ok");
         die();
  }
