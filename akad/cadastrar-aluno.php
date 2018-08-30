<?php include("view/sidemenu.php"); ?>

<div class="templatemo-content col-1 light-gray-bg">
  <div class="templatemo-content-container">

  	 <form action="processar-cad.php" method="post">
	  <div class="container">
	    <h1>Cadastro de novo aluno</h1>
	    <p>Preencha os dados abaixo para concluir o cadastro</p>
	    <hr>

	    <label for="text"><b>Nome completo</b></label>
	    <input type="text" placeholder="Fulano de Tal da Silva" name="nome" required>

	    <label for="cpf"><b>CPF</b></label>
	    <input type="text" placeholder="Use apenas números" name="cpf" required id="cpf">

	   	<label for="nascimento"><b>Data de Nascimento</b></label>
	    <input type="date" name="nascimento" required> </br>

	    <label for="email"><b>Email para contato</b></label>
	    <input type="text" placeholder="exemplo@email.com" name="email" required>

	    <label for="endereco"><b>Endereço residencial</b></label>
	    <input type="text" placeholder="Nome da rua Nº999" name="endereco" required>

	    <label for="telefone"><b>Telefone para contato</b></label>
		<input type="text" placeholder="9999-9999" name="telefone" required>
		
		<label for="sexo">Selecione o sexo</label></br>
		<select name="sexo">
			<option value="sexo">Selecione o sexo</option> 
			<option value="masculino">MASCULINO</option> 
			<option value="feminino">FEMININO</option> 
			<option value="none">NÃO DECLARAR</option>
		</select></br></br>

		<label for="valor_debito">Valor da mensalidade R$</label></br>
		<select name="valor_debito" id="valor_debito">
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

		<label for="data_pagamento">Escolha um dia para o vencimento da mensalidade</label></br>
		<select name="data_pagamento">
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
		</select></br></br>

		<label for="observacao">Observações</label>
		<input type="text" name="observacao" id="observacao">
	    <hr>

	    <p>Certifique-se dos dados inseridos. Modificá-los futuramente pode ser inviável.</a>.</p>
	    <button type="submit" class="registerbtn" onClick="cadastroCompleto()">Cadastrar</button>
        </form>
        </div>

<?php include("view/footer.php"); ?>