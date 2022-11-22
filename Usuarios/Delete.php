<?php
  include "connectDB.php";

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM usuario WHERE id = ".$id;

    $res = $conn->query($sql);

    if($res==true){
      print "<script>alert('Usuário excluido com sucesso!')</script>";
    }else{
      print "<script>alert('Usuário não pode ser excluido.')</script>";
    };
  }
  print "<script>location.href = 'Read.php'</script>";
?>