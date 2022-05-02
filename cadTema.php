<?php

include('db.php');

try{
    $nome = $_POST["nome"];

    $sql = "INSERT INTO tema(nome) VALUES('$nome')";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $conn = null;
    $msg='<div class="alert alert-success" role="alert">Cadastrado com Sucesso!</div>';
    header("Location:listaTemas.php?msg=".$msg);
}catch(PDOException $e){
    $msg='<div class="alert alert-danger" role="alert" id="msg">Erro ao deletar</div>';
    
    header("Location:listaTemas.php?msg=".$msg);
    echo 'ERRO:'.$e->getMessage();
}