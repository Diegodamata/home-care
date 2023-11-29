  
   


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios de validação de forms</title>
    <link rel="stylesheet" href="../formulario/estilo.css">
    <style>
        body{
            background-color: #000;
        }
        .erro {
            text-align: center;
            color: red;
        }

        .erroData{
            bottom: 0;
            text-align: center;
            color: red;
            font-size: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="titulo">
            <h1>Formulário de Cadastro</h1>
        </div>
        <form id="formu" action="" method="post" enctype="multipart/form-data">

            <div class="group">
                <label for="nome" class="label">Nome</label>
                <input type="text" name="nome" id="nome" class="input" placeholder="Nome Completo:">
                <a>msg de erro</a>
            </div>

            <div class="group">
                <label for="data_nasc" class="label">Data de Nascimento</label>
                <input type="date" name="data_nasc" id="data_nasc" class="input" placeholder="Data Nascimento:">
                <a>msg de erro</a>
            </div>

            <div class="group">
                <label for="rg" class="label">RG</label>
                <input type="text" name="rg" id="rg" class="input" placeholder="RG: ">
                <a>msg de erro</a>
            </div>

            <div class="group">
                <label for="cpf" class="label">CPF</label>
                <input type="text" name="cpf" id="cpf" class="input" placeholder="CPF:">
                <a>msg de erro</a>
            </div>

            <div class="group">
                <label for="email" class="label">Email</label>
                <input type="email" name="email" id="email" class="input" placeholder="E-mail:">
                <a>msg de erro</a>
            </div>

            <div class="group">
                <label for="fone" class="label">Fone</label>
                <input type="tel" name="fone" id="fone" class="input" placeholder="Fone:">
                <a>msg de erro</a>
            </div>

            <div class="group">
                <label for="cep" class="label">CEP</label>
                <input type="cep" name="cep" id="cep" class="input" placeholder="Cep:">
                <a>msg de erro</a>
            </div>
            <hr />

            <div class="estado-civil">
                <label id="msg" for="cep" class="estado">Estado Civil</label>

                <div class="opcEstado">
                    <input type="radio" name="estado_civil" id="estado_civil_solteiro" class="estado-civi">
                    <label for="estado_civil_solteiro">Solteiro</label>


                    <input type="radio" name="estado_civil" id="estado_civil_casado" class="estado-civi">
                    <label for="estado_civil_casado">casado</label>

                    <input type="radio" name="estado_civil" id="estado_civil_separado" class="estado-civi">
                    <label for="estado_civil_separado">separado/Divorciado</label>

                    <input type="radio" name="estado_civil" id="estado_civil_viuvo" class="estado-civi">
                    <label for="estado_civil_viuvo">Viúvo</label>
                </div>
                <p class="error error-hidden estado-civil-error">Selecione uma opção.</p>
            </div>
            <hr />
            <div class="raca">
                <label id="msg" for="cep" class="label">Raça</label>

                <div class="opcEstado">
                    <input type="radio" name="raca" id="raca_preta" class="radio">
                    <label for="raca_preta">Preta</label>

                    <input type="radio" name="raca" id="raca_parda" class="radio">
                    <label for="raca_parda">Parda</label>

                    <input type="radio" name="raca" id="raca_branca" class="radio">
                    <label for="raca_branca">Branca</label>

                    <input type="radio" name="raca" id="raca_amarela" class="radio">
                    <label for="raca_amarela">Amarela</label>
                </div>
                <p class="error error-hidden raca-error ">Selecione uma opção.</p>
            </div>
            <hr />

            <div class="genero">
                <label id="msg" for="cep" class="label">Genero</label>
                <div class="opcEstado">
                    <input type="radio" name="genero" id="genero_feminino" value="feminino" class="radio">
                    <label for="genero_feminino">Feminino</label>

                    <input type="radio" name="genero" id="genero_masculino" value="masculino" class="radio">
                    <label for="genero_masculino">Masculino</label>
                </div>
                <p class="error error-hidden genero-error ">Selecione uma opção.</p>
            </div>
            <hr />

            <div class="escolaridade">
                <label id="msg" for="escolaridade" class="label">Escolaridade</label>
                <div class="opcEstado">
                    <input type="radio" name="escola" id="escola_fi" value="escola_fi" class="radio">
                    <label for="escola_fi">Fundamental Incompleto</label>

                    <input type="radio" name="escola" id="escola_fc" value="escola_fc" class="radio">
                    <label for="escola_fc">Fundamental Completo</label>

                    <input type="radio" name="escola" id="escola_mi" value="escola_mi" class="radio">
                    <label for="escola_mi">Ensino Medio Incompleto </label><br>

                    <input type="radio" name="escola" id="escola_mc" value="escola_mc" class="radio">
                    <label for="escola_mc">Ensino Medio Completo</label>
                </div>
                <div class="opcEstado">
                    <input type="radio" name="escola" id="escola_si" value="escola_si" class="radio">
                    <label for="escola_si">Ensino Superior Incompleto</label>

                    <input type="radio" name="escola" id="escola_sc" value="escola_sc" class="radio">
                    <label for="escola_sc">Ensino Superior Completo</label>

                    <input type="radio" name="escola" id="escola_pg" value="escola_pg" class="radio">
                    <label for="escola_pg">Pós-Graduação</label>
                </div>
                <p class="error error-hidden escolaridade-error ">Selecione uma opção.</p>
            </div>
            <hr />

            <div class="group">
                <label for="religiao" class="label">Religião</label>
                <input type="text" name="religiao" id="religiao" class="input">
                <a>msg de erro</a>
            </div>
            <hr>

            <div class="group">
                <label for="profissao" class="label">Profissão</label>
                <input type="text" name="profissao" id="profissao" class="input">
                <a>msg de erro</a>
            </div>
            <hr />

             <div class="trabalho">
                   <label id="trabalho" for="trab" class="label">Está trabalhando?</label>
                    <div  style="margin: 10px; " >
                        <input type="radio" name="opcoes" value="sim" id="opcao2"> 
                        <label for="opcao2">Sim</label>
                        <input type="radio" name="opcoes" value="nao" id="opcao3"> 
                        <label for="opcao3">Não</label>
                    </div>
            </div>

            <div class="group">
                <input type="text" id="campoFoco" placeholder="Em que?">
                <p class="error error-hidden trabalho-error">Selecione uma opção.</p>
            </div>
            <hr />

            <div class="voce">
                <label id="msg" for="voce" class="label">VOCÊ É</label>
                <div style="margin: 10px; " >
                    <input type="radio" name="vce" id="vce_estudante" value="vce_estudante" class="radio">
                    <label for="vce_estudante">Estudante</label>

                    <input type="radio" name="vce" id="vce_autonoma" value="vce_autonoma" class="radio">
                    <label for="vce_autonoma">autonoma</label>

                    <input type="radio" name="vce" id="vce_pensionista" value="vce_pensionista" class="radio">
                    <label for="vce_pensionista">pensionista</label>

                    <input type="radio" name="vce" id="vce_aposentada" value="vce_aposentada" class="radio">
                    <label for="vce_aposentada">aposentada</label>

                    <input type="radio" name="vce" id="vce_funcionariapublica" value="vce_funcionariapublica" class="radio">
                    <label for="vce_funcionariapublica">funcionaria publica</label>
                    <input type="radio" name="vce" id="vce_outro" value="vce_outro" class="radio">
                    <label for="vce_outro">outro</label>
                </div>
                
            </div>

            <div class="group">
               
                <input type="text" name="outro_vce" id="outro_vce" class="input">
                <p class="error error-hidden vocee-error">Selecione uma opção.</p>
            </div>
            <hr />

            <div class="filho">
                <label for="filhos" class="label">VOCÊ TEM FILHOS?</label>
                <div style="margin: 10px; " >
                    <input type="radio" name="filhos" id="filhoss" value="filhoss" class="radio">
                    <label for="filhoss">Sim</label>

                    <input type="radio" name="filhos" id="filhosn" value="filhosn" class="radio">
                    <label for="filhosn">Não</label>
                </div>
                
            </div>

            <div class="group">
                <label for="filhos_qtd" class="label">QUANTOS?</label>
                <input type="text" name="filhos_qtd" id="filhos_qtd" class="input">
            </div>


            <div class="group">
                <label  for="filhos_idade" class="label">IDADE DOS FILHOS</label>
                <input type="text" name="filhos_idade" id="filhos_idade" class="input">
            </div>

            <div class="group">
                <label  for="filhos_escolaridade" class="label">ESCOLARIDADE DOS FILHOS</label>
                <input type="text" name="filhos_escolaridade" id="filhos_escolaridade" class="input">
                <p class="error error-hidden filhos-error">Selecione uma opção.</p>
            </div>
            <hr />
            <p >Já tem uma conta?<a href="/homecare/html/entrar.php"> Entrar</a></p>

            
            <input type="submit" value="cadastrar" class="btn" name="send" id="cadastrar">
            
            <script src="javascript.js"></script>
           
        </form>
    </div>

    
  
</body>
</html>