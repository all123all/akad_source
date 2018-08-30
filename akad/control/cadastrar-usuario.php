<!--
login: academiapowermax
senha: 123 
-->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">  
	    <title>AKAD - Login</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
	    <link href="../css/font-awesome.min.css" rel="stylesheet">
	    <link href="../css/bootstrap.min.css" rel="stylesheet">
	    <link href="../css/templatemo-style.css" rel="stylesheet">
	</head>
	<body class="light-gray-bg">
		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
	          <div class="square"></div>
	          <h1>AKAD Painel</h1>
	        </header>
	        <form action="process_cad_user.php" class="templatemo-login-form" method="post">
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" class="form-control" placeholder="usuário" name="usuario">           
		          	</div>	
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
		              	<input type="password" class="form-control" placeholder="senha" name="senha">           
		          	</div>	
				</div>
                <div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i ></i></div>	        		
		              	<input type="text" class="form-control" placeholder="nome completo" name="nome_completo">           
		          	</div>	
				</div>	
                <div class="form-group" align="center">
	        		<div class="input-group">
                    <p>Selecione o nível do usuário:</p>
		        		<select name="nivel" id="select_nivel">
                            <option value="1">1 - Instrutor</option>
                            <option value="2">2 - Recepcionista/Caixa</option>
                            <option value="3">3 - Administrador</option>
                            <option value="4">4 - Outros</option>
                        </select>         
		          	</div>	
				</div>  
				<div class="form-group">
					<input type="submit" class="templatemo-blue-button width-100" value="Cadastrar">
				</div>
	        </form>
		</div>
		<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<p>Problemas com o cadastro? <strong><a href="#" class="blue-text">Entre em contato!</a></strong></p>
		</div>
	</body>
</html>