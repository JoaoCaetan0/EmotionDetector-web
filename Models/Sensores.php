<?php
require_once '../System/Model.php';
// model tem os metodos do crud (CREATE, READ, UPDATE, DELETE)
// e o método getById
  class Sensores extends Model {
    protected $tabela="sensor";
    protected $ordem="descricao";
    
    function ultimasNoticias() {
      $sql = "SELECT * FROM noticia ORDER BY data DESC, id LIMIT 3";
      $sentenca = $this->conexao->query($sql);
      $sentenca->setFetchMode(PDO::FETCH_ASSOC);
      $consulta = $sentenca->fetchAll();
      return $consulta;
    }

    function ultimasNoticiasByCategoria($categoria_id) {
      $sql = "SELECT * FROM noticia WHERE categoria_id=:categoria_id ORDER BY data DESC, id LIMIT 3";
      $sentenca = $this->conexao->prepare($sql);
      $sentenca->bindParam(":categoria_id", $categoria_id);
      $sentenca->execute();
      $sentenca->setFetchMode(PDO::FETCH_ASSOC);
      $dados = $sentenca->fetchAll();
      return $dados;
    }

    function FuncoesBySensor($idfun) {
      $sql = "SELECT * FROM sensor WHERE idfun=:idfun ORDER BY idsen";
      $sentenca = $this->conexao->prepare($sql);
      $sentenca->bindParam(":idfun", $idfun);
      $sentenca->execute();
      $sentenca->setFetchMode(PDO::FETCH_ASSOC);
      $dados = $sentenca->fetchAll();
      return $dados;
    }
  }
 ?>