<?php
include('painel.php');
include('db.php');


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
        <form id="formColaborador" action="cadastroColaborador.php" method="POST">
            <div class="mb-3">
                <label for="nome" class="form-label"><i class="fas fa-user"></i> Nome do Colaborador:</label>
                <input type="text" class="form-control" id="nome" name="nome">
                <label for="matricula" class="form-label"><i class="fas fa-hashtag"></i> Matrícula do Colaborador:</label>
                <input type="text" class="form-control" name="matricula" id="matricula" style="width: 16rem; float: left;">
                <label for="cargo" class="form-label"><i class="fas fa-address-card"></i> Cargo do Colaborador:</label>
                <input type="text" class="form-control" name="cargo" id="cargo">
                <label for="email" class="form-label"><i class="fas fa-at"></i> E-mail do Colaborador:</label>
                <input type="text" class="form-control" name="email" id="email">
                <label for="vinculo" class="form-label"><i class="fas fa-briefcase"></i> Vínculo do Colaborador:</label>
                <select id="vinculo" class="form-control" name="vinculo">
                <option value="selecione">Selecione</option>
                    <?php 
                        $vinculos= $conn->query("SELECT * FROM vinculo ORDER BY nome_vinculo ASC");
                        while($vinculo = $vinculos->fetch(PDO::FETCH_ASSOC)){
                            echo "<option value='".$vinculo['id_vinculo']."'>".$vinculo['nome_vinculo']."</option>";
                        }
                    ?>
                </select>

            </div>
            <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Salvar Evento</button>
            </br>


        </form>
</div>



    <link rel="stylesheet" href="css/colaborador.css">
    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>