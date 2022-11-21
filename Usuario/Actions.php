<?php
  include_once("../db/connectDB.php");
  switch($_REQUEST["acao"]){
    case 'cadastrar':
      $nome = $_POST["nome"];
      $username = $_POST["username"];
      $email = $_POST["email"];
      $telefone = $_POST["telefone"];
      $senha = $_POST["senha"];
      $senha2 = $_POST["senha2"];

      if($senha == $senha2){
        $sql = "INSERT INTO usuario (nome, username, email, telefone, senha) VALUES ('{$nome}', '{$username}', '{$email}','{$telefone}', '{$senha}')";

        $res = $conn->query($sql);

        if($res==true){
          print "<script>alert('Usuário cadastrado com sucesso!')</script>";
          print "<script>location.href = './Read.php'</script>";
        }else{
          echo "<script>alert('Erro ao tentar cadastrar!')</script>";
        };
      };
    break;
    case 'editar':
      $nome = $_POST["nome"];
      $username = $_POST["username"];
      $email = $_POST["email"];
      $telefone = $_POST["telefone"];

      $sql = "UPDATE usuario SET 
        nome      = '{$nome}',
        email     = '{$email}',
        telefone  = '{$telefone}',
        username   = '{$username}'
      WHERE 
        id   = $_REQUEST[id]";

      $res = $conn->query($sql);

        if($res==true){
          print "<script>alert('Usuário editado com sucesso!')</script>";
          print "<script>location.href = './Read.php'</script>";
        }else{
          echo "<script>alert('Erro ao tentar editar usuário!')</script>";
        };
    break;
    case 'excluir':
      $sql = "DELETE FROM usuario WHERE id = ".$_REQUEST['id'];

      $res = $conn->query($sql);

      if($res==true){
        print "<script>alert('Usuário excluido com sucesso!')</script>";
        print "<script>location.href = './Read.php'</script>";
      }else{
        echo "<script>alert('Erro ao tentar excluir usuário!')</script>";
      };
    break;
  }
?>