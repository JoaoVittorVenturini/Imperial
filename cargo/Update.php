<?php
    include "conecta.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="cadastroc.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
  <title>Cadastro de Cargo</title>
</head>
<body>
  <header>
    <a href="index.html">
      <img src="logo.svg" alt="Logo da Imperial (time de eSports)">
    </a>
  </header>

    <?php
        if (isset($_GET['id'])){
            $id = $_GET['id'];

            $sql = "SELECT * FROM cargo WHERE id = ".$_REQUEST['id'];

            $res = $conn->query($sql);

            $row = $res->fetch_object();
        }
    ?>

  <div class="conteudo medio">
   <h1 class="titulo">Editar Cargo</h1>
    <form action="acoes.php" method="post">
        <input type="hidden" name="acao" value="editar">
        <div class="row">
            <div class="col">
                <label for="id">ID</label>
                <input type="text" name="id" value="<?php print $row->id ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome">Cargo</label>
                <input type="text" name="nome" value="<?php print $row->nome ?>">
            </div>
        </div>      
        <div class="row">
            <div class="col">
                <label for="descricao">Descrição</label>   
                <input name="descricao" cols="30" rows="10" value="<?php print $row->descricao ?>"></input>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="salario">Salário</label>
                <input type="text" name="salario" value="<?php print $row->salario ?>">
            </div>        
            <div class="col">
                <label for="carga">Carga Horária</label>
                <input type="text" name="carga" value="<?php print $row->cargaHoraria ?>">
            </div>
        </div>
          <input type="submit" name="Cadastrar" value="Entrar">
    </form>   
  </div>
</body>
</html>
