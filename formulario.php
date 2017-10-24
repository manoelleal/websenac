teste

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style media="screen">
    .centro{

      margin: 0 auto;
      width: 400px;
      height: auto;
      margin-top: 100px;

    }
    input{
    margin:  10px;
    }
    .centroo{
       margin-left:  100px;
       color: #cccc;
    }

    </style>

  </head>
  <body>

    <div class="centro">

  <h1> LOGIN E SENHA </h1>
    <form class="centro" action="autenticar.php" method="post">

      <label> Nome </label><input type="text" name="login" ><br />
      <label > Senha </label><input type="password" name="senha" ><br />
      <input type="submit" name="enviar" value="Enviar" class="centroo">

    </form>
  </div>
  </body>
</html>
