<?php
require_once '../System/Model.php';
// model tem os metodos do crud (CREATE, READ, UPDATE, DELETE)
// e o método getById
  class Funcoes extends Model {
    protected $tabela="funcao";
    protected $ordem="descricao";

    function readWithSensores() {
      $modelSensor = new Sensores();
      $funcoes = $this->read();
      for($i=0;$i<count($funcoes);$i++) {
        $funcoes[$i]['sensores'] =
  $modelSensor->FuncoesBySensor($funcoes[$i]['idsen']);
      }
      return $funcoes;
    }
  }
 ?>