<?php include("view/sidemenu.php"); ?>
<?php include("connect.php"); ?>

<?php
setlocale (LC_ALL, 'pt_BR');

$aluno_matricula_show = $_GET['aluno_matricula'];
$aluno_nome_show = $_GET['aluno_nome'];

$query_get_nome = mysqli_query($link, 'SELECT nome FROM aluno_dados WHERE id = ' . $aluno_matricula_show);
$row = mysqli_fetch_assoc($query_get_nome);
$bd_nome = $row['nome'];

$query_get_cpf = mysqli_query($link, 'SELECT cpf FROM aluno_dados WHERE id = ' . $aluno_matricula_show);
$row = mysqli_fetch_assoc($query_get_cpf);
$bd_cpf = $row['cpf'];

$query_get_nascimento = mysqli_query($link, 'SELECT nascimento FROM aluno_dados WHERE id = ' . $aluno_matricula_show);
$row = mysqli_fetch_assoc($query_get_nascimento);
$bd_nascimento = $row['nascimento'];

$query_get_email = mysqli_query($link, 'SELECT email FROM aluno_dados WHERE id = ' . $aluno_matricula_show);
$row = mysqli_fetch_assoc($query_get_email);
$bd_email = $row['email'];

$query_get_endereco = mysqli_query($link, 'SELECT endereco FROM aluno_dados WHERE id = ' . $aluno_matricula_show);
$row = mysqli_fetch_assoc($query_get_endereco);
$bd_endereco = $row['endereco'];

$query_get_telefone = mysqli_query($link, 'SELECT telefone FROM aluno_dados WHERE id = ' . $aluno_matricula_show);
$row = mysqli_fetch_assoc($query_get_telefone);
$bd_telefone = $row['telefone'];

$query_get_data_pagamento = mysqli_query($link, 'SELECT data_pagamento FROM aluno_dados WHERE id = ' . $aluno_matricula_show);
$row = mysqli_fetch_assoc($query_get_data_pagamento);
$bd_data_pagamento = $row['data_pagamento'];

$query_get_valor_debito = mysqli_query($link, 'SELECT valor_debito FROM aluno_dados WHERE id= ' . $aluno_matricula_show);
$row = mysqli_fetch_assoc($query_get_valor_debito);
$bd_valor_debito = $row['valor_debito'];

$query_get_data_matricula = mysqli_query($link, 'SELECT data_matricula FROM aluno_dados WHERE id = ' . $aluno_matricula_show);
$row = mysqli_fetch_assoc($query_get_data_matricula);
$bd_data_matricula = $row['data_matricula'];
?>

<?php

function verificarDebito ($dia_pagamento){
    include("connect.php");
    $aluno_matricula_show = $_GET['aluno_matricula'];
    $aluno_nome_show = $_GET['aluno_nome'];
    $data = getdate();

    $query_get_nome = mysqli_query($link, 'SELECT nome FROM aluno_dados WHERE id = ' . $aluno_matricula_show);
    $row = mysqli_fetch_assoc($query_get_nome);
    $bd_nome = $row['nome'];

    $query_get_data_pagamento = mysqli_query($link, 'SELECT data_pagamento FROM aluno_dados WHERE id = ' . $aluno_matricula_show);
    $row = mysqli_fetch_assoc($query_get_data_pagamento);
    $bd_data_pagamento = $row['data_pagamento'];

    $query_get_valor_debito = mysqli_query($link, 'SELECT valor_debito FROM aluno_dados WHERE id= ' . $aluno_matricula_show);
    $row = mysqli_fetch_assoc($query_get_valor_debito);
    $bd_valor_debito = $row['valor_debito'];

    $dias_atraso = $data['mday'] - $bd_data_pagamento;
    $data = getdate();

    $query_get_situacao_pagamento = mysqli_query($link, 'SELECT situacao_pagamento FROM aluno_dados WHERE id =' . $aluno_matricula_show);
    $row = mysqli_fetch_assoc($query_get_situacao_pagamento);
    $bd_situacao_pagamento = $row['situacao_pagamento'];

    //$bd_situacao_pagamento == 0 [ALUNO EM DÍVIDA]
    //$bd_situacao_pagamento == 1 [PAGAMENTO REALIZADO]
    if($bd_data_pagamento < $data['mday'] && $bd_situacao_pagamento == 0){

        echo $bd_nome . ' <b> NÃO REALIZOU O PAGAMENTO de R$' . $bd_valor_debito . ' DA MENSALIDADE</b></br>';
        echo "O pagamento deveria ter sido realizado no dia: " . $bd_data_pagamento;
        echo "</br>Total de dias em atraso: " . $dias_atraso;
    }else{
        echo "<b>O aluno está em dias com a mensalidade!</b>";
    }
}

