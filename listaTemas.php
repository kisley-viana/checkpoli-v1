<?php

include('painel.php');
include('db.php');

            //Lista de temas
        $lista= $conn->query("SELECT * FROM tema ORDER BY nome_tema ASC");
            //Contador de Linhas
        $stmt=$conn->query("SELECT COUNT(*) FROM tema");
        $cont = $stmt->fetchColumn();
        $conn = null;


        
            
?>



<div class="container">
        <?php
            //Mensagem
            if(isset($_GET["msg"])){
                $msg = $_GET["msg"];
                //$status = $GET["status"];
                //echo '<div class="alert alert-success" role="alert">'.$msg.'</div>';
                echo $msg;
            }
        ?>
            </br>
            <h1><i class="fas fa-flag"></i> Lista Temas</h1>
               
            </br>
            <table class="table">
                <?php if($cont==0){
                        echo "<div class='alert alert-danger' role='alert'>Nenhum registro!</div>";
                    }else{
                        echo "";
                    } ?>
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nome do Tema</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($dados = $lista->fetch(PDO::FETCH_ASSOC)){
                    
                    echo"<tr>";
                        
                            echo "<th scope='row'>".$dados['id_tema']."</th>"; 
                            echo "<td>".$dados['nome_tema']."</td>";
                            echo "<td>
                                <button class='btn' style='color: teal; font-size: 19px' onclick='editarTema(this)' data-bs-toggle='modal' data-bs-target='#editarModal' idTema=".$dados['id_tema']." nomeTema='".$dados['nome_tema']."'><i class='fas fa-pencil-alt'></i></button>
                                <button class='btn' style='color: red; font-size: 19px' onclick='deletarTema(this)' data-bs-toggle='modal' data-bs-target='#deletarModal' id='deletar".$dados['id_tema']."' codigo='".$dados['id_tema']."'><i class='fas fa-trash-alt'></i></button>
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
                    <form action="deletarTema.php" method="GET">
                    <input type="hidden" id="codigoTema" value="" name="id">
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
            <!-- #Modal Deletar -->

             <!-- Modal Editar -->
            <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-flag"></i> Cadastrar Tema</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="editarTema.php" method="GET">
                        <div class="modal-body">
                            <input type="hidden" id="idTema" value="" name="id">
                            <label for="nome" class="form-label"><i class="fas fa-flag"></i> Nome do Tema:</label>
                            <input type="text" class="form-control" id="nometema" name="nometema" value="">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Cadastar</button>
                        </div>
                    </form>
                    </div>
                </div>
             </div>
            <!-- #Modal Editar  -->






   


    <script src="js/painel.js"></script>
    <script src="js/tema.js"></script>
    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>