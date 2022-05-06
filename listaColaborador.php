<?php
include('db.php');
include('painel.php');


?>
<?php 
            //Mensagem
            if(isset($_GET["msg"])){
                $msg = $_GET["msg"];
                //$status = $GET["status"];
                //echo '<div class="alert alert-success" role="alert">'.$msg.'</div>';
                echo $msg;
            }



            $lista= $conn->query("SELECT * FROM colaborador INNER JOIN vinculo ON colaborador.vinculo = vinculo.id_vinculo");
        
            //Contador
            $stmt=$conn->query("SELECT COUNT(*) FROM colaborador");
            $cont = $stmt->fetchColumn();
            $conn = null;
            
            
        ?>

        <div class="container">
            </br>
            <h1><i class="fas fa-users"></i> Lista de Colaboradores</h1>
               
            </br>
            <table class="table">
                <?php if($cont==0){
                        echo "<div class='alert alert-danger' role='alert'>Nenhum registro!</div>";
                    }else{
                        echo "";
                    } ?>
                <thead>
                    <tr>
                        <th scope="col">Matrícula</th>
                        <th scope="col">Nome do Colaborador</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Vinculo</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($dados = $lista->fetch(PDO::FETCH_ASSOC)){
                    
                    echo"<tr>";
                        
                            echo "<th scope='row'>".$dados['matricula']."</th>"; 
                            echo "<td>".$dados['nome_colaborador']."</td>";
                            echo "<td>".$dados['cargo']."</td>";
                            echo "<td>".$dados['nome_vinculo']."</td>";
                            echo "<td>
                                
                                <a href='editColaborador.php?id=".$dados['id']."'><button class='btn' style='color: teal; font-size: 19px'><i class='fas fa-pencil-alt'></i></button></a>
                                <button class='btn' style='color: red; font-size: 19px' onclick='deletarColaborador(this)' data-bs-toggle='modal' data-bs-target='#deletarModal' codigo='".$dados['id']."'><i class='fas fa-trash-alt'></i></button>
                            </td>";
                        echo "</tr>";
                    } ?>
                    
                </tbody>
            </table>


             <!-- Modal Deletar-->
             <div class="modal fade" id="deletarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deletar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="deletarColaborador.php" method="GET">
                    <input type="hidden" id="codigoVinculo" value="" name="id">
                        Você deseja realmente deletar este Evento?
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Deletar</button>
                
                </div>
                    </form>
                </div>
                
                </div>
            </div>
            </div>
            <!-- Modal Deletar -->



    <script src="js/painel.js"></script>
    <script src="js/colaborador.js"></script>
    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>