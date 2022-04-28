<?php
require_once '../funcaoF.php';
require_once  '../vendor/autoload.php';
require_once '../Models/Funcoes.php';
require_once '../Models/Sensores.php';
$model = new Funcoes();
  $funcoes = $model->read();
$mpdf = new \Mpdf\Mpdf();
ob_start();

// chamar minha visão
require_once "../views/relatorioFuncao.php";

// Now collect the output buffer into a variable
$html = ob_get_contents();
ob_end_clean();

// send the captured HTML from the output buffer to the mPDF class for processing
$mpdf->WriteHTML($html);
$mpdf->Output();

 ?>