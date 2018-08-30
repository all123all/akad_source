<?php
$data = date("d/m/Y", mktime(gmdate("d"), gmdate("m"), gmdate("Y")));
$hora = date("H:i", mktime(gmdate("H")-3, gmdate("i"), gmdate("s")));

include("connect.php");
include("auth.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>AKAD</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    <link href="css/personal.css" rel="stylesheet">

  </head>
  <body bgcolor="#efefef">  
    <!-- Coluna esquerda -->
    <!--TODO: Modificar as opções no menu lateral-->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>AKAD Painel</h1>
          <div align="center" id="sidebar_login_info">
            <p><b>Login: </b><?php echo $_SESSION["username"]?></p>
            <p><?php echo $data; ?> - <?php echo $hora; ?></p>
          </div>          
        </header>
        <div class="profile-photo-container">
          <img src="images/logo.jpg" alt="Logo" class="img-responsive">  
          <!-- <div class="profile-photo-overlay"></div> -->
        </div>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="home.php"><i class="fa fa-home fa-fw"></i>Tela Inicial</a></li>
            <!-- <li><a href="#"><i class="fa fa-bar-chart fa-fw"></i>Charts</a></li> -->
            <!-- <li><a href="data-visualization.html"><i class="fa fa-database fa-fw"></i>Data Visualization</a></li> -->
            <!-- <li><a href="maps.html"><i class="fa fa-map-marker fa-fw"></i>Maps</a></li> -->
            <li><a href="manage-users.php"><i class="fa fa-users fa-fw"></i>Alunos</a></li>
            <li><a href="vendas.php"><i class="fa fa-sliders fa-fw"></i>Vendas</a></li>
            <li><a href="index.php"><i class="fa fa-eject fa-fw"></i>Sair</a></li>
          </ul>  
        </nav>
      </div>