<?php
  include "../db/connectDB.php";

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM produtos WHERE id = ".$id;

    $res = $conn->query($sql);

    if($res==true){
      print "<script>alert('Produto excluido com sucesso!')</script>";
    }else{
      print "<script>alert('OPS!!! Algo deu errado.')</script>";
    };
  }
  print "<script>location.href = './Read.php'</script>";
?>