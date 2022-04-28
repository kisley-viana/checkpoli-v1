<?php
    include('painel.php');
    include('db.php');

    
?>

        <div class="container">
            </br>
            <h1><i class="fas fa-list"></i> Lista de Eventos</h1>
            </br>
            <table class="table">
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
                    <tr>
                        <th scope="row">1</th>
                            <td>Treinamento</td>
                            <td>Abril Verde</td>
                            <td>20/04/2022</td>
                            <td>15:00</td>
                            <td>
                                <button class="btn" style="color: darkblue; font-size: 19px"><i class="fas fa-print"></i></button>
                                <button class="btn" style="color: teal; font-size: 19px"><i class="fas fa-pencil-alt"></i></button>
                                <button class="btn" style="color: red; font-size: 19px"><i class="fas fa-trash-alt"></i></button>
                            </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
    <script src="js/painel.js"></script>
    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>