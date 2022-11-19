<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Cadastro de Usuário</title>
</head>
<body>
    <header>
        <main>
        <a href="./index.html">
            <img src="./img/Logo.svg" alt="Logo da Imperial (time de eSports)">
        </a>
    </header>
    <form action="./salvarUsuario.php" method="post">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="conteudo medio">
        <h1>Cadastro de Usuário</h1>
        <div class="row">
            <div class="col">
                <label for="nome">Nome</label>
                <br>
                <input type="text" name="nome" placeholder="Lucas Soares">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="username">Username</label>
                <br>
                <input type="text" name="username" placeholder="Blesk">
            </div>
            <div class="col">
                <label for="telefone">Telefone</label>
                <br>
                <input type="text" name="telefone" placeholder="(00) 00000-0000">
            </div>
        </div>
        <div class="rol">
            <div class="col">
                <label for="email">E-mail</label>
                <br>
                <input type="text" name="email" placeholder="Lucas.Soares@gmail.com">
            </div>
        </div>
        <div class="row">
            <div class="col">   
                <label for="senha">Senha</label>
                <br>
                <input type="password" required name="senha" placeholder="•••••••••">
            </div>
            <div class="col">
                <label for="Senha2">Confimar senha</label>
                <br>
                <input type="password" name="senha2" placeholder="•••••••••">
            </div>
        </div>
        <div class="rol">
            <div class="col">
                <input type="submit" value="Cadastrar-se">
            </div>
        </div>
    </div>
    </form>
    </main>
</body>

</html>