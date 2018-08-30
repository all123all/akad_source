<?php
$aluno_matricula_show = $_GET['aluno_matricula'];
$aluno_nome_show = $_GET['aluno_nome'];
?>

<?php include("view/sidemenu.php"); ?>
<?php include("connect.php"); ?>

<div class="templatemo-content col-1 light-gray-bg">
  <div class="templatemo-content-container">

  	 <form action="processar-treino-a.php" method="get">
	  <div class="container">
	    <h1>Editar treino - A</h1>
        <h4>Aluno: <?php echo $aluno_nome_show ?></h4>
        <h4>Matrícula: <?php echo $aluno_matricula_show ?></h4>
	    <p>Digite o nome de cada exercício e em seguida informe o número
           de repetições. </p>
	    <hr></hr>

        <table id="myTable">
        <thead>
            <tr>
                <th>Nome do exercício</th>
                <th style="width: 20%;">Séries</th>
                <th>Observação</th>
            </tr>
        </thead>
        <tr>
        <td>
            <input type="text" placeholder="Ex: Supino reto com barra" name="exerc1"></td>	
            <td><input type="text" placeholder="Ex: 3" name="serie1"></td>
        <td><input type="text" placeholder="Barra grande" name="obs1"></td>
        </tr>

        <tr>
        <td><input type="text" placeholder="Ex: Supino reto com barra" name="exerc2"></td>	
            <td><input type="text" placeholder="Ex: 3" name="serie2"></td>
        <td><input type="text" placeholder="Barra grande" name="obs2"></td>
        </tr>

        <tr>
        <td><input type="text" placeholder="Ex: Supino reto com barra" name="exerc3"></td>	
            <td><input type="text" placeholder="Ex: 3" name="serie3"></td>
        <td><input type="text" placeholder="Barra grande" name="obs3"></td>
        </tr>

        <tr>
        <td><input type="text" placeholder="Ex: Supino reto com barra" name="exerc4"></td>	
            <td><input type="text" placeholder="Ex: 3" name="serie4"></td>
        <td><input type="text" placeholder="Barra grande" name="obs4"></td>
        </tr>

        <tr>
        <td><input type="text" placeholder="Ex: Supino reto com barra" name="exerc5"></td>	
            <td><input type="text" placeholder="Ex: 3" name="serie5"></td>
        <td><input type="text" placeholder="Barra grande" name="obs5"></td>
        </tr>

        <tr>
        <td><input type="text" placeholder="Ex: Supino reto com barra" name="exerc6"></td>	
            <td><input type="text" placeholder="Ex: 3" name="serie6"></td>
        <td><input type="text" placeholder="Barra grande" name="obs6"></td>
        </tr>

        <tr>
        <td><input type="text" placeholder="Ex: Supino reto com barra" name="exerc7"></td>	
            <td><input type="text" placeholder="Ex: 3" name="serie7"></td>
        <td><input type="text" placeholder="Barra grande" name="obs7"></td>
        </tr>

        <tr>
        <td><input type="text" placeholder="Ex: Supino reto com barra" name="exerc8"></td>	
            <td><input type="text" placeholder="Ex: 3" name="serie8"></td>
        <td><input type="text" placeholder="Barra grande" name="obs8"></td>
        </tr>

        <tr>
        <td><input type="text" placeholder="Ex: Supino reto com barra" name="exerc9"></td>	
            <td><input type="text" placeholder="Ex: 3" name="serie9"></td>
        <td><input type="text" placeholder="Barra grande" name="obs9"></td>
        </tr>

        <tr>
        <td><input type="text" placeholder="Ex: Supino reto com barra" name="exerc10"></td>	
            <td><input type="text" placeholder="Ex: 3" name="serie10"></td>
        <td><input type="text" placeholder="Barra grande" name="obs10"></td>
        </tr>

        <tr>
        <td><input type="text" placeholder="Ex: Supino reto com barra" name="exerc11"></td>	
            <td><input type="text" placeholder="Ex: 3" name="serie11"></td>
        <td><input type="text" placeholder="Barra grande" name="obs11"></td>
        </tr>

        <tr>
        <td><input type="text" placeholder="Ex: Supino reto com barra" name="exerc12"></td>	
            <td><input type="text" placeholder="Ex: 3" name="serie12"></td>
        <td><input type="text" placeholder="Barra grande" name="obs12"></td>
        </tr>

        <tr>
        <td><input type="text" placeholder="Ex: Supino reto com barra" name="exerc13"></td>	
            <td><input type="text" placeholder="Ex: 3" name="serie13"></td>
        <td><input type="text" placeholder="Barra grande" name="obs13"></td>
        </tr>

        <tr>
        <td><input type="text" placeholder="Ex: Supino reto com barra" name="exerc14"></td>	
            <td><input type="text" placeholder="Ex: 3" name="serie14"></td>
        <td><input type="text" placeholder="Barra grande" name="obs14"></td>
        </tr>

        <tr>
        <td><input type="text" placeholder="Ex: Supino reto com barra" name="exerc15"></td>	
            <td><input type="text" placeholder="Ex: 3" name="serie15"></td>
        <td><input type="text" placeholder="Barra grande" name="obs15"></td>
        </tr>

        <tr>

        </table>
	    <hr>
        <input type="hidden" name="aluno_id" value="<?php echo $aluno_matricula_show ?>">
	    <p>Certifique-se dos dados inseridos. Modificá-los futuramente pode ser inviável.</p>
	    <button type="submit" class="registerbtn" onClick="cadastroCompleto()">Confirmar</button>
        </form>
        </div>

<?php include("view/footer.php"); ?>