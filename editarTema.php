<?php
include('db.php');

$id = $_GET['id'];
$nometema = $_GET['nometema'];
try{
    $sql = "UPDATE `tema` SET `nome_tema` = '$nometema' WHERE `tema`.`id_tema` = $id;";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $conn = null;
    //$conn->query("UPDATE `tema` SET `nome_tema` = $nome_tema WHERE `tema`.`id` = $id;");
    $msg='<div class="alert alert-success" role="alert">Editado com Sucesso!</div>';
    header("Location:listaTemas.php?msg=".$msg);
}catch(PDOException $e){
    $msg='<div class="alert alert-danger" role="alert" id="msg">Erro ao editar Erro: '.$e->getMessage().'</div>';
    
    header("Location:listaTemas.php?msg=".$msg);
    echo 'ERRO:'.$e->getMessage();
    
}