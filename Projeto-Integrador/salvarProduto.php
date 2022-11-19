    <?php
        include "connectDB.php";

        //Condição que mostra se o Produto foi cadastrado com sucesso.
        switch($_REQUEST["acao"]){
        case 'cadastrar':
        $id=$_POST["id"];
        $nome=$_POST["nome"];
        $desc=$_POST["desc"];
        $valor=$_POST["valor"];
        $dev=$_POST["dev"];

        $sql = "INSERT INTO produtos (id, nome, descricao, valor, idDesenvolvedor)
        VALUES ('{$id}', '{$nome}', '{$desc}', '{$valor}', '{$dev}')";
                        
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Cadastrado com sucesso.');</script>";
            print "<script>location.href='listaProdutos.php';</script>";
        }else{
            print "<script>alert('OPS!!! Algo deu errado.');</script>";
            print "<script>location.href='cadastroProduto.php';</script>";
        }
        break;

    case 'editar':
        $id=$_POST["id"];
        $nome=$_POST["nome"];
        $desc=$_POST["desc"];
        $valor=$_POST["valor"];
        $dev=$_POST["dev"];

        $sql = "UPDATE produtos SET
                nome='{$nome}',
                desc='{$desc}',
                valor='{$valor}',
                dev='{$dev}'
                WHERE
                id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Editado com sucesso.');</script>";
            print "<script>location.href='listaProdutos.php';</script>";
        }else{
            print "<script>alert('OPS!!! Algo deu errado.');</script>";
            print "<script>location.href='listaProdutos.php';</script>";
        }
        break;

        case 'excluir':
            $sql = "DELETE FROM produtos WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluido com sucesso.');</script>";
                print "<script>location.href='listaProdutos.php';</script>";
            }else{
                print "<script>alert('OPS!!! Algo deu errado.');</script>";
                print "<script>location.href='listaProdutos.php';</script>";
            }
        break;    
    }
    ?>