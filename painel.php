<?php
    include('db.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="fontawesome-free-6.1.0-web/css/fontawesome.css" rel="stylesheet">
    <link href="fontawesome-free-6.1.0-web/css/brands.css" rel="stylesheet">
    <link href="fontawesome-free-6.1.0-web/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="css/painel.css">
    <title>CheckPoli - Início</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="#" alt="" width="30" height="24" class="d-inline-block align-text-top">
                CheckPoli
            </a>
        </div>
    </nav>
    <div id="containerBody">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;" id="sidebar" value="true">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                
                </a>
                <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <!-- Link Dropdown Evento -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fas fa-calendar"></i>&nbsp Evento</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="listaEvento.php"><i class="fas fa-list"></i> Listar Eventos</a></li>
                                <li><a class="dropdown-item" href="cadEvento.php"><i class="fas fa-calendar-plus"></i> Cadastrar Evento</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-pen-alt"></i> Preencher Planilha de Eventos</a></li>   
                            </ul>
                        </li>
                        <!-- #Link Dropdown Evento -->
                        <!-- Link Dropdown Temas -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fas fa-flag"></i>&nbsp Temas de Eventos</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="listaTemas.php"><i class="fas fa-list"></i> Listar Temas</a></li>
                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalTemas"><i class="fas fa-plus-square"></i> Cadastrar Temas</a></li>
                            </ul>
                        </li>
                        <!-- #Link Dropdown Temas -->
                        <!-- Link Dropdown Colaboradores -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fas fa-users"></i>&nbsp Colaboradores</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-list"></i> Listar Colaboradores</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-plus-square"></i> Cadastrar Colaborador</a></li>
                            </ul>
                        </li>
                        <!-- #Link Dropdown Colaboradores -->
                        
                        
                        <li>
                            <a href="#" class="nav-link text-white" id="link">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                            Customers
                            </a>
                        </li>
                    </ul>
                <hr>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong>mdo</strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" wfd-invisible="true">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        
        
        
    </div>


    <!-- Modal Temas -->
    <div class="modal fade" id="modalTemas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-flag"></i> Cadastrar Tema</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="cadTema.php" method="POST">
            <div class="modal-body">
                <label for="nome" class="form-label"><i class="fas fa-flag"></i> Nome do Tema:</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Cadastar</button>
            </div>
        </form>
        </div>
        
    </div>
    </div>
    <!-- #Modal Temas -->











    <!-- <button class="btn btn-primary" onclick="closeSidebar()" id="commander"><<</button> -->
    <div class="container" id="page">
    
    
