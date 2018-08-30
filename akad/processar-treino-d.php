<?php include("connect.php"); ?>

<?php

$exerc_keep = array(); //guarda o valor mandado pelo exerc no form em editar-treino.php
$serie_keep = array();
$obs_keep = array();
$insert_aluno_treino_d = 'INSERT INTO aluno_treino_d(';

//O ciclo 'for' abaixo pega todos os valores inseridos nos campos exerc1 até o exerc15
for ($i = 1; $i <= 15; $i++) {
    $exerc_keep[$i] = $_GET['exerc' . $i];
    $serie_keep[$i] = $_GET['serie' . $i];
    $obs_keep[$i] = $_GET['obs' . $i];
}

$aluno_id = $_GET['aluno_id'];

//Os blocos de 'for' abaixo servirão para formar a query usada para dar INSERT no BD
//Cada ciclo será responsável por uma categoria

$insert_aluno_treino_d .= 'id_aluno, ';

for ($i = 1; $i <= 15; $i++) {
    $insert_aluno_treino_d .= 'rep'.$i.', ';
}

for ($i = 1; $i <= 15; $i++) {
    $insert_aluno_treino_d .= 'rep'.$i.'_serie, ';
}

for ($i = 1; $i <= 15; $i++) {
    if($i < 15){
        $insert_aluno_treino_d .= 'rep'.$i.'_obs, ';
    }else{
        if($i == 15){
            $insert_aluno_treino_d .= 'rep'.$i.'_obs) VALUES (';
        }
    }

}

$insert_aluno_treino_d .= $aluno_id . ', ';

for ($i = 1; $i <= 15; $i++) {
    $insert_aluno_treino_d .= '"' . $exerc_keep[$i] . '"' . ', ';
}

for ($i = 1; $i <= 15; $i++) {
    $insert_aluno_treino_d .= '"' . $serie_keep[$i] . '"' . ', ';
}

for ($i = 1; $i <= 14; $i++) {
    $insert_aluno_treino_d .= '"' . $obs_keep[$i] . '"' . ', ';
}

$insert_aluno_treino_d .= '"' . $obs_keep[15] . '"' . ')';

echo $insert_aluno_treino_d; //Apagar essa linha futuramente
$result = mysqli_query($link, $insert_aluno_treino_d);

/*Essa query é responsável por jogar o valor de 'treino_id' de 
'aluno_treino' dentro de 'id_treino' em 'aluno_dados'*/

$insert_id_treino = 'SELECT id_treino FROM aluno_treino_d WHERE id_aluno = ' . $aluno_id;
$bd_treino_id_query = mysqli_query($link, $insert_id_treino);
$row = mysqli_fetch_assoc($bd_treino_id_query);
$bd_treino_id =  $row['id_treino'];

$update_aluno_id_treino = 'UPDATE aluno_dados SET id_treino_d = ' . $bd_treino_id . ' WHERE id = ' . $aluno_id;
$update_aluno_id_treino_query = mysqli_query($link, $update_aluno_id_treino);

echo "</br></br></br>" . $update_aluno_id_treino;

header('Location: http://localhost/akad/manage-users.php');
?>
