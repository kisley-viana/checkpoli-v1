<?php
    include('painel.php');
    include('db.php');
?>
<?php 
            //Mensagem
            if(isset($_GET["msg"])){
                $msg = $_GET["msg"];
                //$status = $GET["status"];
                //echo '<div class="alert alert-success" role="alert">'.$msg.'</div>';
                echo $msg;
            }
            
            
        ?>

    <div class="container" align="center">
        </br>
        <form id="formEvento" action="cadastroEvento.php" method="POST">
            <div class="mb-3">
                <label for="nome" class="form-label"><i class="fas fa-calendar"></i> Nome do Evento:</label>
                <input type="text" class="form-control" id="nome" name="nome">
                <label for="data" class="form-label"><i class="fas fa-calendar-alt"></i> Data do Evento:</label>
                <input type="date" class="form-control" name="data" id="data" style="width: 16rem; float: left;">
                <label for="hora" class="form-label"><i class="fas fa-clock"></i> Hora do Evento</label>
                <input type="time" class="form-control" name="hora" id="hora" style="width: 14rem; float: left;">
                <label for="palestrante" class="form-label"><i class="fas fa-user-graduate"></i> Nome do Palestrante:</label>
                <input type="text" class="form-control" id="palestrante" name="palestrante">
                <label for="tema" class="form-label"><i class="fas fa-flag"></i> Tema do Evento:</label>
                <select name="tema" id="tema" class="form-control">
                <option value="selecione">Selecione</option>
                    <?php 
                        $temas= $conn->query("SELECT * FROM tema ORDER BY nome_tema ASC");
                        while($tema = $temas->fetch(PDO::FETCH_ASSOC)){
                            echo "<option value='".$tema['id']."'>".$tema['nome_tema']."</option>";
                        }
                    ?>
                </select>
                
                
            </div>
            <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Salvar Evento</button>
            </br>
            </br>

            <button type="submit" class="btn btn-primary"><i class="fas fa-clipboard-check"></i> Salvar Evento e Adicionar Participantes</button>
        </form>

    </div>
    

    <!-- MODAL SALVAR -->
    <div class="modal" tabindex="-1" id="modalSalvar">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-check"></i> Salvar Evento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Deseja salvar Evento?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success"><i class="fas fa-arrow-alt-circle-right"></i> Salvar Evento</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times-circle"></i> Cancelar</button>
            </div>
            </div>
        </div>
    </div>
    <!-- #MODAL SALVAR -->




    </div>
    <link rel="stylesheet" href="css/evento.css">
    <script src="js/painel.js"></script>
    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>