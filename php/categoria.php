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


      <h3>Cadastro de categorias</h3>
      <form action="" name="form1" method="get">
        <label>Nome:</label>
        <input type="text" name="nome">
        <label>Descrição:</label>
        <input type="text" name="descricao">
        <label>Estado:</label>
        <select name="estado">
        <option value="0"> Desativado</option>
        <option value="1">Ativado</option>
      </select>
        <input type="submit" name="enviar"  value="Enviar">
      </form>


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

      if (isset($_GET['enviar'])){
      $nome = $_GET['nome'];
      $descricao = $_GET['descricao'];
      $estado = $_GET['estado'];




      $sql = "INSERT INTO categorias (nome, descricao, estado)
              VALUES ('{$nome}', '{$descricao}', '{$estado}')";

      $resultado = mysqli_query($conexao, $sql);
      // var_dump($resultado);

      if($resultado){

        echo " <h2  class='alert alert-success'> CADASTRADO COM SUCESSO </h2>";
      }else{

      echo " <h2 class='alert alert-warning'> ERRO DE CADASTRADO ... </h2>";

      }



      }

      ?>
    </div>

  </body>
</html>
