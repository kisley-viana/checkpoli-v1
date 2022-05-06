<?php
    include('painel.php');
    include('db.php');


 $idEvento = $_GET['id'];

 //$sql = $conn->query("UPDATE `evento` SET `nome`='$nome', `data`='$data', `hora`=$hora, `palestrante`='$palestrante', `tema`=$tema WHERE `id` = $id ");
 //$dados = $sql->fetch(PDO::FETCH_ASSOC);
 $sql= $conn->query("SELECT * FROM evento INNER JOIN tema ON evento.tema = tema.id_tema WHERE id_evento=$idEvento");
 $dados = $sql->fetch(PDO::FETCH_ASSOC);

$id = $dados['id_evento'];
$nome = $dados['nome'];
$data = $dados['data'];
$hora = $dados['hora'];
$palestrante = $dados['palestrante'];
//$tema = $dados['tema'];   
$temaId = $dados['id_tema'];
$sqlTema= $conn->query("SELECT nome_tema FROM tema INNER JOIN evento ON evento.tema = tema.id_tema WHERE id_tema = $temaId");
$Tema= $sqlTema->fetch(PDO::FETCH_ASSOC);
$temaNome = $Tema ['nome_tema']
            
?>

    <div class="container" align="center">
        </br>
        <form id="formEvento" action="cadastroEvento.php" method="POST">
            <div class="mb-3">
                <input type="hidden" class="form-control" name="id" id="id" <?php echo "value='".$id."'"; ?>>
                <label for="nome" class="form-label"><i class="fas fa-calendar"></i> Nome do Evento:</label>
                <input type="text" class="form-control" id="nome" name="nome" <?php echo"value='$nome'" ?>>
                <label for="data" class="form-label"><i class="fas fa-calendar-alt"></i> Data do Evento:</label>
                <input type="date" class="form-control" name="data" id="data" style="width: 16rem; float: left;" <?php echo"value='$data'" ?>>
                <label for="hora" class="form-label"><i class="fas fa-clock"></i> Hora do Evento</label>
                <input type="time" class="form-control" name="hora" id="hora" style="width: 14rem; float: left;" <?php echo"value='$hora'" ?>>
                <label for="palestrante" class="form-label"><i class="fas fa-user-graduate"></i> Nome do Palestrante:</label>
                <input type="text" class="form-control" id="palestrante" name="palestrante" <?php echo"value='$palestrante'" ?>>
                <label for="tema" class="form-label"><i class="fas fa-flag"></i> Tema do Evento:</label>
                <select name="tema" id="tema" class="form-control">
                <option <?php echo "value='".$temaId."'"; ?>><?php echo $temaNome ?>  </option>
                    <?php 
                    
                        $temas= $conn->query("SELECT * FROM tema ORDER BY nome_tema ASC");
                        while($tema = $temas->fetch(PDO::FETCH_ASSOC)){
                            echo "<option value='".$tema['id_tema']."'>".$tema['nome_tema']."</option>";
                        }
                    ?>
                </select>
                
                
            </div>
            <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Salvar Evento</button>
            </br>
            </br>

        </form>

    </div>
    

  




    </div>
    <link rel="stylesheet" href="css/evento.css">
    <script src="js/painel.js"></script>
    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>