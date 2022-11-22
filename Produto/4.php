<?php
    include "../db/connectDB.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Lista de Produtos</title>
</head>
<body>
    <header>
        <a href="../index.html">
            <img src="../img/Logo.svg" alt="">
        </a>
        </header>
    
    <div class="conteudo grande text-center">
        <div class="row row-cols-6">
            <div class="col">
                <h1>ID</h1>
            </div>

            <div class="col">
                <h1>Nome</h1>
            </div>

            <div class="col">
                <h1>Descrição</h1>
            </div>

            <div class="col">
                <h1>Valor</h1>
            </div>

            <div class="col">
                <h1>Desenvolvedor</h1>
            </div>
        </div>
        <?php
                $sql = "SELECT * FROM produtos";

                $res = $conn->query($sql);
            
                $qtd = $res->num_rows;
            
                if($qtd > 0){
                    while($row = $res->fetch_object()){
            
                    print "<div class='row'>";
                    print "<div class='col'>" .$row->id. "</div>";
                    print "<div class='col'>" .$row->nome. "</div>";
                    print "<div class='col'>" .$row->descricao. "</div>";
                    print "<div class='col'>" .$row->valor. "</div>";
                    print "<div class='col'>" .$row->idDesenvolvedor. "</div>";
                    print 
                    "<div class='col'> 
                        <button onclick=\"location.href='./Update.php?id=".$row->id."'\" class='btn btn-success'>Editar</button>
                        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='./Delete.php?id=".$row->id."'}else{false;}\"class='btn btn-danger'>Excluir</button>
                    </div>";
                    }
            
                }else{
                    print "<script>alert('Nenhum produto cadastrado.');</script>";
                }
        ?>
    </div>
    <footer>
        <?php
            $conn->close();
        ?>
    </footer>
</body>
</html>