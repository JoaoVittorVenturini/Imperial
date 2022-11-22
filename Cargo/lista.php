<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="cadastroc.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Lista de Cargo</title>
</head>
<body>
    <header>
        <a href="index.html">
            <img src="Logo.svg" alt="Logo da Imperial (time de eSports)">
        </a>
    </header>
    <h1 class="titulo">Lista de Cargo</h1>
    <div class="conteudo grande">
        <div class="container grande text-center">
            <div class="row row-cols-6">
                <div class="col">
                    <h1>ID</h1>
                </div>
                <div class="col">
                    <h1>Cargo</h1>
                </div>
                <div class="col">
                    <h1>Descrição</h1>
                </div>
                <div class="col">
                    <h1>Salário</h1>
                </div>
                <div class="col">
                    <h1>Carga</h1>
                </div>
            </div>
            <?php
            include "conecta.php";

                $sql = "SELECT * FROM cargo";

                $res = $conn->query($sql);

                $qtd = $res->num_rows;

                if($qtd > 0){
                while($row = $res->fetch_object()){
                    
                    print "<div class='row'>";
                    print "<div class='col'>" .$row->id. "</div>";
                    print "<div class='col'>" .$row->nome. "</div>";
                    print "<div class='col'>" .$row->descricao. "</div>";
                    print "<div class='col'>" .$row->salario. "</div>";
                    print "<div class='col'>" .$row->cargaHoraria. "</div>";
                    print 
                    "<div class='col'> 
                    <button onclick=\"location.href='editar.php?id=".$row->id."'\" class='btn btn-success'>Editar</button> 
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir esse cadastro?')){location.href='excluir.php?id=".$row->id."'}else{false;}\" class='btn btn-danger'>Excluir</button> 
                    </div>";
                    print "</div>";
                    print "<p></p>";
                }

                }else{
                print "<p class='alert alert-danger'>Nenhum resultado foi encontrado!</p>";
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
