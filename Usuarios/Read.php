<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Lista de Usuário</title>
</head>
<body>
    <header>
        <a href="../index.html">
            <img src="../Logo.svg" alt="Logo da Imperial (time de eSports)">
        </a>
    </header>
    <h1 class="titulo">Lista de Usuário</h1>
    <div class="conteudo grande">
        <div class="container grande text-center">
            <div class="row justify-content-md-center">
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
                <div class="col">
                    
                </div>
            </div>
            <?php
            include "connectDB.php";

                $sql = "SELECT * FROM usuario";

                $res = $conn->query($sql);

                $qtd = $res->num_rows;

                if($qtd > 0){
                while($row = $res->fetch_object()){
                    
                    print "<div class='row justify-content-md-center'>";
                    print "<div class='col'>" .$row->nome. "</div>";
                    print "<div class='col'>" .$row->username. "</div>";
                    print "<div class='col'>" .$row->email. "</div>";
                    print "<div class='col'>" .$row->telefone. "</div>";
                    print 
                    "<div class='col'> 
                    <button onclick=\"location.href='./Update.php?id=".$row->id."'\" class='btn btn-success'>Editar</button> 
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir esse cadastro?')){location.href='./Delete.php?id=".$row->id."'}else{false;}\" class='btn btn-danger'>Exclir</button> 
                    </div>";
                    print "</div>";
                }

                }else{
                print "<p class='alert alert-danger'>Nenhum usuario cadastrado!</p>";
                }
            ?>
        </div>
    </div>
</div>
</main>
<footer>
<?php
  $conn->close();
?>
</footer>
</body>
</html>
