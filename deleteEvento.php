<?php
include('db.php');

$codigo = $_POST['codigo'];

try{
    $sql = "DELETE FROM evento WHERE id ='.$codigo.'";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();

   $msg='<div class="alert alert-success" role="alert">Deletado com Sucesso!</div>';
    header("location: listaEvento.php?msg=".$msg);
    

}catch(PDOException $e){
    //$msg="Erro ao cadastrar!";
    $msg='<div class="alert alert-danger" role="alert">Erro ao cadastrar</div>';
    //$status="false";
    header("location: listaEvento.php?msg=".$msg);
    echo 'ERRO:'.$e->getMessage();

    
}