<?php 
 session_start();

 if (!isset($_SESSION["usuario"])) {
    
   
    header("Location: entrar.php");
        
      
    exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet"  href="./css/esti.css" >
    <title>Home care</title>
    <style>
        button{
            padding: 0.6rem 1.2rem;
            background-color: #888;
            color: #fff;
            border: none;
            border-radius: 0.25rem;
            cursor: pointer;
            opacity: 0.9;
            font-size: 1rem;
            transition: 0.4s;
        }
        #open-modal {
            
            color: #fff;
        }

        #fade,
         #modal{
            transition: .8s;
            opacity: 1;
            pointer-events: all;

        }

        button:hover{
            opacity: 1;
        }
        #fade{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 5;
        }

        #modal {
            position: fixed;
            left: 50%;
            top: 50%;
            background-color: #fff;
            z-index: 10;
            transform: translate(-50%, -50%);
            width: 500px;
            max-width: 90%;
            padding: 1.2rem;
            border-radius: 0.5rem;
        }
        .modal-header{
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ccc;
            margin-bottom: 1rem;
            padding-bottom: 1rem;
        }

        #fade.hide,
        #modal.hide{
            opacity: 0;
            pointer-events: none;
        }

        #modal.hide{
            top: 0;
        }

        #fundo{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 5;
        }
        #modelo{
            position: fixed;
            left: 50%;
            top: 50%;
            background-color: #fff;
            z-index: 10;
            transform: translate(-50%, -50%);
            width: 500px;
            max-width: 90%;
            padding: 1.2rem;
            border-radius: 0.5rem;
        }

        
        #fundo.hide,
        #modelo.hide{
            opacity: 0;
            pointer-events: none;
        }
        
        .input input{
            height: 30px;
            margin: 10px;
            width: 400px;
            border-top: none;
            border-left: none;
            border-right: none;
            
        }
        #botao-enviar{
            background-color: #007bff;
        }
        .nav h3{
            cursor: pointer;
            font-size: 20px;
        }
        

    </style>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <a href="../html/principal.php" class="homecare">Home Care</a> 
            <a href="#servicos" class="menu">Serviços</a>
            <a href="#contato" class="menu">Contato</a>
            <h3 id="open-modal" class="menu">Trabalhe Conosco</h3>
            
            <div id="fade" class="hide"></div>
            <div id="modal" class="hide">
                <div class="modal-header">
                    <h1 > Envie seu Currículo</h1>
                    <button id="fechar-modal">Fechar</button>
                </div>
                <div class="modal-corpo">
                    <form action="" class="formulario" >
                        <div class="input">
                            <input type="text" name="prof" id="prof" placeholder="Área em que deseja atuar:" list="list-prof">
                            <datalist id="list-prof">
                                <option >Médico</option>
                                <option >Enfermeiro(a)</option>
                                <option >Técnico(a) de Enfermagem</option>
                                <option >Fisioterapeuta</option>
                                <option >Terapeuta Ocupacional</option>
                                <option >Psicologo</option>
                                <option >Bucomaxilo</option>
                            </datalist>
                        </div>
                        <div class="input">
                            <input type="text" name="nome" id="nome" placeholder="Nome:">
                        </div>
                        <div class="input">
                            <input type="email" name="email" id="email" placeholder="Email:">
                        </div>
                        <div class="input">
                            <input type="cell" name="fone" id="fone" placeholder="Telefone:">
                        </div>
                        <div class="input">
                            <input type="file" name="arquivo" id="arquivo">
                        </div>
                        <div class="input">
                            <button  type="submit" id="botao-enviar" >Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
            <h2>Olá, <?php echo $_SESSION['usuario']; ?> </h2>
            <a href="./entrar.php" class="sair">Sair</a>
        </nav>
    </header>

        <div class="image">
             <h1>Atendimento personalizado <br> para a sua família</h1>
        </div>

    <main class="main" id="servicos">
        <div class="largura">
        <div class="container">
            <div class="servico-procedimento">
                <div class="title">
                     <h5>Procedimentos</h5>
                </div>
            </div>
            <div class="text">
                <p>De baixa, média e alta complexidade que demandam assistência por tempo integral, bem como atendimentos pontuais.</p>
            </div>
        </div>

        <div class="container">
            <div class="servico-cuidados">
                <div class="title">
                     <h5>Plano de cuidados</h5>
                </div>
            </div>
            <div class="text">
                <p>Planejamento específico para assistência ao paciente recém nato, pediátrico, adulto e geriátrico, visando a implementação do programa de assistência domiciliar.</p>
            </div>
        </div>

        <div class="container">
            <div class="servico-call-center">
                <div class="title">
                     <h5>Call center 24h</h5>
                </div>
            </div>
            <div class="text">
                <p>Orientação, apoio médico e acompanhamento permanente da equipe de enfermagem, mantendo contato 24 horas em caso de emergência.</p>
            </div>
        </div>

        <div class="container">
            <div class="servico-visita">
                <div class="title">
                     <h5>Visita domiciliar</h5>
                </div>
            </div>
            <div class="text">
                <p>Visitas médicas e de equipe multiprofissional programadas para gerenciamento e monitoramento preventivo.</p>
            </div>
        </div>
        
        </div>
        <div class="largura2">
        <div class="cont">
            <div class="servico-oxigenio">
                <div class="title">
                     <h5>Oxigenoterapia</h5>
                </div>
            </div>
            <div class="text">
                <p>Suporte ventilatório/oxigenoterapia, aluguel de equipamentos e instalação.</p>
            </div>
            
        </div>

        <div class="cont">
            <div class="servico-curativos">
                <div class="title">
                     <h5>Realização de curativos</h5>
                </div>
            </div>
            <div class="text">
                <p>Avaliação individualizada, acompanhamento e cuidado das diferentes lesões.</p>
            </div>
        </div>

        <div class="cont">
            <div class="servico-treinamento">
                <div class="title">
                     <h5>Orientação e treinamento</h5>
                </div>
            </div>
            <div class="text">
                <p>Treinamento familiar visando a redução até que ocorra a alta programada.</p>
            </div>
        </div>

        <div class="cont">
            <div class="servico-avaliacao">
                <div class="title">
                     <h5>Avaliação do paciente</h5>
                </div>
            </div>
            <div class="text">
                <p>Realizada no Hospital e/ou em domicílio para levantamento das necessidades individuais.</p>
            </div>
        </div>
       </div>
    </main>
    
    <footer class="footer">
        <div class="container-homecare">
            
                <div class="logo">
                    <a href="../html/principal.php">Home Care</a>
                </div>
               <div class="text1">
                    <p>Fundada em 2023, a Home Care nasceu quando três amigas que trabalhavam <br> na área da saúde viram a necessidade de levar para sua região <br> uma assistência domiciliar integral e humanizada.</p>
               </div>
               <div class="icon">
                    <i class="fa-brands fa-facebook"></i>
               </div>
            
        </div>

        <div class="container-contato" id="contato">
            
                <div class="titulo">
                    <h1>Contato</h1>
                </div>
               <div class="numeros">
                     <div class="icon">

                     </div>
                     <div class="num">
                        <a href="#"> (18) 99604-5519 </a><br>
                        <a href="#"> (18) 3658-1424 (RH)</a><br>
                        <a href="#"> (18) 3658-1313 (Clínico)</a>
                     </div>
                     <hr>
                    <div class="email">
                        <div class="icon">

                        </div>
                        <div class="email1">
                          
                            <a href="#">teste@teste.com</a>
                        </div>
                    </div>
                    <hr>
                    <div class="endereco">
                        <div class="icon">

                        </div>
                        <div class="endereco1">
                            
                            <p>Rua José Ferreira Leite Nº 53,
                            <br>
                            Centro, Araçatuba-SP</p>
                        </div>
                    </div>
               </div>
        </div>
    </footer>

    <script>
        const abrirModalBotao = document.querySelector('#open-modal');
        const fecharModalBotao = document.querySelector('#fechar-modal');
        const modal = document.querySelector('#modal');
        const fade = document.querySelector('#fade');

        const toggeModal = () => {  //metodo toggle ira verificar se essa classe hide esta, se ela nao estiver ele ira adicionar se nao estiver ira remover
            modal.classList.toggle('hide');
            fade.classList.toggle('hide');
        }

        [abrirModalBotao, fecharModalBotao, fade].forEach((el)=>{ //aray para percorrer cada elemento, 
            el.addEventListener('click', ()=> toggeModal()); //se houver o click nesse elemento ira chamar a função toggleModal
                                                            //se se existir a classe hide ira remover e se nao existir ira add
        })

        
    </script>
</body>
</html>