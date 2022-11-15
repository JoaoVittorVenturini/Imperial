<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Lista de Usuário</title>
</head>
<body>
    <header>
        <a href="./index.html">
            <img src="../img/Logo.svg" alt="Logo da Imperial (time de eSports)">
        </a>
    </header>
    <h1 class="titulo">Lista de Usuário</h1>
    <div class="conteudo grande">
        <div class="container grande text-center">
            <div class="row row-cols-6">
                <div class="col">
                    <h1>Nome</h1>
                </div>
                <div class="col">
                    <h1>Username</h1>
                </div>
                <div class="col">
                    <h1>E-mail</h1>
                </div>
                <div class="col">
                    <h1>Telefone</h1>
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once("./db/connectDB.php");

    $sql = "SELECT * FROM usuario";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
      while($row = $res->fetch_object()){
        
        print "<div class='row'>";
        print "<div class='col'>" .$row->nome. "</div>";
        print "<div class='col'>" .$row->username. "</div>";
        print "<div class='col'>" .$row->email. "</div>";
        print "<div class='col'>" .$row->telefone. "</div>";
        print 
        "<div class='col'> 
          <button onclick=\"location.href='editarUsuario.php&id=".$row->id."'\" class='btn btn-success'>Editar</button> 
          <button onclick=\"if(confirm('Tem certeza que deseja excluir esse cadastro?')){location.href='editarUsuario.php&acao=excluir&id=".$row->id."}else{false;}\" class='btn btn-danger'>Exclir</button> 
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>