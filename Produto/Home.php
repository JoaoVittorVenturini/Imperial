<?php
    include "connectDB.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="card.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <header>
            <a href="">
                <img src="Logo.svg" alt="">
            </a>
    </header>
    
    <p></p>

    <div class="container text-center">
        <div class="row">
        <?php
            $sql = "SELECT * FROM produtos";

            $res = $conn->query($sql);
        
            $qtd = $res->num_rows;
        
            if($qtd > 0){
                while($row = $res->fetch_object()){
            ?>
            <center>
            <div class="col">
                <div class="card">
                    <div class="imgBx">
                        <img src="logoJogo.png" alt="">
                    </div>
                <div class="contentBx">
                    <h3><?php print "$row->nome"?></h3>
                    <h2 class="price">R$ <small><?php print "$row->valor"?></small></h2>
                    <a href="compra.php?id='<?php print "$row->id" ?>'" class="buy">Compre Agora</a>
                </div>
            </div>
            <p></p>
            </center>
        <?php
                }
        
            }else{
                print "<p class='alert alert-danger'>Nenhum resultado foi encontrado!</p>";
            }
        ?>
        </div>  
    </div>
</body>
</html>