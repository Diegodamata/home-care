<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home care</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-image: url(./img/profissional-de-saude-tem-direito-a-insalubridade.png);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .header{
            text-align: center;
            margin: 20px;
        }
        .p{
            text-align: center;
            font-size: 20px;
            font-family:Verdana, Geneva, Tahoma, sans-serif
           
            
        }
       
        a{
            margin-right: 1400px;
            padding: 10px;
            font-size: 35px;
            color: #000;
            text-decoration: none;
            text-shadow: 0.1em 0.1em 0.2em black;
        }
        a:hover{
            color: #1a57b2;
        }
        
        .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 500px;
            width: 1200px ;
            margin: 20px;
        }
        .filho{
            display: flex;
            align-items: center;
            flex-direction: column;
            height: 400px;
            width: 300px;
            border-radius: 8px;
            box-shadow: 0 0 8px 1px #000003, 8px 8px 16px 2px #000003;
            transition: box-shadow 0.3s;
            background-color: none;
        }
        .filho:hover{
            box-shadow: 0 0 16px 2px #000003, 16px 16px 32px 4px #000003;
        }
        .filho h1{
            padding: 20px;
            color: #1a57b2;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        .filho p{
            font-size: 23px;
            padding: 20px;
            color: #5e4e67;
        }
    </style>
</head>
<body>
    <a href="index.php">Voltar</a>
        <div class="paragrafo">
          <p class="p"> Fundada em 2023, a Home Care nasceu quando três amigas que trabalhavam <br> na área da saúde viram a necessidade de levar para sua região <br> uma assistência domiciliar integral e humanizada.</p>

        </div>

    <div class="container">
        
        <div class="filho">
            <div class="titulo">
                <h1>Missão</h1>
            </div>
            <div class="texto">
                <p>Prestar serviço de Atenção Domiciliar de forma sistematizada, segura, qualificada e humanizada por meio de um trabalho integrado de sua equipe multiprofissional, possibilitando a desospitalização e manutenção do cuidado do paciente em domicílio.</p>
            </div>
        </div>
        <div class="filho">
            <div class="titulo">
                <h1>Visão</h1>
            </div>
            <div class="texto">
                <p>Ser a melhor empresa de assistência domiciliar do Interior de São Paulo.</p>
            </div>
        </div>
        <div class="filho">
            <div class="titulo">
                <h1>Valores</h1>
            </div>
            <div class="texto">
                <p>Qualidade, integridade, compromisso, respeito, lealdade, coerência, transparência e espirito de equipe.</p>
            </div>
        </div>
       
    </div>
</body>
</html>