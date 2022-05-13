<?php

include('db.php');
include('painel.php');

$idEvento=$_GET['idEvento'];

$listaEvento = $conn->query("SELECT * FROM evento INNER JOIN tema ON evento.tema = tema.id_tema WHERE id_evento = $idEvento");
$evento = $listaEvento->fetch(PDO::FETCH_ASSOC);

//$listaColaborador = $conn->query("SELECT * FROM colaborador INNER JOIN vinculo ON colaborador.vinculo = vinculo.id_vinculo");
//$colaboradores = $listaColaborador->fetch(PDO::FETCH_ASSOC);

?>
<!-- TABELA EVENTO -->
<table class="table table-success table-striped"> 
    <thead>
        <tr>
            <th>Evento</th>
            <th>Tema</th>
            <th>Data</th>
            <th>Hora</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><strong><?php echo $evento['nome']; ?></strong></td>
            <td><?php echo $evento['nome_tema']; ?></td>
            <td><?php echo $evento['data']; ?></td>
            <td><?php echo $evento['hora']; ?></td>
        <tr>
    </tbody>


</table>
<!-- #TABELA DE EVENTO -->


</br>
</br>
<h1>Lista de Presença</h1>
<button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#modalAdicionar"><i class="fas fa-plus-circle"></i> Adicionar Participante</button>
</br>
</br>
<div class="container" id="planilhaColabores">
    <!-- TABELA EVENTO -->
    <table class="table table-dark table-striped"> 
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cargo</th>
            </tr>
        </thead>
        <tbody id="tbody">
            
        </tbody>


    </table>
<!-- #TABELA DE EVENTO -->

</div>





<!-- #TABELA EVENTO -->
<!-- TABELA COLABORADORES 
<h1>Lista de Presença Colaboradores</h1>
<table class="table table-striped"> 
    <thead>
        <tr>
            <th>Nome</th>
            <th>Cargo</th>
            <th>Vinculo</th>
            <th>Presença</th>
        </tr>
    </thead>
    <tbody>
        <?php /*while($colaborador = $listaColaborador->fetch(PDO::FETCH_ASSOC)){ 
        echo "<tr>";
            echo"<td>".$colaborador['nome_colaborador']."</td>";
            echo"<td>".$colaborador['cargo']."</td>";
            echo"<td>".$colaborador['nome_vinculo']."</td>";
            echo"<td>".$colaborador['nome_vinculo']."</td>";
            
        echo"<tr>";
        }
            */?>
    </tbody>


</table>
<!-- #TABELA COLABORADORES -->
<!-- MODAL ADICIONAR PARTICIPANTE -->
<div class="modal fade" id="modalAdicionar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user"></i> Adicionar Participante</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="cadPlanilha.php" method="GET">
            <div class="modal-body">
                Digite o nome no colaborador que participou deste evento
                </br>
                </br>
                <label for="nomeVinculo" class="form-label"><i class="fas fa-user"></i> Digite o nome:</label>
                <input type="hidden" value="" id="participante">
                <select class="form-control form-select" name="addColaborador" id="addColaborador" value="">
                    <option value="">Selecione</option>
                    <?php 
                        $sql=$conn->query("SELECT * FROM colaborador INNER JOIN vinculo ON colaborador.vinculo = vinculo.id_vinculo ORDER BY nome_colaborador");
                        while($colaborador = $sql->fetch(PDO::FETCH_ASSOC)){
                            echo "<option cargo='".$colaborador['cargo']."' id='colaborador' value='".$colaborador['id']."'>".$colaborador['nome_colaborador']."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" onclick="addParticipante()"><i class="fas fa-add"></i> Adicionar este participante</button>
            </div>
        </form>
        </div>
        
    </div>
    </div>
<!-- #MODAL ADICIONAR PARTICIPANTE -->




    <script src="js/painel.js"></script>
    <script src="js/colaborador.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>