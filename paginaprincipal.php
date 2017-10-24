<?php
session_start();
if(!isset($_SESSION["login"])){

header("Location: formulario.php");

}
?>


<p> SEJA BEM VINDO AO SISTEMA </p> <?php   echo $_SESSION["login"]; ?>
