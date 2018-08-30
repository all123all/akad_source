<?php include("../connect.php"); ?>

<?php
$dia = date("d",mktime());
$mes = date("m",mktime());
$ano = date("Y",mktime());
$data = date ("dmY",mktime (0,0,0,$mes,$dia,$ano));
$data_anterior = date ("dmY",mktime (0,0,0,$mes,$dia-1,$ano));

//A adição dos dias do mês serão através de UPDATE
//1 = Presente
//0 - Falta

$aluno_presente = 1;
$aluno_faltou = 0;

$aluno_matricula = $_GET['aluno_matricula'];

$verificar_lista_presenca = mysqli_query($link, 'SELECT id FROM aluno_frequencia WHERE aluno_id = ' . $aluno_matricula);
$row = mysqli_fetch_assoc($verificar_lista_presenca);
$verificar_lista_presenca_retorno = $row['id'];

echo $verificar_lista_presenca_retorno;

if ($verificar_lista_presenca_retorno == "") {
    echo "if";
    $query_criar_registro = mysqli_query($link, 'ALTER TABLE aluno_frequencia ADD dia_' . $data . ' INT NOT NULL AFTER dia_' . $data_anterior);
    $insert_presenca = mysqli_query($link, 'INSERT INTO aluno_frequencia (dia_' . $data . ', aluno_id) VALUES (' . $aluno_presente . ', ' . $aluno_matricula . ')');
}else{
    echo "else";
    $marcar_presenca = mysqli_query($link, 'UPDATE aluno_frequencia SET dia_' . $data . ' = ' . $aluno_presente . ' WHERE aluno_id = ' . $aluno_matricula);
}

header('Location: http://localhost/akad/manage-users.php');

?>