<?php
include('db.php');
    $nome = $_POST["nome"];
    $data =$_POST["data"];
    $hora =$_POST["hora"];
    $palestrante =$_POST["palestrante"];
    $tema =$_POST["tema"];

    try{
        $sql = "insert into evento(nome,data,hora,palestrante,tema) values('".$nome."','".$data."','".$hora."','".$palestrante."','".$tema."')";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $msg="Cadastrado com sucesso!";
        $status="true";
        header("location: cadEvento.php?msg=".$msg);
        

    }catch(PDOException $e){
        $msg="Erro ao cadastrar!";
        $status="false";
        header("location: cadEvento.php?msg=".$msg."status=".$status);
        echo 'ERRO:'.$e->getMessage();

        
    }
   
   /* if(mysql_query($sql,$conn)){
        $msg = "Gravado com sucesso!";
        
    }else{
    $msg = "Erro ao gravar!";
    }
    */
?>
