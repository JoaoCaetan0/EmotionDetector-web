<?php
  include_once "funcaoF.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

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
    <h class= "banana">Esta parte da página ainda está em desenvolvimento :( <br> Mas, olha aqui um gatinho pra te animar :)<h>
    <img style = "margin-left: 500px; position: absolute; margin-top: 1px;"src="img/gatinho.jpg" width="400" height="281">
    <br><br><br>
    <p style="color: black;">PS: olha a parte de "Códigos" e "Componentes"</p>
    </body>
    </html>