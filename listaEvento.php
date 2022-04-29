<?php
    include('painel.php');
    include('db.php');


    
        
        //Lista de eventos
        $lista= $conn->query("SELECT * FROM evento ORDER BY data DESC");
        
        //Contador
        $stmt=$conn->query("SELECT COUNT(*) FROM evento");
        $cont = $stmt->fetchColumn();
        $conn = null;
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

        <div class="container">
            </br>
            <h1><i class="fas fa-list"></i> Lista de Eventos</h1>
               
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
                        <th scope="col">Nome do Evento</th>
                        <th scope="col">Tema do Evento</th>
                        <th scope="col">Data do Evento</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($dados = $lista->fetch(PDO::FETCH_ASSOC)){
                    
                    echo"<tr>";
                        
                            echo "<th scope='row'>".$dados['ID']."</th>"; 
                            echo "<td>".$dados['nome']."</td>";
                            echo "<td>".$dados['tema']."</td>";
                            echo "<td>".$dados['data']."</td>";
                            echo "<td>".$dados['hora']."</td>";
                            echo "<td>
                                <button class='btn' style='color: darkblue; font-size: 19px'><i class='fas fa-print'></i></button>
                                <button class='btn' style='color: teal; font-size: 19px'><i class='fas fa-pencil-alt'></i></button>
                                <button class='btn' style='color: red; font-size: 19px' onclick='deletarEvento(this)' data-bs-toggle='modal' data-bs-target='#deletarModal' id='deletar".$dados['ID']."' codigo='".$dados['ID']."'><i class='fas fa-trash-alt'></i></button>
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
                    <form action="deleteEvento.php" method="POST">
                    <input type="hidden" id="codigoEvento" value="" name="codigo">
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









        </div>
    </div>
    <script src="js/painel.js"></script>
    <script src="js/evento.js"></script>
    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>