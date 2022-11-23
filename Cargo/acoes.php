<?php
  include_once("../db/connectDB.php");
  if(isset($_REQUEST['acao'])){
  switch($_REQUEST["acao"]){
    case 'cadastrar':
      $id = $_POST["id"];
      $cargo = $_POST["nome"];
      $descricao = $_POST["descricao"];
      $salario = $_POST["salario"];
      $cargahoraria = $_POST["carga"];
      
        $sql = "INSERT INTO usuario (id, nome, descricao, salario, cargaHoraria) VALUES ('{$id}', '{$cargo}', '{$descricao}', '{$salario}', '{$cargahoraria}')";

        $res = $conn->query($sql);

        if($res==true){
          print "<script>alert('Cargo cadastrado com sucesso!')</script>";
          print "<script>location.href = listaCargo.php'</script>";
        }else{
          echo "<script>alert('Erro ao tentar cadastrar!')</script>";
        };
    break;
    
    case 'editar':
      $id           = $_POST["id"];
      $cargo          = $_POST["nome"];
      $descricao         = $_POST["descricao"];
      $salario       = $_POST["salario"];
      $cargahoraria            = $_POST["carga"];

      $sql = "UPDATE cargo SET
      nome = '{$cargo}',
      descricao = '{$descricao}',
      salario = '{$salario}',
      cargaHoraria = '{$cargahoraria}'
      WHERE id = '{$id}'";

      $res = $conn->query($sql);

      if($res==true){
          print "<script>alert('Cargo editado com sucesso!')</script>";
      }else{
          echo "<script>alert('Não foi possivel editar o cargo!')</script>";
      };
      print "<script>location.href = './listaCargo.php'</script>";
      break;

    case 'excluir':
      $sql = "DELETE FROM usuario WHERE id = ".$_REQUEST['id'];

      $res = $conn->query($sql);

      if($res==true){
        print "<script>alert('Usuário excluido com sucesso!') </script>";
        print "<script>location.href = './listaCargo.php' </script>";
      }else{
        echo "<script>alert('Erro ao tentar excluir usuário!') </script>";
      };
    break;
  }
}
?>
