<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <title>Lista de Funcionários</title>
</head>
<body>
  <header>
      <a href="#">
          <img src="./img/Logo.svg" alt="Loga do time Imperial eSports">
      </a>
  </header>
  <main>
    <div class="conteudo grande text-center">
      <div class="row">
        <div class="col">
          <h1>ID</h1>
        </div>
        <div class="col">
          <h1>Nome</h1>
        </div>
        <div class="col">
          <h1>E-mail</h1>
        </div>
        <div class="col">
          <h1>Telefone</h1>
        </div>
        <div class="col">
          <h1>Cargo</h1>
        </div>
        <div class="col">
          
        </div>
      </div>
      <?php
        include_once("./db/connectDB.php");

        $sql = "SELECT * FROM Funcionario";

        $res = $conn->query($sql);

        $qtd = $res->num_rows;

        if($qtd > 0){
          while($row = $res->fetch_object()){
            
            print "<div class='row'>";
            print "<div class='col'>" .$row->cpf. "</div>";
            print "<div class='col'>" .$row->nome. "</div>";
            print "<div class='col'>" .$row->telefone. "</div>";
            print "<div class='col'>" .$row->email. "</div>";
            print "<div class='col'>" .$row->cargo. "</div>";
            print 
            "<div class='col'> 
              <button onclick=\"location.href='editarFuncionario.php&cpf=".$row->cpf."'\" class='btn btn-success'>Editar</button> 
              <button onclick=\"if(confirm('Tem certeza que deseja excluir esse cadastro?')){location.href='editarFuncionario.php&acao=excluir&cpf=".$row->cpf."}else{false;}\" class='btn btn-danger'>Exclir</button> 
            </div>";
            print "</div>";
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