function pagarCartao(){
    include("connect.php");
    $aluno_matricula_show = $_GET['aluno_matricula'];
    $aluno_nome_show = $_GET['aluno_nome'];
    $data = getdate();

    $query_get_situacao_pagamento = mysqli_query($link, 'SELECT situacao_pagamento FROM aluno_dados WHERE id =' . $aluno_matricula_show);
    $row = mysqli_fetch_assoc($query_get_situacao_pagamento);
    $bd_situacao_pagamento = $row['situacao_pagamento'];

    $query_efetuar_pagamento = mysqli_query($link, 'INSERT INTO aluno_dados (situacao_pagamento) VALUE (1) WHERE id =' . $aluno_matricula_show);

    $query_consulta_cartao_caixa = mysqli_query($link, 'SELECT valor_cartao FROM caixa_fluxo');
    $row = mysqli_fetch_assoc($query_consulta_cartao_caixa);
    $bd_cartao_caixa = $row['valor_cartao'];

    $query_get_valor_debito = mysqli_query($link, 'SELECT valor_debito FROM aluno_dados WHERE id= ' . $aluno_matricula_show);
    $row = mysqli_fetch_assoc($query_get_valor_debito);
    $bd_valor_debito = $row['valor_debito'];

    $at_cartao_caixa = $bd_cartao_caixa + $bd_valor_debito;

    $query_at_cartao_caixa = mysqli_query($link, 'INSERT INTO caixa_fluxo (valor_cartao) VALUE ('.$at_cartao_caixa.')');

    header("Location: http://localhost/akad/user-panel.php?aluno_matricula=$aluno_matricula_show&aluno_nome=$aluno_nome_show");
}

function pagarDinheiro(){
    include("connect.php");
    $aluno_matricula_show = $_GET['aluno_matricula'];
    $aluno_nome_show = $_GET['aluno_nome'];
    $data = getdate();

    $query_get_situacao_pagamento = mysqli_query($link, 'SELECT situacao_pagamento FROM aluno_dados WHERE id =' . $aluno_matricula_show);
    $row = mysqli_fetch_assoc($query_get_situacao_pagamento);
    $bd_situacao_pagamento = $row['situacao_pagamento'];

    $query_efetuar_pagamento = mysqli_query($link, 'INSERT INTO aluno_dados (situacao_pagamento) VALUE (1) WHERE id =' . $aluno_matricula_show);
}

?>


