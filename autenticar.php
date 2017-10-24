

<?php
session_start();
if(!isset($_SESSION["login"])){

header("Location: formulario.php");

}

$user ="manoelneto";
$senha_fake = "12345678";
  $login = $_POST['login'];
 $senha = $_POST['senha'];

if($user == $login &&  $senha_fake == $senha){

  session_start();
  $_SESSION["login"] = $login;
  header("Location: paginaprincipal.php");
}else{

  header("Location: formulario.php");

}



?>
