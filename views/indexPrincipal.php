<?php
  include_once "../funcaoF.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  define("APP", "http://localhost/Site/");
  $funcao = getAll();
 ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Ultra&display=swap');
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emotion Tracker</title>
    <style media="screen">
      body {
        padding: 2rem;
      }
    </style>
    <link rel="stylesheet" type="text/css" href="style.css" />

</head>
<body>
<?php
  include_once "menu.php";
  ?>
     <h class = "banana">Hospedagem de conexão wifi com o detector de emoções E-Tracker.</h>

       <div class="box-hover">
       <center><a class = "box-a"href="tabela.php">Iniciar</a></center>
       </div>
       <div>
         <a style = "
        color: #4e565d;
        position: absolute;
        text-align: center;
        font-family: 'Ultra', serif;
        font-size: 18px;
        margin-left: 400px;
        top: 490px;
        text-decoration: none;
        " href = "duvidas.php">Dúvidas frequentes</a>
        </div>
       <img class= "arduino" src="img/arduinoDesenho.png" width="480" height="288">

    
  </body>
</html>