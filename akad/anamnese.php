<!--

Preciso organizar algumas ideias à respeito da anamnese;
Preciso saber quais os critérios usados na avaliação,
quais campos importantes para se colocar no FORM etc

-->

<?php 
include("connect.php"); 
$aluno_matricula = $_GET['aluno_matricula'];
$aluno_nome = $_GET['aluno_nome'];
?>

<?php include("view/sidemenu.php"); ?>

<div class="templatemo-content col-1 light-gray-bg">
  <div class="templatemo-content-container">

    <p><b>Nome: </b> <?php echo $aluno_nome; ?></p>
    <p><b>Matrícula: </b><?php echo $aluno_matricula; ?></p>
    <form action="" method="post">
        <!-- <label for=""></label>
        <input type="text" name=""> -->

        <div align="center">
            <h1>Anamnese</h1>
        </div>
        <label for="obj_rel_fis">Objetivos com relação à atividade física?</label>
        <input type="text" name="obj_rel_fis">
        <label for="obj_rel_fis">Pratica atividade física atualmente?</label>
        <input type="text" name="pratica_atv_fis_atual">
        <label for="obj_rel_fis">Utiliza algum tipo de medicamento?</label>
        <input type="text" name="util_medic_atual">
        <label for="obj_rel_fis">Já passou por alguma cirurgia?</label>
        <input type="text" name="passou_por_cirurgia">
        <label for="obj_rel_fis">Doenças na família? Quais?</label>
        <input type="text" name="doencas_na_familia">
        <label for="obj_rel_fis">Observações:</label>
        <input type="text" name="observacoes">

        <div align="center">
            <h1>Risco Coronariano</h1>
            <p>*******A SER DESENVOLVIDO*********</p>
        </div>

        <div id="perimetros_osseos">
            <div id="perimetros_osseos_imagem">
                <img src="images/sistemamuscular.jpg" alt="imagem do sistema muscular">
            </div>

            <div id="perimetros_osseos_quest">
                <label for="pescoco">Pescoço</label>
                <input type="text" name="pescoco">
                <label for="ombro">Ombro</label>
                <input type="text" name="ombro">
                <label for="braco_esquerdo_rel">Braço esquerdo relaxado</label>
                <input type="text" name="braco_esquerdo_rel">
                <label for="braco_direito_rel">Braço direito relaxado</label>
                <input type="text" name="braco_direito_rel">
                <label for="braco_esq_cont">Braço esquerdo contraído</label>
                <input type="text" name="braco_esq_cont">
                <label for="braco_dir_cont">Braço direito contraído</label>
                <input type="text" name="braco_dir_cont">
            </div>
        </div>        
        
    </form>

<?php include("view/footer.php"); ?>