<div class="templatemo-content col-1 light-gray-bg">
  <div class="templatemo-content-container">
    <div id="aluno_card" align="center">
        <h1><?php echo $aluno_nome_show ?></h1>
        <h3>Matrícula: <?php echo $aluno_matricula_show ?></h3>
        <a href="http://localhost/akad/control/controle_presenca.php?aluno_matricula=<?php echo $aluno_matricula_show ?>"><button class="w3-button w3-black" onclick="presencaMarcada()">Marcar presença</button></a></br></br>
    </div>

    <div id="user-panel-menu">
    <button onclick="myFunction('visualizar_treinos')" class="w3-btn w3-block w3-black w3-center-align">Visualizar Treinos</button></br>
    <div id="visualizar_treinos" class="w3-container w3-hide accordion_panel" align="center">
        <h4>Visualizar Treinos:</h4>
        <a href="treinos/show-treino-a.php?aluno_matricula=<?php echo $aluno_matricula_show ?>&aluno_nome=<?php echo $aluno_nome_show ?>"><button class="w3-btn w3-black">Treino A</button></a>
        <a href="treinos/show-treino-b.php?aluno_matricula=<?php echo $aluno_matricula_show ?>&aluno_nome=<?php echo $aluno_nome_show ?>"><button class="w3-btn w3-black">Treino B</button></a>
        <a href="treinos/show-treino-c.php?aluno_matricula=<?php echo $aluno_matricula_show ?>&aluno_nome=<?php echo $aluno_nome_show ?>"><button class="w3-btn w3-black">Treino c</button></a>
        <a href="treinos/show-treino-d.php?aluno_matricula=<?php echo $aluno_matricula_show ?>&aluno_nome=<?php echo $aluno_nome_show ?>"><button class="w3-btn w3-black">Treino D</button></a>
        <button class="w3-btn w3-black">Outros Treinos</button></br></br>
    </div>

    <button onclick="myFunction('editar_treinos')" class="w3-btn w3-block w3-black w3-center-align">Editar Treinos</button></br>
    <div id="editar_treinos" class="w3-container w3-hide accordion_panel" align="center">
        <h4>Escolha o Treino para Edição:</h4>
        <a href="edit-treino-a.php?aluno_matricula=<?php echo $aluno_matricula_show ?>&aluno_nome=<?php echo $aluno_nome_show ?>"><button class="w3-btn w3-black">Treino A</button></a>
        <a href="edit-treino-b.php?aluno_matricula=<?php echo $aluno_matricula_show ?>&aluno_nome=<?php echo $aluno_nome_show ?>"><button class="w3-btn w3-black">Treino B</button></a>
        <a href="edit-treino-c.php?aluno_matricula=<?php echo $aluno_matricula_show ?>&aluno_nome=<?php echo $aluno_nome_show ?>"><button class="w3-btn w3-black">Treino C</button></a>
        <a href="edit-treino-d.php?aluno_matricula=<?php echo $aluno_matricula_show ?>&aluno_nome=<?php echo $aluno_nome_show ?>"><button class="w3-btn w3-black">Treino D</button></a>
        <button class="w3-btn w3-black">Outros Treinos</button></br></br>
    </div>

    <button onclick="myFunction('editar_cadadastro')" class="w3-btn w3-block w3-black w3-center-align">Editar Cadastro</button></br>
    <div id="editar_cadadastro" class="w3-container w3-hide accordion_panel">
        <div align="center"><h2>Edição de Dados Cadastrais</h2></div>

        <table id="myTable">
            <tr>
                <td><b>Nome: </b><?php echo $bd_nome ?></td>
                <td><button onclick="document.getElementById('update_nome').style.display='block'" class="w3-button w3-black">Editar Dado</button></td>
            </tr>
            <tr>
                <td><b>Matrícula: </b><?php echo $aluno_matricula_show ?></td>
            </tr>
            <tr>
                <td><b>CPF: </b><?php echo $bd_cpf ?></td>
                <td><button onclick="document.getElementById('update_cpf').style.display='block'" class="w3-button w3-black">Editar Dado</button></td>
            </tr>
            <tr>
                <td><b>Data de nascimento: </b><?php echo $bd_nascimento ?></td>
                <td><button onclick="document.getElementById('update_nascimento').style.display='block'" class="w3-button w3-black">Editar Dado</button></td>
            </tr>
            <tr>
                <td><b>Email:  </b><?php echo $bd_email ?></td>
                <td><button onclick="document.getElementById('update_email').style.display='block'" class="w3-button w3-black">Editar Dado</button></td>
            </tr>
            <tr>
                <td><b>Endereço: </b><?php echo $bd_endereco ?></td>
                <td><button onclick="document.getElementById('update_endereco').style.display='block'" class="w3-button w3-black">Editar Dado</button></td>
            </tr>
            <tr>
                <td><b>Contato: </b><?php echo $bd_telefone ?></td>
                <td><button onclick="document.getElementById('update_telefone').style.display='block'" class="w3-button w3-black">Editar Dado</button></td>
            </tr>
            <tr>
                <td><b>Dia de Vencimento da Mensalidade: </b><?php echo $bd_data_pagamento ?></td>
                <td><button onclick="document.getElementById('update_data_pagamento').style.display='block'" class="w3-button w3-black">Editar Dado</button></td>
            </tr>
            <tr>
                <td><b>Valor da Mensalidade: </b> R$<?php echo $bd_valor_debito ?></td>
                <td><button onclick="document.getElementById('update_valor_debito').style.display='block'" class="w3-button w3-black">Editar Dado</button></td>
            </tr>
            <!-- <tr>
                <td><b>Data de Matrícula: </b><?php echo $bd_data_matricula ?></td>
                <td></td>
            </tr> -->
        </table>
    </div>

    <button onclick="myFunction('visualizar_anamnese')" class="w3-btn w3-block w3-black w3-center-align">Anamnese</button></br>
    <div id="visualizar_anamnese" class="w3-container w3-hide accordion_panel">
        <div align="center">
            <h4>Anamnese</h4>
            <a href="http://localhost/akad/anamnese.php?aluno_matricula=<?php echo $aluno_matricula_show ?>&aluno_nome=<?php echo $aluno_nome_show ?>">Link</a>
        </div>
        </div>

    <button onclick="myFunction('visualizar_financeiro')" class="w3-btn w3-block w3-black w3-center-align">Finanças</button></br>
    <div id="visualizar_financeiro" class="w3-container w3-hide accordion_panel">
        <div align="center">
            <h2>Finanças</h2>
            <h5>Situação: <?php verificarDebito($bd_data_pagamento); ?></h5>

            <h2>Forma de pagamento</h2>
            <form action="processar_pagamento.php" method="post">
                <input type="hidden" value="dinheiro" name="formapagamento">
                <button class="w3-button w3-black" type="submit">Dinheiro</button>
            </form></br>

            <form action="processar_pagamento.php" method="post">
                <input type="hidden" value="cartao" name="formapagamento">
                <button class="w3-button w3-black" type="submit">Cartão</button>
            </form>
        </div>
        
    </div>
    </div>

    <div id="update_nome" class="w3-modal">
        <div class="w3-modal-content">
            <div class="w3-container">
                <span onclick="document.getElementById('update_nome').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                </br><b align="center">Nome anterior: <?php echo $bd_nome ?></b></br></br>
                <form action="update-aluno-info/update-aluno-info.php" method="GET">
                    <b>Novo nome:</b>
                    <input type="text" placeholder="digite aqui o novo nome" name="novo_nome" id="input_update">
                    <input type="hidden" name="aluno_matricula_show" id="" value="<?php echo $aluno_matricula_show ?>">
                    <input type="hidden" name="opt_alter" value="1">
                    <input type="hidden" name="aluno_nome_show" id="" value=" <?php echo $aluno_nome_show ?>">
                    <button type="submit" class="w3-button w3-black input_update_btn">Atualizar informação</button>
                </form>
            </div>
        </div>
    </div>

    <div id="update_cpf" class="w3-modal">
        <div class="w3-modal-content">
            <div class="w3-container">
                <span onclick="document.getElementById('update_cpf').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                </br><b align="center">CPF anterior: <?php echo $bd_cpf ?></b></br></br>
                <form action="update-aluno-info/update-aluno-info.php" method="GET">
                    <b>Novo CPF:</b>
                    <input type="text" placeholder="digite aqui o novo cpf" name="novo_cpf" id="input_update">
                    <input type="hidden" name="aluno_nome_show" id="" value=" <?php echo $aluno_nome_show ?>">
                    <input type="hidden" name="aluno_matricula_show" id="" value="<?php echo $aluno_matricula_show ?>">
                    <input type="hidden" name="opt_alter" value="2">
                    <button type="submit" class="w3-button w3-black input_update_btn">Atualizar informação</button>
                </form>
            </div>
        </div>
    </div>

    <div id="update_nascimento" class="w3-modal">
        <div class="w3-modal-content">
            <div class="w3-container">
                <span onclick="document.getElementById('update_nascimento').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                </br><b align="center">Data de nascimento anterior: <?php echo $bd_nascimento ?></b></br></br>
                <form action="update-aluno-info/update-aluno-info.php" method="GET">
                    <b>Nova Data de Nascimento:</b>
                    <input type="date" name="novo_nascimento" id="input_update">
                    <input type="hidden" name="aluno_nome_show" id="" value=" <?php echo $aluno_nome_show ?>">
                    <input type="hidden" name="aluno_matricula_show" id="" value="<?php echo $aluno_matricula_show ?>">
                    <input type="hidden" name="opt_alter" value="3">
                    <button type="submit" class="w3-button w3-black input_update_btn">Atualizar informação</button>
                </form>
            </div>
        </div>
    </div>

    <div id="update_email" class="w3-modal">
        <div class="w3-modal-content">
            <div class="w3-container">
                <span onclick="document.getElementById('update_email').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                </br><b align="center">Email anterior: <?php echo $bd_email ?></b></br></br>
                <form action="update-aluno-info/update-aluno-info.php" method="GET">
                    <b>Novo Email:</b>
                    <input type="text" name="novo_email" id="input_update">
                    <input type="hidden" name="aluno_nome_show" id="" value=" <?php echo $aluno_nome_show ?>">
                    <input type="hidden" name="aluno_matricula_show" id="" value="<?php echo $aluno_matricula_show ?>">
                    <input type="hidden" name="opt_alter" value="4">
                    <button type="submit" class="w3-button w3-black input_update_btn">Atualizar informação</button>
                </form>
            </div>
        </div>
    </div>

    <div id="update_endereco" class="w3-modal">
        <div class="w3-modal-content">
            <div class="w3-container">
                <span onclick="document.getElementById('update_endereco').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                </br><b align="center">Endereço anterior: <?php echo $bd_endereco ?></b></br></br>
                <form action="update-aluno-info/update-aluno-info.php" method="GET">
                    <b>Novo Endereço:</b>
                    <input type="text" name="novo_endereco" id="input_update">
                    <input type="hidden" name="aluno_nome_show" id="" value=" <?php echo $aluno_nome_show ?>">
                    <input type="hidden" name="aluno_matricula_show" id="" value="<?php echo $aluno_matricula_show ?>">
                    <input type="hidden" name="opt_alter" value="5">
                    <button type="submit" class="w3-button w3-black input_update_btn">Atualizar informação</button>
                </form>
            </div>
        </div>
    </div>

    <div id="update_telefone" class="w3-modal">
        <div class="w3-modal-content">
            <div class="w3-container">
                <span onclick="document.getElementById('update_telefone').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                </br><b align="center">Telefone anterior: <?php echo $bd_telefone ?></b></br></br>
                <form action="update-aluno-info/update-aluno-info.php" method="GET">
                    <b>Novo Telefone:</b>
                    <input type="text" name="novo_telefone" id="input_update">
                    <input type="hidden" name="aluno_nome_show" id="" value=" <?php echo $aluno_nome_show ?>">
                    <input type="hidden" name="aluno_matricula_show" id="" value="<?php echo $aluno_matricula_show ?>">
                    <input type="hidden" name="opt_alter" value="6">
                    <button type="submit" class="w3-button w3-black input_update_btn">Atualizar informação</button>
                </form>
            </div>
        </div>
    </div>

    <div id="update_valor_debito" class="w3-modal">
        <div class="w3-modal-content">
            <div class="w3-container">
                <span onclick="document.getElementById('update_telefone').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                </br><b align="center">Valor pago atualmente: <?php echo $bd_valor_debito ?></b></br></br>
                <form action="update-aluno-info/update-aluno-info.php" method="GET">
                    <b>Novo Valor:</b>
                    <select name="novo_valor_debito" id="novo_valor_debito">
                        <option value="0">R$0.00</option>
                        <option value="5.00">R$5.00</option>
                        <option value="10.00">R$10.00</option>
                        <option value="15.00">R$15.00</option>
                        <option value="20.00">R$20.00</option>
                        <option value="20.00">R$25.00</option>
                        <option value="30.00">R$30.00</option>
                        <option value="20.00">R$35.00</option>
                        <option value="40.00">R$40.00</option>
                        <option value="45.00">R$45.00</option>
                        <option value="50.00">R$50.00</option>
                        <option value="55.00">R$55.00</option>
                        <option value="60.00">R$60.00</option>
                    </select></br></br>
                    <input type="hidden" name="aluno_nome_show" id="" value=" <?php echo $aluno_nome_show ?>">
                    <input type="hidden" name="aluno_matricula_show" id="" value="<?php echo $aluno_matricula_show ?>">
                    <input type="hidden" name="opt_alter" value="8">
                    <button type="submit" class="w3-button w3-black input_update_btn">Atualizar informação</button>
                </form>
            </div>
        </div>
    </div>

    <div id="update_data_pagamento" class="w3-modal">
        <div class="w3-modal-content">
            <div class="w3-container">
                <span onclick="document.getElementById('update_data_pagamento').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                </br><b align="center">Data de pagamento anterior: <?php echo $bd_data_pagamento ?></b></br></br>
                <form action="update-aluno-info/update-aluno-info.php" method="GET">
                    <b>Nova data para pagamento:</b>
                    <select name="novo_dia_pagamento">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    </select>
                    <input type="hidden" name="aluno_nome_show" id="" value=" <?php echo $aluno_nome_show ?>">
                    <input type="hidden" name="aluno_matricula_show" id="" value="<?php echo $aluno_matricula_show ?>">
                    <input type="hidden" name="opt_alter" value="7">
                    <button type="submit" class="w3-button w3-black input_update_btn">Atualizar informação</button>
                </form>
            </div>
        </div>
    </div>

<?php include("view/footer.php"); ?>