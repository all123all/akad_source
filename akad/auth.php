<?php
/*A função desse arquivo será verificar o NIVEL de usuário para julgar
se o USUARIO tem privilégio para acessar uma informação específica*/

if(!isset($_SESSION)){
    session_start();
}

if ($_SESSION["nivel"] != 1) {
    header("Location: http://localhost/akad/index.php");
}
?>