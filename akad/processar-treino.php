<?php include("connect.php"); ?>

<?php
/*Devo criar uma função para pegar a matrícula do aluno selecionado
dessa forma posso preencher a coluna 'id_aluno' em 'aluno_treino_x'.
Basicamente uma variável recebe a matrícula e joga o valor da matrícula
em 'id_aluno', dessa forma será possível acessar os treinos e modificá-los.*/

$exerc_keep = array(); //guarda o valor mandado pelo exerc no form em editar-treino.php
$serie_keep = array();
$obs_keep = array();
$insert_aluno_treino_a = 'INSERT INTO aluno_treino_a(';

//O ciclo 'for' abaixo pega todos os valores inseridos nos campos exerc1 até o exerc15
for ($i = 1; $i <= 15; $i++) {
    $exerc_keep[$i] = $_GET['exerc' . $i];
    $serie_keep[$i] = $_GET['serie' . $i];
    $obs_keep[$i] = $_GET['obs' . $i];
}

$aluno_id = $_GET['aluno_id'];

/*@TODO: Deverá ser feito um ciclo 'for' também para armazenar os dados recebidos
em '$exerc_keep' no BD. Fora o código ficar mais enxuto também fica mais fácil de
modificar futuramente caso seja necessário. */

// for ($i = 1; $i <= 15; $i++) {
//     $sql = 'INSERT INTO aluno_treino_a(rep'.$i.', rep'.$i.'_serie, rep'.$i.'_obs) VALUES ("'.$exerc_keep[$i].', '.$serie_keep[$i].', '.$obs_keep[$i].'")';
//     $result = mysqli_query($link, $sql);
// }

//INSERT INTO `aluno_treino_a`(`id_treino`, `id_aluno`, `rep1`, `rep2`, `rep3`, `rep4`, `rep5`, `rep6`, `rep7`, `rep8`, `rep9`, `rep10`, `rep11`, `rep12`, `rep13`, `rep14`, `rep15`, `rep1_serie`, `rep2_serie`, `rep3_serie`, `rep4_serie`, `rep5_serie`, `rep6_serie`, `rep7_serie`, `rep8_serie`, `rep9_serie`, `rep10_serie`, `rep11_serie`, `rep12_serie`, `rep13_serie`, `rep14_serie`, `rep15_serie`, `rep1_obs`, `rep2_obs`, `rep3_obs`, `rep4_obs`, `rep5_obs`, `rep6_obs`, `rep7_obs`, `rep8_obs`, `rep9_obs`, `rep10_obs`, `rep11_obs`, `rep12_obs`, `rep13_obs`, `rep14_obs`, `rep15_obs`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19],[value-20],[value-21],[value-22],[value-23],[value-24],[value-25],[value-26],[value-27],[value-28],[value-29],[value-30],[value-31],[value-32],[value-33],[value-34],[value-35],[value-36],[value-37],[value-38],[value-39],[value-40],[value-41],[value-42],[value-43],[value-44],[value-45],[value-46],[value-47])
//INSERT INTO aluno_treino_a(rep1, rep2, rep3, rep4, rep5, rep6, rep7, rep8, rep9, rep10, rep11, rep12, rep13, rep14, rep15, rep1_serie, rep2_serie, rep3_serie, rep4_serie, rep5_serie, rep6_serie, rep7_serie, rep8_serie, rep9_serie, rep10_serie, rep11_serie, rep12_serie, rep13_serie, rep14_serie, rep15_serie, rep1_obs, rep2_obs, rep3_obs, rep4_obs, rep5_obs, rep6_obs, rep7_obs, rep8_obs, rep9_obs, rep10_obs, rep11_obs, rep12_obs, rep13_obs, rep14_obs, rep15_obs) VALUES ("CARALHO MANO, CARALHO MANO, CARALHO MANO, CARALHO MANO, CARALHO MANO, CARALHO MANO, , , , , , , , , , 4 DE 13, 313 13, SFSEFWEF , FWEFW , F FEF, , , , , , , , , , , PORRA, WEFWEFW, EFWE, F, , FWEF, , , , , , , , , ")
//Os blocos de 'for' abaixo servirão para formar a query usada para dar INSERT no BD
//Cada ciclo será responsável por uma categoria

$insert_aluno_treino_a .= 'id_aluno, ';

for ($i = 1; $i <= 15; $i++) {
    $insert_aluno_treino_a .= 'rep'.$i.', ';
}

for ($i = 1; $i <= 15; $i++) {
    $insert_aluno_treino_a .= 'rep'.$i.'_serie, ';
}

for ($i = 1; $i <= 15; $i++) {
    if($i < 15){
        $insert_aluno_treino_a .= 'rep'.$i.'_obs, ';
    }else{
        if($i == 15){
            $insert_aluno_treino_a .= 'rep'.$i.'_obs) VALUES (';
        }
    }

}

$insert_aluno_treino_a .= $aluno_id . ', ';

for ($i = 1; $i <= 15; $i++) {
    $insert_aluno_treino_a .= '"' . $exerc_keep[$i] . '"' . ', ';
}

for ($i = 1; $i <= 15; $i++) {
    $insert_aluno_treino_a .= '"' . $serie_keep[$i] . '"' . ', ';
}

for ($i = 1; $i <= 14; $i++) {
    $insert_aluno_treino_a .= '"' . $obs_keep[$i] . '"' . ', ';
}

$insert_aluno_treino_a .= '"' . $obs_keep[15] . '"' . ')';

echo $insert_aluno_treino_a;
$result = mysqli_query($link, $insert_aluno_treino_a);
?>
