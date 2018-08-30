<?php include("../connect.php"); ?>

<!--SUBSTITUIR TODOS ESSES 'if' POR UM SWITCH CASE-->

<?php
$aluno_matricula = $_GET['aluno_matricula_show'];
$opt_alter = $_GET['opt_alter'];

$novo_nome = $_GET['novo_nome'];
$novo_cpf = $_GET['novo_cpf'];
$novo_nascimento = $_GET['novo_nascimento'];
$novo_email = $_GET['novo_email'];
$novo_endereco = $_GET['novo_endereco'];
$novo_telefone = $_GET['novo_telefone'];
$novo_data_pagamento = $_GET['novo_dia_pagamento'];
$novo_valor_debito = $_GET['novo_valor_debito'];
$aluno_nome_show = $_GET['aluno_nome_show'];

if($opt_alter == 1){
    $query_update_nome = 'UPDATE aluno_dados SET nome = \'' . $novo_nome . '\' WHERE id = ' . $aluno_matricula;
    $exec_query_update_nome = mysqli_query($link, $query_update_nome);
}

if($opt_alter == 2){
    $query_update_cpf = 'UPDATE aluno_dados SET cpf =\'' . $novo_cpf . '\' WHERE id = ' . $aluno_matricula;
    $exec_query_update_cpf = mysqli_query($link, $query_update_cpf);
}

if($opt_alter == 3){
    $query_update_nascimento = 'UPDATE aluno_dados SET nascimento =\'' . $novo_nascimento . '\' WHERE id = ' . $aluno_matricula;
    $exec_query_update_nascimento = mysqli_query($link, $query_update_nascimento);
}

if($opt_alter == 4){
    $query_update_email = 'UPDATE aluno_dados SET email = \'' . $novo_email . '\' WHERE id = ' . $aluno_matricula;
    $exec_query_update_email = mysqli_query($link, $query_update_email);
}

if($opt_alter == 5){
    $query_update_endereco = 'UPDATE aluno_dados SET endereco = \'' . $novo_endereco . '\' WHERE id = ' . $aluno_matricula;
    $exec_query_update_endereco = mysqli_query($link, $query_update_endereco);
}

if($opt_alter == 6){
    $query_update_telefone = 'UPDATE aluno_dados SET telefone = \'' . $novo_telefone . '\' WHERE id = ' . $aluno_matricula;
    $exec_query_update_telefone = mysqli_query($link, $query_update_telefone);
}

if($opt_alter == 7){
    $query_update_data_pagamento = 'UPDATE aluno_dados SET data_pagamento = \'' . $novo_data_pagamento . '\' WHERE id = ' . $aluno_matricula;
    $exec_query_update_data_pagamento = mysqli_query($link, $query_update_data_pagamento);
}

if($opt_alter == 8){
    $query_update_valor_debito = 'UPDATE aluno_dados SET valor_debito = ' . $novo_valor_debito . ' WHERE id = ' . $aluno_matricula;
    $exec_query_update_valor_debito = mysqli_query($link, $query_update_valor_debito);
}

header('Location: http://localhost/akad/manage-users.php');
?>