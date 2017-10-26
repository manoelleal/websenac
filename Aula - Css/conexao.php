<?php
define("SERVIDOR", "localhost");
define("USUARIO", "root");
define("SENHA", "");
define("BANCO", "rifa");

$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO);
if (!$conexao) {
  die();
}
