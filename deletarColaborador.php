<?php
include('db.php');

$id = $_GET['id'];

try{
    $sql= $conn->query("DELETE FROM colaborador WHERE id = $id");
    $conn = null;
    $msg='<div class="alert alert-success" role="alert" id="msg">Colaborador Deletado com Sucesso!</div>';
    header("location: listaColaborador.php?msg=".$msg);
 

}catch(PDOException $e){
 //$msg="Erro ao cadastrar!";
    $msg='<div class="alert alert-danger" role="alert" id="msg">Erro ao deletar Colaborador</div>';
    //$status="false";
 header("location: listaTemas.php?msg=".$msg);
 echo 'ERRO:'.$e->getMessage();

}