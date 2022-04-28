<?php
  function getConnection() {
    try {
      $opcoes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
      $conexao = new PDO('mysql:host=localhost;dbname=tcc;port=3305;charset=utf8', "root", "", $opcoes);  
        return $conexao;
    } catch (PDOException $e) {
      echo($e);
      return null;
    }
  }

  function getAll() {
    $conexao = getConnection();
    $sql = 'SELECT * FROM funcao ORDER BY id';
    $sentenca = $conexao->query($sql);
    $consulta = $sentenca->fetchAll();
    return $consulta;
  }

  function insert($funcao) {
    $conexao = getConnection();
    $sql = "INSERT INTO funcao (nome, descricao) VALUES (:nome, :descricao) ";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(":nome", $funcao['nome']);
    $sentenca->bindParam(":descricao", $funcao['descricao']);
    $sentenca->execute();
  }

  function delete($id) {
    $conexao = getConnection();
    $sql = "DELETE FROM funcao WHERE id = :id";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(":id", $id);
    $sentenca->execute();
  }

  function getById($id) {
    $conexao = getConnection();
    $sql = "SELECT * FROM funcao WHERE id = :id";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(":id", $id);
    $sentenca->execute();
    $funcao = $sentenca->fetch();
    return $funcao;
  }

  function update($funcao) {
    $conexao = getConnection();
    $sql = "UPDATE funcao SET id=:id, nome=:nome, descricao=:descricao WHERE id=:id ";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(":id", $funcao['id']);
    $sentenca->bindParam(":nome", $funcao['nome']);
    $sentenca->bindParam(":descricao", $funcao['descricao']);
    $sentenca->execute();
  }

  function relatorio() {

    require_once  'vendor/autoload.php';
    $model = new Funcoes();
      $funcoes = $model->read();
    $mpdf = new \Mpdf\Mpdf();
    ob_start();

    // chamar minha visão
    require_once "views/relatorioFuncao.php";

    // Now collect the output buffer into a variable
    $html = ob_get_contents();
    ob_end_clean();

    // send the captured HTML from the output buffer to the mPDF class for processing
    $mpdf->WriteHTML($html);
    //$mpdf->Output();
    $mpdf->Output('filename.pdf', \Mpdf\Output\Destination::FILE);
  }
  ?>

