<?php
        include "../db/connectDB.php";

        //Condição que mostra se o Produto foi cadastrado com sucesso.
        if(isset($_REQUEST['acao'])){
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
            print "<script>location.href='./Read.php';</script>";
        }else{
            print "<script>alert('OPS!!! Algo deu errado.');</script>";
            print "<script>location.href='./Create.php';</script>";
        }
        break;

        case 'editar':
            $id           = $_POST["id"];
            $nome          = $_POST["nome"];
            $desc          = $_POST["desc"];
            $valor       = $_POST["valor"];
            $dev            = $_POST["dev"];
      
            $sql = "UPDATE produtos SET
            nome = '{$nome}',
            descricao = '{$desc}',
            valor = '{$valor}',
            idDesenvolvedor = '{$dev}'
            WHERE id = '{$id}'";
            
            $res = $conn->query($sql);
              
            if($res==true){
              print "<script>alert('Produto editado com sucesso!')</script>";
            }else{
              echo "<script>alert('OPS!!! Algo deu errado.')</script>";
            };
            print "<script>location.href = './Read.php'</script>";
          break;
    }
}
?>