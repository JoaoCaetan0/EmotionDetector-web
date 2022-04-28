<?php
  include_once "../funcaoF.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  $funcoes = getAll();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      h1 {
        border-bottom: 2px solid gray;
      }
      table {
        width: 100%;
        border-collapse: collapse;
        border-radius: 20px;
      }
      th, td {
        border: 1px solid gray;
        padding: 0.5rem;
      }
      img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
      }

    </style>
  </head>
  <body>
      <h1>Relatório de Funções</h1>
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Descrição</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($funcoes as $funcao) {
              echo "
              <tr>
                <td>{$funcao['id']}</td>
                <td>{$funcao['nome']}</td>
                <td>{$funcao['descricao']}</td>
              </tr>";
            }
           ?>
        </tbody>
      </table>
  </body>
</html>
