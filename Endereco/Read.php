<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <title>Lista de Funcionários</title>
</head>
<body>
  <header>
      <a href="../index.html">
          <img src="../img/Logo.svg" alt="Loga do time Imperial eSports">
      </a>
  </header>
  <?php
    include_once("../db/connectDB.php");
  ?>
  <main>
    <h1 class="titulo">Lista de Endereços</h1>
    <div class="conteudo grande text-center">
      <div class="row row-cols-10 align-items-center">
          <div class="col">
            <h1>ID</h1>
          </div>
          <div class="col">
            <h1>Rua</h1>
          </div>
          <div class="col">
            <h1>Numero</h1>
          </div>
          <div class="col">
            <h1>Bairro</h1>
          </div>
          <div class="col">
            <h1>Complemento</h1>
          </div>
          <div class="col">
            <h1>Cidade</h1>
          </div>
          <div class="col">
            <h1>Estado</h1>
          </div>
          <div class="col">
            
          </div>
      </div>
      <?php
        $sql = "SELECT * FROM Endereco";

        $res = $conn->query($sql);

        $qtd = $res->num_rows;

        if($qtd > 0){
          while($row = $res->fetch_object()){
            
            print "<div class='row row-cols-10 align-items-center'>";
            print "<div class='col'>" .$row->id. "</div>";
            print "<div class='col'>" .$row->rua. "</div>";
            print "<div class='col'>" .$row->numero. "</div>";
            print "<div class='col'>" .$row->bairro. "</div>";
            print "<div class='col'>" .$row->complemento. "</div>";
            print "<div class='col'>" .$row->cidade. "</div>";
            print "<div class='col'>" .$row->estado. "</div>";
            print 
            "<div class='col'> 
              <button onclick=\"location.href='./Update.php?id=".$row->id."'\" class='btn btn-success'>Editar</button>
              <button onclick=\"if(confirm('Tem certeza que deseja excluir esse cadastro?')){location.href='./Delete.php?id=".$row->id."'}else{false;}\" class='btn btn-danger'>Deletar</button>
            </div>";
            print "</div>";
            print "<p></p>";
          }

        }else{
          print "<p class='alert alert-danger'>Nenhum resultado foi encontrado!</p>";
        }
      ?> 
    </div>
  </main>
  <footer>
    <?php
      $conn->close();
    ?>
  </footer>
</body>
</html>