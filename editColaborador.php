<?php
include('painel.php');
include('db.php');

//$matricula = $_GET['matricula'];
$idColaborador = $_GET['id'];
//$sql= $conn->query("SELECT * FROM colaborador WHERE matricula = $matricula");
// while($dados = $lista->fetch(PDO::FETCH_ASSOC)){
$sql= $conn->query("SELECT * FROM colaborador INNER JOIN vinculo ON colaborador.vinculo = vinculo.id_vinculo WHERE id=$idColaborador");
$dados = $sql->fetch(PDO::FETCH_ASSOC);

$id=$dados['id'];
$matricula=$dados['matricula'];
$nome=$dados['nome_colaborador'];
$cargo=$dados['cargo'];
$email=$dados['email'];
$vinculo=$dados['vinculo'];
$vinculoNome=$dados['nome_vinculo'];

//$sql2="SELECT nome_vinculo FROM vinculo INNER JOIN colaborador ON colaborador.vinculo = vinculo.id_vinculo";
//$stmt=$conn->prepare($sql2);
//$nomeVinculo= $stmt->execute();

?>

<div class="container" align="center">
        </br>
        <form id="formColaborador" action="editarColaborador.php" method="GET">
            <div class="mb-3">
                <input type="hidden" class="form-control" name="id" <?php echo "value='".$id."'"; ?>>
                <label for="nome" class="form-label"><i class="fas fa-user"></i> Nome do Colaborador:</label>
                <input type="text" class="form-control" id="nome" name="nome" <?php echo "value='".$nome."'"; ?>>
                <label for="matricula" class="form-label"><i class="fas fa-hashtag"></i> Matrícula do Colaborador:</label>
                <input type="text" class="form-control" name="matricula" id="matricula" style="width: 16rem; float: left;" <?php echo "value='".$matricula."'"; ?>>
                <label for="cargo" class="form-label"><i class="fas fa-address-card"></i> Cargo do Colaborador:</label>
                <input type="text" class="form-control" name="cargo" id="cargo"<?php echo "value='".$cargo."'"; ?>>
                <label for="email" class="form-label"><i class="fas fa-at"></i> E-mail do Colaborador:</label>
                <input type="text" class="form-control" name="email" id="email" <?php echo "value='".$email."'"; ?>>
                <label for="vinculo" class="form-label"><i class="fas fa-briefcase"></i> Vínculo do Colaborador:</label>
                <select id="vinculo" class="form-control" name="vinculo">
                <option <?php echo "value='".$vinculo."'"; ?>><?php echo $vinculoNome ?> </option>
                    <?php 
                        $vinculos= $conn->query("SELECT * FROM vinculo ORDER BY nome_vinculo ASC");
                        while($vinculo = $vinculos->fetch(PDO::FETCH_ASSOC)){
                            echo "<option value='".$vinculo['id_vinculo']."'>".$vinculo['nome_vinculo']."</option>";
                        }
                    ?>
                </select>

            </div>
            <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Salvar Dados</button>
            </br>


        </form>
</div>



    <link rel="stylesheet" href="css/colaborador.css">
    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>