<?php
    try
    {
        $conn = new PDO('mysql:host=localhost;dbname=checkpoli','root','');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $teste = 'aceitou!';
    } catch(PDOException $e)
    {
        echo 'ERRO:'.$e->getMessage();
        $erro='não aceitou';
    }
