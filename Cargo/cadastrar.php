<?php

    include("conecta.php");

    $idCargo = $_POST['idCargo'];
    $nomeCargo = $_POST['nomeCargo'];
    $descricaoCargo = $_POST['descricaoCargo'];
    $salarioCargo = $_POST['salarioCargo'];
    $cargaHorariaCargo = $_POST['cargaHorariaCargo'];

    $sql = "INSERT INTO cargo (id, nome, descricao, salario, cargaHoraria) 
    VALUES ('$idCargo', '$nomeCargo', '$descricaoCargo', '$salarioCargo', '$cargaHorariaCargo')";
    
    $res = $conn->query($sql);

    if($res==true){
        print "<script>alert('Endereço cadastrado com sucesso!')</script>";
        print "<script>location.href = 'listaCargo.php'</script>";
    }else{
        echo "<script>alert('Erro ao tentar cadastrar endereço!')</script>";
        print "<script>location.href = 'listaCargo.php'</script>";
    };
?>
