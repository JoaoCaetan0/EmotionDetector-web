<?php
  include_once "../funcaoF.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  if (!isset($funcao)) {
    $funcao = array();
    $funcao['idfun'] = 0;
    $funcao['nome'] = "";
    $funcao['descricao'] = "";
  }
  $funcoes = getAll();

 ?>
<!doctype html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
<link rel="stylesheet" type="text/css" href="../style.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<?php
  include_once "../views/menu.php";
  ?>
<div style = "margin-top: 150px;font-family: 'Ultra', serif; color:#232325; ">
    <h1>Funções</h1>
    <form action="../Controle/gravarF.php" method="post">
      <div class="mb-3">
        <label for="id" class="form-label">ID</label>
        <input readonly type="text" class="form-control" id="id" name="id" value='<?php echo "{$funcao['id']}"; ?>'>
      </div>
      <div class="mb-3">
        <label for="nome" class="form-label">Função</label>
        <input type="text" class="form-control" id="nome" name="nome" value='<?php echo "{$funcao['nome']}"; ?>'>
      </div>
      <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <input type="text" class="form-control" id="descricao" name="descricao" value='<?php echo "{$funcao['descricao']}"; ?>'>
      </div>
      <button type="submit" class="btn btn-primary">Gravar</button>
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
