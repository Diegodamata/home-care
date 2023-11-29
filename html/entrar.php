<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<style>
		body{
			background: radial-gradient(circle at 50% 50%, #192233 20%, #000);
		}
		
	 .box{
		display: flex;
		justify-content: center;
		flex-direction: column;
		align-items: center;
		margin-top: 150px;
		margin-left: 550px;
		height: 450px;
		width: 350px;
		background-color: white;
		border-radius: 8px;
	 }
	 
	 .field{
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
	 }
	 .email{
		height: 40px;
		width: 300px;
		border-top: none;
		border-left: none;
		border-right: none;
	 }
	 .password{
		height: 40px;
		width: 300px;
		border-top: none;
		border-left: none;
		border-right: none;
	 }
	 .lembra{
		margin-top: 30px;
		
	 }
	 .conta{
		display: flex;
		justify-content: center;
		margin-top: 10px;
		margin-right: 130px;
	 }
	 .button{
		display: flex;
		color: black;
		font-size: 22px;
		justify-content: center;
		align-items: center;
		margin-top: 50px;
		
		height: 40px;
		width: 300px;
		border: 1px solid #d7d0d0;
		border-radius: 5px;
		text-decoration: none;
	 }
	 .button:hover{
		background: linear-gradient(120deg, #2ad1f8, #8a58b9);
		cursor: pointer;
		color: #fff;
	 }
	 
	 h1{
		color: #8648b9;
		
		font-size: 35px;
		font-weight: bolder;
	 }
	 .box-container{
		margin: 10px;
	 }
	 div{
		color: red;
		margin-left: 647px;
		margin-top: 20px;

	 }
	 
	 .box-container p{
		position: absolute;
		margin-top: -1px;
		visibility: hidden;
	 }
	.box-container.error input{
       border-color: #ff3b25;
    }
	.box-container.error p{
		color: #ff3b25;
		visibility: visible;
	}
  
	 

	</style>
</head>
<body>
               
			<form method="post" action="" class="box " id="form">
				<h1>Login</h1>
				<div class="box-container">
					<input type="text" id="email" class="email" name="email"  placeholder="Email ou usuário:"><br>
					<p>msg</p>
				</div>
				<div class="box-container">
					<input type="password" class="password" id="senha" name="senha"   placeholder="Senha:"><br>
					<p>msg</p>
				</div>
				<label for="" class="lembra">
					<input type="checkbox" ><label for="">Lembrar de mim</label>
					
					<a href="javascript/formulario/valida.php" style="margin-left: 100px;">Criar Conta</a>
			    </label>
				
				
  				<button type="submit" name="send" class="button">Enviar</button>
				  <a href="./index.php" style="margin-top: 10px;">Voltar</a>
			</form>
	<?php 
session_start();

if (isset($_POST['send'])){
	 $userEmail = $_POST['email'];
     $userSenha = $_POST['senha'];

	 $arrayLogin = [
		'login' => [
				[
						'email' => 'Diego',
						'senha' => password_hash('1234', PASSWORD_DEFAULT)
				],
				[
						'email' => 'Bob',
						'senha' => password_hash('5678', PASSWORD_DEFAULT)
				],
				[
						'email' => 'Maria',
						'senha' => password_hash('5432', PASSWORD_DEFAULT)
				]
		]
	];
	
	// converti para json
	$dadosJason = json_encode($arrayLogin);
	
	// echo $dadosJason;
	
	file_put_contents('/xampp/htdocs/homecare/dados.json', $dadosJason); //file_put_contents serve para pegar o arquivo que vc quer guardar os dados, e passar os dados que vc quer q seja armazenado

	$arquivoJson = file_get_contents('/xampp/htdocs/homecare/dados.json'); //acosso o arquivo json com as senhas criptografadas
	$dadosJasonDecodificado = json_decode($arquivoJson, true); //json_decode para converter para array
	
	if(empty($userEmail) && empty($userSenha)){ // se o usuario não preencher nada mostrara esssa msg de erro
		echo '<div class="msgErro">Email e senha é obrigatório</div>';
	}
		foreach ($dadosJasonDecodificado['login'] as $usuarioInfo) { //foreach para percorrer $dadosJasonDecodificado['login'] do array login, e armazear na variavel $usuarioInfo
        
			if (!empty($userEmail) !== $usuarioInfo['email']  && !empty($userSenha) !== password_verify($userSenha, $usuarioInfo['senha'])) {  //vai verificar se nao estiver vazio e se for diferente mostrara o erro
				echo '<div class="msgErro">Email ou senha inválida</div>';
				break;
			}else if ($userEmail == $usuarioInfo['email'] && $userSenha == password_verify($userSenha, $usuarioInfo['senha'])) {  //se igual irá redirecionar para a pagina
				$_SESSION['usuario'] = $userEmail; //crio uma session para receber o valor do nome da pessoa
				header('Location: principal.php');
			}
			
		}

	
}












/*
if (isset($_POST['send'])) {
	
	$userEmail = $_POST['email'];
    $userSenha = $_POST['senha'];

	if(validaLogin($userEmail, $userSenha)){
		header('Location: principal.php');
	}else{
		echo '<div class="msgErro">Email ou senha inválida</div>';
	}

}*/

/*
function validaLogin ($usuario, $senha){
	
	$dadosJason = file_get_contents('/xampp/htdocs/homecare/dados.json');
	
    $dadosJasonDecodificado = json_decode($dadosJason, true);


	foreach ($dadosJasonDecodificado['logins'] as $usuarioInfo) {
        $senhaCodificada  = password_hash($usuarioInfo['password'], PASSWORD_DEFAULT);
 
		if ($usuario == $usuarioInfo['email'] && $senha == password_verify('password', $senhaCodificada)) {  
			$_SESSION['usuario'] = $usuario;
			return true; // Login válido
		}

	}
			return false; // Login inválido
}
	*/
?>

</body>
</html>