
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
  <h1 class="alert alert-success"> NUMEROS PARES E IMPARES </h1>

  <?php
  for ($i=1; $i <= 100; $i++) {

    if($i % 2 == 0){

      echo "<p class='alert alert-info'> NUMERO E PAR  </p>" .$i;

    }else{

      echo " <p class='alert alert-danger'> NUMERO IMPAR  </p>" .$i;


    }


  }

  ?>
</body>
</html>
