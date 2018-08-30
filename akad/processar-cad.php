<?php
date_default_timezone_set('America/Sao_Paulo');

$script_tz = date_default_timezone_get();

//Conexão com o BD
$link = mysqli_connect("localhost", "root", "", "akad_test");

//Recebe os dados do form em cadastrar-aluno.php
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$nascimento = $_POST['nascimento'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo'];
$valor_debito = $_POST['valor_debito'];
$data_pagamento = $_POST['data_pagamento'];
$observacao = $_POST['observacao'];
$hora = date("H:i:s", mktime(gmdate("H")-3, gmdate("i"), gmdate("s")));

$data = date("Y/m/d", mktime(gmdate("d"), gmdate("m"), gmdate("Y")));

// $query_add_aluno = 'INSERT INTO aluno_dados (nome, cpf, nascimento, email, endereco, telefone) VALUES ("'.$nome.'", "'.$cpf.'", "'.$nascimento.'", "'.$email.'", "'.$endereco.'", "'.$telefone.'",)'; //valor_debito.'", "'.$observacao.'")';

$sql = 'INSERT INTO aluno_dados (nome, cpf, nascimento, email, endereco, telefone, sexo, data_pagamento, valor_debito, observacao, data_matricula) VALUES ("'.$nome.'", "'.$cpf.'", "'.$nascimento.'", "'.$email.'", "'.$endereco.'", "'.$telefone.'", "'.$sexo.'", "'.$data_pagamento.'", "'.$valor_debito.'", "'.$observacao.'", "'. $data .'");';

$result = mysqli_query($link, $sql);
echo $sql;


//header('Location: manage-users.php')
?>

