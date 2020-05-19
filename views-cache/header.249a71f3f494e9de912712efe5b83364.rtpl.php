<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso Evolução</title>
    <link rel="stylesheet" href="/res/site/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/res/site/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/res/site/node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
    
</head>
<body>
    
        <header>
            <div class="top-header-area d-flex justify-content-between align-items-center">
                <!-- Contact Info -->
                <div class="contact-info">
                    <a href="/admin"><i class="fa fa-user"></i> Acesso Administrador</a>
                    <a href="#"><span>Email:</span> info@clever.com</a>
                </div>
                <!-- Follow Us -->
                <div class="follow-us">
                    <span>Siga-nos:</span>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>

            <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
                <a href="#" class="navbar-brand">
                    <img src="/res/site/img/logo2.png" alt="Logo"></a>
                               
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav mr-auto ml-auto" id="menu-items">
                        <li class="nav-item">
                            <a href="" class="nav-link">Home</a>    
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Turmas</a>    
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Quem somos</a>    
                        </li>
                    </ul>

                    <button type="button" data-toggle="modal" data-target="#cadastro-tela" class="btn btn-outline-light mr-1">Cadastre-se</button>
                    <button type="button" data-toggle="modal" data-target="#login-tela"
                    class="btn btn-info my-2 my-sm-0" id="btn-login">Fazer Login</button>
                </div>
            </nav>
            
        </header>