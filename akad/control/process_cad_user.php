<?php
include("../connect.php");

$username = $_POST['usuario'];
$senha = $_POST['senha'];
$nome_completo = $_POST['nome_completo'];
$nivel = $_POST['nivel'];

$query_insert_cad_bd = "INSERT INTO users (username, nome, senha, nivel, ativo) VALUES ('$username', '$nome_completo', '$senha', '$nivel', 1);";
$insert_cad_bd = mysqli_query($link, $query_insert_cad_bd);

echo $query_insert_cad_bd;
?>