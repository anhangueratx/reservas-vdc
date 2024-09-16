<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/icone.png" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Faculdade Anhanguera Tx | Reserve seu Laboratório </title>
</head>
<body>
    <?php
        if(!isset($_SESSION['login'])){

            if(isset($_POST['acao']) ){
                echo 'FormINviado';
            }

            include('pages/home.php');
        }else{
            include('home.php');
        }

    ?>
    <div id="nav-bar" class="nav-fixed">
        <img id="my-hover" src="images/logo.png" alt="">
        <div id="nav-menu">
            <a href="pages/reserva.html">RESERVE JA!</a>
            <a href="pages/equipamentos.html">EQUIPAMENTOS</a>
            <a href="pages/calendario.html">CALENDÁRIO</a>
            <a href="https://useanhanguera.com.br/">USE AEDU</a>
            <a href="https://sites.google.com/view/pitagorastxf">ANHANGUERA TX</a>
            <a href="https://sites.google.com/view/faculdadepitagorastxf">SALA DE AULA</a>
    </div>
    <div id="anhanguera-container">
            <!-- <a href="pages/login.html"><button id="button-login">FAZER LOGIN</button></a > -->
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      FAZER LOGIN
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="pages/login.html">Sou Administrador(a)</a></li>
                      <li><a class="dropdown-item" href="https://www.colaboraread.com.br/login/auth">Sou EAD</a></li>
                      <li><a class="dropdown-item" href="https://docenteonline.kroton.com.br/login.php">Sou Professor(a)</a></li>
                    </ul>
                </div>
        </div>
        <section id="principal-content">
            <div id="text-flex">
                <h1>Seja bem-vindo(a) ao nosso portal de reservas</h1>
                <h2>Reserve seus laboratórios aqui nessa nossa nova plataformas de reservas.</h2>
            </div>
            <img src="images/principal.png" alt="">
        </section>
        <img src="images/image 12.png" alt="" id="setas-anhanguera">

        <section id="nossos-numeros">
            <div id="text-nossos">
                <h1>NOSSOS NÙMEROS</h1>
                <h2>Há mais de 25 anos a Anhanguera faz parte do futuro de diversos<br>
                    estudantes, com cursos de graduação, pós-graduação e de <br>
                    extensão, em diversas áreas do conhecimento.<br>
                    <br>
                    São cerca de 15 mil profissionais e professores, entre especialistas,<br>
                    mestres e doutores, que vão fazer a diferença na sua vida e na sua <br>
                    carreira. Conheça nossos números!</h2>
            </div>
            <div id="cards-nossos">
               <img src="images/cards.png" alt="">
            </div>
        </section>
        <section id="backgroung-black">
            <button>VER MAIS DETALHES</button>
            <section id="use-aedu">
                <img id="logo-aedu" src="images/useaedu.png" alt="">
                <h1>CHEGOU O LOOK <span id="laranja">DA SUA FACUL</span></h1>
                <img id="looks-aedu" src="images/Group 281.png" alt="">
                <h2>Mostre para o mundo. <span id="laranja">Só AQUI tem.</span></h2>
                <a id="aedu" href="https://useanhanguera.com.br/">VER MAIS</a>
            </section>

            <section id="modalidades">
                <h1>QUAL MODALIDADE VOCÊ PREFERE?</h1>
                <img src="images/modalidades.png" alt="">
            </section>

            <section id="footer-gray">
                <img src="images/logo.png" alt="">
                <h1>© Copyright 2021 Anhanguera. Todos os direitos reservados.</h1>
            </section>
        </section>

        <img src="images/setinha.png" id="setas-anhanguera3" alt="">


        <img src="images/image 11.png" alt="" id="setas-anhanguera2">

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="jquery/javascript.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</html>