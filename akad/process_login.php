<?php
include("connect.php");

$user_usuario = $_POST['usuario'];
$user_senha = $_POST['senha'];

$query_get_senha = 'SELECT senha FROM users WHERE username = "'.$user_usuario.'"';
$get_senha = mysqli_query($link, $query_get_senha);
$row = mysqli_fetch_array($get_senha);
$bd_senha = $row['senha'];

$query_get_nivel = 'SELECT nivel FROM users WHERE username = "'.$user_usuario.'"';
$get_nivel = mysqli_query($link, $query_get_nivel);
$row = mysqli_fetch_array($get_nivel);
$bd_nivel = $row['nivel'];

$_SESSION["username"] = $user_usuario;
$_SESSION["senha"] = $bd_senha;
$_SESSION["nivel"] = $bd_nivel;

if($user_senha === $bd_senha){
    header("Location: http://localhost/akad/home.php");
    
}else{
    header("Location: http://localhost/akad/index.php");
}
?>