<?php
  include_once("../db/connectDB.php");

  if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM Endereco WHERE id = ".$_REQUEST['id'];

    $res = $conn->query($sql);

    if($res==true){
      print "<script>alert('Endereço deletado com sucesso!')</script>";
      
    }else{
      echo "<script>alert('Erro ao tentar deletar endereco!')</script>";
    };
    print "<script>location.href='./Read.php'</script>";
  }
?>