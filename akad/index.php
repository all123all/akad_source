<?php //include("auth.php"); ?>

<!--
login: demo
senha: 89e495e7941cf9e40e6980d14a16bf023ccd4c91 
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
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/templatemo-style.css" rel="stylesheet">
	</head>
	<body class="light-gray-bg">
		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
	          <div class="square"></div>
	          <h1>AKAD Painel</h1>
	        </header>
	        <form action="process_login.php" class="templatemo-login-form" method="post">
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
				
				<!-- Mantenha-me conectado -->
	          	<!-- <div class="form-group">
				    <div class="checkbox squaredTwo">
				        <input type="checkbox" id="c1" name="cc" />
						<label for="c1"><span></span>Manter-me conectado</label>
				    </div>				    
				</div> -->
				<div class="form-group">
					<input type="submit" class="templatemo-blue-button width-100" value="Login">
				</div>
	        </form>
		</div>
		<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<p>Problemas com Login? <strong><a href="#" class="blue-text">Entre em contato!</a></strong></p>
		</div>
	</body>
</html>