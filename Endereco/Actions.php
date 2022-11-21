<?php
  include_once("../db/connectDB.php");
  switch($_REQUEST["acao"]){
    case 'cadastrar':
      $id           = $_POST["id"];
      $rua          = $_POST["rua"];
      $num          = $_POST["num"];
      $bairro       = $_POST["bairro"];
      $complemento  = $_POST["complemento"];
      $cidade       = $_POST["cidade"];
      $estado       = $_POST["estado"];

     
      $sql = "INSERT INTO Endereco (id, rua, numero, bairro, complemento, cidade, estado) VALUES ('{$id}', '{$rua}', '{$num}', '{$bairro}', '{$complemento}', '{$cidade}', '{$estado}')";

      $res = $conn->query($sql);
      
      if($res==true){
        print "<script>alert('Endereço cadastrado com sucesso!')</script>";
        print "<script>location.href = './Read.php'</script>";
      }else{
        echo "<script>alert('Erro ao tentar cadastrar endereço!')</script>";
      };
    break;
    case 'editar':
      $id           = $_POST["id"];
      $rua          = $_POST["rua"];
      $num          = $_POST["num"];
      $bairro       = $_POST["bairro"];
      $complemento  = $_POST["complemento"];
      $cidade       = $_POST["cidade"];
      $estado       = $_POST["estado"];

      $sql = "UPDATE Endereco SET
        id          = '{$id}',
        rua         = '{$rua}',
        numero      = '{$num}',
        bairro      = '{$bairro}',
        complemento = '{$complemento}',
        cidade      = '{$cidade}',
        estado      = '{$estado}'
      WHERE 
        id          = $_REQUEST[id];";
      
      $res = $conn->query($sql);
        
      if($res==true){
        print "<script>alert('Endereço editado com sucesso!')</script>";
        print "<script>location.href = './Read.php'</script>";
      }else{
        echo "<script>alert('Erro ao tentar editar endereco!')</script>";
      };
    break;
    case 'excluir':
      $sql = "DELETE FROM Endereco WHERE id = $_REQUEST[id]";

      $res = $conn->query($sql);
        
      if($res==true){
        print "<script>alert('Endereço excluido com sucesso!')</script>";
      }else{
        echo "<script>alert('Erro ao tentar excluir endereco!')</script>";
      };
      print "<script>location.href = './Read.php'</script>";
    break;
  }
?>