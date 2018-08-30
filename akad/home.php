<!--
Terminal tela inicial com alguns relatórios rápidos
-->
<?php 
include("connect.php");
include("view/sidemenu.php"); ?>
<?php

$data = date("d/m/Y", mktime(gmdate("d"), gmdate("m"), gmdate("Y")));
$hora = date("H:i", mktime(gmdate("H")-3, gmdate("i"), gmdate("s")));

$query_get_rows = 'SELECT COUNT(*) AS qtde FROM aluno_dados';
$exec_query_get_rows = mysqli_query($link, $query_get_rows);
$row = mysqli_fetch_assoc($exec_query_get_rows);
$qtd_aluno_total = $row['qtde'];

?>

<div class="templatemo-content col-1 light-gray-bg">
  <div class="templatemo-content-container">
    <div class="templatemo-flex-row flex-content-row">

      <div class="templatemo-content-widget white-bg col-2">
        <i class="fa fa-times"></i>
        <div class="square"></div>
          <h2 class="templatemo-inline-block">Sua academia</h2><hr>
          
          <table id="myTable">
            <tr class="header">
              <th style="width: 60%;">Backup</th>
              <th style="width: 15%;">00/00/0000</th>
              <th style="width: 25%;"><button class="w3-button w3-black">Visualizar</button></th>
            </tr>
            <tr>
              <td>Total de Alunos</td>
              <td><?php echo $qtd_aluno_total ?></td>
              <td><a href="http://localhost/akad/manage-users.php"><button class="w3-button w3-black">Visualizar</button></a></td>
            </tr>
            <tr>
              <td>Alunos ativos</td>
              <td><?php echo $qtd_aluno_total ?></td>
              <td><button class="w3-button w3-black">Visualizar</button></td>
            </tr>
            <tr>
              <td>Aniversariantes hoje</td>
              <td>3</td>
              <td><button class="w3-button w3-black">Visualizar</button></td>
            </tr>
            <tr>
              <td>Alunos em débito</td>
              <td>55/300</td>
              <td><button class="w3-button w3-black">Visualizar</button></td>
            </tr>
            <tr>
              <td>Alunos ausentes</td>
              <td>000</td>
              <td><button class="w3-button w3-black">Visualizar</button></td>
            </tr>
            <tr>
              <td>Alunos com matrícula bloqueada</td>
              <td>000</td>
              <td><button class="w3-button w3-black">Visualizar</button></td>
            </tr>
            <tr>
              <td>Alunos com avaliação física vencida</td>
              <td>000</td>
              <td><button class="w3-button w3-black">Visualizar</button></td>
            </tr>  
            <tr>
              <td>Alunos com plano a Vencer</td>
              <td>000</td>
              <td><button class="w3-button w3-black">Visualizar</button></td>
            </tr>            
          </table>
        </div>
      </div>

    


<?php include("view/footer.php"); ?>