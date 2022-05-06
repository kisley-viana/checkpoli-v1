<?php

include('db.php');

$id=$_GET['id'];
$matricula=$_GET['matricula'];
$nome=$_GET['nome'];
$cargo=$_GET['cargo'];
$email=$_GET['email'];
$vinculo=$_GET['vinculo'];

try{
    $sql = "UPDATE `colaborador` SET `matricula` ='$matricula' , `nome_colaborador` = '$nome' , `cargo` = '$cargo' , `vinculo` = $vinculo , `email` = '$email' WHERE `id` = $id";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $msg='<div class="alert alert-success" role="alert">Editado com Sucesso!</div>';
    header("Location:listaColaborador.php?msg=".$msg);

}catch(PDOException $e){
    $msg='<div class="alert alert-danger" role="alert" id="msg">Erro ao editar Erro: '.$e->getMessage().'</div>';
    
    header("Location:listaColaborador.php?msg=".$msg);
    echo 'Erro:'.$e->getMessage();
}