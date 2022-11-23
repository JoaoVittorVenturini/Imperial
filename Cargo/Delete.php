<?php
  include_once("../db/connectDB.php");

  if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM cargo WHERE id = ".$_REQUEST['id'];

    $res = $conn->query($sql);

    if($res==true){
      print "<script>alert('Cargo deletado com sucesso!')</script>";

    }else{
      echo "<script>alert('Erro ao tentar deletar cargo!')</script>";
    };
    print "<script>location.href='./Read.php'</script>";
  }
?>
