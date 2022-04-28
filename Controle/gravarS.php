<?php
  include_once "../funcaoS.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $sensor = array();
  $sensor['id'] = $_POST['id'];
  $sensor['descricao'] = $_POST['descricao'];
  $sensor['nome'] = $_POST['nome'];
  $sensor['quantidade'] = $_POST['quantidade'];
  if ($sensor['id']==0) {
    insert($sensor);
  } else {
    update($sensor);
  }
  header('location: ../views/componentes.php');

 ?>
