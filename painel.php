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
    <link rel="stylesheet" href="css/index.css">
    <title>CheckPoli - Início</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
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
                        <li class="nav-item">
                            <a href="#" class="nav-link active" aria-current="page">
                                <i class="fas fa-home"></i>
                            <txt id="link"> Eventos</txt>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white" id="link">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                            Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white" id="link">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                            Orders
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white" id="link">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                            Products
                            </a>
                        </li>
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
    <div class="container" id="page">
        <button class="btn btn-primary" onclick="closeSidebar()" id="commander"><<</button>