<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Home Care</title>
    <style>
        .hidden {
            display: none;
        }

        
       
    </style>
</head>

<body>
    
    <div class="container" >
        <div id="header" style="background: linear-gradient(120deg, #2ad1f8, #8a58b9);">
            <div id="button">
                <span id="menu" class="material-symbols-outlined" onclick="clickMenu()"> menu_open</span>
                <menu id="itens">
                    <ul>
                        <li><a class="mecher" href="index.php">Inicio</a></li>
                        <li><a class="mecher" href="quemsomos.php">Quem Somos</a></li>
                    </ul>
                </menu>
            </div>

            <h1> Home Care</h1>
            <h3> <a href="entrar.php"> Entrar </a>
                <a style="margin-left: 20px;" href="javascript/formulario/valida.php"> Cadastre-se </a></h3>
           
        </div>



        <div id="principal">
            <div id="main">
                <h1>Assistência Domiciliar e Hospitalar</h1>
                <h5>Para cada caso uma forma exclusiva de tratamento e dedicação!</h5>
                <h4>Solicite seu Orçamento</h4>


                <div id="footer">
                    <h6 style="background-color: #03c4bd"><img
                            src="https://img.freepik.com/icones-gratis/coracao_318-906513.jpg?w=360"
                            alt=""><br>Saúde</h6>
                    <h6 style="background-color: #047a9e"><img
                            src="https://skull24horas.com.br/wp-content/uploads/2021/02/atendimento-24horas.png"
                            alt=""><br>Atendimento 24 Horas</h6>
                    <h6 style="background-color: #06447d"><img
                            src="https://realcoopmed.com/wp-content/uploads/2021/02/4.png" alt=""><br>Equipe Treinada
                    </h6>
                </div>
            </div>

            <div id="aside">
                <img src="https://img.freepik.com/vetores-gratis/ilustracao-colorida-mulher-senior-sentada-na-cadeira-de-rodas-com-cuidador-isolado-no-fundo-branco_1284-41426.jpg?w=2000"
                    alt="">
            </div>


        </div>
    </div>
    <script src="javascript/script.js"></script>
</body>
</html>