<?php include("view/sidemenu.php"); ?>
<?php include("connect.php"); ?>

<div class="templatemo-content col-1 light-gray-bg">
  <div class="templatemo-content-container">

    <!-- <div align="center" id="campo_pesquisa_manage">
      <input type="text" id="myInput" onkeyup="parseName()" placeholder="Pesquise o nome do Aluno">
      
      <a href="cadastrar-aluno.php"><button class="w3-button w3-black" id="btn_cad_aluno">Cadastrar Aluno</button></a>

    </div> -->

    <table id="parse">
      <tr class="header">
        <th style="width: 80%;"><input type="text" id="myInput" onkeyup="parseName()" placeholder="Pesquise o nome do Aluno"></th>
        <th style="width: 20%;"><a href="cadastrar-aluno.php"><button class="w3-button w3-black" id="btn_cad_aluno">Cadastrar Aluno</button></a></th>
      </tr>

    </table>
    

<table id="myTable">
  <tr class="header">
    <th style="width: 8%;">Matrícula</th>
    <th style="width: 50%;">Nome do Aluno</th>
    <th style="width: 20%;">Observação</th>
    <th style="width: 12%;">Opções</th>
  </tr>

  <?php
  $seleciona = mysqli_query($link, "SELECT * FROM aluno_dados ORDER BY id DESC");
  while($campo = mysqli_fetch_array($seleciona)){?>

  <?php $aluno_matricula = $campo["id"];
        $aluno_nome = $campo["nome"];

  ?>

    <tr>
      <!-- <td><?=$campo["id"] ?></td> -->
      <!-- <td><?=$campo["nome"] ?></td> -->
      <td><?php echo $campo["id"] ?></td>
      <td><?php echo $campo["nome"] ?></td>
      <td>Ex: Inadimplente</td>
      <td><a href="user-panel.php?aluno_matricula=<?php echo $aluno_matricula ?>&aluno_nome=<?php echo $aluno_nome ?>"><button class="w3-button w3-black">Opções</button></a></td>
    </tr>
    <?php } ?>
</table>

</div>

<?php include("view/footer.php"); ?>