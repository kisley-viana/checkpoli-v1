<?php

include('db.php');

$nome = $_POST['nomeVinculo'];

try{
    $sql = "INSERT INTO vinculo(nome_vinculo) values('".$nome."')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}catch(PDOException $e){
    echo 'Erro:'.$e->getMessage();
}