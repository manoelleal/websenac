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




      <!-- <form action="" name="form1" method="get"  class="form-horizontal">
         <div  class="form-control">
        <label for="nome" class="col-sm-2 control-label">Nome:</label>
        <input type="text" name="nome">
        </div>
         <div  class="form-control">
        <label for="descricao" class="col-sm-2 control-label">Descrição:</label>
        <input type="text" name="descricao">
        </div>
         <div  class="form-control">
        <label label="estado" class="col-sm-2 control-label">Estado:</label>
        <select name="estado">
        <option value="0"> Desativado</option>
        <option value="1">Ativado</option>
      </select>

    </div>
    <div  class="form-control">
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" name="enviar"  value="Enviar">
      </div>
      </div>
      </form> -->
        <h3 class="alert alert-info">Cadastro de Usuários</h3>
      <form action="" name="form1" method="get">

          <div class="form-group">
            <label for="disabledTextInput">Nome :</label>
            <input type="text" name="nome" class="form-control">
          </div>
          <div class="form-group">
            <label for="disabledTextInput">Descrição :</label>
            <input type="text" name="descricao" class="form-control">
          </div>

          <div class="form-group">
            <label for="disabledSelect">Estado</label>
            <select name="estado" class="form-control">
              <option value="0"> Desativado</option>
              <option value="1">Ativado</option>
            </select>
          </div>
          <input type="submit" name="enviar" class="btn btn-primary"  value="Enviar">
          <!-- <button type="submit" class="btn btn-primary">Cadastra</button> -->

      </form>
        <br />
          <br />
      <?php if(isset($_GET['insert']) && $_GET['insert'] == "ok") : ?>
        <div class="alert alert-warning alert-dismissible" role="alert">

          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          Cadastrado com Sucesso  !!

        </div>
      <?php endif; ?>


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




      $sql = "INSERT INTO tipos(nome, descricao, estado)
              VALUES ('{$nome}', '{$descricao}', '{$estado}')";

      $resultado = mysqli_query($conexao, $sql);
      // var_dump($resultado);

      if($resultado){

        header("location:cadastra-tipo.php?insert=ok");
             die();
      }else{

      echo " <h2 class='alert alert-warning'> ERRO DE CADASTRADO ... </h2>";

      }



      }

      ?>
    </div>

  </body>
</html>
