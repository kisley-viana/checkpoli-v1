<?php
include('db.php');

$id = $_GET['id'];

try{
    //$sql = ("DELETE FROM evento WHERE ID = .$codigo.");
    
    //$stmt = $conn->prepare($sql);
    //$stmt->execute();

    $sql= $conn->query("DELETE FROM `tema` WHERE `tema`.`id_tema` = $id");
    $conn = null;


    $msg='<div class="alert alert-success" role="alert" id="msg">Deletado com Sucesso!</div>';
    header("Location: listaTemas.php?msg=".$msg);
    

}catch(PDOException $e){
    //$msg="Erro ao cadastrar!";
    $msg='<div class="alert alert-danger" role="alert" id="msg">Erro ao deletar</div>';
    //$status="false";
    //header("Location: listaTemas.php?msg=".$msg);
    echo 'ERRO:'.$e->getMessage();
 
}