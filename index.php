<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-WebCars</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="css/styleLogin.css">
    <script defer src="js/login.js"></script>
</head>
<body>

<div class="login-reg-panel slide-in-top">
		<div class="login-info-box slide-in-top">
			<h2>Ja tem uma conta?</h2>
			<p>Clique para fazer seu login</p>
			<label id="label-register" for="log-reg-show">Login</label>
			<input type="radio" name="active-log-panel" id="log-reg-show" checked="checked" >
		</div>
			
        
		<div class="register-info-box">
			<h2>Ainda não tem cadastro?</h2>
			<p>Faça seu registro agora</p>
			<label id="label-login" for="log-login-show">Registrar</label>
			<input type="radio" name="active-log-panel" id="log-login-show">
		</div>
							
		<div class="white-panel">
			<div class="login-show">
				<h2>WEBCARS</h2>

				<form action="controler/validaLogin.php" method="post">
					<input class="form-control" name="login" type="text" placeholder="Login">
					<input class="form-control" name="senha" type="password" placeholder="Senha">

                    <?php
                    if(isset($_GET['autenticacao']) && $_GET['autenticacao'] == 'erro002'){
                    ?>
                        <p class="text-danger mt-1"><i>Sessão finalizada. Faça o login novamente</i></p>
                    <?php
                    }
                    
                    if(isset($_GET['autenticacao']) && $_GET['autenticacao'] == 'erro001'){
                    ?>
                        <p class="text-danger mt-1"><i>Usuario e/ou senha incorreto(s)</i></p>
                    <?php
                    }
                    ?>

					<button type="submit" class="btn btn-secondary">LOGIN</button>
				</form>

			</div>
			<div class="register-show">
				<h2>Registro</h2>

				<form action="controler/criarUsuario_login.php" method="post">
					
					<input name="login" class="form-control" type="text" placeholder="Seu nome">
					<input name="senhaOne" type="password" class="form-control" placeholder="Senha">
					<input name="senhaTwo" type="password" class="form-control" placeholder="Confirme sua senha">

					<button type="submit" class="btn btn-secondary">Registrar</button>

				</form>


			</div>
		</div>
	</div>

	<?php

        if(isset($_GET['erro']) && $_GET['erro'] == 003){ ?>
           
           <script>
            alert('Informe usuario ou administrador.')
           </script>

        <?php 
        }

        if(isset($_GET['erro']) && $_GET['erro'] == 004){ ?>
           
           <script>
            alert('Senhas não conferem.')
           </script>

        <?php 
        }  

        if(isset($_GET['user']) && $_GET['user'] == 'add'){ ?>
        
        <script>
            alert('Usuario criado com sucesso!')
        </script>

        <?php 
        }
        
        if(isset($_GET['erro']) && $_GET['erro'] == '005'){ ?>
        
        <script>
            alert('Falha na criação do usuario')
        </script>

        <?php 
        }
        ?>    
</body>
</html>