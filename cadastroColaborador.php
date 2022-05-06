<?php

include('db.php');

$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$cargo = $_POST['cargo'];
$email = $_POST['email'];
$vinculo = $_POST['vinculo'];

try{
    $sql = "INSERT INTO colaborador(matricula,nome_colaborador,cargo,vinculo,email) values('".$matricula."','".$nome."','".$cargo."','".$vinculo."','".$email."')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $msg='<div class="alert alert-success" role="alert">Colaborador Cadastrado com Sucesso!</div>';
    header("Location: cadColaborador.php?msg=".$msg);
}catch(PDOException $e){
    echo 'Error:'.$e->getMessage();
}