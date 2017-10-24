
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
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
  </head>
  <body>
<?php
$id = $_GET['tipo_id'];

$sql="delete from tipos where id='$id'";

$deleta=mysqli_query($sql);

if($deleta){
echo " foi deletado com êxito!<BR>";
}
 ?>
  </body>
</html>
