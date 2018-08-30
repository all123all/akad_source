<?php
if(!isset($_SESSION)){
    session_start();
}

//Conexão com o BD
$link = mysqli_connect("localhost", "root", "", "akad_test");

// if (!$link) {
//     echo "Error: Unable to connect to MySQL." . PHP_EOL;
//     echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
//     echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
//     exit;
// }

// echo "Conexão bem sucedida." . PHP_EOL;
// echo "HOST info: " . mysqli_get_host_info($link) . PHP_EOL;
?>