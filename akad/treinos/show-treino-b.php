<!--
    @TODO: - Adicionar logo da academia no cabeçalho do treino
           - Puxar datas e treinos dos alunos do BD
           - Organizar os treinos do BD em colunas e linhas
                -Get ridd of the blank rows in the training
           - Adicionar contatos da academia nos treinos
-->

<?php include("../connect.php"); 
$aluno_matricula = $_GET['aluno_matricula'];
$aluno_nome = $_GET['aluno_nome'];
?>

<?php
//Essa parte ficará responsável por puxar o treino do BD e guardar numa variável
$query_get_id_treino = mysqli_query($link, 'SELECT id_treino_b FROM aluno_dados WHERE id = ' . $aluno_matricula);
$row = mysqli_fetch_assoc($query_get_id_treino);
$bd_id_treino_a = $row['id_treino_b'];

?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Visualizar Treino</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        
        #aluno_treino{
            width: 425px;
        }
    </style>
</head>
<body>
    <div align="center">
        <h1>Academia PowerMax</h1>
        <h3>Aluno: <?php echo $aluno_nome; ?></h3>
        <h3>Matrícula: <?php echo $aluno_matricula; ?></h3>
        <h3>Treino: B</h3>

        <table id="aluno_treino">
            <thead>
                <tr>
                    <th>Exercício</th>
                    <th>Série</th>
                    <th>Observações</th>
                </tr>
            </thead>
            <?php for($i = 1; $i < 16; $i++){?>
            <tr>
                <td><?php
                    $query_get_rep = mysqli_query($link, 'SELECT rep' . $i . ' FROM aluno_treino_b WHERE id_aluno = ' . $aluno_matricula);
                    $row = mysqli_fetch_assoc($query_get_rep);
                    $bd_rep = $row['rep' . $i];
                    echo $bd_rep;
                ?></td>

                <td><?php
                    $query_get_serie = mysqli_query($link, 'SELECT rep' . $i . '_serie FROM aluno_treino_b WHERE id_aluno = ' . $aluno_matricula);
                    $row = mysqli_fetch_assoc($query_get_serie);
                    $bd_serie = $row['rep' . $i . '_serie'];
                    echo $bd_serie;
                ?></td>
                <td><?php
                    $query_get_obs = mysqli_query($link, 'SELECT rep' . $i . '_obs FROM aluno_treino_b WHERE id_aluno = ' . $aluno_matricula);
                    $row = mysqli_fetch_assoc($query_get_obs);
                    $bd_obs = $row['rep' . $i . '_obs'];
                    echo $bd_obs;
                ?></td>
            </tr>
            <?php } ?>
        </table>
        <h3>Data da próxima avaliação física: dd/mm/aa</h3>
        <b>Tenha um ótimo treino!</b>
    </div>
</body>
</html>
