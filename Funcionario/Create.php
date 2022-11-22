<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Cadastro de Funcionário 1/2</title>
</head>
<body>
    <header>
        <a href="../index.php">
            <img src="../img/Logo.svg" alt="Loga do time Imperial eSports">
        </a>
    </header>
    <main>
        <div class="conteudo medio text-center">
            <h1 class="titulo">Cadastro de Funcionário</h1>
            <form action="./Actions.php" method="post">
                <input type="hidden" name="acao" value="cadastrar">
                <div class="row">
                    <div class="col">
                        <label for="id">CPF</label>
                        <input type="text" required name="id" placeholder="20220095" minlength="11" maxlength="14" pattern="[0-9]{3}\.?[0-9]{3}\.?[0-9]{3}\-?[0-9]{2}">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="nome">Nome</label>
                        <input type="text" required name="nome" placeholder="Rodrigo Yuzo" minlength="5" maxlength="100">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="email">E-mail</label>
                        <input type="email" required name="email" placeholder="rodrigo@exemplo.com" minlength="5" maxlength="100" pattern="^[A-Za-z0-9.\-\_]{3,}+@[a-z0-9]{3,}+.(com|com.br|edu.br)$">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="telefone">Telefone</label>
                        <input type="text" name="telefone" placeholder="(43) 99849-1976" minlength="11" maxlength="16" pattern="^\(?[0-9]{2}+\)? ?[9] ?[0-9]{4}+\-?+[0-9]{4}$">
                    </div>
                    <div class="col">
                        <label for="cargo">Cargo</label>
                        <select name="cargo" id="cargo" style="padding: 0 0.625rem; width: 100%; height: 3.75rem; background-color: #DCDCDC; border: none; border-radius: 8px;">
                            <?php
                                include_once("../db/connectDB.php");
                                $cidade = "SELECT * FROM Cargo";
                                $res = $conn->query($cidade);
                                $row = $res->fetch_assoc();
                                
                                while($row = $res->fetch_object()){
                                    print "<option value=\"$row->id\" class=\"opcao\"> $row->nome </option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="endereco">ID endereço</label>
                        <select name="endereco" id="endereco" style="padding: 0 0.625rem; width: 100%; height: 3.75rem; background-color: #DCDCDC; border: none; border-radius: 8px;">
                        <?php
                            include_once("../db/connectDB.php");
                            $endereco = "SELECT * FROM endereco";
                            $res = $conn->query($endereco);
                            $row = $res->fetch_assoc();
                            
                            while($row = $res->fetch_object()){
                                print "<option value=\"$row->id\"> $row->rua </option>";
                            }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="senha">Senha</label>
                        <input type="password" required name="senha" placeholder="•••••••••" minlength="10" maxlength="100" pattern="^(?=.*[A-Z])(?=.*[!#@$%&])(?=.*[0-9])(?=.*[a-z]).{10,}$" title="deve conter no minimo 10 caracteres (numeros, especiais, e letras maiúsculas e minúsculas)">
                    </div>
                    <div class="col">
                        <label for="senha2">Confimar senha</label>
                        <input type="password" required name="senha2" placeholder="•••••••••" minlength="10" maxlength="100" pattern="^(?=.*[A-Z])(?=.*[!#@$%&])(?=.*[0-9])(?=.*[a-z]).{10,}$" title="deve conter no minimo 10 caracteres (numeros, especiais, e letras maiúsculas e minúsculas)">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="submit" value="Proximo">
                    </div>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <?php
        $conn->close();
        ?>
    </footer>
</body>
</html>